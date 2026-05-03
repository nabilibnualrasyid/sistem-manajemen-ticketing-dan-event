<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Steven.id | @yield('title')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @yield('styles')
</head>
<body class="bg-gray-50">

    <nav class="bg-white shadow-lg p-4 mb-8">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-xl font-bold text-blue-600">Steven.id</h1>
            <div class="space-x-4 flex items-center">
                <a href="/pages/home" class="hover:text-blue-500">Home</a>
                <a href="/pages/product" class="hover:text-blue-500">Product</a>
                <a href="/pages/about" class="hover:text-blue-500">About</a>
                <a href="/pages/contact" class="hover:text-blue-500">Contact</a>

                {{-- Flowbite Dropdown --}}
                <button id="dropdownBtn" data-dropdown-toggle="dropdown"
                    class="bg-blue-600 text-white px-4 py-2 rounded-lg text-sm hover:bg-blue-700 transition flex items-center gap-1">
                    Menu
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                </button>

                <div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow-md w-44">
                    <ul class="py-2 text-sm text-gray-700">
                        <li>
                            <a href="/pages/dashboard" class="block px-4 py-2 hover:bg-gray-100">Dashboard</a>
                        </li>
                        <li>
                            <a href="/pages/event" class="block px-4 py-2 hover:bg-gray-100">Event</a>
                        </li>
                        <li>
                            <a href="/login" class="block px-4 py-2 hover:bg-gray-100">Login</a>
                        </li>
                        <li>
                            <a href="/register" class="block px-4 py-2 hover:bg-gray-100">Register</a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </nav>

    <main class="container mx-auto px-4">
        @yield('content')
    </main>

    <footer class="text-center p-10 text-gray-500">
        &copy; {{ date('Y') }} Steven.id Team - PBL Informatika
    </footer>

    {{-- Flowbite JS untuk dropdown --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>

</body>
</html>