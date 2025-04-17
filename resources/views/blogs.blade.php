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
    .blog-card {
        height: 100%;
        display: flex;
        flex-direction: column;
    }
    .blog-content {
        flex-grow: 1;
    }
</style>
 <!-- Hero Section -->
 <div class="gradient-bg text-white py-20 px-4 text-center">
    <div class="container mx-auto">
        <h1 class="text-4xl md:text-5xl font-bold mb-4">Alumni Blog</h1>
        <p class="text-xl max-w-2xl mx-auto">Insights, stories, and advice from our global alumni community</p>
    </div>
</div>

<!-- Main Content -->
<div class="container mx-auto px-4 py-12">
    <!-- Featured Post -->
    <div class="bg-white rounded-xl shadow-md overflow-hidden mb-12 transition-all card-hover">
        <div class="md:flex">
            <div class="md:w-1/2">
                <img src="https://images.unsplash.com/photo-1542744173-8e7e53415bb0?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="Featured Post" class="w-full h-full object-cover">
            </div>
            <div class="md:w-1/2 p-8">
                <div class="flex items-center mb-4">
                    <span class="bg-blue-100 text-blue-800 text-xs px-2 py-1 rounded-full">Featured</span>
                    <span class="text-gray-500 text-sm ml-3">June 12, 2025</span>
                </div>
                <h2 class="text-3xl font-bold mb-4">How Alumni Connections Helped Launch My Startup</h2>
                <p class="text-gray-600 mb-6">Sarah Thompson (Class of 2015) shares how alumni mentors and investors from our network were instrumental in scaling her tech startup to a $10M valuation in just three years.</p>
                <div class="flex items-center">
                    
                    <div>
                        <h4 class="font-medium">Robert Downey jr</h4>
                        <p class="text-gray-500 text-sm">Founder & CEO, TechSolutions</p>
                    </div>
                </div>
                <div class="mt-6">
                    <a href="#" class="text-blue-600 font-medium hover:text-blue-800 transition-all">
                        Read Full Story <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Blog Categories -->
    <div class="mb-12">
        <h2 class="text-2xl font-bold mb-6">Browse by Category</h2>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
            <a href="#" class="bg-blue-50 text-blue-600 p-6 rounded-lg text-center hover:bg-blue-100 transition-all">
                <i class="fas fa-briefcase text-2xl mb-3"></i>
                <h3 class="font-medium">Career Advice</h3>
            </a>
            <a href="#" class="bg-purple-50 text-purple-600 p-6 rounded-lg text-center hover:bg-purple-100 transition-all">
                <i class="fas fa-lightbulb text-2xl mb-3"></i>
                <h3 class="font-medium">Success Stories</h3>
            </a>
            <a href="#" class="bg-green-50 text-green-600 p-6 rounded-lg text-center hover:bg-green-100 transition-all">
                <i class="fas fa-globe text-2xl mb-3"></i>
                <h3 class="font-medium">Global Alumni</h3>
            </a>
            <a href="#" class="bg-yellow-50 text-yellow-600 p-6 rounded-lg text-center hover:bg-yellow-100 transition-all">
                <i class="fas fa-graduation-cap text-2xl mb-3"></i>
                <h3 class="font-medium">Campus News</h3>
            </a>
        </div>
    </div>

    <!-- Blog Posts Grid -->
    <div class="mb-12">
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-2xl font-bold">Latest Articles</h2>
            <div class="relative">
                <select class="border rounded-lg px-4 py-2 pr-8 focus:outline-none focus:ring-2 focus:ring-blue-500 appearance-none">
                    <option>Sort by: Newest</option>
                    <option>Sort by: Most Popular</option>
                    <option>Sort by: Oldest</option>
                </select>
                <i class="fas fa-chevron-down absolute right-3 top-3 text-gray-400 pointer-events-none"></i>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Blog Post 1 -->
            <div class="bg-white rounded-xl shadow-md overflow-hidden transition-all card-hover blog-card">
                <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80" alt="Career Transition" class="w-full h-48 object-cover">
                <div class="p-6 blog-content">
                    <div class="flex items-center mb-3">
                        <span class="bg-blue-100 text-blue-800 text-xs px-2 py-1 rounded-full">Career Advice</span>
                        <span class="text-gray-500 text-sm ml-3">May 28, 2025</span>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Navigating a Career Change After 10 Years in One Industry</h3>
                    <p class="text-gray-600 mb-4">Michael Chen shares his journey from finance to tech and the alumni resources that helped him make a successful transition.</p>
                    <div class="flex items-center mt-auto">
                    
                        <span class="text-sm text-gray-600">Michael Chen</span>
                        <span class="text-sm text-gray-400 ml-auto">8 min read</span>
                    </div>
                </div>
            </div>

            <!-- Blog Post 2 -->
            <div class="bg-white rounded-xl shadow-md overflow-hidden transition-all card-hover blog-card">
                <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80" alt="Global Network" class="w-full h-48 object-cover">
                <div class="p-6 blog-content">
                    <div class="flex items-center mb-3">
                        <span class="bg-purple-100 text-purple-800 text-xs px-2 py-1 rounded-full">Success Story</span>
                        <span class="text-gray-500 text-sm ml-3">May 20, 2025</span>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Building a Business Across Three Continents</h3>
                    <p class="text-gray-600 mb-4">How James wan leveraged alumni connections in London, Singapore, and San Francisco to grow her consulting firm.</p>
                    <div class="flex items-center mt-auto">
                      <span class="text-sm text-gray-600">James wan </span>
                        <span class="text-sm text-gray-400 ml-auto">12 min read</span>
                    </div>
                </div>
            </div>

            <!-- Blog Post 3 -->
            <div class="bg-white rounded-xl shadow-md overflow-hidden transition-all card-hover blog-card">
                <img src="https://images.unsplash.com/photo-1521791055366-0d553872125f?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80" alt="Mentorship" class="w-full h-48 object-cover">
                <div class="p-6 blog-content">
                    <div class="flex items-center mb-3">
                        <span class="bg-green-100 text-green-800 text-xs px-2 py-1 rounded-full">Global Alumni</span>
                        <span class="text-gray-500 text-sm ml-3">May 15, 2025</span>
                    </div>
                    <h3 class="text-xl font-bold mb-3">The Power of Reverse Mentorship</h3>
                    <p class="text-gray-600 mb-4">Recent graduate Jamal Williams shares how mentoring senior alumni in digital transformation benefited both parties.</p>
                    <div class="flex items-center mt-auto">
                     
                        <span class="text-sm text-gray-600">Jamal Williams</span>
                        <span class="text-sm text-gray-400 ml-auto">6 min read</span>
                    </div>
                </div>
            </div>

            <!-- Blog Post 4 -->
            <div class="bg-white rounded-xl shadow-md overflow-hidden transition-all card-hover blog-card">
                <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80" alt="Teamwork" class="w-full h-48 object-cover">
                <div class="p-6 blog-content">
                    <div class="flex items-center mb-3">
                        <span class="bg-yellow-100 text-yellow-800 text-xs px-2 py-1 rounded-full">Campus News</span>
                        <span class="text-gray-500 text-sm ml-3">May 8, 2025</span>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Alumni-Funded Scholarship Changes Lives</h3>
                    <p class="text-gray-600 mb-4">The impact of our alumni community's giving: meet three current students whose education was made possible by alumni donations.</p>
                    <div class="flex items-center mt-auto">
                       
                        <span class="text-sm text-gray-600">Lisa Park</span>
                        <span class="text-sm text-gray-400 ml-auto">10 min read</span>
                    </div>
                </div>
            </div>

            <!-- Blog Post 5 -->
            <div class="bg-white rounded-xl shadow-md overflow-hidden transition-all card-hover blog-card">
                <img src="https://images.unsplash.com/photo-1571260899304-425eee4c7efc?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80" alt="Remote Work" class="w-full h-48 object-cover">
                <div class="p-6 blog-content">
                    <div class="flex items-center mb-3">
                        <span class="bg-blue-100 text-blue-800 text-xs px-2 py-1 rounded-full">Career Advice</span>
                        <span class="text-gray-500 text-sm ml-3">May 2, 2025</span>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Thriving in Remote Work: Alumni Tips</h3>
                    <p class="text-gray-600 mb-4">Five alumni share their best practices for productivity, communication, and work-life balance in remote environments.</p>
                    <div class="flex items-center mt-auto">
                      
                        <span class="text-sm text-gray-600">David Kim</span>
                        <span class="text-sm text-gray-400 ml-auto">7 min read</span>
                    </div>
                </div>
            </div>

            <!-- Blog Post 6 -->
            <div class="bg-white rounded-xl shadow-md overflow-hidden transition-all card-hover blog-card">
                <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80" alt="Entrepreneurship" class="w-full h-48 object-cover">
                <div class="p-6 blog-content">
                    <div class="flex items-center mb-3">
                        <span class="bg-purple-100 text-purple-800 text-xs px-2 py-1 rounded-full">Success Story</span>
                        <span class="text-gray-500 text-sm ml-3">April 25, 2025</span>
                    </div>
                    <h3 class="text-xl font-bold mb-3">From Side Project to $1M Revenue</h3>
                    <p class="text-gray-600 mb-4">How alumni mentorship and our startup incubator helped Maria Gonzalez scale her passion project into a thriving business.</p>
                    <div class="flex items-center mt-auto">
                       
                        <span class="text-sm text-gray-600">Maria Gonzalez</span>
                        <span class="text-sm text-gray-400 ml-auto">14 min read</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Pagination -->
    <div class="flex justify-center">
        <nav class="inline-flex rounded-md shadow-sm">
            <a href="#" class="px-4 py-2 rounded-l-md border border-gray-300 bg-white text-gray-500 hover:bg-gray-50">
                Previous
            </a>
            <a href="#" class="px-4 py-2 border-t border-b border-gray-300 bg-white text-blue-600 font-medium">1</a>
            <a href="#" class="px-4 py-2 border border-gray-300 bg-white text-gray-500 hover:bg-gray-50">2</a>
            <a href="#" class="px-4 py-2 border border-gray-300 bg-white text-gray-500 hover:bg-gray-50">3</a>
            <span class="px-4 py-2 border border-gray-300 bg-white text-gray-500">...</span>
            <a href="#" class="px-4 py-2 border border-gray-300 bg-white text-gray-500 hover:bg-gray-50">8</a>
            <a href="#" class="px-4 py-2 rounded-r-md border border-gray-300 bg-white text-gray-500 hover:bg-gray-50">
                Next
            </a>
        </nav>
    </div>
</div>

<!-- Newsletter Section -->
<div class="bg-blue-50 py-16">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-3xl font-bold mb-4">Stay Connected</h2>
        <p class="text-xl text-gray-600 max-w-2xl mx-auto mb-8">Get the latest alumni stories and news delivered to your inbox every month.</p>
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
                <h4 class="font-semibold mb-4">Blog</h4>
                <ul class="space-y-2">
                    <li><a href="#" class="text-gray-400 hover:text-white transition-all">Latest Articles</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-white transition-all">Popular Posts</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-white transition-all">Submit a Story</a></li>
                </ul>
            </div>
            <div>
                <h4 class="font-semibold mb-4">Resources</h4>
                <ul class="space-y-2">
                    <li><a href="#" class="text-gray-400 hover:text-white transition-all">Career Services</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-white transition-all">Mentorship Program</a></li>
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
                <p class="text-gray-400 text-sm">Want to share your story? <a href="#" class="text-blue-400 hover:underline">Contact our editors</a></p>
            </div>
        </div>
        <div class="border-t border-gray-700 mt-8 pt-8 text-center text-gray-400">
            <p>© 2025 Alumni Network. All Rights Reserved.</p>
        </div>
    </div>
</footer>
@endsection