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
<!DOCTYPE html>
<html>
<head> 
<link rel="stylesheet" href="style.css" />
</head>
<title></title>
<body>

<title>Menu template</title>  
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
					<h1>Menu</h1>
				</div>
			</div>
		</div>
	</div>



<form method="POST" action="">
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
  <p> SANDWISH</p>
  <p>   SPECIAL</p>
</div>
<div class="price">
  <button class="button">£1<sup>3</sup></button>

</div>
</div>

</div>

<div class="second-row">
  <div class="food-4">
    <div class="name">
  <p> STUFFED POTATOES</p>
  <p>   SPECIAL</p>
</div>
<div class="price">
  <button class="button">£1<sup>0.5</sup></button>
</div>
</div>
  <div class="food-5">
  <div class="name">
  <p> WHITE RICE</p>
  <p>   SPECIAL</p>
</div>
<div class="price">
  <button class="button">£1<sup>5.5</sup></button>

</div>
</div>
  <div class="food-6">
    <div class="name">
  <p> VEGGISOUP EGGS<E</p>
  <p>   SPECIAL</p>
</div>
<div class="price">
  <button class="button">£2<sup>3.5</sup></button>

</div>
</div>
</div>

<div class="second-row">
  <div class="food-7">
    <div class="name">
  <p> VANILLA CAKE </p>
  <p>   SPECIAL</p>
</div>
<div class="price">
  <button class="button">£1<sup>1</sup></button>

</div>
</div>
  <div class="food-8">
  <div class="name">
  <p> CHOCOLATE PIES</p>
  <p>   SPECIAL</p>
</div>
<div class="price">
  <button class="button">£1<sup>2.5</sup></button>

</div>
</div>
  <div class="food-9">
    <div class="name">
  <p> STRAWBERRY BREAD</p>
  <p>   SPECIAL</p>
</div>
<div class="price">
  <button class="button">£1<sup>3</sup></button>

</div>
</div>
</div>

<div class="second-row">
  <div class="food-10">
    <div class="name">
  <p> HONEY PIES</p>
  <p>   SPECIAL</p>
</div>
<div class="price">
  <button class="button">£1<sup>9</sup></button>

</div>
</div>
  <div class="food-11">
  <div class="name">
  <p> VEGETABLE SOUP</p>
  <p>   SPECIAL</p>
</div>
<div class="price">
  <button class="button">£2<sup>1</sup></button>

</div>
</div>
  <div class="food-12">
    <div class="name">
  <p> CUCUMBER SALAD</p>
  <p>   SPECIAL</p>
</div>
<div class="price">
  <button class="button">£1<sup>0</sup></button>

</div>
</div>
</div>

<div class="second-row">
  <div class="food-13">
    <div class="name">
  <p> HUMBERGER</p>
  <p>   SPECIAL</p>
</div>
<div class="price">
  <button class="button">£1<sup>4.5</sup></button>

</div>
</div>
  <div class="food-14">
  <div class="name">
  <p>GRILLED MEET</p>
  <p>   SPECIAL</p>
</div>
<div class="price">
  <button class="button">£2<sup>0.5</sup></button>

</div>
</div>
  <div class="food-15">
    <div class="name">
  <p> Dry fruit soup</p>
  <p>   SPECIAL</p>
</div>
<div class="price">
  <button class="button">£3<sup>0.5</sup></button>

</div>
</div>
</div>






</form>
</body>
</html>