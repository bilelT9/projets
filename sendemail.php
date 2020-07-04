<?php
if ( empty($_POST['name']) || empty($_POST['email'])||empty($_POST['subject']) || empty($_POST['msg'])) {	
}
else{
    $name= $_POST["name"];
	$email= $_POST["email"];
	$subject= $_POST["subject"];
	$msg= $_POST["msg"];
  
    $connection = mysqli_connect("localhost","root","");

    $name = stripslashes($name);
	$email = stripslashes($email);
	$subject = stripslashes($subject);
    $msg = stripslashes($msg);
    

	$name = mysqli_real_escape_string ($connection , $name);
	$email = mysqli_real_escape_string ($connection , $email);
    $subject = mysqli_real_escape_string ($connection , $subject);
    $msg = mysqli_real_escape_string ($connection , $msg);
    
    $db = mysqli_select_db($connection , "restaurant")
    or die("Pas de connexion");
    
    $query = mysqli_query($connection , "select email from contact where email='$email'");
    $rows = mysqli_num_rows($query);
    if ($rows == 1) 
        $errore="email Already exists";
    else{
        $sql = "INSERT INTO contact (name, email, subject, msg)
    VALUES ( '$name', '$email' , '$subject' , '$msg')";
    if(mysqli_query($connection, $sql)){ 
       
      $valid= "insertion valid ";
      
        /*header("location:mon_espace.php");*/
    } else {
        echo 'error' .mysqli_error($connection);
    }
    }
    mysqli_close($connection);
    }
    ?>