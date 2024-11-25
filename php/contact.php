<?php
require('helpers.php');
session_start();

header('Content-Type: application/json');

try {
    $pdo = initConn();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Collect and trim input values
        $firstName = trim($_POST['name1']);
        $lastName = trim($_POST['name2']);
        $email = trim($_POST['email3']);
        $phoneNumber = trim($_POST['num']);
        $sexe = trim($_POST['subject']);
        $message = trim($_POST['message']);

        // Validate required fields
        if (empty($firstName) || empty($lastName) || empty($email) || empty($phoneNumber) || empty($sexe)) {
            echo json_encode(['status' => 'error', 'message' => 'All fields except the message are required.']);
            exit();
        }

        // Validate email format
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo json_encode(['status' => 'error', 'message' => 'Invalid email format.']);
            exit();
        }

        if (!empty($phoneNumber) && !preg_match('/^[0-9]+$/', $phoneNumber)) {
            echo json_encode(['status' => 'error', 'message' => 'Phone number must be numeric.']);
            exit();
        }

        if (empty($message)) {
            echo json_encode(['status' => 'error', 'message' => 'Message cannot be empty.']);
            exit();
        }

        $stmt = $pdo->prepare("INSERT INTO contacts (first_name, last_name, email, phone_number, sexe, message) 
                                VALUES (:first_name, :last_name, :email, :phone_number, :sexe, :message)");
        $stmt->execute([
            'first_name' => $firstName,
            'last_name' => $lastName,
            'email' => $email,
            'phone_number' => $phoneNumber,
            'sexe' => $sexe,
            'message' => $message,
        ]);

        echo json_encode(['status' => 'success', 'message' => 'Your message has been successfully sent. Thank you!']);
        exit();
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Invalid request method.']);
        exit();
    }
} catch (PDOException $e) {
    echo json_encode(['status' => 'error', 'message' => 'Database connection failed: ' . $e->getMessage()]);
    exit();
}
?>
