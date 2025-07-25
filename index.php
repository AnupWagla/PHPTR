<?php
$page_title = "Index - PHP Project";
include 'navbar.php';
?>
   <div class="flex-1 text-center flex flex-col justify-center items-center p-10 bg-gray-100 space-y-6">
        <h1 class="text-4xl font-extrabold text-amber-500 mb-2">Hi! I'm Anup Wagle aka King Wagla</h1>
        <p class="text-lg text-gray-700 mb-4">
            Welcome to my homepage! I’m currently a Bachelor’s student at KBC College, 1st Year.
</p>
        <div class="bg-white shadow-xl rounded-xl p-6 w-full max-w-xl mb-6">
            <p class="text-gray-800 text-md font-medium">📅 Today is: <span class="text-blue-600"><?php echo date("l, F j, Y"); ?></span></p>
            <p class="">“Progress may be slow, but I'm built to grow.”</p>
        </div>

        <section class="bg-white shadow-md rounded-2xl p-6 w-full max-w-2xl">
            <h2 class="text-xl font-semibold mb-4 text-amber-600">Explore My Work</h2>
            <ul class="text-blue-600 space-y-2">
                <li><a class="hover:text-blue-800 underline" href="portfolio.php">📁 Portfolio</a></li>
                <li><a class="hover:text-blue-800 underline" href="blog.php">📝 Blog</a></li>
                <li><a class="hover:text-blue-800 underline" href="https://github.com/AnupWagla" target="_blank">💻 GitHub Projects</a></li>
                <li><a class="hover:text-blue-800 underline" href="contact.php">📬 Contact Me</a></li>
            </ul>
        </section>
        
        <div class="grid grid-cols sm:grid-cols-3 gap-4 w-full mt-6">
            <div class="bg-white p-4 rounded-xl shadow text-center">
                <h3 class="text-2xl font-bold text-amber-500">5+</h3>
                <p class="">Projects</p>
            </div>
            <div class="bg-white p-4 rounded-xl shadow text-center">
                <h3 class="text-2xl font-bold text-amber-500">1st Year</h3>
                <p class="">BCA Student</p>
            </div>
            <div class="bg-white p-4 rounded-xl shadow text-center">
                <h3 class="text-2xl font-bold text-amber-500">2025</h3>
                <p class="">Started Coding</p>
            </div>
        </div>
    </div>
</div>
</body>

</html>