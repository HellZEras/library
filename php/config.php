<?php

$timeout = 3600;
ini_set('session.gc_maxlifetime', $timeout);
ini_set('session.cookie_lifetime', $timeout);
session_start();

if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > $timeout)) {
    unset($_SESSION['user_id']);
    unset($_SESSION['username']);
    unset($_SESSION['first_name']);
}
$_SESSION['LAST_ACTIVITY'] = time();
?>
