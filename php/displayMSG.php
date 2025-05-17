<?php
session_start();
$message = '';

// Show and clear session message
if (isset($_SESSION['success'])) {
    $message = $_SESSION['success'];
    unset($_SESSION['success']);
}
?>