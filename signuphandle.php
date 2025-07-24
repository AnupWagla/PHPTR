<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "9767661639";  
$dbname = "hwphp";

// Connect to MySQL
$conn = new mysqli($servername, $username, $password, $dbname);

// Check if connection failed
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form data exists
if (!isset($_POST['username'], $_POST['email'], $_POST['password'])) {
    die("Please fill out the form completely.");
}

// Collect form data
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

// Check if email already exists
$check = "SELECT * FROM users WHERE email='$email'";
$result = $conn->query($check);

if ($result->num_rows > 0) {
    echo "Email already registered. <a href='signup.php'>Try again</a>";
    exit();
}

// Insert into users table
$sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";

if ($conn->query($sql) === TRUE) {
    // Redirect to login page
    header("Location: login.php");
    exit();
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>
