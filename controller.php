<?php
$name = "your_name";
$email = "email";
$mobile = "mobile_number";
$country "country";
$password = "password";
$hostname = "localhost"; 

//$dbhandle = mysql_connect($hostname, $name, $email, $mobile, $country, $password)
//or die("Unable to connect to MySQL");
//echo "Connected to MySQL<br>";
?>
<?php
//select a database to work with
//$selected = mysql_select_db("messaging",$dbhandle)
  //or die("Could not select messaging");
?>


<?php
require('xampp/htdocs/HDWD-Web-Project/Database/database.sql');
if (mysqli_ping($dbc))
{
echo 'MySQL Server'. mysqli_get_server_info($dbc).
					  'on'.mysqli_get_hostinfo($dbc);
					 
}
//
?>