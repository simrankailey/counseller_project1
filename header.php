<?php
if (session_status() === PHP_SESSION_NONE) {
	session_start();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title>Counselor</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="../asset/css/animate.css">

	<link rel="stylesheet" href="../asset/css/owl.carousel.min.css">
	<link rel="stylesheet" href="../asset/css/owl.theme.default.min.css">
	<link rel="stylesheet" href="../asset/css/magnific-popup.css">

	<link rel="stylesheet" href="../asset/css/flaticon.css">
	<link rel="stylesheet" href="../asset/css/style.css">
</head>

<body>

	<div class="wrap">
		<div class="container">
			<div class="row">
				<div class="col-md-6 d-flex align-items-center">
					<p class="mb-0 phone pl-md-2">
						<a href="#" class="mr-2"><span class="fa fa-phone mr-1"></span>+91 8264606914</a>
						<a href="#"><span class="fa fa-paper-plane mr-1"></span>saroj22kajal@gmail.com</a>
					</p>
				</div>
				<div class="col-md-6 d-flex justify-content-md-end">
					<div class="social-media">
						<p class="mb-0 d-flex">
							<a href="#" class="d-flex align-items-center justify-content-center"><span
									class="fa fa-facebook"><i class="sr-only">Facebook</i></span></a>
							<a href="#" class="d-flex align-items-center justify-content-center"><span
									class="fa fa-twitter"><i class="sr-only">Twitter</i></span></a>
							<a href="#" class="d-flex align-items-center justify-content-center"><span
									class="fa fa-instagram"><i class="sr-only">Instagram</i></span></a>
							<a href="#" class="d-flex align-items-center justify-content-center"><span
									class="fa fa-dribbble"><i class="sr-only">Dribbble</i></span></a>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
		<div class="container">
			<a class="navbar-brand" href="index.php">Counselor</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
				aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="oi oi-menu"></span> Menu
			</button>

			<div class="collapse navbar-collapse" id="ftco-nav">
				<ul class="navbar-nav ml-auto">
					<!-- common header -->
					<li class="nav-item active"><a href="index.php" class="nav-link">Home</a></li>
					<li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
					<li class="nav-item"><a href="services.php" class="nav-link">Services</a></li>
					<li class="nav-item"><a href="blog.php" class="nav-link">Blog</a></li>
					
					<?php if (isset($_SESSION["email"]) && !empty($_SESSION["email"])): ?>
						<?php if (isset($_SESSION["is_admin"]) && $_SESSION["is_admin"] == 1 && $_SESSION["email"] === "admin@admin.com"): ?>
							<!-- admin header -->
							
							<li class="nav-item"><a href="conusers_view.php" class="nav-link">Users</a></li>
							<li class="nav-item"><a href="contact_requests.php" class="nav-link">Contact Requests</a></li>
							
							<li class="nav-item"><a href="conreq_view.php" class="nav-link">All Counselling
									Requests</a></li>
						<?php else: ?>
							<!-- users header -->
							 
					<li class="nav-item"><a href="users.php" class="nav-link">Our Expert Counselers</a></li>
							<li class="nav-item"><a href="counselling_form.php" class="nav-link">Apply for Counselling
									Request</a></li>
									<li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
						<?php endif; ?>

						<!-- logout for both admin & user -->
						<li class="nav-item"><a href="logout.php" class="nav-link">Logout</a></li>

					<?php else: ?>
						<!-- guest (only common header + login) -->
						 
						<li class="nav-item"><a href="login.php" class="nav-link">Login</a></li>
					<?php endif; ?>
				</ul>


			</div>
		</div>
	</nav>
	<!-- END nav -->