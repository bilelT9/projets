<?php
if ( empty($_POST['name']) || empty($_POST['lastname'])||empty($_POST['address']) || empty($_POST['phone']) || empty($_POST['mail']) || empty($_POST['psw'])) {
	
}
else{
    $name= $_POST["name"];
	$lastname= $_POST["lastname"];
	$address= $_POST["address"];
	$phone= $_POST["phone"];
    $mail= $_POST["mail"];
    $psw=$_POST["psw"];
    $connection = mysqli_connect("localhost","root","");

    $name = stripslashes($name);
	$lastname = stripslashes($lastname);
	$address = stripslashes($address);
    $mail = stripslashes($mail);
    $phone = stripslashes($phone);
    $psw= stripslashes($psw);

	$name = mysqli_real_escape_string ($connection , $name);
	$address = mysqli_real_escape_string ($connection , $address);
    $lastname = mysqli_real_escape_string ($connection , $lastname);
    $mail = mysqli_real_escape_string ($connection , $mail);
    $psw = mysqli_real_escape_string ($connection , $psw);
    $phone = mysqli_real_escape_string ($connection , $phone);
    $db = mysqli_select_db($connection , "restaurant")
    or die("Pas de connexion");

if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {//Filters a variable with a specified filter, Keep in mind that FILTER_VALIDATE_EMAIL will validate the email address according to standards.
$emailError = "Invalid email format </br>";
}
else{
    $query = mysqli_query($connection , "select mail from register where mail='$mail'");
    $rows = mysqli_num_rows($query);
    if ($rows == 1) 
        $errore="mail Already exists </br>";
    else{
        $sql = "INSERT INTO register (name, lastname, address, phone, mail ,psw)
    VALUES ( '$name', '$lastname' , '$address' , '$phone', '$mail' ,'$psw')";
    if(mysqli_query($connection, $sql)){ 
       
       $errore="Sing up valid </br>";
      
        /*header("location:mon_espace.php");*/
    } else {
        $errore="Sing up invalid </br>" .mysqli_error($connection);
    }
    }
}
	function test_input($data) {
$data = trim($data); //The trim() function is used to remove the white spaces and other predefined characters from the left and right sides of a string
$data = stripslashes($data); //stripslashes() function removes backslashes added by the addslashes() function
$data = htmlspecialchars($data); //htmlspecialchars() function converts some predefined characters to HTML entities.
return $data;
}
    mysqli_close($connection);
    }
    ?>