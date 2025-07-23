<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
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
            <button class="focus:outline-none focus:ring-1 border-2 rounded-full text-amber-300"
                type="submit">🔍</button>
        </div>
    <div class="flex gap-4">
        <a class="border-2 rounded-3xl p-1 text-amber-300 hover:p-1 hover:text-amber-400 hover:scale-130 duration-200 w-20 text-center"
            href="login.php">Log in</a>
        <a class="border-2 rounded-3xl p-1 text-amber-300 hover:p-1 hover:text-amber-400 hover:scale-130 duration-200 w-20 text-center"
            href="signup.php">Sign up</a>
    </div>
    </nav>

    <div class="flex min-h-screen">
        <div class="bg-gray-700 p-5">
            <h1 class="pb-5 font-bold">Menu</h1>
             <ul class="flex flex-col gap-8  ">
                <li><a class="text-white hover:text-black hover:border-2 hover:rounded-full hover:p-2 hover:bg-amber-400 transition-all duration-700 ease-in-out" href="index.php">Home</a></li>
                <li><a class="text-white hover:text-black hover:border-2 hover:rounded-full hover:p-2 hover:bg-amber-400 transition-all duration-700 ease-in-out" href="portfolio.php">Portfolio</a></li>
                <li><a class="text-white hover:text-black hover:border-2 hover:rounded-full hover:p-2 hover:bg-amber-400 transition-all duration-700 ease-in-out" href="contact.php">Contact</a></li>
                <li><a class="text-white hover:text-black hover:border-2 hover:rounded-full hover:p-2 hover:bg-amber-400 transition-all duration-700 ease-in-out" href="blog.php">Blog</a></li>
            </ul>
        </div>

        <div class="flex-1 flex items-center justify-center p-8">
            <div class="bg-gray-100 shadow-lg rounded-lg w-full text-center p-6">
                <h1 class="font-bold text-center text-amber-500 text-2xl ">Contact Us</h1>
                <p class="text-center mb-6">We'd love to hear from you! Please fill out the form below.</p>

                <form action="signup_php.php" method="POST" class="space-y-4">
                    <div>
                        <label for="name" class="block text-left font-medium mb-1">Name:</label>
                        <input type="text" id="name" name="name" required
                            class="w-full border border-gray-300 rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-blue-500" />
                    </div>

                    <div>
                        <label for="email" class="block text-left font-medium mb-1">Email:</label>
                        <input type="email" id="email" name="email" required
                            class="w-full border border-gray-300 rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-blue-500" />
                    </div>

                    <div>
                        <label for="message" class="block text-left font-medium mb-1">Message:</label>
                        <textarea id="message" name="message" rows="4" required
                            class="w-full border border-gray-300 rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
                    </div>

                    <button type="submit"
                        class="bg-blue-600 text-white rounded-md px-6 py-2 hover:bg-blue-700 transition duration-200">Submit</button>
                </form>

                <div class="mt-8 text-center">
                    <h2 class="text-xl font-bold mb-4">Contact Information</h2>
                    <div class="space-y-2">
                        <p>Email: <a href="mailto:kingwagla@.com"
                                class="text-blue-600 hover:text-blue-800">kingwagla@gmail.com</a></p>
                        <p>Phone: <a href="tel:+9779767661639" class="text-blue-600 hover:text-blue-800">+977 9767661639</a></p>
                        <p>Address: Kalanki, Kathmandu, Bagmati Province, Nepal</p>
                    </div>
                </div>

                <div class="mt-6">
                    <h3 class="font-bold mb-2">Follow us:</h3>
                    <div class="flex justify-center gap-4">
                        <a href="https://www.instagram.com/aanup_wagle/" target="_blank"
                            class="text-amber-600 hover:text-amber-800">Instagram</a>
                        <a href="https://x.com/aanupwagle" target="_blank"
                            class="text-amber-600 hover:text-amber-800">X</a>
                        <a href="https://www.youtube.com/@aanupwagle" target="_blank"
                            class="text-amber-600 hover:text-amber-800">Youtube</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>