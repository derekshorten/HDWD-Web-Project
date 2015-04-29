<html>
<head>users will be displayed on this page</head>
<link href="Style/style.css"type="text/css"rel="stylesheet" />
<?php

include ('include\header.php');
include ('include\nav.php');


?>

<body>

<?php
if(isset($_POST['submitted'])){ 
    
    	echo $_POST["first_name"];
        echo $_POST["last_name"];
    	echo  $_POST["mobile_number"];
    	echo  $_POST["email"];
		echo  $_POST["country"];
        
	}

?>

</body>

<?php
include ('include\footer.php');
?>