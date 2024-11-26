<?php
require('helpers.php');
header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['booking_id'])) {
    $bookingId = $_POST['booking_id'];

    try {
        $pdo = initConn();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $bookingStmt = $pdo->prepare("SELECT book_id FROM bookings WHERE id = :booking_id");
        $bookingStmt->bindParam(':booking_id', $bookingId, PDO::PARAM_INT);
        $bookingStmt->execute();
        $booking = $bookingStmt->fetch(PDO::FETCH_ASSOC);

        if (!$booking) {
            echo json_encode(['status' => 'error', 'message' => 'Booking not found.']);
            exit();
        }

        $bookId = $booking['book_id'];

        $deleteStmt = $pdo->prepare("DELETE FROM bookings WHERE id = :booking_id");
        $deleteStmt->bindParam(':booking_id', $bookingId, PDO::PARAM_INT);
        
        if ($deleteStmt->execute()) {
            $updateStockStmt = $pdo->prepare("UPDATE books SET stock = stock + 1 WHERE id = :book_id");
            $updateStockStmt->bindParam(':book_id', $bookId, PDO::PARAM_INT);

            if ($updateStockStmt->execute()) {
                echo json_encode(['status' => 'success', 'message' => 'Booking returned and stock updated.']);
            } else {
                echo json_encode(['status' => 'error', 'message' => 'Failed to update stock.']);
            }
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Failed to delete booking.']);
        }
    } catch (PDOException $e) {
        echo json_encode(['status' => 'error', 'message' => $e->getMessage()]);
    }
} else {
    echo json_encode(['status' => 'error', 'message' => 'Invalid request.']);
}
