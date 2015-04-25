<html>
<head>users will be displayed on this page</head>
<link href="Style/style.css"type="text/css"rel="stylesheet" />
<?php

include ('include\header.php');
include ('include\nav.php');


?>

<body>

<?php
session_start();
var_dump($_SESSION);
?>

<table width ="400" cellpadding="10" cellspacing="5" border="2" bgcolor="#efefef">
<tr>
<th>First Name</th>
<th>Last Name</th>
<th>Email</th>
<th>Mobile</th>
<th>Country</th>
</body>

<?php

include ('database\query.php');

include ('database\users.sql');
include ('include\footer.php');
?>