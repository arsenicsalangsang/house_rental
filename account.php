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

<body>
    <?php include 'topbar.php' ?>
	<?php include 'navbar.php' ?>


</body>