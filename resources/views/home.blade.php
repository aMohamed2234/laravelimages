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
</style>
<!-- Hero Section -->
<div class="gradient-bg text-white py-20 px-4">
    <div class="container mx-auto text-center">
        <h1 class="text-4xl md:text-5xl font-bold mb-6 animate__animated animate__fadeIn">Welcome to Our Alumni Network</h1>
        <p class="text-xl mb-8 max-w-2xl mx-auto">Stay connected, explore career opportunities, and engage with fellow alumni.</p>
        <button class="bg-white text-blue-600 font-bold py-3 px-8 rounded-full hover:bg-gray-100 transition-all">
            Join Our Community <i class="fas fa-arrow-right ml-2"></i>
        </button>
    </div>
</div>

<!-- Main Content -->
<div class="container mx-auto px-4 py-16">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <!-- Alumni Directory Card -->
        <div class="bg-white rounded-xl shadow-md overflow-hidden transition-all card-hover">
            <div class="p-6">
                <div class="flex items-center mb-4">
                    <div class="bg-blue-100 p-3 rounded-full">
                        <i class="fas fa-users text-blue-600 text-xl"></i>
                    </div>
                    <h2 class="text-xl font-semibold ml-4">Alumni Directory</h2>
                </div>
                <p class="text-gray-600 mb-6">Find and reconnect with fellow alumni. Browse profiles, make connections, and grow your network.</p>
                <div class="flex justify-between items-center">
                    <button class="text-blue-600 font-medium hover:text-blue-800 transition-all">
                        View Directory <i class="fas fa-chevron-right ml-1"></i>
                    </button>
                    <span class="text-gray-400">3,452+ Alumni</span>
                </div>
            </div>
        </div>

        <!-- Upcoming Events Card -->
        <div class="bg-white rounded-xl shadow-md overflow-hidden transition-all card-hover">
            <div class="p-6">
                <div class="flex items-center mb-4">
                    <div class="bg-purple-100 p-3 rounded-full">
                        <i class="fas fa-calendar-alt text-purple-600 text-xl"></i>
                    </div>
                    <h2 class="text-xl font-semibold ml-4">Upcoming Events</h2>
                </div>
                <p class="text-gray-600 mb-6">Stay updated on alumni reunions, career workshops, and networking events happening soon.</p>
                <div class="flex justify-between items-center">
                    <button class="text-purple-600 font-medium hover:text-purple-800 transition-all">
                        View Events <i class="fas fa-chevron-right ml-1"></i>
                    </button>
                    <span class="text-gray-400">12 Events</span>
                </div>
            </div>
        </div>

        <!-- Job Board Card -->
        <div class="bg-white rounded-xl shadow-md overflow-hidden transition-all card-hover">
            <div class="p-6">
                <div class="flex items-center mb-4">
                    <div class="bg-green-100 p-3 rounded-full">
                        <i class="fas fa-briefcase text-green-600 text-xl"></i>
                    </div>
                    <h2 class="text-xl font-semibold ml-4">Job Board</h2>
                </div>
                <p class="text-gray-600 mb-6">Explore career opportunities posted by alumni and partner companies. Take the next step in your career.</p>
                <div class="flex justify-between items-center">
                    <button class="text-green-600 font-medium hover:text-green-800 transition-all">
                        View Jobs <i class="fas fa-chevron-right ml-1"></i>
                    </button>
                    <span class="text-gray-400">86 Openings</span>
                </div>
            </div>
        </div>

        <!-- New Card: Mentorship Program -->
        <div class="bg-white rounded-xl shadow-md overflow-hidden transition-all card-hover">
            <div class="p-6">
                <div class="flex items-center mb-4">
                    <div class="bg-yellow-100 p-3 rounded-full">
                        <i class="fas fa-hands-helping text-yellow-600 text-xl"></i>
                    </div>
                    <h2 class="text-xl font-semibold ml-4">Mentorship Program</h2>
                </div>
                <p class="text-gray-600 mb-6">Connect with experienced alumni mentors or offer guidance to recent graduates.</p>
                <div class="flex justify-between items-center">
                    <button class="text-yellow-600 font-medium hover:text-yellow-800 transition-all">
                        Learn More <i class="fas fa-chevron-right ml-1"></i>
                    </button>
                    <span class="text-gray-400">142 Mentors</span>
                </div>
            </div>
        </div>

        <!-- New Card: Alumni Stories -->
        <div class="bg-white rounded-xl shadow-md overflow-hidden transition-all card-hover">
            <div class="p-6">
                <div class="flex items-center mb-4">
                    <div class="bg-red-100 p-3 rounded-full">
                        <i class="fas fa-book-open text-red-600 text-xl"></i>
                    </div>
                    <h2 class="text-xl font-semibold ml-4">Alumni Stories</h2>
                </div>
                <p class="text-gray-600 mb-6">Read inspiring success stories from fellow alumni and share your own journey.</p>
                <div class="flex justify-between items-center">
                    <button class="text-red-600 font-medium hover:text-red-800 transition-all">
                        Read Stories <i class="fas fa-chevron-right ml-1"></i>
                    </button>
                    <span class="text-gray-400">64 Stories</span>
                </div>
            </div>
        </div>

        <!-- New Card: Giving Back -->
        <div class="bg-white rounded-xl shadow-md overflow-hidden transition-all card-hover">
            <div class="p-6">
                <div class="flex items-center mb-4">
                    <div class="bg-indigo-100 p-3 rounded-full">
                        <i class="fas fa-hand-holding-heart text-indigo-600 text-xl"></i>
                    </div>
                    <h2 class="text-xl font-semibold ml-4">Giving Back</h2>
                </div>
                <p class="text-gray-600 mb-6">Support current students through scholarships, donations, or volunteering opportunities.</p>
                <div class="flex justify-between items-center">
                    <button class="text-indigo-600 font-medium hover:text-indigo-800 transition-all">
                        Get Involved <i class="fas fa-chevron-right ml-1"></i>
                    </button>
                    <span class="text-gray-400">$1.2M Raised</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Stats Section -->
    <div class="bg-gradient-to-r from-blue-500 to-purple-600 rounded-xl shadow-lg mt-16 p-8 text-white">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 text-center">
            <div class="p-4">
                <div class="text-3xl font-bold mb-2">10K+</div>
                <div class="text-sm opacity-80">Alumni Members</div>
            </div>
            <div class="p-4">
                <div class="text-3xl font-bold mb-2">85+</div>
                <div class="text-sm opacity-80">Countries Represented</div>
            </div>
            <div class="p-4">
                <div class="text-3xl font-bold mb-2">1.2K+</div>
                <div class="text-sm opacity-80">Mentorship Connections</div>
            </div>
            <div class="p-4">
                <div class="text-3xl font-bold mb-2">500+</div>
                <div class="text-sm opacity-80">Companies Hiring</div>
            </div>
        </div>
    </div>

    <!-- Testimonial Section -->
    <div class="mt-16">
        <h2 class="text-2xl font-bold text-center mb-8">What Our Alumni Say</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="bg-white p-6 rounded-lg shadow-md">
                <div class="flex items-center mb-4">
                  
                    <div>
                        <h4 class="font-semibold">Dwayne Johnson</h4>
                        <p class="text-gray-500 text-sm">Class of 2015</p>
                    </div>
                </div>
                <p class="text-gray-600">"The alumni network helped me find my current job and connect with mentors who guided me through my career transition."</p>
                <div class="mt-4 text-yellow-400">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-md">
                <div class="flex items-center mb-4">
                  
                    <div>
                        <h4 class="font-semibold">Jason Momoa</h4>
                        <p class="text-gray-500 text-sm">Class of 2018</p>
                    </div>
                </div>
                <p class="text-gray-600">"I've met incredible people through the alumni events and even found co-founders for my startup through this network."</p>
                <div class="mt-4 text-yellow-400">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-md">
                <div class="flex items-center mb-4">
                   
                    <div>
                        <h4 class="font-semibold">Kevin Hart</h4>
                        <p class="text-gray-500 text-sm">Class of 2020</p>
                    </div>
                </div>
                <p class="text-gray-600">"As a recent graduate, the mentorship program provided invaluable guidance that helped me navigate my first years in the industry."</p>
                <div class="mt-4 text-yellow-400">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Footer -->
<footer class="bg-gray-800 text-white py-12 mt-16">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
            <div>
                <h3 class="text-xl font-semibold mb-4">Alumni Network</h3>
                <p class="text-gray-400">Connecting graduates across generations and geographies.</p>
            </div>
            <div>
                <h4 class="font-semibold mb-4">Quick Links</h4>
                <ul class="space-y-2">
                    <li><a href="#" class="text-gray-400 hover:text-white transition-all">Directory</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-white transition-all">Events</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-white transition-all">Jobs</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-white transition-all">Mentorship</a></li>
                </ul>
            </div>
            <div>
                <h4 class="font-semibold mb-4">Resources</h4>
                <ul class="space-y-2">
                    <li><a href="#" class="text-gray-400 hover:text-white transition-all">Career Services</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-white transition-all">Alumni Benefits</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-white transition-all">Volunteer</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-white transition-all">FAQ</a></li>
                </ul>
            </div>
            <div>
                <h4 class="font-semibold mb-4">Connect With Us</h4>
                <div class="flex space-x-4">
                    <a href="#" class="text-gray-400 hover:text-white text-xl transition-all"><i class="fab fa-facebook"></i></a>
                    <a href="#" class="text-gray-400 hover:text-white text-xl transition-all"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="text-gray-400 hover:text-white text-xl transition-all"><i class="fab fa-linkedin"></i></a>
                    <a href="#" class="text-gray-400 hover:text-white text-xl transition-all"><i class="fab fa-instagram"></i></a>
                </div>
                <p class="mt-4 text-gray-400">Subscribe to our newsletter</p>
                <div class="mt-2 flex">
                    <input type="email" placeholder="Your email" class="px-3 py-2 rounded-l text-gray-800 w-full">
                    <button class="bg-blue-600 px-4 py-2 rounded-r hover:bg-blue-700 transition-all">
                        <i class="fas fa-paper-plane"></i>
                    </button>
                </div>
            </div>
        </div>
        <div class="border-t border-gray-700 mt-8 pt-8 text-center text-gray-400">
            <p>© 2025 Alumni Network. All rights reserved.</p>
        </div>
@endsection
