<?php
session_start();
$user=$_SESSION['name'];
$rate=$_POST['rating'];
$item=$_POST['item'];
$data=$user.",".$rate.",".$item;


$file="C:/Users/Ayanabha/edumat.csv";


file_put_contents($file, $data . PHP_EOL, FILE_APPEND);
print "<h1 align=center>Thank you for submitting your opinion!</h1>";


?>
<html>
<head>
<title>ThankYou Page</title>   
</head>
<body>
<h1><a href="main.php">GO BACK</a> </h1>  
    
</body>




</html>