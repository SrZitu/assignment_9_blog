<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>My Blog</title>
  <link rel="stylesheet" href="https://cdn.tailwindcss.com" />

  <link rel="stylesheet" href="css/styles.css">
</head>

<body class="bg-gray-100">
  <?php require_once("./includes/header.php");  ?>
  <!-- Page Content -->
  <div class="container mx-auto mt-8 flex flex-col md:flex-row">
    <!-- Main Content -->
    <div class="w-full md:w-3/4 md:pr-8">
      <!-- Blog Post 1 -->
      <div class="mb-8">
        <img src="image/blog_post1.png" alt="Blog Post 1" class="w-full h-48 md:h-64 object-cover rounded-lg" />
        <h2 class="text-2xl font-bold mt-4">
          <a href="singleBlog.php" class="hover:text-gray-500 hover:bg-slate-300">Blog Post 1</a>
        </h2>
        <p class="text-gray-600 mt-2">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit.
          Pellentesque eu risus ac massa euismod facilisis.
        </p>
        <a href="singleBlog.php" class="bg-gray-900 text-white py-2 px-4 rounded-md mt-4 inline-block  hover:bg-blue-700">Read More</a>
      </div>
      <!-- Blog Post 2 -->
      <div class="mb-8">
        <img src="image/blog_post1.png" alt="Blog Post 2" class="w-full h-48 md:h-64 object-cover rounded-lg" />
        <h2 class="text-2xl font-bold mt-4">
          <a href="singleBlog.php" class="hover:text-gray-500">Blog Post 2</a>
        </h2>
        <p class="text-gray-600 mt-2">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit.
          Pellentesque eu risus ac massa euismod facilisis.
        </p>
        <a href="singleBlog.php" class="bg-gray-900 text-white py-2 px-4 rounded-md mt-4 inline-block  hover:bg-blue-700">Read More</a>
      </div>
      <!-- Blog Post 3 -->
      <div class="mb-8">
        <img src="image/blog_post1.png" alt="Blog Post 3" class="w-full h-48 md:h-64 object-cover rounded-lg" />
        <h2 class="text-2xl font-bold mt-4">
          <a href="singleBlog.php" class="hover:text-gray-500">Blog Post 3</a>
        </h2>
        <p class="text-gray-600 mt-2">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit.
          Pellentesque eu risus ac massa euismod facilisis.
        </p>
        <a href="singleBlog.php" class="bg-gray-900 text-white py-2 px-4 rounded-md mt-4 inline-block  hover:bg-blue-700">Read More</a>
      </div>

    </div>

    <!-- Sidebar -->
    <div class="w-full md:w-1/4">
      <div class="bg-gray-500 rounded-lg p-4">
        <form class="mb-4">
          <input type="text" class="w-full border-gray-300 rounded-md px-4 py-2 focus:outline-none focus:border-indigo-500" placeholder="Search..." />
        </form>
        <h2 class="text-lg font-bold mb-4">Categories</h2>
        <ul class="list-disc list-inside">
          <li>
            <a href="#" class="text-gray-600 hover:text-gray-900">Category 1</a>
          </li>
          <li>
            <a href="#" class="text-gray-600 hover:text-gray-900">Category 2</a>
          </li>
          <li>
            <a href="#" class="text-gray-600 hover:text-gray-900">Category 3</a>
          </li>
          <li>
            <a href="#" class="text-gray-600 hover:text-gray-900">Category 4</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <?php require_once("./includes/footer.php"); ?>
</body>

</html>