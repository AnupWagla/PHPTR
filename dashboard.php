<?php
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true || $_SESSION['role'] !== 'admin') {
    header("Location: index.php");
    exit();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - PHP Project</title>
    <link rel="stylesheet" href="./src/output.css">
</head>
<body class="bg-gray-300">

    <div class="flex h-screen">
        <div class="h-full w-60 p-5 bg-gray-700">
            <a href="index.php" class="flex justify-center mb-4">
                <img class="h-10 rounded-full" src="./images/logo.png" alt="Logo">
            </a>
            <h1 class="text-white font-bold text-xl mb-6 text-center">Menu</h1>
            <ul class="flex flex-col gap-6">
                <li>
                    <a href="dashboard.php"
                        class="text-white hover:text-black hover:bg-amber-400 hover:rounded-full p-2 transition-all duration-300 block text-center">
                        Dashboard
                    </a>
                </li>
    
                <li>
                    <a href="logout.php"
                        class="text-white hover:text-black hover:bg-red-400 hover:rounded-full p-2 transition-all duration-300 block text-center">
                        Logout
                    </a>
                </li>
            </ul>
        </div>
        
        <div class="flex-1 p-10 text-center">
            <h1 class="text-3xl font-bold text-amber-500 mb-4">Welcome Back, Admin!</h1>
            <p class="text-xl text-gray-800">Logged in as <strong><?php echo htmlspecialchars($_SESSION['username']); ?></strong></p>
            <p class="text-md text-gray-600">Email: <?php echo htmlspecialchars($_SESSION['email']); ?></p>
        </div>
    </div>

</body>
</html>
