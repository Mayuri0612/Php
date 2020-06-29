<!DOCTYPE html>
<html>
<head>
<title>
largest and smallest
</title>
</head>
<body>
<form method="post">
	<input type="text" name="numbers"/>
	<button type="submit">Check</button>
</form>
<?php 
if($_POST)
{
    
    $numbers = $_POST['numbers'];
    $array = explode(',', $numbers);
    
function getMax($array)
{
    $n = count($array);
    $max = $array[0];
    for ($i = 1; $i < $n; $i++)
        if ($max < $array[$i])
            $max = $array[$i];
            return $max;
}

// Returns maximum in array
function getMin($array)
{
    $n = count($array);
    $min = $array[0];
    for ($i = 1; $i < $n; $i++)
        if ($min > $array[$i])
            $min = $array[$i];
            return $min;
}

// Driver code
//$array = array(1, 2, 3, 4, 5);
echo(getMax($array));
echo("\n");
echo(getMin($array));
}
?>
</body>
</html>