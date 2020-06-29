
<html>
<body>
    
    
    <form action="" method="post">
        <input type="text" name="string" />
        <input type="submit" />
    </form>
</body>
</html>
 
<?php 
 
    if($_POST)
    {
        //get the input value and convert string to lowercase
        $string = strtolower($_POST['string']);
        //all vowels in array
        $vowels = array('a','e','i','o','u');
        //find length of the string
        $len = strlen($string);
        $num = 0;
        
        //loop through each letter
        for($i=0; $i<$len; $i++){
            if(in_array($string[$i], $vowels))
            {
                $num++;
            }
        }
        
        //output
        echo "Number of vowels : <span style='color:green; font-weight:bold;'>". $num ."</span>";
    }
 
