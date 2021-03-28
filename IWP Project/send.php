<?php
$item=$_POST['recom'];
$myfile = fopen("C:/Users/Ayanabha/newfile.txt", "w") or die("Unable to open file!");
fwrite($myfile, $item);
fclose($myfile);
header("location:main.php");
?>