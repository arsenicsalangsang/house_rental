<!DOCTYPE html>
<html lang="en">

<?php
session_start();
include('./db_connect.php');
ob_start();
if (!isset($_SESSION['system'])) {
  $system = $conn->query("SELECT * FROM system_settings limit 1")->fetch_array();
  foreach ($system as $k => $v) {
    $_SESSION['system'][$k] = $v;
  }
}

// Function to check if the email exists in the database
function isEmailExist($email, $conn)
{
  $query = "SELECT COUNT(*) as count FROM users WHERE email = '$email'";
  $result = mysqli_query($conn, $query);
  $data = mysqli_fetch_assoc($result);
  return $data['count'] > 0;
}

if (isset($_POST['username'])) {
  $email = $_POST['username'];
  if (isEmailExist($email, $conn)) {
    header("Location: passreset.php?email=" . urlencode($email));
  } else {
    header("Location: emailnonext.php");
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
  if (isset($_SESSION['login_id']))
    header("location:index.php?page=home");
  ?>
</head>

<body>
  <!-- ===== Navigation ===== -->
  <section id="header">
    <div class="nav-container">
      <nav id="desktop-nav">
        <img src="assets\pictures\livwellLogo.png" id="logoimg" />
        <div class="logoText">LivWell</div>
        <ul id="nav-links">
          <li><a href="homepage.php">Home</a></li>
        </ul>
      </nav>
    </div>
  </section>

  <!-- ===== Main ===== -->
  <section id="main">
    <div class="wrapper-forgot">
      <h2 id="title1Main"> Forgot Password </h2>
      <p id="descriptionMain"> Enter your email to recover </p>
      <form id="input-form-forgot" method="post">
        <div>
          <h4 class="title-inputMain">Email</h4>
          <input type="text" name="username" placeholder="Enter your email" class="custom-inputMain">
        </div>
        <div class="button-container">
          <button type="button" id="loginbtn-signup">Existing User? Login Here</button>
          <button type="submit" id="submitbtn">Submit</button>
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