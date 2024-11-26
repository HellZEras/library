<?php
require('helpers.php');
session_start();

try {
    $pdo = initConn();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        header('Content-Type: application/json');
    
        $emailOrUsername = trim($_POST['email']); // Assuming 'email' is used for both email and username
        $password = trim($_POST['pasword']);
    
        // Query to check if the input matches either the email or username
        $stmt = $pdo->prepare("SELECT id, username, first_name, email, password FROM users WHERE email = :emailOrUsername OR username = :emailOrUsername");
        $stmt->execute(['emailOrUsername' => $emailOrUsername]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
    
        if ($user && password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            $_SESSION['first_name'] = $user['first_name'];
    
            echo json_encode(['status' => 'success', 'message' => 'Login successful']);
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Invalid email/username or password']);
        }
        exit();
    }
    
} catch (PDOException $e) {
    $error = "Database connection failed: " . $e->getMessage();
    echo $error;
    sleep(2);
    header("Location: /libary/index.php");
    exit();
}
?>
