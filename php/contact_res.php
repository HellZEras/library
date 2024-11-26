<?php
require('helpers.php');
session_start();

try {
    $pdo = initConn();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $firstName = trim($_POST['first_name']);
        $lastName = trim($_POST['last_name']);
        $email = trim($_POST['email']);
        $confirmEmail = trim($_POST['email1']);
        $date1 = trim($_POST['date1']);
        $date2 = trim($_POST['date2']);
        $sex = trim($_POST['sex']);
        $message = trim($_POST['message']);
        $bookId = isset($_POST['book_id']) ? (int)$_POST['book_id'] : null;
        $username = isset($_SESSION['username']) ? $_SESSION['username'] : null;

        if (empty($firstName) || empty($lastName) || empty($email) || empty($confirmEmail) || empty($date1) || empty($date2) || empty($sex)) {
            $error = "All fields except the message are required.";
            echo json_encode(['status' => 'error', 'message' => $error]);
            exit();
        }

        if ($email !== $confirmEmail) {
            $error = "Email and Confirm Email must match.";
            echo json_encode(['status' => 'error', 'message' => $error]);
            exit();
        }

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $error = "Invalid email format.";
            echo json_encode(['status' => 'error', 'message' => $error]);
            exit();
        }

        $dateObj1 = new DateTime($date1);
        $dateObj2 = new DateTime($date2);

        if ($dateObj2 <= $dateObj1) {
            $error = "Date 2 must be later than Date 1.";
            echo json_encode(['status' => 'error', 'message' => $error]);
            exit();
        }

        if (!$username) {
            $error = "User is not logged in.";
            echo json_encode(['status' => 'error', 'message' => $error]);
            exit();
        }

        // Check if stock is sufficient
        if ($bookId) {
            $stockStmt = $pdo->prepare("SELECT stock FROM books WHERE id = :book_id");
            $stockStmt->execute(['book_id' => $bookId]);
            $book = $stockStmt->fetch(PDO::FETCH_ASSOC);

            if (!$book) {
                echo json_encode(['status' => 'error', 'message' => 'Book not found.']);
                exit();
            }

            if ($book['stock'] <= 0) {
                echo json_encode(['status' => 'error', 'message' => 'Book is out of stock.']);
                exit();
            }
        }

        // Insert booking into bookings table
        $stmt = $pdo->prepare("INSERT INTO bookings (first_name, last_name, email, booking_date, return_date, sex, message, book_id, username) 
                                VALUES (:first_name, :last_name, :email, :booking_date, :return_date, :sex, :message, :book_id, :username)");

        $stmt->execute([
            'first_name' => $firstName,
            'last_name' => $lastName,
            'email' => $email,
            'booking_date' => $date1,
            'return_date' => $date2,
            'sex' => $sex,
            'message' => $message,
            'book_id' => $bookId,
            'username' => $username,
        ]);

        // Deduct 1 from the stock
        if ($bookId) {
            $updateStockStmt = $pdo->prepare("UPDATE books SET stock = stock - 1 WHERE id = :book_id");
            $updateStockStmt->execute(['book_id' => $bookId]);
        }

        echo json_encode(['status' => 'success', 'message' => 'Your booking has been submitted successfully!']);
        exit();
    }
} catch (PDOException $e) {
    // Handle database connection or query errors
    $error = "Database connection failed: " . $e->getMessage();
    echo json_encode(['status' => 'error', 'message' => $error]);
    exit();
}
?>
