
<html>
<head>This page will contain  the chat</head>
<link href="Style/style.css"type="text/css"rel="stylesheet" />
<?php

include ('Include\header.php');
include ('Include\nav.php');


?>

<body>

<?php
echo 'chat'
?>


<form class="chat">
<fieldset class="chat">


    <textarea type="message"></textarea>

 <button type="button" id="save">chat</button>

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