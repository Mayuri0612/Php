<?php 
if(isset($_POST['submit']))
{
    $name = $_POST['name'];
    $description = $_POST['description'];
    $quantity = $_POST['quantity'];
    if(!empty($name) && !empty($description) && !empty($quantity))
    {
        $msg = $name . ' : ' . $description.':'.$quantity ;
        $fp = fopen("product.txt", "a+") or die ("can't open file");
        fwrite($fp, $msg."\n");
        echo "<br>";
        fclose($fp);
    }
    
    $file = $_FILES['file'];
    $fileName = $_FILES['fileToUpload']['name'];
    $fileTmpName = $_FILES['fileToUpload']['tmp_name'];
    $fileSize = $_FILES['fileToUpload']['size'];
    $fileError = $_FILES['fileToUpload']['error'];
    $fileType = $_FILES['fileToUpload']['type'];
    
    $fileExt = explode('.',$fileName);
    $fileActualExt = strtolower(end($fileExt));
    $allowed = array('jpg','jpeg','png','txt','pdf','doc');
    if(in_array($fileActualExt,$allowed))
    {
        if($fileError === 0)
        {
            if($fileSize < 1000000)
            {
                $fileNew = uniqid('',true).".".$fileActualExt;
                $fileDest = 'uploads/'. $fileNew;
                move_uploaded_file($fileTmpName, $fileDest);
                header("Location: one.php?uploadsuccess");
                echo "success!!!";
            }else{
                echo "File too big";
                echo '<br>';
            }
        }
        else{
            echo "There is Error..";
            echo '<br>';
        }
    }
    else{
        echo "you cannot upload the file";
        echo '<br>';
    }
}
?>

<?php 

$ProductName = $_POST['name'];
$ProductDescription = $_POST['description'];
$ProductQuantity = $_POST['quantity'];
$ProductPrice = $_POST['price'];
if(!empty($ProductName) || !empty($ProductDescription) || !empty($ProductQuantity) || !empty($ProductPrice)) 
{
    $host = "localhost";
    $dbUserName = "root";
    $dbPassword = " ";
    $dbName = "Product";
    //mking connection (oop)
    $conn = new mysqli($host,$dbUserName, $dbPassword,$dbName);
    
    if($conn->connect_error)
    {
        die("connection failed:".$conn->connect_error);
    }
    else
    {
       //database work
        $sql="INSERT INTO producttable (name, description, quantity, price) 
           VALUES ('".$ProductName."','".$ProductDescription."', '".$ProductQuantity."', '".$ProductPrice."')";
        if (!mysqli_query($conn,$sql))
        {
            die('Error: ' . mysqli_error($conn));
        }
        else
        {
            echo "1 record added";
        }
        
        
    }
}
else
{
    echo "All fields are required!";
    die();
}

?>

