<?php
if (session_status() === PHP_SESSION_NONE) session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About us</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
    <link rel="icon" href="/Weather-app/front_end/src/assets/images/ico/directory_zipper_alt.ico" type="image/x-icon">
</head>

<body>

    <nav class="flex items-center justify-between px-4 md:px-8 py-4 bg-white shadow-md">
        <?php if (isset($_SESSION['name']) && isset($_SESSION['role']) && $_SESSION['role'] === 'user'): ?>
            <!-- User logged in -->
            <a href="./auth/user_page.php" class="font-bold text-3xl">WEATHERLY</a>

            <div class="hidden md:flex space-x-6 text-lg font-semibold">
                <a href="./intro.php" class="hover:text-blue-500 text-2xl">Introduction</a>
                <a href="./contact.php" class="hover:text-blue-500 text-2xl">Contact</a>
            </div>

            <div class="flex items-center space-x-4">
                <span class="px-5 py-2 text-lg bg-blue-100 rounded-lg font-semibold">
                    <?= htmlspecialchars($_SESSION['name']) ?>
                </span>
                <a href="./auth/logout.php" class="text-red-600 hover:underline">Logout</a>
            </div>

        <?php elseif (isset($_SESSION['name']) && isset($_SESSION['role']) && $_SESSION['role'] === 'admin'): ?>
            <!-- Admin logged in -->
            <a href="./auth/admin_page.php" class="font-bold text-3xl">WEATHERLY</a>

            <div class="hidden md:flex space-x-6 text-lg font-semibold">
                <a href="./intro.php" class="hover:text-blue-500 text-2xl">Introduction</a>
                <a href="./contact.php" class="hover:text-blue-500 text-2xl">Contact</a>
            </div>

            <div class="flex items-center space-x-4">
                <span class="px-5 py-2 text-lg bg-yellow-100 rounded-lg font-semibold">
                    Admin: <?= htmlspecialchars($_SESSION['name']) ?>
                </span>
                <a href="./auth/logout.php" class="text-red-600 hover:underline">Logout</a>
            </div>

        <?php else: ?>
            <!-- Guest view -->
            <a href="../../index.php" class="font-bold text-3xl">WEATHERLY</a>

            <div class="hidden md:flex space-x-6 text-lg font-semibold">
                <a href="/front_end/public/intro.html" class="hover:text-blue-500 text-2xl">Introduction</a>
                <a href="/front_end/public/contact.html" class="hover:text-blue-500 text-2xl">Contact</a>
            </div>

            <a href="./auth/login.php"
                class="px-5 py-2 text-lg bg-blue-100 rounded-lg hover:bg-blue-200 transition font-semibold">
                Login / Sign up
            </a>
        <?php endif; ?>
    </nav>


    <section class="text-center py-14">
        <h2 class="text-4xl md:text-5xl font-extrabold text-gray-800">About Weatherly</h2>
        <p class="mt-4 text-lg text-gray-600 max-w-2xl mx-auto">
            Weatherly is your trusted companion for real-time forecasts, designed to help you plan your day with
            confidence and peace of mind.
        </p>
    </section>


    <section class="max-w-5xl mx-auto px-6 py-10 bg-white/80 backdrop-blur-sm rounded-2xl shadow-lg">
        <h3 class="text-2xl font-bold text-blue-700 mb-6">Who We Are</h3>
        <p class="text-gray-700 leading-relaxed mb-6">
            At Weatherly, we believe that staying informed about the weather shouldn’t be complicated. Our team of
            passionate developers, designers, and meteorology enthusiasts have created an app that is accurate,
            reliable, and user-friendly.
        </p>
        <h3 class="text-2xl font-bold text-blue-700 mb-6">Our Mission</h3>
        <p class="text-gray-700 leading-relaxed">
            We aim to provide weather updates that are not only accurate but also beautifully presented. Whether you’re
            traveling, working, or just planning your weekend, Weatherly ensures you always stay ahead of the weather.
        </p>
    </section>


    <footer class="bg-gradient-to-r from-sky-100 to-blue-200 text-gray-800 py-10 mt-[80px]">
        <div class="max-w-6xl mx-auto grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8 px-6">
            <!-- Info -->
            <div>
                <h2 class="text-2xl font-bold mb-4 text-blue-700">Info</h2>
                <ul class="space-y-2">
                    <li><a href="./aboutUs.php" class="hover:text-blue-600 transition">About us</a></li>
                    <li><a href="./ourServices.php" class="hover:text-blue-600 transition">Our services</a></li>
                    <li><a href="./privacyPolicy.php" class="hover:text-blue-600 transition">Privacy Policy</a></li>
                </ul>
            </div>

            <!-- Get Help -->
            <div>
                <h2 class="text-2xl font-bold mb-4 text-blue-700">Get Help</h2>
                <ul class="space-y-2">
                    <li><a href="./faq.php" class="hover:text-blue-600 transition">FAQ</a></li>
                    <li><a href="./contact.php" class="hover:text-blue-600 transition">Contact</a></li>
                    <li><a href="./dataUsage.php" class="hover:text-blue-600 transition">Data usage</a></li>
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

    <script src="/Weather-app/front_end/src/pub-js/update_year.js"></script>
</body>

</html>