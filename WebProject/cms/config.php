<?php
$server="localhost";
$username="root";
$pass="root";
$mydb="cms";
 // Create connection
 $con=mysqli_connect($server,$username,$pass,$mydb);
 
 // Check connection
 if (mysqli_connect_errno())
   {
     echo "Failed to connect to MySQL: " . mysqli_connect_error();
   }
 //change character set to utf8 
 mysqli_set_charset($con, "utf8");

 ?>
