<?php
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysqli_connect("localhost", "root", "");
// Selecting Database
$db = mysqli_select_db( $connection, "restaurant");
session_start();// Starting Session
// Storing Session
$user_check=$_SESSION['user'];
// SQL Query To Fetch Complete Information Of User
$ses_sql=mysqli_query( $connection,"select mail from register where mail='$user_check'");
$row = mysqli_fetch_assoc($ses_sql);
$login_session =$row['mail'];
if(!isset($login_session)){
mysqli_close($connection); // Closing Connection
header('location:login.php'); // Redirecting To Home Page
}
?>
<html>
<head>
<title>Pizza site</title>
<link rel="stylesheet" href="style.css" />
</head>
<body>
 <title>Home template</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">    
	<!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css">    
	<!-- Pickadate CSS -->
    <link rel="stylesheet" href="css/classic.css">    
	<link rel="stylesheet" href="css/classic.date.css">    
	<link rel="stylesheet" href="css/classic.time.css">    
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
	<!-- Start header -->
	<header class="top-navbar">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container">
				
					<img src="images/logo.png" alt="" />
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-rs-food" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
				  <span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbars-rs-food">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item"><a class="nav-link" href="Home.php">Home</a></li>
						<li class="nav-item"><a class="nav-link" href="session1.php">Reservation</a></li>
						<li class="nav-item"><a class="nav-link" href="delivery.php">delivery</a></li>
						<li class="nav-item"><a class="nav-link" href="Menu.php">Menu</a></li>
						<li class="nav-item"><a class="nav-link" href="logout1.php">Log out</a></li>
						<li class="nav-item active dropdown">
							
					</ul>
				</div>
			</div>
		</nav>
	</header>
	<div class="all-page-title page-breadcrumb">
		<div class="container text-center">
			<div class="row">
				<div class="col-lg-12">
					<h1>Welcome</h1>
				</div>
			</div>
		</div>
	</div>



<div class="content">
<div class="first-row">
<div class="new">
    <p>GRILLED CHICKEN  </p>
    <p>Winter Pizza  </p>
    <button >HOT & SPICY</button>
</div>
<div class="tools">
<div class="search">
  <p>Look For Food  </p>
  <div class="text">
  <input type="search" placeholder="Search Something Here" />
  <button>Search</button>
</div>
</div>
  <div class="order">
    <p><font style="color:#f9a609">ORDER </font>ONLINE</p>
  </div>
</div>
</div>
<div class="second-row">
  <div class="food-1">
    <div class="name">
  <p> HONEY CAKE</p>
  <p>   SPECIAL</p>
</div>
<div class="price">
  <button class="button">£1<sup>9</sup></button>
</div>
</div>
  <div class="food-2">
  <div class="name">
  <p> PIZZA PAPPERONI</p>
  <p>   SPECIAL</p>
</div>
<div class="price">
  <button class="button">£2<sup>5</sup></button>
</div>
</div>
  <div class="food-3">
    <div class="name">
  <p>SANDWICH</p>
  <p>   SPECIAL</p>
</div>
<div class="price">
  <button class="button">£2<sup>3</sup></button>
</div>
</div>
</div>
<div class="third-row">
  <div class="flavor">
    <P> FLAVOR MENU </P>
    <P> VAGITABLE HAND TOSE </P>
  </div>
  <div class="breakfast">
     <P>BREAKFAST MENU </P>
       <P> PARANTHA ROLL </P>
  </div>
</div>
</div>
<div>
<img src="./images/stuff-img-01.jpg" class="chef">
<img src="./images/stuff-img-05.jpg" class="chef">
<video class="vid" controls >
  <source src="./images/02.mp4" type="video/mp4">
  <source src="./images/02.ogg" type="video/ogg">
</video>

</div>
<footer class="footer">
  <div class="footer-content">
     <div class="foote-section about"></div>
     <div class="foote-section link"></div>
     <div class="foote-section contact-form"></div>
  </div>
  <div class="footer-buttom">
      &copy; AsiaKitchen.com | Designed by Team 3 DSI
  </div>
  </footer>

</body>
</html>
