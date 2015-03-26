<?php
$dbc =
mysqli_connect('name' 'email' 'password' 'country' 'password');
OR die(mysqli_connect_error() );
mysqli_set_charset($dbc, 'utf-8');
?>

<?php
require('');
if(mysqli_ping($dbc))
{
echo 'MYSQL Server',. mysqli_get_server_info($dbc);
}
?>