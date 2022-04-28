<!DOCTYPE html>
<html>
  
<head>
    <title>Insert Page page</title>
</head>
  
<body>
<?php 
$servername = "localhost";
$username = "myuser";
$password = "myuser12345";
$dbname = "customers";

// Create connection
$conn = mysqli_connect($servername, $username, $password ,  $dbname);

// Taking all 5 values from the form data(input)
        $customer_name =  $_REQUEST['name'];
        $customer_email = $_REQUEST['email'];
        $customer_msg =  $_REQUEST['msg'];
          
        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO review_card  VALUES ('$customer_name', 
            '$customer_email','$customer_msg')";
          
        if(mysqli_query($conn, $sql)){
            echo "<h3>data stored in a database successfully." 
                . " Please browse your localhost php my admin" 
                . " to view the updated data</h3>"; 

        } else{
            echo "ERROR: Hush! Sorry $sql. " 
                . mysqli_error($conn);
        }
          
        // Close connection
        mysqli_close($conn);
        ?>
    </center>
</body>
</html>



