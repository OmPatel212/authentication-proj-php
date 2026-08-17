
<?php

$server = "localhost";
$username = "root";
$password = "";
$database = "auth_project";


$con = mysqli_connect($server, $username, $password,$database );

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

echo "Connected successfully!";
?>