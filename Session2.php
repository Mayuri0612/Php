<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>
<h1>Login</h1>
<form action="" method="post">
<fieldset>
<legend><b>Login</b></legend>
Username:
<input type="text" name="uname" placeholder="Username" required><br><br>
Password:
<input type="password" name="passw" required><br>
</fieldset>
<input type="submit" value="Submit">
<?php
if(isset($_POST["uname"])&&isset($_POST["passw"]))
{
	if((isset($_SESSION["user"]))&&(isset($_SESSION["pasw"])))
	{
		if(($_SESSION["pasw"]==$_POST["passw"])&&($_SESSION["user"]==$_POST["uname"]))
		{
			echo "<br><br><b>Welcome to the Page</b>";
		}
		else 
		{
		    echo "<br><br><b>Incorrect User-Name or Password !!</b>";
		}
	}
}
?>
</form>
</body>
</html>
<?php 
session_destroy();
?>