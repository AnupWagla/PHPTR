<?php 
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./src/output.css">
    <title><?php echo isset($page_title) ? $page_title : 'PHP Project'; ?></title>
</head>

<body class="bg-gray-300 min-h-screen">
    <nav class="flex items-center justify-between bg-gray-800 p-2 shadow-md">
        <a href="index.php">
            <img class="h-10 rounded-full" src="./images/logo.png" alt="logo">
        </a>
        <div>
            <input 
                class="focus:outline-none focus:ring-2 focus:ring-amber-400 p-1 w-80 text-center border-2 border-amber-400 rounded-2xl text-amber-300 bg-white" 
                type="text" placeholder="Search here">
            <button class="focus:outline-none focus:ring-1 border-2 border-amber-400 rounded-full text-amber-300" 
                type="submit">🔍</button>
        </div>
        <div class="flex gap-4">
            <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true): ?>
                <span class="text-amber-300 text-center flex justify-center">Welcome, <?php echo $_SESSION['username']; ?>!</span>
                <a class="border-2 rounded-3xl p-1 text-amber-300 hover:text-red-500 w-20 text-center" href="logout.php">Logout</a>
            <?php else: ?>
                <a class="border-2 rounded-3xl p-1 text-amber-300 hover:text-amber-400 w-20 text-center" href="login.php">Log in</a>
                <a class="border-2 rounded-3xl p-1 text-amber-300 hover:text-amber-400 w-20 text-center" href="signup.php">Sign up</a>
            <?php endif; ?>
        </div>
    </nav>

    <div class="flex min-h-screen">
        <div class="w-64 bg-gray-700 p-5 flex-shrink-0">
            <h1 class="pb-5 font-bold text-white">Menu</h1>
      <ul class="flex flex-col gap-8">
    <li>
        <a class="text-white hover:text-black hover:border-2 hover:rounded-full hover:p-2 hover:bg-amber-400 transition-all duration-700 ease-in-out" href="index.php">Home</a>
    </li>
    <li>
        <a class="text-white hover:text-black hover:border-2 hover:rounded-full hover:p-2 hover:bg-amber-400 transition-all duration-700 ease-in-out" href="portfolio.php">Portfolio</a>
    </li>
    <li>
        <a class="text-white hover:text-black hover:border-2 hover:rounded-full hover:p-2 hover:bg-amber-400 transition-all duration-700 ease-in-out" href="contact.php">Contact</a>
    </li>
    <li>
        <a class="text-white hover:text-black hover:border-2 hover:rounded-full hover:p-2 hover:bg-amber-400 transition-all duration-700 ease-in-out" href="blog.php">Blog</a>
    </li>

    <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true && $_SESSION['role'] === 'admin'): ?>
    <li>
        <a class="text-white font-bold hover:text-black hover:border-2 hover:rounded-full hover:p-2  transition-all duration-700 ease-in-out" href="dashboard.php">Admin Pannel</a>
    </li>
    <?php endif; ?>
</ul>

        </div>
