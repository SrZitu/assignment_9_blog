<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.tailwindcss.com" />
    <link rel="stylesheet" href="css/styles.css">
</head>

<body class="bg-gray-100">
    <?php require_once("./includes/header.php");  ?>
    <section class="py-8 w-full mt-10">
        <div class="container mx-auto ">
            <h1 class="text-center text-3xl font-bold">Contact Us</h1>
            <form class="max-w-xl mx-auto" method="POST" action="wellcome.php">
                <div class="mb-4">
                    <label class="block text-gray-700 font-bold mb-2" for="name">
                        Name
                    </label>
                    <input class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="name" name="name" type="text" placeholder="Enter Name " required>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 font-bold mb-2" for="email">
                        Email
                    </label>
                    <input class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email" name="email" type="email" placeholder="Enter Email " required>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 font-bold mb-2" for="subject">
                        Subject
                    </label>
                    <input class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="subject" name="subject" type="text" placeholder="Subject..." required>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 font-bold mb-2" for="message">
                        Message
                    </label>
                    <textarea class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="message" name="message" rows="2" required></textarea>
                </div>
                <div class="flex justify-center">
                    <button  type="submit"name="submit" class="bg-gray-900 hover:bg-blue-700 text-white py-2 px-4 rounded-md mt-4 inline-block ">Submit</button>
                </div>
            </form>
        </div>
    </section>
   

</body>

</html>