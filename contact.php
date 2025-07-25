<?php
$page_title = "Contact - PHP Project";
include 'navbar.php';
?>

<div class="flex-1 flex items-center justify-center p-4">
    <div class="bg-gray-100 shadow-lg rounded-lg max-w-xl w-full mx-auto text-center p-6">
        <h1 class="font-bold text-amber-500 text-2xl mb-2">Contact Us</h1>
        <p class="mb-3 text-gray-700">We'd love to hear from you! Fill out the form below.</p>
        <p class="text-gray-800 text-sm font-medium mb-6">📅 Today is: 
            <span class="text-blue-600"><?php echo date("l, F j, Y"); ?></span>
        </p>
        <form action="contact_submit.php" method="POST"  class="space-y-4">
            <div>
                <label for="name" class="block text-left font-medium mb-1">Name:</label>
                <input type="text" id="name" name="name" required
                    class="w-full border border-gray-300 rounded-md p-2 focus:ring-amber-400 focus:outline-none" />
            </div>

            <div>
                <label for="email" class="block text-left font-medium mb-1">Email:</label>
                <input type="email" id="email" name="email" required
                    class="w-full border border-gray-300 rounded-md p-2 focus:ring-amber-400 focus:outline-none" />
            </div>

            <div>
                <label for="message" class="block text-left font-medium mb-1">Message:</label>
                <textarea id="message" name="message" rows="4" required
                    class="w-full border border-gray-300 rounded-md p-2 focus:ring-amber-400 focus:outline-none"></textarea>
            </div>

            <button type="submit"
                class="bg-blue-600 text-white rounded-md px-6 py-2 hover:bg-blue-700 transition duration-200">
                Submit
            </button>
        </form>
        <div class="mt-6 text-sm">
            <h2 class="text-xl font-bold mb-3">Contact Info</h2>
            <p>Email: <a href="mailto:kingwagla@gmail.com" class="text-blue-600 hover:text-blue-800">kingwagla@gmail.com</a></p>
            <p>Phone: <a href="tel:+9779767661639" class="text-blue-600 hover:text-blue-800">+977 9767661639</a></p>
            <p>Location: Kalanki, Kathmandu, Nepal</p>
        </div>
        <div class="mt-4">
            <h3 class="font-bold mb-2">Follow Me:</h3>
            <div class="flex justify-center gap-4 text-sm">
                <a href="https://www.instagram.com/aanup_wagle/" target="_blank" class="text-amber-600 hover:text-amber-800">Instagram</a>
                <a href="https://x.com/aanupwagle" target="_blank" class="text-amber-600 hover:text-amber-800">X</a>
                <a href="https://www.youtube.com/@aanupwagle" target="_blank" class="text-amber-600 hover:text-amber-800">YouTube</a>
            </div>
        </div>
    </div>
</div>
