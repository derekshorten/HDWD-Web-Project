<html>
<head>Social Messenger - Index Page </head>
<link href="Style/style.css"type="text/css"rel="stylesheet" />
<?php

include ('Include\header.php');
include ('Include\nav.php');
?>

<body>


<column1of2>
<form>
<fieldset>
<legend>
Login
</legend>
<P>Email:</p>   
<p>
<input type="text" name ="email" size="20" maxlength ="10" />
</P>
<P>Password: </p>   
<p>  
<input type="password" name ="password" size="20" maxlength ="10" />
</P>
<input type ="submit" name="submit" value="SUBMIT"/>
</fieldset>
</form>
</column1of2>
<column2of2>
<form>
<fieldset  >
<legend>
Signup
</legend>
<P>Name</p>   
<p>
<input type="Name" name ="Name" size="20" maxlength ="10" />
</P>
<P>Email:</p>   
<p>
<input type="text" name ="email" size="20" maxlength ="10" />
</P>
<P>MOBILE NUMBER:</p>   
<p>
<input type="tel" name="usrtel">
</P>
<p>Country</P>
<p>

<input name ="country" size="20" maxlength ="10" >

</select>
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
</column2of2>
</body>


<?php
include ('Include\footer.php');
?>