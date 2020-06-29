<!DOCTYPE html>
<html>
<head>
<title>test</title>
</head>
<body>
<form method = "POST">
<h3>ENTER THE TEXT</h3>
<textarea rows = "10" cols = "50" name = "text" id = "para1">
</textarea>
<br><br>
<input type = "submit" name = "submit" value = "submit">
</form>
<?php 
if($_POST)
{    
$text = $_POST['text'];

if (ctype_alpha($text)) 
{
    echo "$text consists of all letters. \n";
    echo '<br>';
}
else 
{
    echo "$text does not have all letters. \n";
    echo '<br>';
}
"<br>";
echo "number of words: ";
echo str_word_count($text);
echo '<br>';
$str =  str_replace(array('/\s+/','/','?','.','>','<',';',':','|','1','2','3','4','5','6','7','8','9','0','@','#','$','%','^','&') ,' ', $text);
echo $str;
echo '<br>';
echo strtolower($text);
$arr = explode(' ',$str);
//print_r(array_count_values($arr));
echo '<br>';
unset($arr[" "]);
$arr = array_filter($arr);
print_r($arr);
array_count_values($arr);
}

?>
</body>
</html>

