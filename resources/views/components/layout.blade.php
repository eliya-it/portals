<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="images/favicon.ico" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="//unpkg.com/alpinejs" defer></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        laravel: "#ef3b2d",
                        primary: "#2563eb",
                        secondary: "#4b5563",
                    },
                    backgroundImage: {
                        'footer-gradient': 'linear-gradient(to right, #ef3b2d, #2563eb)',
                    },
                },
            },
        };
    </script>
    <title>Portals | Find Laravel Jobs & Projects</title>
</head>

<body class="bg-gray-50 min-h-screen flex flex-col">
    <header class="bg-white shadow-xl sticky top-0 z-50">
        <nav class="container mx-auto px-6 py-4 flex justify-between items-center">
            <a href="/" class="flex items-center space-x-3">

                <span
                    class="text-3xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-primary to-laravel hidden md:block">Portals</span>
            </a>
            <ul class="flex items-center space-x-8 text-base font-medium">
                @auth
                    <li class="flex items-center space-x-2">
                        <span class="text-gray-800 font-semibold">
                            Welcome, {{ auth()->user()->name }}
                        </span>
                    </li>
                    <li>
                        <a href="/listings/manage"
                            class="relative px-4 py-2 text-gray-700 hover:text-primary transition-colors duration-300 flex items-center group rounded-lg hover:bg-gray-100">
                            <i class="fa-solid fa-gear mr-2"></i> Manage Jobs
                            <span
                                class="absolute bottom-0 left-0 w-0 h-0.5 bg-primary transition-all duration-300 group-hover:w-full"></span>
                        </a>
                    </li>
                    <li>
                        <form method="POST" action="/logout" class="inline">
                            @csrf
                            <button type="submit"
                                class="px-4 py-2 text-gray-700 hover:text-red-500 transition-colors duration-300 flex items-center rounded-lg hover:bg-gray-100">
                                <i class="fa-solid fa-door-closed mr-2"></i> Logout
                            </button>
                        </form>
                    </li>
                @else
                    <li>
                        <a href="/register"
                            class="relative px-4 py-2 text-gray-700 hover:text-primary transition-colors duration-300 flex items-center group rounded-lg hover:bg-gray-100">
                            <i class="fa-solid fa-user-plus mr-2"></i> Register
                            <span
                                class="absolute bottom-0 left-0 w-0 h-0.5 bg-primary transition-all duration-300 group-hover:w-full"></span>
                        </a>
                    </li>
                    <li>
                        <a href="/login"
                            class="relative px-4 py-2 text-gray-700 hover:text-primary transition-colors duration-300 flex items-center group rounded-lg hover:bg-gray-100">
                            <i class="fa-solid fa-arrow-right-to-bracket mr-2"></i> Login
                            <span
                                class="absolute bottom-0 left-0 w-0 h-0.5 bg-primary transition-all duration-300 group-hover:w-full"></span>
                        </a>
                    </li>
                @endauth
            </ul>
        </nav>
    </header>
    <main class="flex-grow container mx-auto px-4 py-8">
        {{$slot}}
    </main>
    <footer class="bg-footer-gradient text-white py-8">
        <div class="container mx-auto px-4 flex flex-col md:flex-row justify-between items-center gap-4">
            <p class="font-semibold text-sm">Copyright © 2025, Portals. All Rights Reserved.</p>
            <div class="flex space-x-8">
                <a href="#"
                    class="text-lg hover:text-gray-200 transition-colors duration-200 transform hover:scale-110"><i
                        class="fa-brands fa-twitter"></i></a>
                <a href="#"
                    class="text-lg hover:text-gray-200 transition-colors duration-200 transform hover:scale-110"><i
                        class="fa-brands fa-linkedin"></i></a>
                <a href="#"
                    class="text-lg hover:text-gray-200 transition-colors duration-200 transform hover:scale-110"><i
                        class="fa-brands fa-github"></i></a>
            </div>
        </div>
    </footer>
    <x-message />
</body>

</html>