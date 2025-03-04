@extends('layouts.AdminLayout.app')

@section('admincontent')

<div class="flex items-center justify-center min-h-screen bg-gray-100">
    <div class="bg-white p-6 rounded-2xl shadow-lg w-96">
        <h2 class="text-2xl font-semibold text-center text-gray-700 mb-4">Create Event</h2>
        <form action="{{ route('events.store') }}" method="POST" class="space-y-4" enctype="multipart/form-data">

            @csrf
            
            <div>
                <label for="title" class="block text-sm font-medium text-gray-600">Title</label>
                <input type="text" id="title" name="title" value="{{ old('title') }}" class="mt-1 w-full p-2 border rounded-lg focus:ring focus:ring-blue-300">
            </div>
            
            <div>
                <label for="location" class="block text-sm font-medium text-gray-600">Location</label>
                <input type="text" id="location" name="location" accept="image/*" value="{{ old('location') }}" class="mt-1 w-full p-2 border rounded-lg focus:ring focus:ring-blue-300">
            </div>
            

             <div>
                <label for="image" class="block text-sm font-medium text-gray-600">Image</label>
                <input type="file" id="image" name="image" accept="image/*" value="{{ old('image') }}" class="mt-1 w-full p-2 border rounded-lg focus:ring focus:ring-blue-300">
            </div>
            <button type="submit" class="w-full bg-red-500 text-white py-2 rounded-lg mt-2">Submit</button>
        </form>
    </div>
</div>

@endsection
