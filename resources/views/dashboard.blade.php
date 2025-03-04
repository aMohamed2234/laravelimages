@extends('layouts.AdminLayout.app')

@section('admincontent')     
<!-- Content Area -->
<div class="p-6 grid grid-cols-1 md:grid-cols-3 gap-6">
    <div class="bg-white p-4 shadow rounded-lg">
        <h3 class="text-lg font-semibold">Total Events</h3>
        <p class="text-2xl font-bold">{{ $totalevents }}</p>
    </div>
    <div class="bg-white p-4 shadow rounded-lg">
        <h3 class="text-lg font-semibold">Active Sessions</h3>
        <p class="text-2xl font-bold">456</p>
    </div>
    <div class="bg-white p-4 shadow rounded-lg">
        <h3 class="text-lg font-semibold">Revenue</h3>
        <p class="text-2xl font-bold">12,345</p>
    </div>
</div>
@endsection
