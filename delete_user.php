<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['role'] !== 'admin') {
    header("Location: index.php");
    exit();
}

if (isset($_GET['id'])) {
    $id = intval($_GET['id']); 

    $conn = new mysqli("localhost", "root", "9767661639", "hwphp");

    if ($conn->connect_error) {
        die("DB Error: " . $conn->connect_error);
    }

    $stmt = $conn->prepare("DELETE FROM users WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();

    $stmt->close();
    $conn->close();
}

header("Location: logged.php");
exit();
