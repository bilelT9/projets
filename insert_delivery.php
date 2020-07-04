<?php

if ( empty($_POST['email']) || empty($_POST['name']) || empty($_POST['phone']) || empty($_POST['adresse']) || empty($_POST['ordre']) || empty($_POST['qte'])) {
	$errore = "one colomn is empty";
}
else{
$useremail= $_POST["email"];
$username= $_POST["name"];
$userphone= $_POST["phone"];
$useradresse= $_POST["adresse"];
$userordre= $_POST["ordre"];
$userqte= $_POST["qte"];

// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysqli_connect("localhost","root","");
// To protect MySQL injection for Security purpose
$useremail = stripslashes($useremail);
$username = stripslashes($username);
$userphone = stripslashes($userphone);
$useradresse = stripslashes($useradresse);
$userordre = stripslashes($userordre);
$userqte = stripslashes($userqte);
$useremail=mysqli_real_escape_string ($connection , $useremail );
$username=mysqli_real_escape_string ($connection , $username );
$userphone=mysqli_real_escape_string ($connection , $userphone );
$useradresse=mysqli_real_escape_string ($connection , $useradresse );
$userordre=mysqli_real_escape_string ($connection , $userordre );
$userqte=mysqli_real_escape_string ($connection , $userqte );


// Selecting Database
$db = mysqli_select_db($connection , "restaurant")
or die("Pas de connexion");
// SQL query to fetch information of registerd users and finds user match.

 $sql = "insert into delivery(name,email,adresse ,number,ordre,qte) values('$username','$useremail','$useradresse',$userphone,'$userordre',$userqte)";
    if(mysqli_query($connection, $sql)){ 
       
      $errore= "your order is being processed!  ";
      
        /*header("location:mon_espace.php");*/
    } else {
        $errore= 'your order has been canceled' .mysqli_error($connection);
    }
mysqli_close($connection); // Closing Connection
}



?>