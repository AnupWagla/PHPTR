<?php
$page_title = "Portfolio - PHP Project";
include 'navbar.php';
?>

<div class="flex-1 p-10 text-left overflow-y-auto bg-gray-100">
  <h2 class="text-4xl font-bold text-amber-400 mb-2 text-center">Hi, I'm Anup</h2>
  <p class="text-gray-700 text-center mb-6">A Beginner Web Designer for clean and simple design.</p>

  <section class="mb-8">
    <h3 class="text-2xl font-bold text-amber-500 mb-3">About Me</h3>
    <p class="text-gray-700 max-w-3xl">
      I'm a first-year BCA student with a strong interest in front-end development. I enjoy building clean web interfaces using HTML, CSS, and Tailwind CSS. I'm currently learning JavaScript and backend to hone my skill.</p>
  </section>

  <section class="mb-9">
    <h3 class="text-2xl font-bold text-amber-500 mb-3">Skills</h3>
    <div class="space-y-4">
      <div>
        <p class="">HTML5</p>
      </div>
      <div>
        <p class="">CSS</p>
      </div>
      <div>
        <p class="">Tailwind CSS</p>
      </div>
       <div>
        <p class="">PHP..</p>
      </div>
    </div>
  </section>

  <section class="mb-8">
    <h3 class="text-2xl font-bold text-amber-500 mb-3">Recent Projects</h3>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
      <div class="bg-white rounded-lg shadow-md p-4">
        <img src="./screenshot/offical.png" alt="Project 1" class="rounded mb-2 w-full">
        <h4 class="font-bold text-gray-800">Portfolio Website</h4>
        <p class=" text-gray-600 mb-2">Built with HTML, CSS.</p>
        <a href="https://github.com/AnupWagla/my-website" class="text-blue-600 hover:underline text-sm" target="_blank">🔗 View Project</a>
      </div>

      <div class="bg-white rounded-lg shadow-md p-4">
        <img src="./screenshot/offical1.png" alt="Project 2" class="rounded mb-2 w-full">
        <h4 class="font-bold text-gray-800">Login System</h4>
        <a href="#" class="text-blue-600 hover:underline text-sm">🔗 View on GitHub</a>
      </div>
    </div>
  </section>

  <section class="mb-8">
    <h3 class="text-2xl font-semibold text-amber-500 mb-3">Tools Used </h3>
    <ul class="list-disc ml-6 text-gray-700">
      <li>Visual Studio Code</li>
      <li>Figma (for basic design layout)</li>
      <li>XAMPP (PHP local server)</li>
      <li>Git & GitHub</li>
    </ul>
  </section>

  <section>
    <h3 class="text-2xl font-semibold text-amber-500 mb-3">Future Goals</h3>
    <p class="text-gray-700 max-w-3xl">
      I aim to master full-stack web development by learning JavaScript, React. My long-term goal is to build real-world applications that solve problems and help businesses grow online.
    </p>
  </section>
</div>
