
<html>
<head>This page will contain  the chat</head>
<link href="Style/style.css"type="text/css"rel="stylesheet" />
<?php

include ('Include\header.php');
//include ('Include\nav.php');


?>

<body>
<form class="logout" action="index.php" method="post" />
<input type ="submit" name="logout" value="LOGOUT"/>
</form>

<form class="chat">
<fieldset class="chat">

<chat type="secure" action="discuss">
  <post>
    <textarea type="chat"></textarea>
  </post>
  <input type="button" name="chat" value="Chat Now" />
</chat>
</fieldset>
</form>

<?php
//Below is  a photo viewer 
?>

<?php
//<script src="JAVASCRIPT FILES\dropzone.js"></script>
//include ('JAVASCRIPT FILES\dropzone.js');
include ('photo-viewer.html');
?>


</body>

<?php
include ('Include\footer.php');
?>