<?php
?>
<html>
<head>Social Messenger - Index Page </head>
<link href="Style/style.css"type="text/css"rel="stylesheet" />
<?php

include ('Include\header.php');
include ('Include\nav.php');
?>

<body>



<form class="login">
<fieldset class="login">
<legend>
LOGIN
</legend>
<P>EMAIL:</p>   
<p>
<input type="text" name ="email" size="20" maxlength ="10" />
</P>
<P>PASSWORD: </p>   
<p>  
<input type="password" name ="password" size="20" maxlength ="10" />
</P>
<input type ="submit" name="login" value="LOGIN"/>


</fieldset>
</form>

<form class="sign_up">
<fieldset  >
<legend>
SIGN UP
</legend>
<P>FIRST NAME</p>   
<p>
<input type="Name" name ="First_Name" size="20" maxlength ="10" />
</P>
<P>LAST NAME</p>   
<p>
<input type="Name" name ="last_Name" size="20" maxlength ="10" />
</P>
<P>EMAIL:</p>   
<p>
<input type="text" name ="email" size="20" maxlength ="10" />
</P>
<P>MOBILE NUMBER:</p>   
<p>
<input type="telephone" name="telephone">
</P>
<p>COUNTRY</P>
<p>

<input name ="country" size="20" maxlength ="10" >

</select>
</P>
<P>PASSWORD:</p>   
<p>
<input type="password" name ="password" size="20" maxlength ="10" />
</P>
<P>CONFORM PASSWORD:</p>   
<p>
<input type="password" name ="password" size="20" maxlength ="10" />
</P>
<input type ="submit" name="submit" value="SIGN UP"/>
</fieldset>
</form>




<?php

include ('Include\footer.php');
?>