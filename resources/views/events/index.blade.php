@extends('layouts.AdminLayout.app')

@section('admincontent')
<div class="container mx-auto mt-5 p-4">

    @if (session('success'))
        <div class="bg-green-200 text-green-800 p-2 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    <div class="mb-4">
        <a href="{{ route('events.create') }}">
            <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700">Create Event</button>
        </a>
    </div>

    <h1 class="text-center text-2xl font-semibold mb-4">Event Page</h1>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
        @foreach ($events as $event)
        <div class="bg-white shadow-lg rounded-lg overflow-hidden p-4">
            <div class="text-center">
            <div>
                <img src="{{asset('storage/'.$event->image)}}" alt="image">
                </div>
                <p class="text-lg font-bold">ID: {{ $event->id }}</p>
                <h3 class="text-gray-600 text-xl">{{ $event->title }}</h3>
                <p class="text-gray-500">{{ $event->location }}</p>
                <div class="mt-3 space-x-2">
                    <a href="{{ route('events.show', $event->id) }}" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700">View Details</a>
                    <a href="{{ route('events.edit', $event->id) }}" class="bg-yellow-500 text-white px-4 py-2 rounded hover:bg-yellow-700">Edit</a>
                    <form action="{{ route('events.destroy', $event->id) }}" method="POST" class="inline-block">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="bg-red-500  text-white px-4 py-2 rounded hover:bg-red-700">Delete</button>
                    </form>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
<!-- Pagination Links -->
<div class="mt-4 flex justify-center">
    {{ $events->links() }}
</div>
@endsection
