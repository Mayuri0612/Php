<!doctype html>
<html>
<body>
<form method="post" action="">
<textarea name="text" cols="60" rows="10">
</textarea><br/>
<input type="submit" class="button" value="submit" />
</form>
</body>
</html>
<?php
//$img = "no image";
if (isset($_POST['text']))
{
    $content = file_get_contents($_POST['text']);
    $img_path = 'C:\xampp\htdocs\Files';
    file_put_contents( "subfolder/imge3.jpg",$content);
    //$img = "<img src=\"".$img_path."\"/>";
}
//echo $img;
?>
