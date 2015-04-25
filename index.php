<?php
?>
<html>
<head>Social Messenger - Index Page </head>
<link href="Style/style.css"type="text/css"rel="stylesheet" />
<?php

include ('include\header.php');
include ('include\nav.php');
?>

<body>



<form class="login" action="controller.php" method="post" />
 <input type="hidden" name="action" value="login"/>

<fieldset class="login" action="controller.php" method="post"/>
<legend>
LOGIN
</legend>
<P>EMAIL:</p>   
<p>
<input type="text" name ="email" size="20" maxlength ="20" />
</P>
<P>PASSWORD: </p>   
<p>  
<input type="password" name ="password" size="20" maxlength ="20" />
</P>
<input type ="submit" name="login" value="LOGIN"/>


</fieldset>
</form>

<form class="sign_up"action="controller.php" method="post" >
<input type="hidden" name="action" value="sign_up"/>

<fieldset class="sign_up" action="controller.php" method="post"/>
<legend>
SIGN UP
</legend>
<P>FIRST NAME</p>   
<p>
<input type="Name" name ="First_Name" size="20" maxlength ="20" />
</P>
<P>LAST NAME</p>   
<p>
<input type="Name" name ="last_Name" size="20" maxlength ="20" />
</P>
<P>EMAIL:</p>   
<p>
<input type="text" name ="email" size="20" maxlength ="20" />
</P>
<P>MOBILE NUMBER:</p>   
<p>
<input type="telephone" name="telephone">
</P>
<p>COUNTRY</P>
<p>

<input name ="country" size="20" maxlength ="20" >

</select>
</P>
<P>PASSWORD:</p>   
<p>
<input type="password" name ="password" size="20" maxlength ="20" />
</P>
<P>CONFORM PASSWORD:</p>   
<p>
<input type="password" name ="password" size="20" maxlength ="20" />
</P>
<input type ="submit" name="submit" value="SIGN UP"/>
</fieldset>
</form>




<?php

include ('include\footer.php');
?>