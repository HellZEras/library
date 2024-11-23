<?php
require('helpers.php');
session_start();

try {
    $pdo = initConn();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $username = trim($_POST['username']);
        $firstName = trim($_POST['firstname']);
        $lastName = trim($_POST['lastname']);
        $email = trim($_POST['new_email']);
        $confirmEmail = trim($_POST['new_email_confirm']);
        $password = trim($_POST['passwordf']);

        if ($email !== $confirmEmail) {
            $error = "Emails do not match.";
            echo $error;
            // sleep(2);
            // header("Location: /libary/index_kids.php");
            // exit();
        }

        if (strlen($password) < 6) {
            $error = "Password must be at least 6 characters.";
            echo $error;
            // sleep(2);
            // header("Location: /libary/index_kids.php");
            // exit();
        }

        $stmt = $pdo->prepare("SELECT COUNT(*) FROM users WHERE username = :username OR email = :email");
        $stmt->execute(['username' => $username, 'email' => $email]);
        $exists = $stmt->fetchColumn();

        if ($exists > 0) {
            $error = "Username or email already exists.";
            echo $error;
            // sleep(2);
            // header("Location: /libary/index_kids.php");
            // exit();
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
        echo "Registration successful!";
        sleep(2);
        header("Location: /libary/index_kids.php");
        exit();
    }
} catch (PDOException $e) {
    $error = "Database connection failed: " . $e->getMessage();
    echo $error;
    // sleep(2);
    // header("Location: /libary/index_kids.php");
    // exit();
}
