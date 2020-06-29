<!DOCTYPE html>
<html>
<head>
<title>Callbyvalue</title>
</head>
<body>
<form action = ""  method = "POST">
a: <input type = "number" name = "num1"><br>
b: <input type = "number" name = "num2"><br>
<input type = "submit" name = "swap">
</form>
<?php 
if($_POST)
{
    $x = $_POST["num1"];
    $y = $_POST["num2"];
    echo "Before swapping x:".$x;
    echo "\ny:".$y;
    echo "<br>";
    
    function swapped(int &$a,int &$b)
    {
        $t = $a;
        $a = $b;
        $b = $t;
        echo "after swapping x:".$a;
        echo "\ny=" .$b;
    }
    swapped($x,$y);
}
?>
</body>
</html>

