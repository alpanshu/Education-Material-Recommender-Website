
<?php
$name=$_POST['name'];
$regno=$_POST['regno'];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mgt";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO Users (Registration,username)
VALUES ('$regno','$name')";

if (mysqli_query($conn, $sql)) {
    $url="main.php?name=".$name;
    header('Location:'.$url);
    exit();
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
