<?php
require('helpers.php');
session_start();

try {
    $pdo = initConn();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $first_name = trim($_POST['first_name']);
        $last_name = trim($_POST['last_name']);
        $email = trim($_POST['email']);
        $confirm_email = trim($_POST['email1']);
        $date1 = trim($_POST['date1']);
        $date2 = trim($_POST['date2']);
        $sex = trim($_POST['sex']);
        $message = trim($_POST['message']);

        if (
            empty($first_name) || empty($last_name) || empty($email) || 
            empty($confirm_email) || empty($date1) || empty($date2) || empty($sex)
        ) {
            $error = "All fields except the message are required.";
            echo $error;
            exit();
        }

        if ($email !== $confirm_email) {
            $error = "Email and Confirm Email must match.";
            echo $error;
            exit();
        }

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $error = "Invalid email format.";
            echo $error;
            exit();
        }

        $stmt = $pdo->prepare("SELECT COUNT(*) FROM bookings WHERE email = :email");
        $stmt->execute(['email' => $email]);
        $existingBookings = $stmt->fetchColumn();

        if ($existingBookings > 0) {
            $error = "You already have an existing booking.";
            echo $error;
            exit();
        }

        $stmt = $pdo->prepare("
        INSERT INTO bookings (first_name, last_name, email, booking_date, return_date, sex, message) 
        VALUES (:first_name, :last_name, :email, :date1, :date2, :sex, :message)
        ");
        $stmt->execute([
            'first_name' => $first_name,
            'last_name' => $last_name,
            'email' => $email,
            'date1' => $date1,
            'date2' => $date2,
            'sex' => $sex,
            'message' => $message,
        ]);

        echo "Booking successfully created!";
        header("Location: /libary/contact.php");
        exit();
    }
} catch (PDOException $e) {
    $error = "Database error: " . $e->getMessage();
    echo $error;
    exit();
}
?>
