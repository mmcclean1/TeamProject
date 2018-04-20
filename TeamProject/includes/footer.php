

<!DOCTYPE html>
<html>

	<head>
		<title>Footer with Button and Logo</title>
		<meta charset="utf-8">

		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" href="assets/css/Footer-with-button-logo.css">

	</head>

	<body>
		<div class="content">
		</div>
		<footer id="myFooter">
			<div class="container">
				<div class="row">
					<div class="col-sm-5">
						<h2 class="logo">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#">LOGOS</a></h2>
					</div>
					<div class="col-sm-2">
						<h5>Get started</h5>
						<ul>
							<!--                        <li><a href="#">Home</a></li>-->
							<li><a href="register.php">Register</a></li>
							<li><a href="#">Downloads</a></li>
						</ul>
					</div>
					<div class="col-sm-2">
						<h5>Information</h5>
						<ul>
							<li><a href="contactUs.php">Contact us</a></li>
							<li><a href="#">Reviews</a></li>
						</ul>
					</div>
					<div class="col-sm-2">
						<h5>Support</h5>
						<ul>
							<li><a href="#">FAQ</a></li>
							<li><a href="#">Help desk</a></li>
							<li><a href="#">Forums</a></li>
						</ul>
					</div>
					<div class="col-sm-1">
						<div class="social-networks">
							<a href="https://twitter.com/LYIT?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor" class="twitter"><i class="fa fa-twitter"></i></a>
							<a href="https://www.facebook.com/lyit.welcome/" class="facebook"><i class="fa fa-facebook "></i></a>
							<a href="https://accounts.google.com/signin/v2/identifier?passive=1209600&osid=1&continue=https%3A%2F%2Fplus.google.com%2Fup%2F%3Fcontinue%3Dhttps%3A%2F%2Fplus.google.com%2Fpeople&followup=https%3A%2F%2Fplus.google.com%2Fup%2F%3Fcontinue%3Dhttps%3A%2F%2Fplus.google.com%2Fpeople&flowName=GlifWebSignIn&flowEntry=ServiceLogin" class="google"><i class="fa fa-google-plus"></i></a>
						</div>
						<button type="button" class="btn btn-default">Contact us</button>
					</div>
				</div>
			</div>
			
			
			<div class="footer-copyright">
				<p><?php
					echo "<p>Copyright &copy; " . date("Y") . " Logos.com</p>";

					?> </p>
			</div>
		</footer>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</body>

</html>
