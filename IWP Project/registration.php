<?php

session_start();


$con = mysqli_connect('localhost','root','','iwp');

$name = $_POST['user'];
$pass = $_POST['password'];

$s = " SELECT * FROM user WHERE Name = '$name'";
$result = mysqli_query($con,$s);
if(mysqli_num_rows($result)>0){
    header("Location: login.php");
}
else
{
    $reg=" insert into user(Name , Password) values ('$name' , '$pass')";
    if(mysqli_query($con,$reg))
    {
        $_SESSION['name']=$name;
        header("Location: main.php");
    }
}
mysqli_close($con);
?>