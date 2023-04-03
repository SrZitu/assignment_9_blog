<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Single Blog Post</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.tailwindcss.com" />

    <link rel="stylesheet" href="css/styles.css">
</head>
<body class="bg-gray-100">
<?php  require_once("./includes/header.php");  ?>

    <section class="container mx-auto my-10 px-6">
        <article class="max-w-3xl mx-auto">
            <div class="text-center mb-8">
                <h1 class="text-3xl font-bold mb-2">Blog Post Title</h1>
                <p class="text-gray-500">Written by <span class="author">John Doe</span></p>
                <time datetime="2023-04-03" class="text-gray-500">April 3, 2023</time>
            </div>
            <img src="image/blog_post1.png" alt="Blog Post Image" class="mb-8">
            <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et risus eros. Sed auctor vitae massa eget tempor. Sed sit amet efficitur ex. Vivamus euismod dictum eleifend. Integer mollis lobortis massa vel lacinia. Nam ultrices augue vitae turpis pretium, sed euismod nulla aliquam. Sed semper libero ac lacinia interdum. Sed tempor, velit sit amet vulputate rhoncus, turpis enim tempor risus, sit amet malesuada sapien leo ac mi. Morbi mattis erat eget quam posuere malesuada.</p>
            <p class="mb-8">Etiam consectetur ipsum a est interdum blandit. Vivamus non sapien nisl. Integer bibendum velit sit amet lectus malesuada, id bibendum velit congue. Integer facilisis, est sed vehicula semper, dui nisl aliquam sapien, nec bibendum nisl arcu ut lorem. Nullam faucibus eros vel lacus convallis, at efficitur sapien malesuada. Nulla quis metus hendrerit, feugiat purus sed, consectetur sapien. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Donec sit amet tellus ut mi element
            </article>
            <div class="flex justify-between items-center mb-8">
                <div class="flex items-center">
                    <img src="image/dp.png" alt="Author Profile Picture" class="w-10 h-10  mr-4">
                    <div>
                        <p class="font-bold text-gray-900">John Doe</p>
                        <p class="text-gray-500 text-sm">Author</p>
                    </div>
                </div>
                <div class="flex items-center">
                    <a href="https://www.facebook.com/" class="text-gray-400 hover:text-gray-900 mr-4">
                        <i class="fa fa-facebook-square fa-lg"></i>
                      </a>
                      <a href="https://twitter.com/" class="text-gray-400 hover:text-gray-900 mr-4">
                        <i class="fa fa-twitter-square fa-lg"></i>
                      </a>
                      <a href="https://www.linkedin.com" class="text-gray-400 hover:text-gray-900">
                        <i class="fa fa-linkedin-square fa-lg"></i>
                      </a>
                      
                </div>
            </div>
    </section>
    <?php require_once("./includes/footer.php"); ?>
           </body>     
           </html>