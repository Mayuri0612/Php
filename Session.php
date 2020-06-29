<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>
<h1>Registrtion</h1>
<form action="session2.php" method="post">
<fieldset>
<legend><b>Register yourself</b></legend>
Enter Your Username:
<input type="text" name="unamer" placeholder="Username" required><br><br>
Enter Your Password:
<input type="password" name="passr" required><br>
</fieldset>
<input type="submit" value="Submit">
<?php
if($_POST){
	if(!isset($_SESSION["pasw"])&&!isset($_SESSION["user"]))
	{
		$password=$_POST["passr"];
		$username=$_POST["unamer"];
		$_SESSION["pasw"]=$password;
		$_SESSION["user"]=$username;
	}
}
?>
</form>
</body>
</html>