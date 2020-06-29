<html>
<body>
<form action="" method="POST">
<input type="text" name="course" Placeholder="Enter Specialization name"><br>
<input type="text" name="name" Placeholder="Enter your name">
<h3>Mess:</h3><br>
<input type="radio" name="mess" value="yes">Yes<br>
<input type="radio" name="mess" value="no">No<br>
<h3>Hostel fee</h3><br>
<input type="radio" name="fees" value="yes">Yes<br>
<input type="radio" name="fees" value="yes">Yes<br>
<input type="submit" name="sbt">
</body>
</html>
<?php
$course = $_POST['course'];
$mess = $_POST['mess'];
$fees = $_POST['fees'];
$fee = 25000+500+10000;
if(isset($_POST['sbt']))
{
if($course==OGI)
{
$fee=169999;
}
else if($course=="CCVT")
{
$fee=169999;
}
else if($course=="CSF")
{
$fee=139999;
}
else if($course=="ENG")
{
$fee=12999;
}
if($mess="yes")
{
$fee=$fee+25000;
}
if($hostel="yes")
{
$fee=$fee+100000;
}
echo "<br><b>Fees:</b>".$fee;
}
?>
//Table Creation
<?php
//mking connection(procedurl)
$conn=mysqli_connect("localhost","root","  ","ogi");
if(!$conn)
{
print("Not connected");
}
else
{
print("connected");
}
$r = mysqli_query($conn,"create table ILcenter(course varchar(20),mess varchar(20),hostel varchar(20),fees integer)");
?>

//Data Insertion
<?php
include("spacec.php");
$conn=mysqli_connect("localhost","root"," ","ogi");
if(!$conn)
{
print("Not connected");
}
else
{
print("connected");
}
if(isset($_POST['sbt']))
{
$r = mysqli_query($conn,"Insert into ilcenter values('$course','$mess','$fees',$fee);");
}
?>
