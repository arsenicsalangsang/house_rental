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

  /* ===== Preview ===== */

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

  /* ===== Quick Stats ===== */

  #title3, #title4, #descr, #title5{
    font-family: 'Roboto', sans-serif;
    text-align: center;
  }

  .quickstats{
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    margin-top: 50px;
    margin-left: 170px;
  }

  .box {
  display: flex;
  flex-direction: column;
  align-items: center; 
  padding: 10px;
  width: 260px;
  font-weight: 300;
  border-right: 10px;
  border-radius: 10px;
  }

  .class{
    padding: 40px;
    font-weight: 300;
    border-right: 10px;
    border-radius: 10px;
  }

  #icon {
    width: 60px;
    height: 60px;
  }

  #title4 {
    margin-bottom: 5px;
  }

  /* ===== Add New Apartment ===== */

  .wrapper1{
    align-items: center;
    background-color: #E1D5C9;
    width: 1519px;
    height:480px; 
    margin-top: 20px;
    position: relative;
  }

  #title5{
    position: absolute;
    top: 50px; 
    left: 50%; 
    transform: translateX(-50%); 
  }

  .input-form{
    display: flex;
    flex-direction: column;
    align-items: center;
    margin-top: 50px; 
    position: relative; 
    top: 110px; 
  }

  .custom-input{
    padding: 10px;
    margin-bottom: 2px; 
    border: none; 
    border-radius: 10px;
    background-color: white; 
    outline: none; 
    width: 500px;
  }

  .title-input{
    font-family: 'Roboto', sans-serif;
    margin-bottom: 2px;
    margin-left: 5px;
  }

  /* ===== About Us ===== */
  .wrapper2{
    align-items: center;
    background-color: #E1D5C9;
    width: 1519px;
    height:600px; 
    margin-top: 20px;
    position: relative;
  }

  #des{
    position: absolute;
    top: 90px; 
    left: 50%; 
    transform: translateX(-50%); 
    font-family: 'Roboto', sans-serif;
  }

  #tuppic{
    position: absolute;
    width: 600px;
    height: 364px;
    top: 200px; 
    left: 100px; 
    border: 4px solid white;
    border-radius: 10px;
  }

   #fourpic{
    position: absolute;
    width: 600px;
    top: 200px; 
    left: 800px; 
    border: 4px solid white;
    border-radius: 10px;
  }

  /* ===== Objective ===== */
  #title6{
    font-family: 'Roboto', sans-serif;
    margin-left: 100px;
    margin-top: 50px;
  }

  #ovm{
    font-family: 'Roboto', sans-serif;
    margin-left: 100px;
  }

  /* ===== Contact ===== */
  .wrapper3{
    align-items: center;
    background-color: #E1D5C9;
    width: 1519px;
    height:380px; 
    margin-top: 50px;
    position: relative;
  }

  #title7{
    font-family: 'Roboto', sans-serif;
    position: absolute;
    top: 50px;
    left: 100px;
  }

  #contact-des{
    font-family: 'Roboto', sans-serif;
    position: absolute;
    top: 100px;
    left: 100px;
  }

  #icon1{
    width: 48px;
    height: 48px;
    position: absolute;
    left: 100px;
    top: 180px;
  }

  #icon2{
    width: 48px;
    height: 48px;
    position: absolute;
    left: 100px;
    top: 250px;
  }

  #fb{
    font-family: 'Roboto', sans-serif;
    font-size: 24px;
    position: absolute;
    left: 170px;
    top: 170px;
  }

  #google{
    font-family: 'Roboto', sans-serif;
    font-size: 24px;
    position: absolute;
    left: 170px;
    top: 240px;
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
        <a onclick = "window.location.href = 'signup.php'" id = "button-start"> Get Started</a>
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
  </section>

  <!-- ===== Add Apartment ===== -->
  <section id = "add">
    <div class = "wrapper1">
      <div class = "content1">
        <h2 id = "title5"> Add New Apartment </h2>
        <div class = "input-form">
          <div>
            <h4 class = "title-input">Category</h4>
            <input type="text" name="Category" placeholder="Create or select Category" class="custom-input">
          </div>
          <div>
            <h4 class = "title-input">Apartment Name</h4>
            <input type="text" name="ApartmentName" placeholder="Enter Apartment Name" class="custom-input">
          </div>
          <div>
            <h4 class = "title-input">Rent Rate</h4>
            <input type="text" name="RentRate" placeholder="Rent Rate" class="custom-input">
          </div>
          <div>
            <h4 class = "title-input">Contract Length</h4>
            <input type="text" name="ContractLength" placeholder="Contract Length" class="custom-input">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ===== Data ===== -->
  <section id = "data">
    <h2 id = "title3"> Data Visualized </h2>
  </section>

  <!-- ===== About ===== -->
  <section id = "about">
    <h1 id = "title2"> About Us </h1>
      <div class = "wrapper2">
        <div class = "content1">
          <h2 id = "title5"> We are LivWell </h2>
          <h4 id = "des"> LivWell is a web-based apartment management system. It allows landlords to manage their properties. Additionally, by using LivWell, it improves data organization, enhances efficiency, and makes it convenient for landlords and renters. </h4>
        </div>
        <img src = "assets\pictures\four.jpg" id = "fourpic">
        <img src = "assets\pictures\tup.png" id = "tuppic">
      </div>
  </section>

  <!-- ===== Objective ===== -->
  <section id = "objective">
    <h2 id = "title6"> Our Objective </h2>
    <h4 id = "ovm" >To provide an intuitive, web-based apartment management system that streamlines property management tasks, enhances data organization, and fosters seamless communication between landlords and renters.</h4>
    <h2 id = "title6"> Our Vision </h2>
    <h4 id = "ovm" >To become the leading platform for apartment management, recognized for our commitment to simplifying property management processes, optimizing data utilization, and fostering positive relationships between landlords and renters. We envision a future where LivWell transforms the rental industry, making property management effortless and renting a joyous experience for all parties involved.</h4>
    <h2 id = "title6"> Our Mission</h2>
    <h4 id = "ovm" >Our mission is to empower landlords with the tools they need to efficiently manage their properties while offering renters a convenient and transparent renting experience. Through continuous innovation and customer-centric approaches, we aim to revolutionize the way rental properties are managed and experienced.</h4>
  </section>

  <!-- ===== Contact Us ===== -->
  <section id = "contact">
    <div class = "wrapper3">
      <h2 id = "title7">Contact Us</h2>
      <h4 id = "contact-des"> Let us know what you think through the channels below: </h4>
      <img src = "assets\pictures\fb.png" id = "icon1">
      <img src = "assets\pictures\google.png" id = "icon2">
      <p id = "fb"> LivWell </p>
      <p id = "google"> livwell@gmail.com </p>
    </div>
  </section>

  <!-- ===== Footer ===== -->
  <footer>
    <p>Copyright &#169; 2024 LivWell: Apartment Management System. All Rights Reserved.</p>
  </footer>
</body>
</html>
