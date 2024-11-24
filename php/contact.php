<?php
require('helpers.php');
session_start();

try {
    $pdo = initConn();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $firstName = trim($_POST['name1']);
        $lastName = trim($_POST['name2']);
        $email = trim($_POST['email3']);
        $phoneNumber = trim($_POST['num']);
        $sexe = trim($_POST['subject']);
        $message = trim($_POST['message']);

        if (empty($firstName) || empty($lastName) || empty($email) || empty($phoneNumber) || empty($sexe)) {
            $error = "All fields except the message are required.";
            echo $error;
            exit();
        }

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $error = "Invalid email format.";
            echo $error;
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

        sleep(2);
        header("Location: /libary/contact.php");
        exit();
    }
} catch (PDOException $e) {
    $error = "Database connection failed: " . $e->getMessage();
    echo $error;
    exit();
}
?>
