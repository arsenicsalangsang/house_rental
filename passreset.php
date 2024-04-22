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
        <div class="wrapper-forgot-2">
            <h2 id="title1Main"> Reset Password </h2>
            <div class="box">
                <p class="message">Check your email for a link to reset your password. If it doesn’t appear within a few minutes, check your spam folder.</p>
            </div>
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