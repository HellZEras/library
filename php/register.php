<?php
require('helpers.php');
session_start();

try {
    $pdo = initConn();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        header('Content-Type: application/json');
    
        $username = trim($_POST['username']);
        $firstName = trim($_POST['firstname']);
        $lastName = trim($_POST['lastname']);
        $email = trim($_POST['new_email']);
        $confirmEmail = trim($_POST['new_email_confirm']);
        $password = trim($_POST['password']);
    
        if ($email !== $confirmEmail) {
            echo json_encode(['status' => 'error', 'message' => 'Emails do not match.']);
            exit();
        }
    
        if (strlen($password) < 6) {
            echo json_encode(['status' => 'error', 'message' => 'Password must be at least 6 characters.']);
            exit();
        }
    
        $stmt = $pdo->prepare("SELECT COUNT(*) FROM users WHERE username = :username OR email = :email");
        $stmt->execute(['username' => $username, 'email' => $email]);
        $exists = $stmt->fetchColumn();
    
        if ($exists > 0) {
            echo json_encode(['status' => 'error', 'message' => 'Username or email already exists.']);
            exit();
        }
    
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    
        $stmt = $pdo->prepare("INSERT INTO users (username, first_name, last_name, email, password) 
                                VALUES (:username, :first_name, :last_name, :email, :password)");
        $stmt->execute([
            'username' => $username,
            'first_name' => $firstName,
            'last_name' => $lastName,
            'email' => $email,
            'password' => $hashedPassword,
        ]);
    
        $_SESSION['username'] = $username;
        $_SESSION['first_name'] = $firstName;
    
        echo json_encode(['status' => 'success', 'message' => 'Registration successful!']);
        exit();
    }
    
} catch (PDOException $e) {
    $error = "Database connection failed: " . $e->getMessage();
    echo $error;
    sleep(2);
    header("Location: /libary/index.php");
    exit();
}
