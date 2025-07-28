<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: login.php");
    exit();
}

// DB Connection
$servername = "localhost"; 
$username = "root"; 
$password = "9767661639"; 
$dbname = "hwphp";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Form Data
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// Insert Query
$sql = "INSERT INTO contacts (name, email, message, submitted_at) VALUES (?, ?, ?, NOW())";
$stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stmt, "sss", $name, $email, $message);

if (mysqli_stmt_execute($stmt)) {
    $_SESSION['success'] = "Message sent successfully!";
} else {
    $_SESSION['error'] = "Error: " . mysqli_error($conn);
}

mysqli_stmt_close($stmt);
mysqli_close($conn);

// Redirect to contact.php
header("Location: contact.php");
exit();
?>
