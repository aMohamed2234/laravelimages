@extends('layouts.reusable')

@section('content')
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
