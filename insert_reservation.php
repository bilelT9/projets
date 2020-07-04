<?php

if ( empty($_POST['email']) || empty($_POST['name']) || empty($_POST['phone']) || empty($_POST['date']) || empty($_POST['time']) || empty($_POST['person'])) {
	$errore = "one colomn is empty";
}
else{
$useremail= $_POST["email"];
$username= $_POST["name"];
$userphone= $_POST["phone"];
$userdate= $_POST["date"];
$usertime= $_POST["time"];
$userperson= $_POST["person"];
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysqli_connect("localhost","root","");
// To protect MySQL injection for Security purpose
$useremail = stripslashes($useremail);

$useremail=mysqli_real_escape_string ($connection , $useremail );

// Selecting Database
$db = mysqli_select_db($connection , "restaurant")
or die("Pas de connexion");
// SQL query to fetch information of registerd users and finds user match.

 $sql = "insert into resevation(name,email ,number, date, time ,nb_personne) values('$username','$useremail',$userphone,'$userdate','$usertime',$userperson)";
    if(mysqli_query($connection, $sql)){ 
       
      $errore= "félicitation votre reservation a été confirmé  ";
      
        /*header("location:mon_espace.php");*/
    } else {
        $errore= 'reservation invalid' .mysqli_error($connection);
    }
mysqli_close($connection); // Closing Connection
}



?>