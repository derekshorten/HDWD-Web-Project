<html>
<head>users will be displayed on this page</head>
<link href="Style/style.css"type="text/css"rel="stylesheet" />
<?php
//include ('database\query.php');
include ('include\header.php');
//include ('include\nav.php');


?>
<form class="logout" action="index.php" method="post" />
<input type ="submit" name="logout" value="LOGOUT"/>
</form>
<?php





require("database\connect_db.php");
$sql = "SELECT * FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	echo '<table border ="2" width = "400" cellpadding ="20" cellspacing= "10" bgcolor="#efefef">';
    echo '<caption>users</caption>';
    echo '<thead>';
    echo '<tr>';
    echo '<th>first_name</th>';
    echo '<th>last_name</th>';
    echo '<th>email</th>';
    echo '<th>country</th>';
	
   // echo '<th>&nbsp;</th>';
    echo '</thead>';
    echo '<tbody>';
    while($row = $result->fetch_assoc()) {
    	echo '<tr>';
    	echo '<td>'.$row["first_name"].'</td>';
        echo '<td>'.$row["last_name"].'</td>';
    	echo '<td>'.$row["email"].'</td>';
    	echo '<td>'.$row["country"].'</td>';
    	echo   '<th><a href="page1.php">chat<a/></br></th>';
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




include ('include\footer.php');
?>