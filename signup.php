<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<title>LivWell - Sign Up</title>
	<link rel="icon" type="image/png" href="assets/pictures/livwellLogo.png">
	<link rel="stylesheet" href="assets/css/newstyle.css">
</head>

<body>
	<!-- ===== Navigation ===== -->
	<section id="header">
		<div class="nav-container">
			<nav id="desktop-nav">
				<img src="assets/pictures/livwellLogo.png" id="logoimg">
				<div class="logoText">LivWell</div>
				<ul id="nav-links">
					<li><a href="homepage.php">Home</a></li>
				</ul>
			</nav>
		</div>
	</section>

	<!-- ===== Main ===== -->
	<section id="main">
		<h1 id="titleMain">Join us with an Account</h1>
		<div class="wrapper-signup">
			<h2 id="title1Main">Sign Up</h2>
			<p id="descriptionMain">Create your account</p>
			<form id="input-formMain" action="signup_process.php" method="post">
				<div>
					<h4 class="title-inputMain">Email</h4>
					<input type="text" name="email" placeholder="Enter your email" class="custom-inputMain">
				</div>
				<div>
					<h4 class="title-inputMain">First Name</h4>
					<input type="text" name="firstname" placeholder="Enter your first name" class="custom-inputMain">
				</div>
				<div>
					<h4 class="title-inputMain">Last Name</h4>
					<input type="text" name="lastname" placeholder="Enter your last name" class="custom-inputMain">
				</div>
				<div>
					<h4 class="title-inputMain">Username</h4>
					<input type="text" name="username" placeholder="Enter your username" class="custom-inputMain">
				</div>
				<div>
					<h4 class="title-inputMain">Password</h4>
					<input type="password" name="password" placeholder="Enter a password" class="custom-inputMain">
				</div>
				<div>
					<h4 class="title-inputMain">Confirm Password</h4>
					<input type="password" name="confirm_password" placeholder="Confirm your password" class="custom-inputMain">
				</div>
				<div class="button-container">
					<button type="button" id="loginbtn-signup">Existing User? Login Here</button>
					<button type="submit" id="signupbtn-signup">Sign Up</button>
				</div>
			</form>
		</div>
	</section>

	<!-- ===== Footer ===== -->
	<footer>
		<p>Copyright &#169; 2024 LivWell: Apartment Management System. All Rights Reserved.</p>
	</footer>

	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script>
		$(document).ready(function() {
			$('#loginbtn-signup').click(function() {
				window.location.href = 'login.php';
			});
		});
	</script>
</body>

</html>