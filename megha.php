<!Doctype html>
<html>
<head><title>enter the string</title></head>
<body>
<form action = " " method = "POST">
<textarea rows="8" column="50" name = "text">
</textarea>
<input type="submit" name="submit" value="submit" >
</form>
<?php
if($_POST)
{
    $val=$_POST['val']; 
    $array=explode(' ',$val);
    print_r($array);
    $c=array_count_values($array);
    $max=0;
    $key=' ';
    foreach($array as $keys=>$values)
    {
    if($values>$max)

    {
        $max=$values;
        $key=$keys;
    }
    }
    for($i=0;$i<$max;$i++)
    {
        echo $key;
        echo " ";
    }
}
?>
</body>
</html>