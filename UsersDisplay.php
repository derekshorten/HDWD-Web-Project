<html>
<head>users will be displayed on this page</head>
<link href="Style/style.css"type="text/css"rel="stylesheet" />
<?php
require("database/connect_db.php");
include ('include\header.php');
include ('include\nav.php');


?>
<?php
$sql = "SELECT * FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	echo '<table>';
    echo '<caption>users</caption>';
    echo '<thead>';
    echo '<tr>';
    echo '<th>first_name</th>';
    echo '<th>last_name</th>';
    echo '<th>email</th>';
    echo '<th>country</th>';
//echo '<th>&nbsp;</th>';
   // echo '<th>&nbsp;</th>';
    echo '</thead>';
    echo '<tbody>';
    while($row = $result->fetch_assoc()) {
    	echo '<tr>';
    	echo '<td>'.$row["first_name"].'</td>';
        echo '<td>'.$row["last_name"].'</td>';
    	echo '<td>'.$row["email"].'</td>';
    	echo '<td>'.$row["country"].'</td>';
    	
        //echo '<td><a href="contact.php?delete='.$row["id"].'">Delete</a></td>';
       // echo '<td><a href="contact.php?id='.$row["id"].'">Update</a></td>';
    	echo '</tr>';
    }
    echo '</tbody>';
    echo '</table>';
} else {
    echo "<h2>0 Results</h2>";
}
?>
<?php

include ('database\query.php');

include ('database\users.sql');
include ('include\footer.php');
?>