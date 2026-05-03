<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Steven.id | @yield('title')</title>
    <script src="https://cdn.tailwindcss.com"></script> <!-- Pakai Tailwind biar cepet ganteng tampilannya -->
</head>
<body class="bg-gray-50">

    <nav class="bg-white shadow-lg p-4 mb-8">
        <div class="container mx-auto flex justify-between">
            <h1 class="text-xl font-bold">Steven.id</h1>
            <div class="space-x-4">
                <a href="/pages/home" class="hover:text-blue-500">Home</a>
                <a href="/pages/product" class="text-gray-700 hover:text-blue-600 transition">Product</a>
                <a href="/pages/about" class="hover:text-blue-500 text-blue-600 font-bold">About</a>
                <a href="/pages/contact" class="hover:text-blue-500 text-blue-600 font-bold">Contact</a>
            </div>
        </div>
    </nav>

    <main class="container mx-auto px-4">
        @yield('content')
    </main>

    <footer class="text-center p-10 text-gray-500">
        &copy; 2026 Steven.id Team - PBL Informatika
    </footer>

</body>
</html>