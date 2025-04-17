@extends('layouts.reusable')

@section('content')

<style>
    .gradient-bg {
        background: linear-gradient(135deg, #6B73FF 0%, #000DFF 100%);
    }
    .card-hover:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
    }
    .transition-all {
        transition: all 0.3s ease;
    }
    .event-card {
        border-left: 4px solid;
    }
</style>
<!-- Hero Section -->
<div class="gradient-bg text-white py-16 px-4">
    <div class="container mx-auto">
        <h1 class="text-4xl md:text-5xl font-bold mb-4 text-center">Our Upcoming Alumni Events</h1>
        <p class="text-xl max-auto text-center">Connect with fellow alumni at reunions, workshops, and networking events around the world.</p>
    </div>
</div>


  <!-- Main Content -->
  <div class="container mx-auto px-4 py-12">
    <!-- Filter Options -->
    <div class="bg-white rounded-lg shadow-sm p-6 mb-8">
        <div class="flex flex-col md:flex-row md:items-center justify-between gap-4">
            <div class="flex-1">
                <div class="relative">
                    <input type="text" placeholder="Search events..." class="w-full pl-10 pr-4 py-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <i class="fas fa-search absolute left-3 top-4 text-gray-400"></i>
                </div>
            </div>
            <div class="flex flex-wrap gap-3">
                <select class="border rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <option>All Event Types</option>
                    <option>Reunions</option>
                    <option>Workshops</option>
                    <option>Networking</option>
                    <option>Career Fairs</option>
                </select>
                <select class="border rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <option>All Locations</option>
                    <option>Asia</option>
                    <option>Africa</option>
                    <option>North America</option>
                    <option>South America</option>
                    <option>Europe</option>
                </select>
                <select class="border rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <option>All Dates</option>
                    <option>This Month</option>
                    <option>Next Month</option>
                    <option>Next 3 Months</option>
                </select>
            </div>
        </div>
    </div>

    <!-- Events Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <!-- Event 1 -->
        <div class="bg-white rounded-xl shadow-md overflow-hidden transition-all card-hover">
            <div class="relative">
                <img src="https://images.unsplash.com/photo-1527529482837-4698179dc6ce?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80" alt="Alumni Reunion" class="w-full h-48 object-cover">
            
            </div>
            <div class="p-6">
                <div class="flex items-start mb-4">
                    <div class="event-date bg-blue-100 text-blue-600 flex flex-col items-center justify-center rounded-lg mr-4">
                        <span class="text-2xl font-bold">15</span>
                        <span class="text-sm">MAY</span>
                    </div>
                    <div>
                        <h3 class="text-xl font-bold">Annual Alumni Reunion 2025</h3>
                        <div class="flex items-center text-gray-600 mt-1">
                            <i class="fas fa-map-marker-alt mr-2"></i>
                            <span>Grand Hyatt, New York</span>
                        </div>
                    </div>
                </div>
                <p class="text-gray-600 mb-4">Join us for our biggest reunion event of the year! Reconnect with old friends and meet new alumni.</p>
                <div class="flex flex-wrap gap-2 mb-4">
                    <span class="bg-gray-100 text-gray-800 text-xs px-2 py-1 rounded-full">Social</span>
                    <span class="bg-gray-100 text-gray-800 text-xs px-2 py-1 rounded-full">Networking</span>
                    <span class="bg-gray-100 text-gray-800 text-xs px-2 py-1 rounded-full">Dinner</span>
                </div>
                <div class="flex justify-between items-center">
                    <div class="flex items-center">
                        <div class="flex -space-x-2">
                           
                            <div class="w-8 h-8 rounded-full border-2 border-white bg-gray-100 flex items-center justify-center text-xs font-medium">+42</div>
                        </div>
                        <span class="text-sm text-gray-500 ml-2">Attending</span>
                    </div>
                  
                </div>
            </div>
        </div>

        <!-- Event 2 -->
        <div class="bg-white rounded-xl shadow-md overflow-hidden transition-all card-hover">
            <div class="relative">
                <img src="https://images.unsplash.com/photo-1571260899304-425eee4c7efc?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80" alt="Career Workshop" class="w-full h-48 object-cover">
               
            </div>
            <div class="p-6">
                <div class="flex items-start mb-4">
                    <div class="event-date bg-purple-100 text-purple-600 flex flex-col items-center justify-center rounded-lg mr-4">
                        <span class="text-2xl font-bold">22</span>
                        <span class="text-sm">MAY</span>
                    </div>
                    <div>
                        <h3 class="text-xl font-bold">Career Transition Workshop</h3>
                        <div class="flex items-center text-gray-600 mt-1">
                            <i class="fas fa-video mr-2"></i>
                            <span>Online (Zoom)</span>
                        </div>
                    </div>
                </div>
                <p class="text-gray-600 mb-4">Learn strategies for successful career transitions from alumni who've made major career changes.</p>
                <div class="flex flex-wrap gap-2 mb-4">
                    <span class="bg-gray-100 text-gray-800 text-xs px-2 py-1 rounded-full">Workshop</span>
                    <span class="bg-gray-100 text-gray-800 text-xs px-2 py-1 rounded-full">Career</span>
                    <span class="bg-gray-100 text-gray-800 text-xs px-2 py-1 rounded-full">Panel</span>
                </div>
                <div class="flex justify-between items-center">
                    <div class="flex items-center">
                        <div class="flex -space-x-2">
                        
                            <div class="w-8 h-8 rounded-full border-2 border-white bg-gray-100 flex items-center justify-center text-xs font-medium">+28</div>
                        </div>
                        <span class="text-sm text-gray-500 ml-2">Attending</span>
                    </div>
                  
                </div>
            </div>
        </div>

        <!-- Event 3 -->
        <div class="bg-white rounded-xl shadow-md overflow-hidden transition-all card-hover">
            <div class="relative">
                <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80" alt="Tech Mixer" class="w-full h-48 object-cover">
            
            </div>
            <div class="p-6">
                <div class="flex items-start mb-4">
                    <div class="event-date bg-green-100 text-green-600 flex flex-col items-center justify-center rounded-lg mr-4">
                        <span class="text-2xl font-bold">05</span>
                        <span class="text-sm">JUN</span>
                    </div>
                    <div>
                        <h3 class="text-xl font-bold">Tech Alumni Networking Mixer</h3>
                        <div class="flex items-center text-gray-600 mt-1">
                            <i class="fas fa-map-marker-alt mr-2"></i>
                            <span>Innovation Hub, San Francisco</span>
                        </div>
                    </div>
                </div>
                <p class="text-gray-600 mb-4">An evening of networking for alumni in the tech industry. Meet founders, engineers, and product managers.</p>
                <div class="flex flex-wrap gap-2 mb-4">
                    <span class="bg-gray-100 text-gray-800 text-xs px-2 py-1 rounded-full">Technology</span>
                    <span class="bg-gray-100 text-gray-800 text-xs px-2 py-1 rounded-full">Startups</span>
                    <span class="bg-gray-100 text-gray-800 text-xs px-2 py-1 rounded-full">Networking</span>
                </div>
                <div class="flex justify-between items-center">
                    <div class="flex items-center">
                        <div class="flex -space-x-2">
                            
                            <div class="w-8 h-8 rounded-full border-2 border-white bg-gray-100 flex items-center justify-center text-xs font-medium">+56</div>
                        </div>
                        <span class="text-sm text-gray-500 ml-2">Attending</span>
                    </div>
               
                </div>
            </div>
        </div>

        <!-- Event 4 -->
        <div class="bg-white rounded-xl shadow-md overflow-hidden transition-all card-hover">
            <div class="relative">
                <img src="https://images.unsplash.com/photo-1576091160550-2173dba999ef?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80" alt="Healthcare Panel" class="w-full h-48 object-cover">
                
            </div>
            <div class="p-6">
                <div class="flex items-start mb-4">
                    <div class="event-date bg-yellow-100 text-yellow-600 flex flex-col items-center justify-center rounded-lg mr-4">
                        <span class="text-2xl font-bold">12</span>
                        <span class="text-sm">JUN</span>
                    </div>
                    <div>
                        <h3 class="text-xl font-bold">Leadership in Healthcare Panel</h3>
                        <div class="flex items-center text-gray-600 mt-1">
                            <i class="fas fa-video mr-2"></i>
                            <span>Online Webinar</span>
                        </div>
                    </div>
                </div>
                <p class="text-gray-600 mb-4">Hear from alumni leaders in healthcare about challenges and opportunities in today's healthcare landscape.</p>
                <div class="flex flex-wrap gap-2 mb-4">
                    <span class="bg-gray-100 text-gray-800 text-xs px-2 py-1 rounded-full">Healthcare</span>
                    <span class="bg-gray-100 text-gray-800 text-xs px-2 py-1 rounded-full">Leadership</span>
                    <span class="bg-gray-100 text-gray-800 text-xs px-2 py-1 rounded-full">Panel</span>
                </div>
                <div class="flex justify-between items-center">
                    <div class="flex items-center">
                        <div class="flex -space-x-2">
                            
                            <div class="w-8 h-8 rounded-full border-2 border-white bg-gray-100 flex items-center justify-center text-xs font-medium">+19</div>
                        </div>
                        <span class="text-sm text-gray-500 ml-2">Attending</span>
                    </div>
                   
                </div>
            </div>
        </div>

        <!-- Event 5 -->
        <div class="bg-white rounded-xl shadow-md overflow-hidden transition-all card-hover">
            <div class="relative">
                <img src="https://images.unsplash.com/photo-1521791055366-0d553872125f?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80" alt="Young Alumni" class="w-full h-48 object-cover">
                
            </div>
            <div class="p-6">
                <div class="flex items-start mb-4">
                    <div class="event-date bg-red-100 text-red-600 flex flex-col items-center justify-center rounded-lg mr-4">
                        <span class="text-2xl font-bold">08</span>
                        <span class="text-sm">JUL</span>
                    </div>
                    <div>
                        <h3 class="text-xl font-bold">Young Alumni Career Summit</h3>
                        <div class="flex items-center text-gray-600 mt-1">
                            <i class="fas fa-map-marker-alt mr-2"></i>
                            <span>Chicago & Online</span>
                        </div>
                    </div>
                </div>
                <p class="text-gray-600 mb-4">Two-day summit for recent graduates featuring career workshops, networking, and alumni panels.</p>
                <div class="flex flex-wrap gap-2 mb-4">
                    <span class="bg-gray-100 text-gray-800 text-xs px-2 py-1 rounded-full">Career</span>
                    <span class="bg-gray-100 text-gray-800 text-xs px-2 py-1 rounded-full">Workshop</span>
                    <span class="bg-gray-100 text-gray-800 text-xs px-2 py-1 rounded-full">Summit</span>
                </div>
                <div class="flex justify-between items-center">
                    <div class="flex items-center">
                        <div class="flex -space-x-2">
                           
                            <div class="w-8 h-8 rounded-full border-2 border-white bg-gray-100 flex items-center justify-center text-xs font-medium">+31</div>
                        </div>
                        <span class="text-sm text-gray-500 ml-2">Attending</span>
                    </div>
                   
                </div>
            </div>
        </div>

        <!-- Event 6 -->
        <div class="bg-white rounded-xl shadow-md overflow-hidden transition-all card-hover">
            <div class="relative">
                <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80" alt="Global Meetup" class="w-full h-48 object-cover">
                
            </div>
            <div class="p-6">
                <div class="flex items-start mb-4">
                    <div class="event-date bg-indigo-100 text-indigo-600 flex flex-col items-center justify-center rounded-lg mr-4">
                        <span class="text-2xl font-bold">15</span>
                        <span class="text-sm">AUG</span>
                    </div>
                    <div>
                        <h3 class="text-xl font-bold">International Alumni Meetup</h3>
                        <div class="flex items-center text-gray-600 mt-1">
                            <i class="fas fa-globe mr-2"></i>
                            <span>20+ Cities Worldwide</span>
                        </div>
                    </div>
                </div>
                <p class="text-gray-600 mb-4">Join fellow alumni in your city for an evening of networking and connection.</p>
                <div class="flex flex-wrap gap-2 mb-4">
                    <span class="bg-gray-100 text-gray-800 text-xs px-2 py-1 rounded-full">Global</span>
                    <span class="bg-gray-100 text-gray-800 text-xs px-2 py-1 rounded-full">Networking</span>
                    <span class="bg-gray-100 text-gray-800 text-xs px-2 py-1 rounded-full">Social</span>
                </div>
                <div class="flex justify-between items-center">
                    <div class="flex items-center">
                        <div class="flex -space-x-2">
                           
                            
                            <div class="w-8 h-8 rounded-full border-2 border-white bg-gray-100 flex items-center justify-center text-xs font-medium">+87</div>
                        </div>
                        <span class="text-sm text-gray-500 ml-2">Attending</span>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>

   
</div>

<!-- Newsletter Section -->
<div class="bg-blue-50 py-16">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-3xl font-bold mb-4">Never Miss an Event</h2>
        <p class="text-xl text-gray-600 max-w-2xl mx-auto mb-8">Subscribe to our newsletter and get the latest event updates delivered to your inbox.</p>
        <div class="max-w-md mx-auto flex">
            <input type="email" placeholder="Your email address" class="flex-1 px-4 py-3 rounded-l-lg border focus:outline-none focus:ring-2 focus:ring-blue-500">
            <button class="bg-blue-600 text-white px-6 py-3 rounded-r-lg hover:bg-blue-700 transition-all">
                Subscribe
            </button>
        </div>
    </div>
</div>

<!-- Footer -->
<footer class="bg-gray-800 text-white py-12">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
            <div>
                <h3 class="text-xl font-semibold mb-4">Alumni Network</h3>
                <p class="text-gray-400">Connecting graduates across generations and geographies.</p>
            </div>
            <div>
                <h4 class="font-semibold mb-4">Events</h4>
                <ul class="space-y-2">
                    <li><a href="#" class="text-gray-400 hover:text-white transition-all">Upcoming Events</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-white transition-all">Past Events</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-white transition-all">Submit an Event</a></li>
                </ul>
            </div>
            <div>
                <h4 class="font-semibold mb-4">Resources</h4>
                <ul class="space-y-2">
                    <li><a href="#" class="text-gray-400 hover:text-white transition-all">Event Photos</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-white transition-all">Speaker Recordings</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-white transition-all">FAQs</a></li>
                </ul>
            </div>
            <div>
                <h4 class="font-semibold mb-4">Connect</h4>
                <div class="flex space-x-4 mb-4">
                    <a href="#" class="text-gray-400 hover:text-white text-xl transition-all"><i class="fab fa-facebook"></i></a>
                    <a href="#" class="text-gray-400 hover:text-white text-xl transition-all"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="text-gray-400 hover:text-white text-xl transition-all"><i class="fab fa-linkedin"></i></a>
                    <a href="#" class="text-gray-400 hover:text-white text-xl transition-all"><i class="fab fa-instagram"></i></a>
                </div>
                <p class="text-gray-400 text-sm">Need help? <a href="#" class="text-blue-400 hover:underline">Contact our team</a></p>
            </div>
        </div>
        <div class="border-t border-gray-700 mt-8 pt-8 text-center text-gray-400">
            <p>© 2025 Alumni Network. All Rights Reserved.</p>
        </div>
    </div>
</footer>
@endsection
