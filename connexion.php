<?php

$conn=mysqli_connect('localhost','root','','restaurant');

if(!$conn)
 {
     die('please check your connection'.mysqli_error($conn));
 }


 ?>