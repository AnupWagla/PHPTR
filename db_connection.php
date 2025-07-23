<?php
$servername = "localhost"; 
$username = "root"; 
$password = "9767661639"; 
$dbname = "hwphp"; 


$conn = mysqli_connect("localhost", "root", "", "hwphp");

if ($conn === false) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully!";
?>
