<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title><?php echo $_SESSION['system']['name'] = "LivWell"; ?></title>
  <link rel="icon" type="image/png" href="assets\pictures\livwellLogo.png">
  <link rel="stylesheet" href="assets\css\newstyle.css">
</head>

<body>

  <!-- ===== Navigation ===== -->
  <section id="header">
    <div class="nav-container">
      <nav id="desktop-nav">
        <img src="assets\pictures\livwellLogo.png" id="logoimg" />
        <div class="logoText">LivWell</div>
        <ul id="nav-links">
          <li><a href="#home">Home</a></li>
          <li><a href="#about">About Us</a></li>
          <li><a href="login.php">Log in</a></li>
        </ul>
      </nav>
    </div>
  </section>

  <!-- ===== Home ===== -->
  <section id="home">
    <div class="wrapper">
      <div class="content">
        <h1 id="title"> Your Apartment Management System </h1>
        <p id="description"> See your apartments in a better, organized, and modern perspective</p>
        <a onclick="window.location.href = 'signup.php'" id="button-start"> Get Started</a>
      </div>
      <img src="assets\pictures\homepagepic.png" id=hppic>
    </div>
  </section>

  <!-- ===== Preview ===== -->
  <section id="preview">
    <h1 id="title2"> Preview What's Inside </h1>
  </section>

  <!-- ===== Quick Stats ===== -->
  <section id="stats">
    <h2 id="title3"> Quick Stats </h2>
    <div class="quickstats">
      <div class="box">
        <img src="assets\pictures\total.png" id=icon>
        <h4 id="title4"> Total Apartments </h4>
        <h3 id="descr"> 9 </h4>
      </div>
      <div class="box">
        <img src="assets\pictures\available.png" id=icon>
        <h4 id="title4"> Available Apartments </h4>
        <h3 id="descr"> 3 </h4>
      </div>
      <div class="box">
        <img src="assets\pictures\pending.png" id=icon>
        <h4 id="title4"> Pending Payments </h4>
        <h3 id="descr"> 2 </h4>
      </div>
    </div>
  </section>

  <!-- ===== Add Apartment ===== -->
  <section id="add">
    <div class="wrapper1">
      <div class="content1">
        <h2 id="title5"> Add New Apartment </h2>
        <div class="input-form">
          <div>
            <h4 class="title-input">Category</h4>
            <input type="text" name="Category" placeholder="Create or select Category" class="custom-input">
          </div>
          <div>
            <h4 class="title-input">Apartment Name</h4>
            <input type="text" name="ApartmentName" placeholder="Enter Apartment Name" class="custom-input">
          </div>
          <div>
            <h4 class="title-input">Rent Rate</h4>
            <input type="text" name="RentRate" placeholder="Rent Rate" class="custom-input">
          </div>
          <div>
            <h4 class="title-input">Contract Length</h4>
            <input type="text" name="ContractLength" placeholder="Contract Length" class="custom-input">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ===== Data ===== -->
  <section id="data">
    <h2 id="title3"> Data Visualized </h2>
  </section>

  <!-- ===== About ===== -->
  <section id="about">
    <h1 id="title2"> About Us </h1>
    <div class="wrapper2">
      <div class="content1">
        <h2 id="title5"> We are LivWell </h2>
        <h4 id="des"> LivWell is a web-based apartment management system. It allows landlords to manage their properties. Additionally, by using LivWell, it improves data organization, enhances efficiency, and makes it convenient for landlords and renters. </h4>
      </div>
      <img src="assets\pictures\four.jpg" id="fourpic">
      <img src="assets\pictures\tup.png" id="tuppic">
    </div>
  </section>

  <!-- ===== Objective ===== -->
  <section id="objective">
    <h2 id="title6"> Our Objective </h2>
    <h4 id="ovm">To provide an intuitive, web-based apartment management system that streamlines property management tasks, enhances data organization, and fosters seamless communication between landlords and renters.</h4>
    <h2 id="title6"> Our Vision </h2>
    <h4 id="ovm">To become the leading platform for apartment management, recognized for our commitment to simplifying property management processes, optimizing data utilization, and fostering positive relationships between landlords and renters. We envision a future where LivWell transforms the rental industry, making property management effortless and renting a joyous experience for all parties involved.</h4>
    <h2 id="title6"> Our Mission</h2>
    <h4 id="ovm">Our mission is to empower landlords with the tools they need to efficiently manage their properties while offering renters a convenient and transparent renting experience. Through continuous innovation and customer-centric approaches, we aim to revolutionize the way rental properties are managed and experienced.</h4>
  </section>

  <!-- ===== Contact Us ===== -->
  <section id="contact">
    <div class="wrapper3">
      <h2 id="title7">Contact Us</h2>
      <h4 id="contact-des"> Let us know what you think through the channels below: </h4>
      <img src="assets\pictures\fb.png" id="icon1">
      <img src="assets\pictures\google.png" id="icon2">
      <p id="fb"> LivWell </p>
      <p id="google"> livwell@gmail.com </p>
    </div>
  </section>

  <!-- ===== Footer ===== -->
  <footer>
    <p>Copyright &#169; 2024 LivWell: Apartment Management System. All Rights Reserved.</p>
  </footer>
</body>

</html>