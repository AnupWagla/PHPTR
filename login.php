<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Page</title>
    <link rel="stylesheet" href="./src/output.css">
</head>
<body class="flex flex-col items-center justify-center min-h-screen bg-gray-100">

    <form action="loginhandle.php" method="post" class="bg-white p-6 rounded shadow-md w-80 mb-4">  
        <a class="flex justify-center mb-4" href="index.php">
            <img class="h-10 rounded-full" src="./images/logo.png" alt="logo">
        </a>  
        <h2 class="text-4xl font-bold mb-4 text-center text-amber-400">Login</h2>

        <label for="email" class="block mb-1">Email:</label>
        <input type="email" id="email" name="email" required class="w-full border border-gray-300 p-2 rounded mb-4">

        <label for="password" class="block mb-1">Password:</label>
        <input type="password" id="password" name="password" required class="w-full border border-gray-300 p-2 rounded mb-4">

        <input type="submit" value="Login" class="w-full bg-blue-500 text-white p-2 rounded hover:bg-blue-600 cursor-pointer">
        <p class="text-center flex justify-center">Create an account? <a class="text-blue-600 hover:text-amber-500" href="signup.php">Signup</a></p>
    </form>

    <footer class="text-center text-gray-500 text-sm">
        If you are stuck on some page and want to go to home page just click on logo
    </footer>

</body>
</html>
