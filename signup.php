<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Signup Page</title>
    <link rel="stylesheet" href="./src/output.css">
</head>

<body class="flex flex-col items-center justify-center min-h-screen bg-gray-100">

    <form action="signuphandle.php" method="post" class="bg-white p-6 rounded shadow-md w-80 mb-6">
        <a class="flex justify-center mb-4" href="index.php">
            <img class="h-10 rounded-full" src="./images/logo.png" alt="logo">
        </a>
        <h2 class="text-4xl font-bold mb-4 text-center text-amber-400">Signup</h2>

        <label for="username" class="block mb-1">Name:</label>
        <input type="text" id="username" name="username" required
            class="w-full border border-gray-300 p-2 rounded mb-4">

        <label for="email" class="block mb-1">Email:</label>
        <input type="email" id="email" name="email" required
            class="w-full border border-gray-300 p-2 rounded mb-4">

        <label for="password" class="block mb-1">Password:</label>
        <input type="password" id="password" name="password" required
            class="w-full border border-gray-300 p-2 rounded mb-4">

        <input type="submit" value="Signup"
            class="w-full text-center bg-blue-500 text-white p-2 rounded hover:bg-blue-600 cursor-pointer">

        <p class="text-center flex justify-center mt-4">
            Have an account? <a class="text-blue-600 hover:text-blue-700 ml-1" href="login.php">Login</a>
        </p>
    </form>

    <footer class="text-center text-gray-500 text-sm">
        If you get stuck on any page, just click on the logo to return home.
    </footer>

</body>

</html>
