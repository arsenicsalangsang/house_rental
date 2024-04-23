<?php include('db_connect.php');?>

<div class = "wrapper">
    <div class = "content">
        <h1 id = "title"> Welcome, <?php echo $_SESSION['login_name']."!"  ?> </h1>
        <p id = "description"> See the summary of your apartments! </p>
    </div>
    <img src = "assets\pictures\homepagepic.png" id = hppic>
</div>