<?php
// input
$email = $_REQUEST['email'];
$password = $_REQUEST['password'];



// perform login test
$sql = 'SELECT * FROM users 
		WHERE email = "'.$email.'"
		AND password =  "'.$password.'"';

$result = $conn->query($sql);

// act on the results
// > no account found
 {
	header('Location: login.php');
}if ($result->num_rows == 0)

// > login successful
elseif ($result->num_rows == 1) {
	$row = $result->fetch_assoc();
	$_SESSION['userid'] = $row['id'];
	header('Location: usersdisplay.php');
}
$sqlUpdate = "UPDATE `users` SET `activated` = 1 WHERE `id` = ".$id;
$activate = mysql_query($sqlUpdate); 
// > error multiple accounts with the same login details
else {
	header('Location: error.php');
}


