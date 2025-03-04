<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100">
    
<nav class="bg-white shadow-md py-4">
  <div class="container mx-auto px-4 flex justify-between items-center">
    <a class="text-xl font-bold text-gray-800" href="#">Navbar</a>
    <button id="nav-toggle" class="lg:hidden px-3 py-2 border rounded text-gray-800 border-gray-300 focus:outline-none">
      ☰
    </button>
    <div id="nav-menu" class="hidden lg:flex space-x-4">
      <div class="flex space-x-4">
        <a class="text-gray-700 hover:text-gray-900" href="/">Home</a>
        <a class="text-gray-700 hover:text-gray-900" href="/showMembers">Events</a>
      </div>
      <div class="flex space-x-4">
        <a class="text-gray-700 hover:text-gray-900" href="{{ route('login') }}">Login</a>
        <a class="text-gray-700 hover:text-gray-900" href="{{ route('register') }}">Register</a>
      </div>
    </div>
  </div>
</nav>

@yield('content')

<!-- Footer Section -->
<footer class="bg-white text-center py-4 mt-3 border-t">
    <div class="container mx-auto px-4">
        <p class="mb-1 text-gray-500">&copy; {{ date('Y') }} Events Hub. All Rights Reserved.</p>
        <div class="flex justify-center space-x-4">
            <a href="/" class="text-gray-500 hover:text-gray-700">Home</a>
            <a href="/showMembers" class="text-gray-500 hover:text-gray-700">Events</a>
            <a href="{{ route('login') }}" class="text-gray-500 hover:text-gray-700">Login</a>
            <a href="{{ route('register') }}" class="text-gray-500 hover:text-gray-700">Register</a>
        </div>
    </div>
</footer>

<script>
  document.getElementById('nav-toggle').addEventListener('click', function() {
    document.getElementById('nav-menu').classList.toggle('hidden');
  });
</script>

</body>
</html>
