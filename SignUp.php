<?php
$emailError="";
$errore="";
include('insert.php') ;

?>
<!DOCTYPE html>
<html>
<head> 
<link rel="stylesheet" href="style.css" />
</head>
<title></title>
<html>
<head>
<link rel="stylesheet" href="style.css" />
<title>Pizza site</title>
<link rel="stylesheet" href="style.css" />
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
     <!-- Site Metas -->
    <title>delivery template</title>  
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
<body>

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
						<li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
						<li class="nav-item"><a class="nav-link" href="login.php">login</a></li>
						<li class="nav-item"><a class="nav-link" href="SignUp.php">Sing Up</a></li>
						
						<li class="nav-item"><a class="nav-link" href="order_online.php">Menu</a></li>
						<li class="nav-item"><a class="nav-link" href="feedback.php">Feedback Form</a></li>
						<li class="nav-item active dropdown">
							
					</ul>
				</div>
			</div>
		</nav>
	</header>
<form method="POST" action="">
        <div class="cont-pm">
        <span class="lem-cont">Register</span> <br>
            <input type="text" placeholder="Enter your name" name="name" required> <br>
            <input type="text" placeholder="Enter your last name" name="lastname" required> <br>
            <input type="text" placeholder="Enter your adress" name="address" required> <br>
            <input tupe="text" placeholder="Enter your phone number" name="phone" required> <br>
            <input type="text" placeholder="Enter your mail" name="mail" required> <br>
            <input type="password" placeholder="Enter your password" name="psw" required> <br>
         
           
            <button type="submit" class="conn" name="conne" >Inscription</button> 
			<span> <?php echo $emailError;?></span>
			<span> <?php echo $errore;?></span>
        
      
          <label class="up"> 
          Avez-vous déja un compte ? <a href="login.php" > Connexion </a> 
          </label>
    
        </div>
    

    </form>

</body>
</html>