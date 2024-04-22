<?php include('db_connect.php');?>

<div class = "wrapper">
    <div class = "content">
        <h1 id = "title"> Welcome, <?php echo $_SESSION['login_name']."!"  ?> </h1>
        <p id = "description"> See the summary of your apartments! </p>
    </div>
    <img src = "assets\pictures\homepagepic.png" id = hppic>
</div>

<div id = "stats">
    <h2 id = "title3"> Quick Stats </h2>
    <div class = "quickstats">
        <div class = "box">
            <img src = "assets\pictures\total.png" id = icon>
            <h4 id = "title4"> Total Apartments </h4>
            <h3 id = "descr"> 9 </h4>
        </div>
        <div class = "box">
            <img src = "assets\pictures\available.png" id = icon>
            <h4 id = "title4"> Available Apartments </h4>
            <h3 id = "descr"> 3 </h4>
        </div>
        <div class = "box">
            <img src = "assets\pictures\pending.png" id = icon>
            <h4 id = "title4"> Pending Payments </h4>
            <h3 id = "descr"> 2 </h4>
        </div>
    </div>
</div>