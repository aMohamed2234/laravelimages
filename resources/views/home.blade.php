@extends('layouts.reusable')

@section('content')
<div class="bg-gray-100 py-10">
    <div class="container mx-auto px-6 lg:px-20">
        <!-- Hero Section with Different Background -->
        <div class="bg-slate-400 text-white py-16 rounded-lg text-center shadow-lg">
            <h1 class="text-5xl font-extrabold">Welcome to Our Alumni Network</h1>
            <p class="mt-4 text-xl">Stay connected, explore career opportunities, and engage with fellow alumni.</p>
            <a href="{{ route('register') }}" class="mt-6 inline-block bg-yellow-400 text-gray-900 px-8 py-3 rounded-lg shadow-md hover:bg-yellow-500 transition font-semibold">
                Join Us
            </a>
        </div>

        <!-- Featured Sections -->
        <div class="mt-12 grid md:grid-cols-3 gap-6">
            <!-- Alumni Directory -->
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-xl font-semibold text-gray-800 text-center">Alumni Directory</h2>
                <p class="text-gray-600 mt-2">Find and reconnect with fellow alumni. Browse profiles, make connections, and grow your network.</p>
                <a href="/showMembers" class="text-blue-600 font-semibold mt-3 inline-block">View Directory →</a>
            </div>

            <!-- Upcoming Events -->
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-xl font-semibold text-gray-800 text-center">Upcoming Events</h2>
                <p class="text-gray-600 mt-2">Stay updated on alumni reunions, career workshops, and networking events happening soon.</p>
                <a href="{{ route('events.index') }}" class="text-blue-600 font-semibold mt-3 inline-block">View Events →</a>
            </div>

            <!-- Job Board -->
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-xl font-semibold text-gray-800 text-center">Job Board</h2>
                <p class="text-gray-600 mt-2">Explore career opportunities posted by alumni and partner companies. Take the next step in your career.</p>
                <a href="/jobs" class="text-blue-600 font-semibold mt-3 inline-block">View Jobs →</a>
            </div>
        </div>

        <!-- Testimonials Section -->
        <div class="mt-16">
            <h2 class="text-center text-3xl font-bold text-gray-800">What Our Alumni Say</h2>
            <div class="mt-8 grid md:grid-cols-2 gap-6">
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <p class="text-gray-700 italic">"This alumni network has helped me reconnect with old friends and find new career opportunities!"</p>
                    <h4 class="mt-4 font-semibold text-gray-800">- John Doe, Class of 2015</h4>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <p class="text-gray-700 italic">"Attending alumni events has been a fantastic way to stay involved with the community!"</p>
                    <h4 class="mt-4 font-semibold text-gray-800">- Jane Smith, Class of 2018</h4>
                </div>
            </div>
        </div>
    </div>
</div>




<div class="container mx-auto mt-5 px-4">
    <h1 class="text-center text-2xl font-bold mb-4">Event Page</h1>
    
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
        @foreach ($events as $event)
        <div class="bg-white shadow-lg rounded-lg overflow-hidden p-6 text-center">
            <p class="text-lg font-semibold">ID: {{ $event->id }}</p>
            <h3 class="text-gray-600 text-xl">{{ $event->title }}</h3>
            <p class="text-gray-500">{{ $event->location }}</p>
        </div>
        @endforeach
    </div>
</div>

<!-- Pagination Links -->
<div class="mt-6 flex justify-center">
    <div class="w-full max-w-md">
        {{ $events->links('pagination::tailwind') }}
    </div>
</div>



@endsection
