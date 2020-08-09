<?php

	session_start();
	
	if(!isset($_SESSION['username'])){
		header("Location: login.php");
	}

	error_reporting(0);
	
	include("connection.php");

?>


<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<title>Static Startups</title>
	

<meta http-equiv="content-type" content="text/html;charset=UTF-8" /> 
<head>
	<!-- meta ----------------------------------------------------------------------------------------------------------------------------------------------------- -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">	
     <title> Static Startup</title>

	<!-- tab img -->
	<link rel="shortcut icon" type="image/x-icon" href="assets/img/portfolio/nk.jpg">
    
	<!-- css plugin ----------------------------------------------------------------------------------------------------------------------------------------------- -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/css/magnific-popup.css">
	<link rel="stylesheet" href="assets/css/flexslider.css">
	<link rel="stylesheet" href="assets/css/aos.css">

	<!-- main css ------------------------------------------------------------------------------------------------------------------------------------------------- -->
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/style-responsives.css">

	<!-- google fonts ---------------------------------------------------------------------------------------------------------------------------------------------- -->
	<link href="https://fonts.googleapis.com/css?family=Hind:600|Lato:300,400|Ubuntu" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

	<!-- // PRELOADER BEGIN --------------------------------------------------------------------------------------------------------------------------------------- -->
	<div id="preloader">
		<div id="status">
			<div class="loader-revolve center">
				<span></span>
			</div>
		</div>
	</div>
	<!-- // PRELOADER END ----------------------------------------------------------------------------------------------------------------------------------------- -->

	<!-- // NAVIGATION BEGIN------------------------------------------------------------------------------------------------------------------------------------------->
	<div id="navigation">
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="logo">
						<a href="index.html" > Static Startup. </a>
					</div>
				</div>

				<div class="col-sm-9">
					<div class="navigation-menu">
						<div class="navbar">
							<div class="navbar-header">
								<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
							</div>

							<div class="navbar-collapse collapse">
								<ul class="nav navbar-nav navbar-right">
                  <li><a class="active smoth-scroll" href="#particles-js">Home</a></li>
                  <li><a class="smoth-scroll" href="admin_login.php">Teacher Login</a></li>
                  <li><a class="smoth-scroll" href="login.php">Student Login</a></li>
									<li><a class="smoth-scroll" href="#contact">Contact</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- // NAVIGATION END ---------------------------------------------------------------------------------------------------------------------------------------------->

	<!--   // HOME BEGIN -----------------------------------------------------------------------------------------------------------------------------------------------> 
	<div id="particles-js" class="home-bg" style="background-image: url('assets/img/portfolio/was.png')" data-stellar-background-ratio="0.6">
		<div class="overlay">
			<div class="container">
				<div class="row">
					<div class="home-text">
						<div class="profile-pic" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="400"
						 data-aos-offset="0">
							<img src="assets/img/portfolio/nk.jpg" />
						</div>

						<div data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="400" data-aos-offset="0">
							<h1>Static Startup.co.</h1>
							<h3 id="text-rotator">
								<div>P5 Hackathon</div>
								<div>Welcome</div>

							</h3>
						</div>
					</div>
					<a class="smoth-scroll" href="#about"><i class="fa fa-angle-down arrow"></i></a>
				</div>
			</div>
		</div>
	</div>


<!-- particles-js style ----------------------------------------------------------------------------------------------------------------------------------------------->

<style type="text/css" media="screen">
			#particles-js
{
	background-image: url('assets/img/portfolio/me.jpg');
    height: 100vh;
}
		</style>




	<!-- // CONTACT BEGIN ------------------------------------------------------------------------------------------------------------------------------------------------>
	<section id="contact">
		<div class="container text-center">
			<div class="row">
				<div class="col-md-12 text-center">
					<h2>Contact Us</h2>
				</div>

				<div class="address-icons col-md-8 col-md-offset-2">
					<div class="col-md-4 col-sm-4">
						<i class="fa fa-envelope fa-2x"></i>
						<p>info@staticstartup.co</p>
					</div>

					<div class="col-md-4 col-sm-4">
						<i class="fa fa-map-marker fa-2x"></i>
						<p>Bengaluru,
							<br> Pin-560017
						</p>
					</div>

					<div class="col-md-4 col-sm-4">
						<i class="fa fa-phone fa-2x"></i>
						<p>+91 911------66</p>
					</div>
					<div class="clearfix"></div>
				</div>

				
<!-- -- ----------------------------------formspree !------------------------------------------------------------------------------------------------------------------------------------------------>
				<div class="col-md-8 col-md-offset-2">
					<form id="contact-form" name="contact" method="POST" action="https://formspree.io/nitk17ec@cmrit.ac.in">
						<div class="row">
							<div class="col-md-6 col-sm-6">
								<div class="form-group">
									<input type="text" name="name" id="name" class="form-control" placeholder="Name" required>
									<p class="help-block text-danger"></p>
								</div>
							</div>
							<div class="col-md-6 col-sm-6">
								<div class="form-group">
									<input type="email" name="email" id="email" class="form-control" placeholder="Email" required>
									<p class="help-block text-danger"></p>
								</div>
							</div>
						</div>
						<div class="form-group">
							<textarea name="message" id="message" class="form-control" rows="4" placeholder="Anything you wish to say ..." required></textarea>
							<p class="help-block text-danger"></p>
						</div>

						<div class="col-md-12 col-xs-12">
							<button id="submit" type="submit" name="submit" class="btn btn-dark">Send Us your Queries.</button>
						</div>

						<div id="success" class="col-md-12 col-xs-12">
							<p class="green textcenter">Your message was send, Thank you.</p>
						</div>

						<div id="error" class="col-md-12 col-xs-12">
							<p>Something maybe wrong please try again</p>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
	<!-- // CONTACT END------------------------------->


	<script src="assets/js/jquery.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/jquery.stellar.min.js"></script>
	<script src="assets/js/text-rotate.js"></script>
	<script src="assets/js/numscroller.js"></script>
	<script src="assets/js/jquery.appear.js"></script>
	<script src="assets/js/progress-bar.min.js"></script>
	<script src="assets/js/jquery.mixitup.js"></script>
	<script src="assets/js/jquery.magnific-popup.min.js"></script>
	<script src="assets/js/magnific-popup-options.js"></script>
	<script src="assets/js/jquery.flexslider-min.js"></script>
	<script src="assets/js/aos.js"></script>
	 <script src="assets/js/jquery.form.js"></script> 
	<script src="assets/js/jquery.validate.min.js"></script>
    <script src="particles.js"></script>
    <script src="app.js"></script>

	<script src="assets/js/main.js"></script>
</body>

 
</html>
