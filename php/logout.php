<?php 
    session_start();
    session_unset();
    session_destroy();
    unset($_SESSION['user_id']);
    unset($_SESSION['username']);
    unset($_SESSION['first_name']);
    sleep(1);
    header("Location: /libary/index.php");
    exit;
?>
