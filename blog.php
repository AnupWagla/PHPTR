<?php
$page_title = "Blog - PHP Project";
include 'navbar.php';
?>

<div class="flex-1 p-10 bg-gray-100 min-h-screen">
  <h1 class="text-4xl font-bold text-center text-amber-500 mb-10">Latest Blog Posts</h1>

  <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

    <!-- Post 1 -->
    <div class="bg-white rounded-xl shadow-md p-6 hover:shadow-xl transition-shadow duration-300">
      <img src="./blogpic/blog1.png" alt="AI Frontier" class="w-30 h-48 object-cover rounded-lg mb-4 transform hover:scale-105 transition duration-300">
      <h2 class="text-2xl font-bold text-gray-800 mb-2">
        Navigating the AI Frontier: Public and Expert Opinions
      </h2>
      <p class="text-gray-700 mb-4">
        AI is reshaping industries rapidly. This post explores opinions from CEOs, lawmakers, and the public on where AI is heading.
      </p>
      <a href="blog-1.php" class="inline-block mt-2 text-blue-600 hover:underline">
        Read More →
      </a>
    </div>

    <!-- Post 2 -->
    <div class="bg-white rounded-xl shadow-md p-6 hover:shadow-xl transition-shadow duration-300">
      <img src="./blogpic/blog2.png" alt="AI Job Displacement" class="w-40 h-48 object-cover rounded-lg mb-4 transform hover:scale-105 transition duration-300">
      <h2 class="text-2xl font-bold text-gray-800 mb-2">
        AI and Job Displacement: A Looming Challenge
      </h2>
      <p class="text-gray-700 mb-4">
        Experts weigh in on how AI may replace white-collar jobs. Explore predictions, CEO responses, and public reactions.
      </p>
      <a href="blog-2.php" class="inline-block mt-2 text-blue-600 hover:underline">
        Read More →
      </a>
    </div>

    <!-- Post 3 -->
    <div class="bg-white rounded-xl shadow-md p-6 hover:shadow-xl transition-shadow duration-300">
      <img src="./blogpic/blog3.png" alt="Conflicts" class="w-40 h-48 object-cover rounded-lg mb-4 transform hover:scale-105 transition duration-300">
      <h2 class="text-2xl font-bold text-gray-800 mb-2">
        Geopolitical Flashpoints: Humanitarian Toll of Conflicts
      </h2>
      <p class="text-gray-700 mb-4">
        From regional skirmishes to full-scale wars, explore the causes, civilian impact, and responses to today’s conflicts.
      </p>
      <a href="blog-3.php" class="inline-block mt-2 text-blue-600 hover:underline">
        Read More →
      </a>
    </div>

    <!-- Post 4 -->
    <div class="bg-white rounded-xl shadow-md p-6 hover:shadow-xl transition-shadow duration-300">
      <img src="./blogpic/blog4.png" alt="AI in Education" class="w-40 h-48 object-cover rounded-lg mb-4 transform hover:scale-105 transition duration-300">
      <h2 class="text-2xl font-bold text-gray-800 mb-2">
        Empowering Students with AI: Transforming Classrooms
      </h2>
      <p class="text-gray-700 mb-4">
        Discover how AI tools are personalizing learning, boosting creativity, and preparing students for the future.
      </p>
      <a href="blog-4.php" class="inline-block mt-2 text-blue-600 hover:underline">
        Read More →
      </a>
    </div>

  </div>
</div>
