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
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Sansita:ital,wght@0,400;0,700;0,800;0,900;1,400;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <?php include('./header.php'); ?>
  <?php 
    if(isset($_SESSION['login_id']))
    header("location:index.php?page=home");
    ?>
</head>

<style>
	body{
	margin: 0;
	padding: 0;
	}

	/* ===== Navigation ===== */
	#desktop-nav {
	display: flex;
	align-items: center;
	justify-content: space-between;
	margin-top: 10px;
	}

	#logoimg{
	width: 50px;
	margin-left: 30px;
	margin-right: 10px;
	}

	.logoText {
	font-family: "Sansita", sans-serif;
	font-style: italic;
	font-size: 25px;
	font-weight: bold;
	color: #c59452;
	margin-right: 20px;
	}

	#nav-links {
	display: flex;
	justify-content: flex-end;
	flex-grow: 1; 
	margin-right: 45px;
	}

	#nav-links ul {
	margin: 0; 
	padding: 0; 
	}

	#nav-links li {
	list-style: none;
	margin-left: 20px; 
	}

	#nav-links li a {
	font-family: 'Roboto', sans-serif;
	color: black;
	text-decoration: none;
	font-size: 16px;
	position: relative;
	}

	#nav-links li a::after {
	content: "";
	width: 0;
	height: 3px;
	background: #E1D5C9;
	position: absolute;
	left: 0;
	bottom: -6px;
	transition: 0.5s;
	}

	#nav-links li a:hover {
	color: #c59452;
	}

	#nav-links li a:hover::after {
	width: 100%;
	}

	/* ===== Main ===== */
	#title{
		font-family: "Sansita", sans-serif;
		font-style: bold;
		font-size: 48px;
		font-weight: 400px;
		color: #c59452;
		text-align: center;
		margin-top: 5px;
	}

	.wrapper{
		align-items: center;
		background-color: #E1D5C9;
		width: 1519px;
		height:675px; 
		margin-top: 50px;
		position: relative;
	}

	#title1{
		font-family: 'Roboto', sans-serif;
		position: absolute;
		top: 50px;
		left: 50%;
		transform: translateX(-50%);
		color: black;
		font-size: 40px;
	}

	#description{
		position: absolute;
		top: 105px; 
		left: 50%; 
		transform: translateX(-50%); 
		font-family: 'Roboto', sans-serif;
		color: black;
		font-size: 16px;
	}
	
	#input-form{
        display: flex;
        flex-direction: column;
        align-items: center;
        margin-top: 50px; 
        position: relative; 
        top: 150px; 
	}

	.custom-input{
        padding: 10px;
        margin-bottom: 8px; 
        border: none; 
        border-radius: 10px;
        background-color: white; 
        outline: none; 
        width: 600px;
	}

	.title-input{
        font-family: 'Roboto', sans-serif;
        margin-bottom: 2px;
        margin-left: 5px;
        font-size: 14px;
        color: black;
	}

    #loginbtn{
        background-color: #E1D5C9;
        color: black;
        border: 2px solid black;
        border-radius: 10px;
        padding: 10px;
        width: 234px;   
    }

    #signupbtn{
        background-color: #c59452;
        color: white;
        border-radius: 10px;
        border: 2px solid #c59452;
        padding: 10px;
        width: 234px;
    }

    .button-container {
        margin-top: 15px;
        text-align: center; 
    }

    #loginbtn, #signupbtn {
        display: inline-block;
        width: 234px; 
        margin: 0 10px; 
    }
    
    footer{
    font-family: 'Roboto', sans-serif;
    text-align: center;
    font-size: 15px;
    }

</style>

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
	<h1 id = "title"> Join us with an Account </h1>
	<div class = "wrapper">
		<h2 id = "title1"> Sign Up </h2>
		<p id = "description"> Create your account </p>
		<form id = "input-form">
			<div>
				<h4 class = "title-input">Email</h4>
            	<input type="text" name="email" placeholder="Enter your email" class="custom-input">
			</div>
			<div>
				<h4 class = "title-input">First Name</h4>
            	<input type="text" name="firstname" placeholder="Enter your first name" class="custom-input">
			</div>
			<div>
				<h4 class = "title-input">Last Name</h4>
            	<input type="text" name="lastname" placeholder="Enter your last name" class="custom-input">
			</div>
			<div>
				<h4 class = "title-input">Username</h4>
            	<input type="text" name="username" placeholder="Enter your username" class="custom-input">
			</div>
			<div>
				<h4 class = "title-input">Password</h4>
            	<input type="password" name="password" placeholder="Enter a password" class="custom-input">
			</div>
			<div>
				<h4 class = "title-input">Confirm Password</h4>
            	<input type="password" name="password" placeholder="Confirm your password" class="custom-input">
			</div>
            <div class="button-container">
                <button type="button" id="loginbtn">Existing User? Login Here</button>
                <button type="submit" id="signupbtn">Sign Up</button>
            </div>
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

		$('#loginbtn').click(function() {
                window.location.href = 'login.php';
        });
	});
</script>

</html>