<?php
require('helpers.php');
session_start();

try {
    $pdo = initConn();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Sanitize input data
        $name = trim($_POST['name']);
        $email = trim($_POST['email']);
        $amount = trim($_POST['subject']);
        $message = trim($_POST['message']);

        // Validate required fields
        if (empty($name) || empty($email) || empty($amount)) {
            $error = "All fields except the message are required.";
            echo json_encode(['status' => 'error', 'message' => $error]);
            exit();
        }

        // Validate email format
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $error = "Invalid email format.";
            echo json_encode(['status' => 'error', 'message' => $error]);
            exit();
        }

        // Insert donation data into the database
        $stmt = $pdo->prepare("INSERT INTO donations (name, email, amount, message) 
                                VALUES (:name, :email, :amount, :message)");
        $stmt->execute([
            'name' => $name,
            'email' => $email,
            'amount' => $amount,
            'message' => $message,
        ]);

        // Respond with success message
        echo json_encode(['status' => 'success', 'message' => 'Thank you for your donation!']);
        exit();
    }
} catch (PDOException $e) {
    $error = "Database connection failed: " . $e->getMessage();
    echo json_encode(['status' => 'error', 'message' => $error]);
    exit();
}
?>
