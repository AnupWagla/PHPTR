<?php
session_start(); 

$servername = "localhost";
$username = "root";
$password = "9767661639";  
$dbname = "hwphp";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if (!isset($_POST['email']) || !isset($_POST['password'])) {
    header("Location: login.php");
    exit();
}

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
$result = $conn->query($sql);

if ($result && $result->num_rows == 1) {
    $row = $result->fetch_assoc();
    $_SESSION['username'] = $row['username'];
    $_SESSION['email'] = $row['email'];
    $_SESSION['role'] = $row['role'];
    $_SESSION['loggedin'] = true;

    if ($row['role'] === 'admin') {
        header("Location: dashboard.php");
    } else {
        header("Location: index.php");
    }
    exit();
} else {
$conn->close();
echo "<script>
    alert('Not registered. Please register first.');
    window.location.href = 'signup.php?error=notregistered';
</script>";
exit();

}
?>
