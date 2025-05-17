<?php
session_start();

$conn = mysqli_connect("localhost", "root", "", "jommamak");
// $conn = mysqli_connect("jommamak.com.my", "jommamak_user", "iProsedutech@1234", "jommamak");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$name    = $_POST['name'];
$email   = $_POST['email'];
$message = $_POST['message'];

$sql = "INSERT INTO contacts (name, email, message) VALUES ('$name', '$email', '$message')";

if (mysqli_query($conn, $sql)) {
    $_SESSION['success'] = "Message sent successfully!";
} else {
    $_SESSION['success'] = "Error: " . mysqli_error($conn);
}

mysqli_close($conn);

// Redirect back to form page
header("Location: ../index.php");
exit;
?>
