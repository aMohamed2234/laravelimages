<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100">
    <div class="flex h-screen">
        <!-- Sidebar -->
        <aside class="w-64 bg-gray-800 text-white flex flex-col p-4">
            <h2 class="text-xl font-bold mb-4">Admin Panel</h2>
            <nav>
                <a href="/dashboard" class="block py-2 px-3 rounded hover:bg-gray-700">Dashboard</a>
                <a href="{{route('events.index')}}" class="block py-2 px-3 rounded hover:bg-gray-700">Events</a>
                <a href="#" class="block py-2 px-3 rounded hover:bg-gray-700">Jobs</a>
                <a href="#" class="block py-2 px-3 rounded hover:bg-gray-700">Events</a>
                <a href="#" class="block py-2 px-3 rounded hover:bg-gray-700">Settings</a>
            </nav>
        </aside>

        <!-- Main Content -->
        <div class="flex-1 flex flex-col">
            <!-- Top Navbar -->
            <header class="bg-white shadow-md p-4 flex justify-between items-center">
                <h1 class="text-xl font-semibold">Dashboard</h1>
                <div>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-700">Logout</button>
                    </form>
                </div>
            </header>

            <!-- Page Content -->
            <main class="p-6 flex-1">
                @yield('admincontent') 
            </main>
        </div>
    </div>
</body>
</html>
