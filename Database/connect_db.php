<?php
require('xampp/htdocs/HDWD-Web-Project/Database/connect_db.php');
if (mysqli_ping($dbc))
{
echo 'MySQL Server'. mysqli_get_server_info($dbc).
					  'on'.mysqli_get_hostinfo($dbc);
					 
}
//
?>