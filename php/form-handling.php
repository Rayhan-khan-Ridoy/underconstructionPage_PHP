<?php
	session_start();
	$name = $email = $message = "";

	$host = 'localhost';
    $db = 'subscription';
    $user = 'root';
    $pass = '';

    if($_SERVER["REQUEST_METHOD"]== "POST"){

        $name = htmlspecialchars(trim($_POST['name']));
        $email = htmlspecialchars(trim($_POST['email']));
        $message = htmlspecialchars(trim($_POST['message']));
        
        if (!empty($name) && (!empty($email) && (filter_var($email, FILTER_VALIDATE_EMAIL)))) {
			 $conn = new mysqli($host, $user, $pass, $db);

        if ($conn->connect_error) {
            $_SESSION['errors'] = "Database connection failed: " . $conn->connect_error;
			} else {
				// Prepare and bind
				$stmt = $conn->prepare("INSERT INTO subscription (name, email, message) VALUES (?, ?, ?)");
				$stmt->bind_param("sss", $name, $email, $message);

				if ($stmt->execute()) {
					    $_SESSION['success'] = "Thank you for subscribing!";
					} else {
					$_SESSION['errors'] = "Error saving your subscription. Please try again.";
				}

				$stmt->close();
				$conn->close();
			}
		}
    }

	header('Location: ../index.php');
	exit;
?>