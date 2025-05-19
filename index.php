<?php
// Start session and include the message display
require 'php/displayMSG.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Meta -->
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="Awaiken Theme" />
	<!-- Page Title -->
	<title>JOM MAMAK | HALAL</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
	<!-- Google Fonts css-->
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet" />
	<!-- Bootstrap css -->
	<link href="css/bootstrap.min.css" rel="stylesheet" media="screen" />
	<!-- Magnific Popup CSS -->
	<link href="css/magnific-popup.css" rel="stylesheet" />
	<!-- Font Awesome icon css-->
	<link href="css/font-awesome.min.css" rel="stylesheet" media="screen" />
	<!-- Main custom css -->
	<link href="css/custom.css" rel="stylesheet" media="screen" />
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<!-- Head (CSS) -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" />
	<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
</head>

<body>
	<!-- Coming Soon Wrapper -->
	<div class="comming-soon">
		<div class="container">
			<div class="row">
				<div class="col-md-6 position-static">
					<div class="comming-soon-info">
						<div class="comming-soon-info-inner">
							<img src="images/logo.png" alt="jom-mamak-logo" style="max-width: 100%; height: 169px" />

							<h2>
								Stay Tuned with Halal !!! <span>We are launching soon.</span>
							</h2>
							<div class="launch-date">
								<div class="opening-date">
									<p>Sunday <span>June 1st</span></p>
								</div>

								<!-- Countdown start -->
								<div class="countdown-timer-wrapper">
									<div class="timer" id="countdown"></div>
								</div>
								<!-- Countdown end -->
							</div>

							<!-- Intro Youtube Video start -->
							<div class="btn-intro">
								<a  href="https://drive.google.com/file/d/10U-2ozdebvtAnYxDG3_cluxwv_qJ4bwL/preview"
									class="popup-video">
									<div class="icon-box"><i class="fa fa-play"></i></div>
									Watch the little intro
								</a>
							</div>


							<!-- Intro Youtube Video end -->
						</div>
					</div>
				</div>

				<!-- Keep Informed form start -->
				<div class="col-md-6">
					<div class="contact-form">
						<h2 class="title">Keep Informed</h2>
						<p>
							Subscribe now, We will let you know as son as we launch our new
							website
						</p>

						<?php if ($message): ?>
							<div class="alert alert-success"><?php echo $message; ?></div>
						<?php endif; ?>

						<form action="php/contact-process.php" method="POST">
							<div class="form-group">
								<input type="text" name="name" class="form-control text-user" placeholder="ENTER YOUR NAME" required />
							</div>

							<div class="form-group">
								<input type="email" name="email" class="form-control text-email" placeholder="ENTER YOUR EMAIL" required />
							</div>

							<div class="form-group">
								<textarea type="text" name="message" class="form-control text-chat" placeholder="TYPE YOUR MESSAGE HERE..." required></textarea>
							</div>

							<div class="form-group">
								<input type="submit" value="Subscribe Now" class="btn btn-primary btn-contact" />
							</div>
						</form>
					</div>
				</div>
				<!-- Keep Informed form end -->
			</div>
		</div>
	</div>
	<!-- Coming Soon Wrapper end -->

	<!-- Jquery Library File -->
	<script src="js/jquery-1.12.4.min.js"></script>
	<!-- Timer counter js file -->
	<script src="js/countdown-timer.js"></script>
	<!-- SmoothScroll -->
	<script src="js/SmoothScroll.js"></script>
	<!-- Bootstrap js file -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Magnific Popup core JS file -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<!-- Main Custom js file -->
	<script src="js/function.js"></script>
	<!-- Countdown Script start -->
	<script>
		$(document).ready(function() {
			var myDate = new Date("06/01/2025");
			myDate.setDate(myDate.getDate());
			$("#countdown").countdown(myDate, function(event) {
				$(this).html(
					event.strftime(
						'<div class="timer-wrapper"><div class="time">%D</div><span class="text">days</span></div><div class="timer-wrapper"><div class="time">%H</div><span class="text">hours</span></div><div class="timer-wrapper"><div class="time">%M</div><span class="text">min</span></div><div class="timer-wrapper"><div class="time">%S</div><span class="text">sec</span></div>'
					)
				);
			});
		});
	</script>
	<!-- Countdown Script start -->

	<script>
		$(document).ready(function() {
			$('.popup-video').magnificPopup({
			type: 'iframe'
			});
		});
	</script>
</body>

</html>