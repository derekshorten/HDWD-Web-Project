<?php
// input

require("database/connect_db.php");
include("database/require.php");
include("database/query.php");
$first_name = $_POST['first_name'];
 $last_name = $_POST['last_name'];
 $email=$_POST['email'];

 $country =$_POST['country'];
 $password =$_POST['password'];



$sql = "INSERT INTO users 
						(first_name,last_name,email, mobile_number,country, password);
		VALUES ('$first_name','$last_name','$email', 
		        ,'$country', '$password')";
				
			
	$result = $conn->query($sql);
		 if ($result->num_rows == 0) {
	header('Location: usersdisplay.php');
	
		 }

	else if ($result->num_rows == 1) {
	$row = $result->fetch_assoc();
	$_SESSION['userid'] = $row['id'];
	header('Location: index.php');
	

}

{
	
	header('Location: usersdisplay.php');
}

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);	
	

}

   ?>