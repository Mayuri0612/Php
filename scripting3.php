<html>
<head>
<title>names</title>
</head>
<body>
<form action = ""  method = "POST">
full name: <input type = "text" name = "name"><br>
<input type="submit" value="Submit" type="submit"><br>
</form>
<?php 
if($_POST)
{
    $fullname = $_POST["name"];
    echo strtoupper($fullname);
}
?>

</body>
</html>
