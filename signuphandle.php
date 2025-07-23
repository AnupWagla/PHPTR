<?php

if($_SERVER['REQUEST_METHOD'] != 'POST'){
    header('Location: login.php');
    exit();
}


$user_email = $_POST['email'];
$user_password = $_POST['password'];

 
$conn = mysqli_connect("localhost", "root", "", "hwphp", "3306");

if($conn == false){
    echo "Connection Failed";
} else {
    echo "Connection Successful";
}

$query = "SELECT * FROM user WHERE email=? AND password=?";//INSERT INTO `user` (`id`, `email`, `password`, `full_name`, `created_at`) VALUES ('1', 'abc@gmail.com', 'abcde', 'Anup Wagle', current_timestamp());
$mysql_stmt =  mysqli_prepare($conn,  $query);
mysqli_stmt_bind_param($mysql_stmt,'ss', $user_email, $user_password);
mysqli_stmt_execute($mysql_stmt);
$mysql_result=  mysqli_stmt_get_result($mysql_stmt);
$data =  mysqli_fetch_assoc($mysql_result);



if($data) {

    session_start();
    $_SESSION['is_loggedin'] = true;
    header("Location: dashboard.php");
} else {
    header("Location: login.php?error=email or password incorrect");
}