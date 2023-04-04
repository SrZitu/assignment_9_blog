<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>SRZ Blog</title>

  <link rel="stylesheet" href="https://cdn.tailwindcss.com" />

  <link rel="stylesheet" href="css/styles.css">


</head>

<body class="bg-gray-100">
  <?php require_once("./includes/header.php");  ?>

  <section class="hero-section ">
    <div class="bg-gray-900 container mx-auto ">
      <div class="py-16 px-6 lg:px-8 flex flex-col lg:flex-row items-center justify-between">
        <div class="lg:w-1/2">
          <h1 class="text-5xl lg:text-6xl text-white font-bold leading-tight mb-6">
            Journey to Unseen
          </h1>
          <p class="text-xl lg:text-1xl text-gray-400 text-justify mb-8 lg:mr-4">
            We come across many of life's most beautiful images while
            travelling. Monuments, the bright lights of big cities like Las
            Vegas magnificent landscapes. Unsplash captures it all, with a
            free selection of gorgeous travelling photos from every corner of
            the earth.
          </p>
          <button class="bg-white text-gray-900 uppercase py-2 px-4 rounded-lg shadow-md hover:bg-blue-700 hover:text-white ">
            Get Started
          </button>
        </div>
        <div class="lg:w-1/2 mt-8 lg:mt-0">
          <img src="image/hero.png" alt="Hero Image" class="w-full h-auto" />
        </div>
      </div>
    </div>
  </section>


  <section class="py-8 w-full  ">
    <div class="">
      <h2 class="text-3xl font-bold mx-auto mb-4">Featured Posts</h2>

      <div class="flex flex-wrap -mx-4">

        <div class="w-full sm:w-1/2 lg:w-1/3 px-4 mb-8">
          <div class="bg-white rounded-lg shadow-lg overflow-hidden">
            <img src="image/travel1.png" alt="Featured Post 1" class="w-full h-64 object-cover">
            <div class="p-4">
              <h3 class="text-xl font-bold mb-2">Featured Post 1</h3>
              <p class="text-gray-700 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eu risus ac massa euismod facilisis.</p>
              <a href="#" class="inline-block bg-gray-900 text-white px-4 py-2 rounded-lg">Read More</a>
            </div>
          </div>
        </div>

        <div class="w-full sm:w-1/2 lg:w-1/3 px-4 mb-8">
          <div class="bg-white rounded-lg shadow-lg overflow-hidden">
            <img src="image/travel2.png" alt="Featured Post 2" class="w-full h-64 object-cover">
            <div class="p-4">
              <h3 class="text-xl font-bold mb-2">Featured Post 2</h3>
              <p class="text-gray-700 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eu risus ac massa euismod facilisis.</p>
              <a href="#" class="inline-block bg-gray-900 text-white px-4 py-2 rounded-lg">Read More</a>
            </div>
          </div>
        </div>

        <div class="w-full sm:w-1/2 lg:w-1/3 px-4 mb-8">
          <div class="bg-white rounded-lg shadow-lg overflow-hidden">
            <img src="image/travel3.png" alt="Featured Post 3" class="w-full h-64 object-cover">
            <div class="p-4">
              <h3 class="text-xl font-bold mb-2">Featured Post 3</h3>
              <p class="text-gray-700 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eu risus ac massa euismod facilisis.</p>
              <a href="#" class="inline-block bg-gray-900 text-white px-4 py-2 rounded-lg">Read More</a>
            </div>
          </div>
        </div>


      </div>

      <div class="flex flex-wrap -mx-4">

        <div class="w-full sm:w-1/2 lg:w-1/3 px-4 mb-8">
          <div class="bg-white rounded-lg shadow-lg overflow-hidden">
            <img src="image/travel4.png" alt="Featured Post 1" class="w-full h-64 object-cover">
            <div class="p-4">
              <h3 class="text-xl font-bold mb-2">Featured Post 4</h3>
              <p class="text-gray-700 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eu risus ac massa euismod facilisis.</p>
              <a href="#" class="inline-block bg-gray-900 text-white px-4 py-2 rounded-lg">Read More</a>
            </div>
          </div>
        </div>

        <div class="w-full sm:w-1/2 lg:w-1/3 px-4 mb-8">
          <div class="bg-white rounded-lg shadow-lg overflow-hidden">
            <img src="image/travel5.png" alt="Featured Post 2" class="w-full h-64 object-cover">
            <div class="p-4">
              <h3 class="text-xl font-bold mb-2">Featured Post 5</h3>
              <p class="text-gray-700 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eu risus ac massa euismod facilisis.</p>
              <a href="#" class="inline-block bg-gray-900 text-white px-4 py-2 rounded-lg">Read More</a>
            </div>
          </div>
        </div>

        <div class="w-full sm:w-1/2 lg:w-1/3 px-4 mb-8">
          <div class="bg-white rounded-lg shadow-lg overflow-hidden">
            <img src="image/travel6.png" alt="Featured Post 3" class="w-full h-64 object-cover">
            <div class="p-4">
              <h3 class="text-xl font-bold mb-2">Featured Post 6</h3>
              <p class="text-gray-700 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eu risus ac massa euismod facilisis.</p>
              <a href="#" class="inline-block bg-gray-900 text-white px-4 py-2 rounded-lg">Read More</a>
            </div>
          </div>
        </div>


      </div>
    </div>
  </section>
  <?php require_once("./includes/footer.php"); ?>
</body>

</html>
