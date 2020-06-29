<!DOCTYPE html>
<html>
<head>
<title>Associative Array</title>
</head>
<body>
<h2>ASSOCIATIVE ARRAY</h2>
<?php
$arr = array(
    "Rahul" => array("age"=>30, "salary" => 3000, "city" => "Delhi"),
    "Sonam" => array("age"=>33, "salary" => 3100, "city" => "Mumbai"),
    "Shivam" => array("age"=>31, "salary" => 3200, "city" => "Delhi")
    
   
);
foreach ($arr as $keys => $values)
{
    foreach($values as $key => $data)
    {
        echo $keys." ". $key." ". $data. " ";
        echo"<br>";
    }
}
//echo $arr['Ram']['age']['salary']['city']."<br>";
//echo $arr['qadir']['age']['salary']['city']."<br>";
//echo $arr['zara']['age']['salary']['city']."<br>";
//print('Ram');

?>
</body>
</html>
