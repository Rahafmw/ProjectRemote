<?php
 
$servername = "localhost";
$username = "myuser";
$password = "myuser12345";
$dbname = "customers";

 //create connection
 $conn = mysqli_connect($servername, $username, $password ,  $dbname);

 //check conncetion
 if(! $conn )
   {
     die('Could not connect: ' . mysql_error());
   }

?>

