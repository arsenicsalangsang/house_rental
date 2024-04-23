<!DOCTYPE html>
<html lang="en">
	
<?php session_start();
if(!isset($_SESSION['login_id'])) {
    header('location: homepage.php');
    exit();
}
?>
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?php echo isset($_SESSION['system']['name']) ? $_SESSION['system']['name'] : '' ?></title>
 	<link rel="icon" type="image/png" href="assets\pictures\livwellLogo.png">


  <?php
    if(!isset($_SESSION['login_id']))
      header('location:login.php');
    include('./header.php'); 
  ?>
  <link rel="stylesheet" href="assets\css\styledash.css">
</head>
<?php include('db_connect.php');?>
<body>
	<?php include 'topbar.php' ?>
	<?php include 'navbar.php' ?>
    <h2 class = "title-account">Account</h2>
    <div class = "account-banner">
        <div class = "banner-content">
            <div class = "profilepic"></div>
            <div class = "account-name"><?php echo $_SESSION['login_name']?></div>
            <div class = "account-status">Landlord</div>
            <div class="button-container">
                <button type="button" id="changeprofile">Change Profile Picture</button>
                <button type="submit" id="updateprofile">Update Profile</button>
            </div>
        </div>
    </div>
    <div class = "information">
        <div class = "box-information">
            <div class = "boxcontent">
                <p class = "title-box"> Personal Information </p>
                <p class = "box-title"> Legal Name </p>
                <div class = "line"></div>
                <p class = "box-description"><?php echo $_SESSION['login_name']?></div>
                <p class = "box-title"> Date of Birth </p>
                <div class = "line"></div>
                <p class = "box-description">April 1, 2002</div>
                <p class = "box-title1"> Phone Number </p>
                <div class = "line1"></div>
                <p class = "box-description1">0927025355</div>
                <p class = "box-title1"> Email </p>
                <div class = "line1"></div>
                <p class = "box-description1">jewel@gmail.com</div>
                <p class = "box-title1"> Address </p>
                <div class = "line1"></div>
                <p class = "box-description1">Ayala Blvd., Ermita Manila</div>
            </div>
        </div>
        <div class = "box-information1">
            <div class = "boxcontent">
                <p class = "title-box">Security</p>
                <p class = "box-title">Password</p>
                <div class = "line"></div>
                <p class = "box-description">Change your password</p>
                <form id = "input-form-password">
                    <div>
                        <p class = "title-inputPass">Current Password</p>
                        <input type="password" name="currentpassword" placeholder="Enter your current password" class="custom-inputPass">
                    </div>
                    <div>
                        <p class = "title-inputPass">New Password</p>
                        <input type="password" name="newpassword" placeholder="Enter your new password" class="custom-inputPass">
                    </div>
                    <div>
                        <p class = "title-inputPass">Current Password</p>
                        <input type="password" name="confirmpassword" placeholder="Confirm your password" class="custom-inputPass">
                    </div>
                    <button type="submit" id="updatepass">Update Password</button>
                </form>
            </div>
        </div>
    </div>
</body>