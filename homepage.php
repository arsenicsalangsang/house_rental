<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title><?php echo $_SESSION['system']['name'] = "LivWell"; ?></title>
  <link rel="icon" type="image/png" href="assets\pictures\livwellLogo.png">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Sansita:ital,wght@0,400;0,700;0,800;0,900;1,400;1,700;1,800;1,900&display=swap" rel="stylesheet">
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

  /* ===== Home ===== */

  .wrapper{
    display: flex;
    align-items: center;
    justify-content: space-between;
    background-color: #E1D5C9;
    width: 1519px;
    height: 520px; 
    padding: 60px 0 0 0; 
    gap: 60px; 
    box-sizing: border-box;
    margin-top: 20px;
  }

  .content{
    margin-left: 80px;
    margin-bottom: 50px;
  }

  #button-start{
    display: inline-block;
    background-color: black;
    color: white;
    padding: 3%;
    border-radius: 1rem;
    cursor: pointer;
    font-size: 15px;
  }

  #title, #description, #button-start{
    font-family: 'Roboto', sans-serif;
  }

  #hppic{
    margin-bottom: 62px;
    flex-shrink: 0;
    margin-right: 20px;
  }

  #preview{
    margin-bottom: 75px;
  }

  #title2{
    font-family: "Sansita", sans-serif;
    font-style: bold;
    font-size: 48px;
    font-weight: 400px;
    color: #c59452;
    text-align: center;
  }

  #title3{
    font-family: 'Roboto', sans-serif;
    text-align: center;
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
          <li><a href = "#home">Home</a></li>
          <li><a href = "#about">About Us</a></li>
          <li><a href="login.php">Log in</a></li>
         </ul>
      </nav>
    </div>
  </section>

  <!-- ===== Home ===== -->
  <section id = "home">
    <div class = "wrapper">
      <div class = "content">
        <h1 id = "title"> Your Apartment Management System </h1>
        <p id = "description"> See your apartments in a better, organized, and modern perspective</p>
        <a onclick = "window.location.href = 'login.php'" id = "button-start"> Get Started</a>
      </div>
      <img src = "assets\pictures\homepagepic.png" id = hppic>
    </div>
  </section>
  
  <!-- ===== Preview ===== -->
  <section id = "preview">
    <h1 id = "title2"> Preview What's Inside </h1>
  </section>

  <!-- ===== Quick Stats ===== -->
  <section id = "stats">
    <h2 id = "title3"> Quick Stats </h2>
    <div id = "quickstats">
      
    </div>

  </section>


</body>
</html>
