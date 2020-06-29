<!doctype html>
<html>
<head>
<style>
.error {
color: #FF0000;
}
</style>
</head>
<body>

//vlidtion

<?php
$nameErr = $descErr = $quantityErr =  $priceErr = "";
$name = $description = $quantity = $price = "";

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    if (empty($_POST["name"]))
    {
        $nameErr = "Name is required";
    } 
    else 
    {
        $name = $_POST["name"];
    }
    
    if (empty($_POST["description"])) 
    {
        $descErr = "Description is required";
    } 
    else 
    {
        $description = $_POST["description"];
    }
    if (empty($_POST["quantity"])) 
    {
        $quantityErr = "Numeric quantity is required";
    } 
    else 
    {
        $quantity = $_POST["quantity"];
    }
    if (empty($_POST["price"]))
    {
        $priceErr = "Numeric price is required";
    } 
    else 
    {
        $price = $_POST["price"];
    }
}
?>

<h2>Product Master </h2>
<p><span class="error">* required field</span></p>

<form  method = "POST" action="upload.php" enctype="multipart/form-data">
Product Name :  <input type="text" name="name" value="" required>
<span class="error">* <?php echo $nameErr;?></span>
<br><br>
product description: <input type="text" name="description" value="" required>
<span class="error">* <?php echo  $descErr;?></span>
<br><br>
Quantity:  <input type="number" name="quantity" value="" required>
<span class="error">* <?php echo $quantityErr;?></span>
<br><br>
Price:   <input type="number" name="price" value="" required>
<span class="error">* <?php echo $priceErr;?></span>
<br><br>
Product image:  <input type="file" name="fileToUpload"><br><br>
<input type="submit" name="submit" value="submit" >
<input type="button" value="Cancel" onClick="this.form.reset()">
</form>
</body>
</html>
