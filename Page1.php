
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


<form class="chat"action="controller.php"  method ="POST">
<input type="hidden" name="action" value="chat" method ="POST"/>
<fieldset class="chat" method = "post"  >



    <textarea type="chat" id = "chat" rows ="5" cols="30"></textarea>
 <span id="chatcount" class="hide"></span>
 <script src ="javascript_files/utilities.js"></script>
 <script src ="javascript_files/chatarea-counter.js"></script>
 
  <input type="button" name="chat" value="SEND"  method ="POST" />

</fieldset>
</form>


<?php
 

//Below is  a photo viewer 
?>

<?php
//var Dropzone = require("dropzone");
require("javascript_files/dropzone");
?>
<script src="./javascript_files/dropzone.js"></script>

<form action="/file-upload">
      class="dropzone"
      id="my-awesome-dropzone"></form>
<input type="file" name="file" />
</body>

<?php
include ('Include\footer.php');
?>