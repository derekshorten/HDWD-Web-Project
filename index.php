<html>
<head>Social Messenger - Index Page </head>
<?php

include ('Include\header.php');
include ('Include\nav.php');
?>

<body>
<div class="column10f2">
<form>
<fieldset>
<legend>
Login
</legend>
<P>Email:</p>   
<p>
<input type="email" name ="email" size="20" maxlength ="10" />
</P>
<P>Password: </p>   
<p>  
<input type="password" name ="password" size="20" maxlength ="10" />
</P>
<input type ="submit" name="submit" value="SUBMIT"/>
</fieldset>
</form>
<div class="column20f2">
<form>
<fieldset >
<legend>
Signup
</legend>
<P>Name</p>   
<p>
<input type="Name" name ="Name" size="20" maxlength ="10" />
</P>
<P>Email:</p>   
<p>
<input type="email" name ="email" size="20" maxlength ="10" />
</P>
<P>MOBILE NUMBER:</p>   
<p>
<input type="tel" name="usrtel">
</P>
<P>Password:</p>   
<p>
<input type="password" name ="password" size="20" maxlength ="10" />
</P>
<P>Conform Password:</p>   
<p>
<input type="password" name ="password" size="20" maxlength ="10" />
</P>
<input type ="submit" name="submit" value="SIGN UP"/>
</fieldset>
</form>
</body>


<?php
include ('Include\footer.php');
?>