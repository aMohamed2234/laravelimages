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
<!-- Main Content -->
<div class="container mx-auto px-4 py-12">
    <div class="flex flex-col md:flex-row gap-8">
        <!-- Events List -->
        <div class="md:w-2/3">
            <!-- Filter Bar -->
            <div class="bg-white rounded-lg shadow-sm p-4 mb-6">
                <div class="flex flex-col md:flex-row md:items-center justify-between gap-4">
                    <div class="flex-1">
                        <div class="relative">
                            <input type="text" placeholder="Search events..." class="w-full pl-10 pr-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                            <i class="fas fa-search absolute left-3 top-3 text-gray-400"></i>
                        </div>
                    </div>
                    <div class="flex space-x-2">
                        <select class="border rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                            <option>All Event Types</option>
                            <option>Reunions</option>
                            <option>Workshops</option>
                            <option>Networking</option>
                            <option>Career Fairs</option>
                        </select>
                        <select class="border rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                            <option>Any Location</option>
                            <option>In-Person</option>
                            <option>Virtual</option>
                        </select>
                    </div>
                </div>
            </div>

            <!-- Events List -->
            <div class="space-y-6">
                <!-- Event 1 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden transition-all card-hover event-card border-l-blue-500">
                    <div class="md:flex">
                        <div class="md:w-1/4 bg-blue-50 p-6 flex flex-col items-center justify-center">
                            <div class="text-center">
                                <div class="text-3xl font-bold text-blue-600">15</div>
                                <div class="text-lg font-medium text-gray-700">MAY</div>
                                <div class="text-gray-500">2025</div>
                            </div>
                            <div class="mt-4 text-sm">
                                <span class="bg-blue-100 text-blue-800 px-2 py-1 rounded-full">10:00 AM</span>
                            </div>
                        </div>
                        <div class="md:w-3/4 p-6">
                            <div class="flex justify-between items-start">
                                <div>
                                    <h3 class="text-xl font-bold mb-2">Annual Alumni Reunion 2025</h3>
                                    <div class="flex items-center text-gray-600 mb-3">
                                        <i class="fas fa-map-marker-alt mr-2"></i>
                                        <span>Grand Hyatt, New York City</span>
                                    </div>
                                </div>
                                <span class="bg-green-100 text-green-800 text-xs px-2 py-1 rounded-full">In-Person</span>
                            </div>
                            <p class="text-gray-600 mb-4">Join us for our biggest reunion event of the year! Reconnect with old friends, meet new alumni, and celebrate our shared experiences.</p>
                            <div class="flex flex-wrap gap-2 mb-4">
                                <span class="bg-gray-100 text-gray-800 text-xs px-2 py-1 rounded-full">Networking</span>
                                <span class="bg-gray-100 text-gray-800 text-xs px-2 py-1 rounded-full">Social</span>
                                <span class="bg-gray-100 text-gray-800 text-xs px-2 py-1 rounded-full">Keynote Speakers</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <div class="flex -space-x-2">
                                   
                                    <div class="w-8 h-8 rounded-full border-2 border-white bg-gray-100 flex items-center justify-center text-xs font-medium">+42</div>
                                </div>
                                <button class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-full transition-all ">
                                    Register Now
                                </button>

                                
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Event 2 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden transition-all card-hover event-card border-l-purple-500">
                    <div class="md:flex">
                        <div class="md:w-1/4 bg-purple-50 p-6 flex flex-col items-center justify-center">
                            <div class="text-center">
                                <div class="text-3xl font-bold text-purple-600">22</div>
                                <div class="text-lg font-medium text-gray-700">MAY</div>
                                <div class="text-gray-500">2025</div>
                            </div>
                            <div class="mt-4 text-sm">
                                <span class="bg-purple-100 text-purple-800 px-2 py-1 rounded-full">2:00 PM</span>
                            </div>
                        </div>
                        <div class="md:w-3/4 p-6">
                            <div class="flex justify-between items-start">
                                <div>
                                    <h3 class="text-xl font-bold mb-2">Career Transition Workshop</h3>
                                    <div class="flex items-center text-gray-600 mb-3">
                                        <i class="fas fa-video mr-2"></i>
                                        <span>Virtual Event (Zoom)</span>
                                    </div>
                                </div>
                                <span class="bg-indigo-100 text-indigo-800 text-xs px-2 py-1 rounded-full">Virtual</span>
                            </div>
                            <p class="text-gray-600 mb-4">Learn strategies for successful career transitions from alumni who've made major career changes. Perfect for those considering new industries or roles.</p>
                            <div class="flex flex-wrap gap-2 mb-4">
                                <span class="bg-gray-100 text-gray-800 text-xs px-2 py-1 rounded-full">Workshop</span>
                                <span class="bg-gray-100 text-gray-800 text-xs px-2 py-1 rounded-full">Career Development</span>
                                <span class="bg-gray-100 text-gray-800 text-xs px-2 py-1 rounded-full">Panel Discussion</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <div class="flex -space-x-2">
                                    
                                    <div class="w-8 h-8 rounded-full border-2 border-white bg-gray-100 flex items-center justify-center text-xs font-medium">+28</div>
                                </div>
                                <button class="bg-purple-600 hover:bg-purple-700 text-white px-4 py-2 rounded-full transition-all">
                                    Register Now
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Event 3 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden transition-all card-hover event-card border-l-green-500">
                    <div class="md:flex">
                        <div class="md:w-1/4 bg-green-50 p-6 flex flex-col items-center justify-center">
                            <div class="text-center">
                                <div class="text-3xl font-bold text-green-600">05</div>
                                <div class="text-lg font-medium text-gray-700">JUN</div>
                                <div class="text-gray-500">2025</div>
                            </div>
                            <div class="mt-4 text-sm">
                                <span class="bg-green-100 text-green-800 px-2 py-1 rounded-full">6:00 PM</span>
                            </div>
                        </div>
                        <div class="md:w-3/4 p-6">
                            <div class="flex justify-between items-start">
                                <div>
                                    <h3 class="text-xl font-bold mb-2">Tech Alumni Networking Mixer</h3>
                                    <div class="flex items-center text-gray-600 mb-3">
                                        <i class="fas fa-map-marker-alt mr-2"></i>
                                        <span>Innovation Hub, San Francisco</span>
                                    </div>
                                </div>
                                <span class="bg-green-100 text-green-800 text-xs px-2 py-1 rounded-full">In-Person</span>
                            </div>
                            <p class="text-gray-600 mb-4">An evening of networking for alumni in the tech industry. Meet founders, engineers, product managers, and other tech professionals from our alumni community.</p>
                            <div class="flex flex-wrap gap-2 mb-4">
                                <span class="bg-gray-100 text-gray-800 text-xs px-2 py-1 rounded-full">Networking</span>
                                <span class="bg-gray-100 text-gray-800 text-xs px-2 py-1 rounded-full">Technology</span>
                                <span class="bg-gray-100 text-gray-800 text-xs px-2 py-1 rounded-full">Startups</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <div class="flex -space-x-2">
                                  
                                    <div class="w-8 h-8 rounded-full border-2 border-white bg-gray-100 flex items-center justify-center text-xs font-medium">+56</div>
                                </div>
                                <button class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded-full transition-all">
                                    Register Now
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Event 4 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden transition-all card-hover event-card border-l-yellow-500">
                    <div class="md:flex">
                        <div class="md:w-1/4 bg-yellow-50 p-6 flex flex-col items-center justify-center">
                            <div class="text-center">
                                <div class="text-3xl font-bold text-yellow-600">12</div>
                                <div class="text-lg font-medium text-gray-700">JUN</div>
                                <div class="text-gray-500">2025</div>
                            </div>
                            <div class="mt-4 text-sm">
                                <span class="bg-yellow-100 text-yellow-800 px-2 py-1 rounded-full">11:00 AM</span>
                            </div>
                        </div>
                        <div class="md:w-3/4 p-6">
                            <div class="flex justify-between items-start">
                                <div>
                                    <h3 class="text-xl font-bold mb-2">Leadership in Healthcare Panel</h3>
                                    <div class="flex items-center text-gray-600 mb-3">
                                        <i class="fas fa-video mr-2"></i>
                                        <span>Virtual Event (Webinar)</span>
                                    </div>
                                </div>
                                <span class="bg-indigo-100 text-indigo-800 text-xs px-2 py-1 rounded-full">Virtual</span>
                            </div>
                            <p class="text-gray-600 mb-4">Hear from alumni leaders in healthcare administration, medicine, and public health about the challenges and opportunities in today's healthcare landscape.</p>
                            <div class="flex flex-wrap gap-2 mb-4">
                                <span class="bg-gray-100 text-gray-800 text-xs px-2 py-1 rounded-full">Panel</span>
                                <span class="bg-gray-100 text-gray-800 text-xs px-2 py-1 rounded-full">Healthcare</span>
                                <span class="bg-gray-100 text-gray-800 text-xs px-2 py-1 rounded-full">Leadership</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <div class="flex -space-x-2">
                               
                                    <div class="w-8 h-8 rounded-full border-2 border-white bg-gray-100 flex items-center justify-center text-xs font-medium">+19</div>
                                </div>
                                <button class="bg-yellow-600 hover:bg-yellow-700 text-white px-4 py-2 rounded-full transition-all">
                                    Register Now
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Pagination -->
            <div class="mt-8 flex justify-center">
                <nav class="inline-flex rounded-md shadow-sm">
                    <a href="#" class="px-3 py-2 rounded-l-md border border-gray-300 bg-white text-gray-500 hover:bg-gray-50">
                        <i class="fas fa-chevron-left"></i>
                    </a>
                    <a href="#" class="px-4 py-2 border-t border-b border-gray-300 bg-white text-blue-600 font-medium">1</a>
                    <a href="#" class="px-4 py-2 border border-gray-300 bg-white text-gray-500 hover:bg-gray-50">2</a>
                    <a href="#" class="px-4 py-2 border border-gray-300 bg-white text-gray-500 hover:bg-gray-50">3</a>
                    <span class="px-4 py-2 border border-gray-300 bg-white text-gray-500">...</span>
                    <a href="#" class="px-4 py-2 border border-gray-300 bg-white text-gray-500 hover:bg-gray-50">8</a>
                    <a href="#" class="px-3 py-2 rounded-r-md border border-gray-300 bg-white text-gray-500 hover:bg-gray-50">
                        <i class="fas fa-chevron-right"></i>
                    </a>
                </nav>
            </div>
        </div>

        <!-- Sidebar -->
        <div class="md:w-1/3">
            <!-- Calendar Widget -->
            <div class="bg-white rounded-lg shadow-md p-6 mb-6">
                <h3 class="text-lg font-bold mb-4">Event Calendar</h3>
                <div class="bg-gray-50 rounded-lg p-4">
                    <div class="flex justify-between items-center mb-4">
                        <button class="text-gray-500 hover:text-blue-600">
                            <i class="fas fa-chevron-left"></i>
                        </button>
                        <span class="font-medium">May 2025</span>
                        <button class="text-gray-500 hover:text-blue-600">
                            <i class="fas fa-chevron-right"></i>
                        </button>
                    </div>
                    <div class="grid grid-cols-7 gap-1 text-center text-sm mb-2">
                        <div class="font-medium text-gray-500">Sun</div>
                        <div class="font-medium text-gray-500">Mon</div>
                        <div class="font-medium text-gray-500">Tue</div>
                        <div class="font-medium text-gray-500">Wed</div>
                        <div class="font-medium text-gray-500">Thu</div>
                        <div class="font-medium text-gray-500">Fri</div>
                        <div class="font-medium text-gray-500">Sat</div>
                    </div>
                    <div class="grid grid-cols-7 gap-1 text-center text-sm">
                        <div class="py-2 text-gray-400">28</div>
                        <div class="py-2 text-gray-400">29</div>
                        <div class="py-2 text-gray-400">30</div>
                        <div class="py-2">1</div>
                        <div class="py-2">2</div>
                        <div class="py-2">3</div>
                        <div class="py-2">4</div>
                        <div class="py-2">5</div>
                        <div class="py-2">6</div>
                        <div class="py-2">7</div>
                        <div class="py-2">8</div>
                        <div class="py-2">9</div>
                        <div class="py-2">10</div>
                        <div class="py-2">11</div>
                        <div class="py-2">12</div>
                        <div class="py-2">13</div>
                        <div class="py-2">14</div>
                        <div class="py-2 bg-blue-100 rounded-full text-blue-600 font-bold">15</div>
                        <div class="py-2">16</div>
                        <div class="py-2">17</div>
                        <div class="py-2">18</div>
                        <div class="py-2">19</div>
                        <div class="py-2">20</div>
                        <div class="py-2">21</div>
                        <div class="py-2 bg-purple-100 rounded-full text-purple-600 font-bold">22</div>
                        <div class="py-2">23</div>
                        <div class="py-2">24</div>
                        <div class="py-2">25</div>
                        <div class="py-2">26</div>
                        <div class="py-2">27</div>
                        <div class="py-2">28</div>
                        <div class="py-2">29</div>
                        <div class="py-2 text-gray-400">1</div>
                        <div class="py-2 text-gray-400">2</div>
                    </div>
                </div>
            </div>

            <!-- Upcoming Events -->
            <div class="bg-white rounded-lg shadow-md p-6 mb-6">
                <h3 class="text-lg font-bold mb-4">Upcoming Highlights</h3>
                <div class="space-y-4">
                    <div class="flex items-start">
                        <div class="bg-blue-100 text-blue-600 p-2 rounded-lg mr-3">
                            <i class="fas fa-users"></i>
                        </div>
                        <div>
                            <h4 class="font-medium">Class of 2015 10-Year Reunion</h4>
                            <p class="text-sm text-gray-500">June 20, 2025 • Boston, MA</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <div class="bg-green-100 text-green-600 p-2 rounded-lg mr-3">
                            <i class="fas fa-graduation-cap"></i>
                        </div>
                        <div>
                            <h4 class="font-medium">Young Alumni Career Summit</h4>
                            <p class="text-sm text-gray-500">July 8-9, 2025 • Virtual</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <div class="bg-purple-100 text-purple-600 p-2 rounded-lg mr-3">
                            <i class="fas fa-globe-americas"></i>
                        </div>
                        <div>
                            <h4 class="font-medium">International Alumni Meetup</h4>
                            <p class="text-sm text-gray-500">Various Dates • Global</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Newsletter -->
            <div class="bg-blue-50 rounded-lg shadow-md p-6">
                <h3 class="text-lg font-bold mb-2">Stay Updated</h3>
                <p class="text-gray-600 mb-4">Get the latest event announcements delivered to your inbox.</p>
                <div class="flex">
                    <input type="email" placeholder="Your email" class="flex-1 px-4 py-2 rounded-l-lg border focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <button class="bg-blue-600 text-white px-4 py-2 rounded-r-lg hover:bg-blue-700 transition-all">
                        <i class="fas fa-paper-plane"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
