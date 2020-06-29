<!DOCTYPE html>
<html>
<body>
    
    
<form action="" method="post">
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
        $arr=explode(' ',$text);
        print_r($arr);
        $count = array_count_values($arr);
        $max = 0; $key = ' ';
        foreach($count as $k=>$v)
        {
            if($v>$max)
            {
                $max = $v;
                $key = $k;
            }
        }
        echo "<br><br>";
        for($i=1; $i<=$max;$i++)
        {
        echo $key;
        echo " ";
        }
    }
   
?>
</body>
</html>