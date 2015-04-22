<html>
<head>users will be displayed on this page</head>
<link href="Style/style.css"type="text/css"rel="stylesheet" />
<?php

include ('Include\header.php');
include ('Include\nav.php');


?>

<body>

<table width ="400" cellpadding="10" cellspacing="5" border="2" bgcolor="#efefef">
<tr>
<th>First Name</th>
<th>Last Name</th>
<th>Email</th>
<th>Mobile</th>
<th>Country</th>
</body>

<?php

include ('Database\query.php');

include ('Database\users.sql');
include ('Include\footer.php');
?>