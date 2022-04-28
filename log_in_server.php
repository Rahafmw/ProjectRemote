<?php

$server="localhost";
$username="root";
$password="";
$database_name="cs381project";

$conn = mysqli_connect($server, $username, $password, $database_name);
 //check conncetion
 if(! $conn )
   {
     die('Could not connect: ' . mysql_error());
   }

$errors = array();

if (isset($_POST['login_button'])) {
  $username = mysqli_real_escape_string($conn, $_POST['username']);
  $password = mysqli_real_escape_string($conn, $_POST['password']);

  if (count($errors) == 0) {

  	$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
  	$results = mysqli_query($conn, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  header('location:home.php');
  	}else {
  		array_push($errors, "Wrong username/password combination");
          echo '<script language="javascript">';
            echo 'alert("Wrong username or password combination")';
            echo '</script>';
  	}
  }
}
?>