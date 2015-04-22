
<html>
<head>This page will contain  the chat</head>
<link href="Style/style.css"type="text/css"rel="stylesheet" />
<?php

include ('Include\header.php');
include ('Include\nav.php');


?>

<body>


<form class="chat">
<fieldset class="chat">

<textarea name="chat" cols="20" rows="2"> </textarea>
<input type ="SUBMIT" value="SEND"/>
</fieldset>
</form>

<?php
//Below is  a photo viewer 
?>

<?php

include ('photo-viewer.html');
?>


</body>

<?php
include ('Include\footer.php');
?>