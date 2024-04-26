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
    <h2 class = "title-account">Earnings</h2>
    <div class = "transaction-banner">
        <div class = "earning-box">
            <div class = "earning-box1">
                <div class = "profilepic-earning"></div>
                <div class = "tenant-apartment">Apt 103</div>
                <div class = "tenant-name">MJ Sanggalak</div>
            </div>
            <div class = "earning-box2">
                <p class = "earning-box2-title"> Tenant Transaction </p>
                <div class = "transaction-content">
                    <div class = "transaction-box">
                        <img src = "assets\pictures\totalpaid.png" id = "icon1">
                        <p class = "transaction-box-title"> Total Paid </p>
                        <p class = "transaction-box-date">Since December 11, 2023</p>
                        <p class = "transaction-box-total">₱**,***.**</p>
                    </div>
                    <div class = "transaction-box1">
                        <img src = "assets\pictures\lastpayment.png" id = "icon1">
                        <p class = "transaction-box-title"> Last Full Payment </p>
                        <p class = "transaction-box-date">February 14, 2024</p>
                        <p class = "transaction-box-total">₱**,***.**</p>
                    </div>
                    <div class = "transaction-box2">
                        <img src = "assets\pictures\duedate.png" id = "icon1">
                        <p class = "transaction-box-title"> Payment Due </p>
                        <p class = "transaction-box-date">March 15, 2024</p>
                        <p class = "transaction-box-total">₱**,***.**</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
<div class = "transaction-banner1">
    <div class = "contract-boxes">
        <div class = "contract-box">
            <p class = "contract-box-text">Contract started in<br>December 11, 2023</p>
        </div>
        <div class = "contract-monthly">
            <p class = "contract-monthly-text">With a monthly <br>rent of<br>₱**,***.**</p>
        </div>
        <div class = "contract-end">
            <p class = "contract-end-text">Contract ends in<br>December 11, 2025</p>
        </div>
    </div>
</div>
</body>