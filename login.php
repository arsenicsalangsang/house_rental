<!DOCTYPE html>
<html lang = "en">

<?php
	session_start();
	include('./db_connect.php');
	ob_start();
	if(!isset($_SESSION['system'])){
		$system = $conn->query("SELECT * FROM system_settings limit 1")->fetch_array();
		foreach($system as $k => $v){
			$_SESSION['system'][$k] = $v;
		}
	}
?>

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?php echo $_SESSION['system']['name'] = "LivWell"; ?></title>
  <link rel="icon" type="image/png" href="assets\pictures\livwellLogo.png">
  <link rel="stylesheet" href="assets\css\newstyle.css">
  <?php 
    if(isset($_SESSION['login_id']))
    header("location:index.php?page=home");
    ?>
</head>
<body>
  <!-- ===== Navigation ===== -->
  <section id = "header">
    <div class = "nav-container">
      <nav id = "desktop-nav">
         <img src = "assets\pictures\livwellLogo.png" id ="logoimg"/>
         <div class = "logoText">LivWell</div>
         <ul id = "nav-links">
          <li><a href = "homepage.php">Home</a></li>
         </ul>
      </nav>
    </div>
  </section>

  <!-- ===== Main ===== -->
  <section id = "main">
	<h1 id = "titleMain"> Join us with an Account </h1>
	<div class = "wrapperMain">
		<h2 id = "title1Main"> Login </h2>
		<p id = "descriptionMain"> Sign in to your account </p>
		<form id = "input-formMain">
			<div>
				<h4 class = "title-inputMain">Username</h4>
            	<input type="text" name="username" placeholder="Enter your username" class="custom-inputMain">
			</div>
			<div>
				<h4 class = "title-inputMain">Password</h4>
            	<input type="password" name="password" placeholder="Enter your password" class="custom-inputMain">
			</div>
            <div class="button-container">
                <button type="button" id="signupbtnMain">New User? Create Account</button>
                <button type="submit" id="loginbtnMain">Login</button>
            </div>
            <button id = "fpassbtn">Forgot Password?</button>
        </form>
	</div>
  </section>

  <!-- ===== Footer ===== -->
  <footer>
    <p>Copyright &#169; 2024 LivWell: Apartment Management System. All Rights Reserved.</p>
  </footer>
</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
	$(document).ready(function() {

		$('#signupbtnMain').click(function() {
                window.location.href = 'signup.php';
        });

		$('#fpassbtn').click(function() {
                window.location.href = 'forgotpass.php';
        });

		$('#input-formMain').submit(function(e) {
			e.preventDefault();
			$('#loginbtnMain').attr('disabled', true).html('Logging in...');
			if ($(this).find('.alert-danger').length > 0)
				$(this).find('.alert-danger').remove();
			$.ajax({
				url: 'ajax.php?action=login',
				method: 'POST',
				data: $(this).serialize(),
				error: function(err) {
					console.log(err);
					$('#loginbtnMain').removeAttr('disabled').html('Login');
				},
				success: function(resp) {
					if (resp == 1) {
						location.href = 'index.php?page=home';
					} else {
						$('#input-formMain').prepend('<div class="alert alert-danger">Username or password is incorrect.</div>');
						$('#loginbtnMain').removeAttr('disabled').html('Login');
					}
				}
			});
		});
	});
</script>
</html>