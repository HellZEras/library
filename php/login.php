<?php
require('helpers.php');
session_start();

try {
    $pdo = initConn();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $email = trim($_POST['email']);
        $password = trim($_POST['pasword']);

        $stmt = $pdo->prepare("SELECT id, username, first_name, password FROM users WHERE email = :email");
        $stmt->execute(['email' => $email]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user && password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            $_SESSION['first_name'] = $user['first_name'];

            echo "Login successful!";
            sleep(2);
            header("Location: /libary/index.php");
            exit();
        } else {
            $error = "Invalid email or password.";
            echo $error;
            sleep(2);
            header("Location: /libary/index.php");
            exit();
        }
    }
} catch (PDOException $e) {
    $error = "Database connection failed: " . $e->getMessage();
    echo $error;
    sleep(2);
    header("Location: /libary/index.php");
    exit();
}
?>
