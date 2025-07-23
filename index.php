<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./src/output.css">
    <title>PHP Project</title>
</head>

<body class="bg-gray-300">
<nav class="flex items-center justify-between bg-gray-800 p-2 shadow-md">
    <a href="index.php">
        <img class="h-10 rounded-full" src="./images/logo.png" alt="logo">
    </a>
    <div class="">
        <input
            class="focus:outline-none focus:ring-2 focus:ring-amber-400 p-1 w-80 text-center border-2 border-amber-400 rounded-2xl text-amber-300 bg-white"
            type="text" placeholder="Search here">
        <button class="focus:outline-none focus:ring-1 border-2 border-amber-400 rounded-full text-amber-300"
            type="submit">🔍</button>
    </div>
    <div class="flex gap-4">
        <a class="border-2 rounded-3xl p-1 text-amber-300 hover:p-1 hover:text-amber-400 hover:scale-130 duration-200 w-20 text-center"
            href="login.php">Log in</a>
        <a class="border-2 rounded-3xl p-1 text-amber-300 hover:p-1 hover:text-amber-400 hover:scale-130 duration-200 w-20 text-center"
            href="signup.php">Sign up</a>
    </div>
</nav>

    <div class="flex h-screen">
        <div class="h-full p-5 bg-gray-700">
            <h1 class="pb-5  font-bold">Menu</h1>
             <ul class="flex flex-col gap-8  ">
                <li><a class="text-white hover:text-black hover:border-2 hover:rounded-full hover:p-2 hover:bg-amber-400 transition-all duration-700 ease-in-out" href="index.php">Home</a></li>
                <li><a class="text-white hover:text-black hover:border-2 hover:rounded-full hover:p-2 hover:bg-amber-400 transition-all duration-700 ease-in-out" href="portfolio.php">Portfolio</a></li>
                <li><a class="text-white hover:text-black hover:border-2 hover:rounded-full hover:p-2 hover:bg-amber-400 transition-all duration-700 ease-in-out" href="contact.php">Contact</a></li>
                <li><a class="text-white hover:text-black hover:border-2 hover:rounded-full hover:p-2 hover:bg-amber-400 transition-all duration-700 ease-in-out" href="blog.php">Blog</a></li>
            </ul>
        </div>
        <div class="flex-1 text-center">
            <h1 class="text-2xl border-1 m-2 font-bold rounded-2xl inline-block p-4 text-amber-500">H1! I'm Anup Wagle
                aka King Wagla
            </h1>
            <p>Welcome to my homepage! I am currently a Bachelor Student.In KBC Collage 2nd year
            </p>
            <section class="">
                <h2>Please do Check out my other pages</h2>
                <p>
                    <li class="text-blue-600 hover:text-blue-800"><a href="portfolio.html">Portfolio</a></li>
                    <li class="text-blue-600 hover:text-blue-800"><a href="blog.html">Blog</a></li>
                </p>
                <p>
                    Some beginner project that i have create if you want to see it here:<li class="text-blue-600 hover:text-blue-800"> <a
                            href="https://github.com/AnupWagla">Github link</a></li>
                </p>
                <h2>If you want to contact me then here:<li class="text-blue-600 hover:text-blue-800"><a href="contact.html">Contact</a></li></h2>
            </section>
        </div>
    </div>
</body>

</html>