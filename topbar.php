<nav id = "desktop-nav">
  <img src = "assets\pictures\livwellLogo.png" id ="logoimg"/>
  <div class = "logoText"><?php echo isset($_SESSION['system']['name']) ? $_SESSION['system']['name'] : '' ?></div>
  <div class="float-right">
    <div class=" dropdown mr-4 dropdown-menu-right">
      <a href="#" class="dropdown-toggle"  id="account_settings" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION['login_name'] ?> </a>
      <div class="dropdown-menu" aria-labelledby="account_settings" style="left: -2.5em;">
        <a class="dropdown-item" href="account.php" id="manage_my_account"><i class="fa fa-cog"></i> Manage Account</a>
        <a class="dropdown-item" href="ajax.php?action=logout"><i class="fa fa-power-off"></i> Logout</a>
      </div>
    </div>
  </div>
</nav>