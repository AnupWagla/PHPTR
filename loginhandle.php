<?php

$servername = "localhost";
$username = "root";
$password = "9767661639";  
$dbname = "hwphp";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$email = $_POST['email'];
$password = $_POST['password'];
$sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
 
    header("Location: dashboard.php");
    exit();
} else {
 
    echo "Invalid email or password.";
}

$conn->close();
?>
