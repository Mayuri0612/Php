<?php
if(file_exists("students.txt")){
    $file=fopen("students.txt","r") or die("Unable to Open the File");
    $copyfile=fopen("copy.txt","w");
    function ret($file1,$file2){
        while(!feof($file1))
        {
            $a .= fgets($file1);
        }
        fwrite($file2,$a,strlen($a));
    }
    ret($file,$copyfile);
    fclose($file);
}
?>