<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weatherly</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
    <link rel="icon" href="./front_end/src/assets/images/ico/media_player_stream_sun3.ico"
        type="image/x-icon">
</head>

<body>
    <nav class="flex items-center justify-between px-4 md:px-8 py-4 bg-white shadow-md">
        <!-- <img src="/Weather-app/front_end/src/assets/images/main/logo2.png"
      alt="logo" class="w-15 md:w-20 h-auto"> -->

        <a href="./index.php">
            <p class="font-bold text-3xl">WEATHERLY</p>
        </a>

        <div class="hidden md:flex space-x-6 text-lg font-semibold ">
            <a href="./front_end/public/intro.php"
                class="hover:text-blue-500 mr-[100px] text-2xl hover:text-3xl">Introduction</a>
            <a href="./front_end/public/contact.php"
                class="hover:text-blue-500 ml-[] text-2xl hover:text-3xl">Contact</a>
        </div>

        <p class="px-5 py-2 text-lg bg-blue-100 rounded-lg hover:bg-blue-200 transition font-semibold">
            Hello, Guest! (log in to use the website)
        </p>
    </nav>

    <!-- Yêu cầu đăng nhập để tra thời tiết -->
    <div class="min-h-[240px] flex items-center justify-center px-4 py-12 mt-[50px]">
        <div class="w-full max-w-2xl bg-white/80 backdrop-blur-sm rounded-2xl shadow-xl p-8 md:p-12 text-center">
            <!-- Icon -->
            <div class="mx-auto w-20 h-20 flex items-center justify-center rounded-full bg-gradient-to-br from-sky-100 to-blue-200 mb-6 shadow-md">
                <svg class="w-10 h-10 text-blue-700" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    <path d="M21 15a4 4 0 0 0-4-4h-1.26A6 6 0 0 0 6 12.2 4 4 0 0 0 6 20h15z" stroke="currentColor" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round" />
                    <rect x="8" y="7" width="8" height="6" rx="1.5" stroke="currentColor" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M10 10v1" stroke="currentColor" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </div>

            <h2 class="text-2xl md:text-3xl font-extrabold text-gray-800 mb-3">
                You need to log into an account to search weather!
            </h2>

            <p class="text-gray-600 mb-6 max-w-xl mx-auto">
                Create an account or sign in to save locations, receive alerts, and get personalized forecasts.
            </p>

            <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                <a href='front_end/public/auth/login.php'
                    class="inline-flex items-center gap-3 px-6 py-3 rounded-lg bg-blue-600 text-white font-semibold shadow hover:bg-blue-700 transition focus:outline-none focus:ring-2 focus:ring-blue-300">
                    <!-- login icon -->
                    <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" aria-hidden="true" xmlns="http://www.w3.org/2000/svg">
                        <path d="M15 3h4a1 1 0 0 1 1 1v16a1 1 0 0 1-1 1h-4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M10 17l5-5-5-5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M15 12H3" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    Log in / Sign up
                </a>
            </div>

            <!-- small helper -->
            <p class="mt-6 text-sm text-gray-500">
                By logging in you can save favorites and get personalized alerts.
            </p>
        </div>
    </div>



    <footer class="bg-gradient-to-r from-sky-100 to-blue-200 text-gray-800 py-10 mt-[80px]">
    <div class="max-w-6xl mx-auto grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8 px-6">
      <!-- Info -->
      <div>
        <h2 class="text-2xl font-bold mb-4 text-blue-700">Info</h2>
        <ul class="space-y-2">
          <li><a href="./front_end/public/aboutUs.php" class="hover:text-blue-600 transition">About us</a></li>
          <li><a href="./front_end/public/ourServices.php" class="hover:text-blue-600 transition">Our services</a></li>
          <li><a href="./front_end/public/privacyPolicy.php" class="hover:text-blue-600 transition">Privacy Policy</a></li>
        </ul>
      </div>

      <!-- Get Help -->
      <div>
        <h2 class="text-2xl font-bold mb-4 text-blue-700">Get Help</h2>
        <ul class="space-y-2">
          <li><a href="./front_end/public/faq.php" class="hover:text-blue-600 transition">FAQ</a></li>
          <li><a href="./front_end/public/contact.php" class="hover:text-blue-600 transition">Contact</a></li>
          <li><a href="./front_end/public/dataUsage.php" class="hover:text-blue-600 transition">Data usage</a></li>
        </ul>
      </div>

      <!-- Socials -->
      <div>
        <h2 class="text-2xl font-bold mb-4 text-blue-700">Follow me</h2>
        <div class="flex space-x-5 text-2xl">
          <a href="https://www.facebook.com" title="Facebook" class="hover:text-blue-600 transition"><i class="fab fa-facebook"></i></a>
          <a href="https://x.com/PzonTruong" title="X" class="hover:text-blue-500 transition"><i class="fab fa-twitter"></i></a>
          <a href="https://github.com/pzonTruong" title="Github" class="hover:text-gray-700 transition"><i class="fab fa-github"></i></a>
        </div>
      </div>
    </div>

    <div class="btm-note mt-10 text-center text-gray-600 text-sm">
    </div>
  </footer>

    <script src="./front_end/src/pub-js/update_year.js"></script>

</body>

</html>