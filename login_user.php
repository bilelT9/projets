<?php
session_start(); // Starting Session
$error=''; // Variable To Store Error Message
if (isset($_POST['connect'])) {
if (empty($_POST['mail']) || empty($_POST['psw'])) {
$error = "mail or psw is invalid";
}
else
{
// Define $username and $password
$mail=$_POST['mail'];
$psw=$_POST['psw'];
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysqli_connect("localhost", "root", "","restaurant");
// To protect MySQL injection for Security purpose
$mail = stripslashes($mail);
$psw = stripslashes($psw);
$mail = mysqli_real_escape_string($connection,$mail);
$psw = mysqli_real_escape_string($connection,$psw);
// Selecting Database
// SQL query to fetch information of registerd users and finds user match.
$query = mysqli_query($connection,"SELECT * FROM register where mail='$mail' AND psw='$psw'");
$rows = mysqli_num_rows($query);
if ($rows == 1) {
$_SESSION['user']=$mail; // Initializing Session
header("location: order_online1.php"); // Redirecting To Other Page
} else {
$error = "mail or password is incorrect";
}
mysqli_close($connection); // Closing Connection
}
}
?>
