<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bucket List Tracker - Complete UI</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.1/chart.min.js"></script>
</head>

<body class="bg-gray-50">
    <!-- Navigation -->
    <nav class="bg-white shadow-sm border-b border-gray-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <img src="{{ asset('logo.png') }}" alt="Logo" class="h-10">
                    <h1 class="text-2xl font-bold text-indigo-600 cursor-pointer" onclick="showPage('dashboard')">
                        DreamStack</h1>
                </div>
                <div class="flex items-center space-x-4">
                    <button onclick="showPage('dashboard')"
                        class="nav-btn text-gray-600 hover:text-gray-900 px-3 py-2 rounded-md text-sm font-medium">Dashboard</button>
                    <button onclick="showPage('goals')"
                        class="nav-btn text-gray-600 hover:text-gray-900 px-3 py-2 rounded-md text-sm font-medium">My
                        Goals</button>
                    <button onclick="showPage('reports')"
                        class="nav-btn text-gray-600 hover:text-gray-900 px-3 py-2 rounded-md text-sm font-medium">Reports</button>
                    <button onclick="showPage('profile')"
                        class="nav-btn text-gray-600 hover:text-gray-900 px-3 py-2 rounded-md text-sm font-medium">Profile</button>
                    <div class="flex items-center space-x-3 border-l pl-4">
                        <div class="w-8 h-8 bg-indigo-500 rounded-full flex items-center justify-center text-white font-semibold cursor-pointer"
                            onclick="showPage('profile')">JD</div>
                        <button onclick="showPage('login')"
                            class="text-gray-600 hover:text-gray-900 text-sm">Logout</button>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- LOGIN PAGE -->
    <div id="loginPage" class="page-content hidden">
        <div class="min-h-screen flex items-center justify-center px-4">
            <div class="max-w-md w-full">
                <div class="text-center mb-8">
                    <h1 class="text-4xl font-bold text-indigo-600 mb-2"> DreamStack</h1>
                    <p class="text-gray-600">Track your dreams and make them reality</p>
                </div>

                <div class="bg-white rounded-lg shadow-lg border border-gray-200 p-8">
                    <h2 class="text-2xl font-bold text-gray-900 mb-6">Welcome Back</h2>

                    <form class="space-y-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Email Address</label>
                            <input type="email"
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent"
                                placeholder="john@example.com">
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Password</label>
                            <input type="password"
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent"
                                placeholder="••••••••">
                        </div>

                        <div class="flex items-center justify-between">
                            <label class="flex items-center">
                                <input type="checkbox"
                                    class="rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                <span class="ml-2 text-sm text-gray-600">Remember me</span>
                            </label>
                            <a href="#" class="text-sm text-indigo-600 hover:text-indigo-800">Forgot password?</a>
                        </div>

                        <button type="button" onclick="showPage('dashboard')"
                            class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-2 px-4 rounded-lg transition duration-200">
                            Sign In
                        </button>
                    </form>

                    <div class="mt-6 text-center">
                        <p class="text-sm text-gray-600">Don't have an account? <a href="#"
                                onclick="showPage('register')"
                                class="text-indigo-600 hover:text-indigo-800 font-medium">Sign Up</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- REGISTER PAGE -->
    <div id="registerPage" class="page-content hidden">
        <div class="min-h-screen flex items-center justify-center px-4 py-12">
            <div class="max-w-md w-full">
                <div class="text-center mb-8">
                    <h1 class="text-4xl font-bold text-indigo-600 mb-2">🎯 DreamStack</h1>
                    <p class="text-gray-600">Start your journey today</p>
                </div>

                <div class="bg-white rounded-lg shadow-lg border border-gray-200 p-8">
                    <h2 class="text-2xl font-bold text-gray-900 mb-6">Create Account</h2>

                    <form class="space-y-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Full Name</label>
                            <input type="text"
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent"
                                placeholder="John Doe">
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Email Address</label>
                            <input type="email"
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent"
                                placeholder="john@example.com">
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Password</label>
                            <input type="password"
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent"
                                placeholder="••••••••">
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Confirm Password</label>
                            <input type="password"
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent"
                                placeholder="••••••••">
                        </div>

                        <div class="flex items-center">
                            <input type="checkbox"
                                class="rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                            <span class="ml-2 text-sm text-gray-600">I agree to the Terms of Service and Privacy
                                Policy</span>
                        </div>

                        <button type="button" onclick="showPage('dashboard')"
                            class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-2 px-4 rounded-lg transition duration-200">
                            Create Account
                        </button>
                    </form>

                    <div class="mt-6 text-center">
                        <p class="text-sm text-gray-600">Already have an account? <a href="#"
                                onclick="showPage('login')"
                                class="text-indigo-600 hover:text-indigo-800 font-medium">Sign In</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- DASHBOARD PAGE -->
    <div id="dashboardPage" class="page-content">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
            <div class="mb-8">
                <h2 class="text-3xl font-bold text-gray-900">Welcome back, John! 👋</h2>
                <p class="text-gray-600 mt-1">Track your dreams and make them reality</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
                <div class="bg-white rounded-lg shadow-sm p-6 border border-gray-200">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm font-medium text-gray-600">Total Goals</p>
                            <p class="text-3xl font-bold text-gray-900 mt-2">24</p>
                        </div>
                        <div class="w-12 h-12 bg-indigo-100 rounded-lg flex items-center justify-center">
                            <span class="text-2xl">🎯</span>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-lg shadow-sm p-6 border border-gray-200">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm font-medium text-gray-600">Completed</p>
                            <p class="text-3xl font-bold text-green-600 mt-2">8</p>
                        </div>
                        <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center">
                            <span class="text-2xl">✅</span>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-lg shadow-sm p-6 border border-gray-200">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm font-medium text-gray-600">In Progress</p>
                            <p class="text-3xl font-bold text-blue-600 mt-2">12</p>
                        </div>
                        <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center">
                            <span class="text-2xl">⏳</span>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-lg shadow-sm p-6 border border-gray-200">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm font-medium text-gray-600">Badges Earned</p>
                            <p class="text-3xl font-bold text-yellow-600 mt-2">5</p>
                        </div>
                        <div class="w-12 h-12 bg-yellow-100 rounded-lg flex items-center justify-center">
                            <span class="text-2xl">🏆</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                <div class="lg:col-span-2">
                    <div class="mb-6">
                        <button onclick="toggleModal()"
                            class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-3 px-4 rounded-lg shadow-md transition duration-200 flex items-center justify-center">
                            <span class="text-xl mr-2">+</span> Add New Goal
                        </button>
                    </div>

                    <div class="bg-white rounded-lg shadow-sm border border-gray-200 mb-6">
                        <div class="flex border-b border-gray-200">
                            <button
                                class="flex-1 py-3 px-4 text-center font-medium text-indigo-600 border-b-2 border-indigo-600">All
                                Goals</button>
                            <button
                                class="flex-1 py-3 px-4 text-center font-medium text-gray-600 hover:text-gray-900">In
                                Progress</button>
                            <button
                                class="flex-1 py-3 px-4 text-center font-medium text-gray-600 hover:text-gray-900">Completed</button>
                        </div>
                    </div>

                    <div class="space-y-4">
                        <div
                            class="bg-white rounded-lg shadow-sm border border-gray-200 p-6 hover:shadow-md transition duration-200">
                            <div class="flex items-start justify-between mb-4">
                                <div class="flex-1">
                                    <div class="flex items-center space-x-2 mb-2">
                                        <h3 class="text-lg font-bold text-gray-900">Learn to play guitar</h3>
                                        <span
                                            class="bg-blue-100 text-blue-800 text-xs font-semibold px-2.5 py-0.5 rounded">In
                                            Progress</span>
                                    </div>
                                    <p class="text-sm text-gray-600">Master basic chords and play my first song</p>
                                    <p class="text-xs text-gray-500 mt-2">📅 Deadline: Dec 31, 2025</p>
                                </div>
                            </div>

                            <div class="mb-3">
                                <div class="flex justify-between text-sm mb-1">
                                    <span class="text-gray-600">Progress</span>
                                    <span class="font-semibold text-indigo-600">65%</span>
                                </div>
                                <div class="w-full bg-gray-200 rounded-full h-2">
                                    <div class="bg-indigo-600 h-2 rounded-full" style="width: 65%"></div>
                                </div>
                            </div>

                            <div class="flex items-center justify-between text-sm">
                                <span class="text-gray-600">3 of 5 milestones completed</span>
                                <button onclick="showPage('goaldetail')"
                                    class="text-indigo-600 hover:text-indigo-800 font-medium">View Details</button>
                            </div>
                        </div>

                        <div
                            class="bg-white rounded-lg shadow-sm border border-gray-200 p-6 hover:shadow-md transition duration-200">
                            <div class="flex items-start justify-between mb-4">
                                <div class="flex-1">
                                    <div class="flex items-center space-x-2 mb-2">
                                        <h3 class="text-lg font-bold text-gray-900">Visit Japan</h3>
                                        <span
                                            class="bg-green-100 text-green-800 text-xs font-semibold px-2.5 py-0.5 rounded">Completed</span>
                                    </div>
                                    <p class="text-sm text-gray-600">Experience cherry blossoms in Tokyo</p>
                                </div>
                            </div>

                            <div class="mb-3">
                                <div class="w-full bg-gray-200 rounded-full h-2">
                                    <div class="bg-green-600 h-2 rounded-full" style="width: 100%"></div>
                                </div>
                            </div>

                            <div class="flex items-center space-x-2 mb-3">
                                <img src="https://images.unsplash.com/photo-1524413840807-0c3cb6fa808d?w=100&h=100&fit=crop"
                                    alt="Japan" class="w-16 h-16 rounded object-cover">
                                <img src="https://images.unsplash.com/photo-1528164344705-47542687000d?w=100&h=100&fit=crop"
                                    alt="Temple" class="w-16 h-16 rounded object-cover">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="lg:col-span-1 space-y-6">
                    <div class="bg-white rounded-lg shadow-sm border border-gray-200 p-6">
                        <h3 class="text-lg font-bold text-gray-900 mb-4">Overall Progress</h3>
                        <canvas id="progressChart"></canvas>
                    </div>

                    <div class="bg-white rounded-lg shadow-sm border border-gray-200 p-6">
                        <h3 class="text-lg font-bold text-gray-900 mb-4">Recent Badges</h3>
                        <div class="space-y-3">
                            <div class="flex items-center space-x-3 p-3 bg-yellow-50 rounded-lg">
                                <div class="text-3xl">🏆</div>
                                <div>
                                    <p class="font-semibold text-gray-900 text-sm">First Goal</p>
                                    <p class="text-xs text-gray-600">Complete your first goal</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- MY GOALS PAGE -->
    <div id="goalsPage" class="page-content hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
            <div class="flex items-center justify-between mb-8">
                <div>
                    <h2 class="text-3xl font-bold text-gray-900">My Goals</h2>
                    <p class="text-gray-600 mt-1">Manage all your bucket list items</p>
                </div>
                <button onclick="toggleModal()"
                    class="bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-2 px-6 rounded-lg transition duration-200">
                    <span class="text-xl mr-2">+</span> New Goal
                </button>
            </div>

            <div class="bg-white rounded-lg shadow-sm border border-gray-200 mb-6">
                <div class="p-4 border-b border-gray-200">
                    <div class="flex items-center space-x-4">
                        <input type="text" placeholder="Search goals..."
                            class="flex-1 px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent">
                        <select
                            class="px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent">
                            <option>All Status</option>
                            <option>Not Started</option>
                            <option>In Progress</option>
                            <option>Completed</option>
                        </select>
                        <select
                            class="px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent">
                            <option>Sort by Date</option>
                            <option>Sort by Progress</option>
                            <option>Sort by Name</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <div
                    class="bg-white rounded-lg shadow-sm border border-gray-200 p-6 hover:shadow-md transition duration-200">
                    <div class="flex items-start justify-between mb-4">
                        <span class="bg-blue-100 text-blue-800 text-xs font-semibold px-2.5 py-0.5 rounded">In
                            Progress</span>
                        <button class="text-gray-400 hover:text-gray-600">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z">
                                </path>
                            </svg>
                        </button>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 mb-2">Learn to play guitar</h3>
                    <p class="text-sm text-gray-600 mb-4">Master basic chords and play my first song</p>

                    <div class="mb-4">
                        <div class="flex justify-between text-sm mb-1">
                            <span class="text-gray-600">Progress</span>
                            <span class="font-semibold text-indigo-600">65%</span>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-2">
                            <div class="bg-indigo-600 h-2 rounded-full" style="width: 65%"></div>
                        </div>
                    </div>

                    <div class="flex items-center justify-between text-sm">
                        <span class="text-gray-500">📅 Dec 31, 2025</span>
                        <button onclick="showPage('goaldetail')"
                            class="text-indigo-600 hover:text-indigo-800 font-medium">View →</button>
                    </div>
                </div>

                <div
                    class="bg-white rounded-lg shadow-sm border border-gray-200 p-6 hover:shadow-md transition duration-200">
                    <div class="flex items-start justify-between mb-4">
                        <span
                            class="bg-green-100 text-green-800 text-xs font-semibold px-2.5 py-0.5 rounded">Completed</span>
                        <button class="text-gray-400 hover:text-gray-600">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z">
                                </path>
                            </svg>
                        </button>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 mb-2">Visit Japan</h3>
                    <p class="text-sm text-gray-600 mb-4">Experience cherry blossoms in Tokyo</p>

                    <div class="mb-4">
                        <div class="w-full bg-gray-200 rounded-full h-2">
                            <div class="bg-green-600 h-2 rounded-full" style="width: 100%"></div>
                        </div>
                    </div>

                    <div class="flex items-center justify-between text-sm">
                        <span class="text-gray-500">✅ Mar 15, 2025</span>
                        <button onclick="showPage('goaldetail')"
                            class="text-indigo-600 hover:text-indigo-800 font-medium">View →</button>
                    </div>
                </div>

                <div
                    class="bg-white rounded-lg shadow-sm border border-gray-200 p-6 hover:shadow-md transition duration-200">
                    <div class="flex items-start justify-between mb-4">
                        <span class="bg-gray-100 text-gray-800 text-xs font-semibold px-2.5 py-0.5 rounded">Not
                            Started</span>
                        <button class="text-gray-400 hover:text-gray-600">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z">
                                </path>
                            </svg>
                        </button>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 mb-2">Run a marathon</h3>
                    <p class="text-sm text-gray-600 mb-4">Complete a full 42km marathon race</p>

                    <div class="mb-4">
                        <div class="w-full bg-gray-200 rounded-full h-2">
                            <div class="bg-gray-400 h-2 rounded-full" style="width: 0%"></div>
                        </div>
                    </div>

                    <div class="flex items-center justify-between text-sm">
                        <span class="text-gray-500">📅 Jun 30, 2026</span>
                        <button onclick="showPage('goaldetail')"
                            class="text-indigo-600 hover:text-indigo-800 font-medium">View →</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- GOAL DETAIL PAGE -->
    <div id="goaldetailPage" class="page-content hidden">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
            <div class="mb-6">
                <button onclick="showPage('goals')"
                    class="text-indigo-600 hover:text-indigo-800 font-medium flex items-center">
                    <svg class="w-5 h-5 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7">
                        </path>
                    </svg>
                    Back to Goals
                </button>
            </div>

            <div class="bg-white rounded-lg shadow-sm border border-gray-200 p-8 mb-6">
                <div class="flex items-start justify-between mb-6">
                    <div class="flex-1">
                        <div class="flex items-center space-x-3 mb-3">
                            <h1 class="text-3xl font-bold text-gray-900">Learn to play guitar</h1>
                            <span class="bg-blue-100 text-blue-800 text-sm font-semibold px-3 py-1 rounded">In
                                Progress</span>
                        </div>
                        <p class="text-gray-600 mb-4">Master basic chords and play my first song beautifully</p>
                        <div class="flex items-center space-x-4 text-sm text-gray-600">
                            <span>📅 Created: Oct 15, 2025</span>
                            <span>🎯 Deadline: Dec 31, 2025</span>
                        </div>
                    </div>
                    <div class="flex space-x-2">
                        <button
                            class="px-4 py-2 bg-indigo-600 hover:bg-indigo-700 text-white rounded-lg transition duration-200">Edit</button>
                        <button
                            class="px-4 py-2 bg-red-600 hover:bg-red-700 text-white rounded-lg transition duration-200">Delete</button>
                    </div>
                </div>

                <div class="mb-6">
                    <div class="flex justify-between text-sm mb-2">
                        <span class="font-medium text-gray-700">Overall Progress</span>
                        <span class="font-bold text-indigo-600">65%</span>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-3">
                        <div class="bg-indigo-600 h-3 rounded-full transition-all duration-300" style="width: 65%">
                        </div>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                <div class="lg:col-span-2 space-y-6">
                    <div class="bg-white rounded-lg shadow-sm border border-gray-200 p-6">
                        <h3 class="text-xl font-bold text-gray-900 mb-4">Milestones</h3>
                        <div class="space-y-3">
                            <div class="flex items-start space-x-3 p-4 bg-green-50 border border-green-200 rounded-lg">
                                <input type="checkbox" checked class="mt-1 rounded border-gray-300 text-green-600">
                                <div class="flex-1">
                                    <h4 class="font-semibold text-gray-900 line-through">Practice strumming patterns
                                    </h4>
                                    <p class="text-sm text-gray-600">30 minutes daily practice</p>
                                </div>
                                <span class="text-xs text-green-600 font-semibold">✓ Done</span>
                            </div>

                            <div class="flex items-start space-x-3 p-4 bg-blue-50 border border-blue-200 rounded-lg">
                                <input type="checkbox" class="mt-1 rounded border-gray-300 text-blue-600">
                                <div class="flex-1">
                                    <h4 class="font-semibold text-gray-900">Learn chord transitions</h4>
                                    <p class="text-sm text-gray-600">Smooth transitions between chords</p>
                                </div>
                                <span class="text-xs text-blue-600 font-semibold">In Progress</span>
                            </div>

                            <div class="flex items-start space-x-3 p-4 bg-gray-50 border border-gray-200 rounded-lg">
                                <input type="checkbox" class="mt-1 rounded border-gray-300">
                                <div class="flex-1">
                                    <h4 class="font-semibold text-gray-900">Play first complete song</h4>
                                    <p class="text-sm text-gray-600">Choose and master one full song</p>
                                </div>
                                <span class="text-xs text-gray-600 font-semibold">Pending</span>
                            </div>
                        </div>

                        <button class="mt-4 text-indigo-600 hover:text-indigo-800 font-medium text-sm">+ Add
                            Milestone</button>
                    </div>

                    <div class="bg-white rounded-lg shadow-sm border border-gray-200 p-6">
                        <h3 class="text-xl font-bold text-gray-900 mb-4">Notes & Photos</h3>

                        <div class="space-y-4">
                            <div class="p-4 bg-gray-50 rounded-lg">
                                <div class="flex items-center justify-between mb-2">
                                    <span class="text-sm font-semibold text-gray-900">Note from Oct 20, 2025</span>
                                    <button class="text-gray-400 hover:text-gray-600">
                                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                            <path
                                                d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z">
                                            </path>
                                        </svg>
                                    </button>
                                </div>
                                <p class="text-sm text-gray-600">Finally able to play C chord smoothly! My fingers hurt
                                    but it's worth it. Practice makes perfect!</p>
                            </div>

                            <div class="grid grid-cols-3 gap-4">
                                <img src="https://images.unsplash.com/photo-1510915361894-db8b60106cb1?w=300&h=300&fit=crop"
                                    alt="Guitar" class="w-full h-32 object-cover rounded-lg">
                                <img src="https://images.unsplash.com/photo-1525201548942-d8732f6617a0?w=300&h=300&fit=crop"
                                    alt="Practice" class="w-full h-32 object-cover rounded-lg">
                                <div
                                    class="w-full h-32 bg-gradient-to-br from-indigo-100 to-purple-100 rounded-lg flex items-center justify-center cursor-pointer hover:from-indigo-200 hover:to-purple-200 transition duration-200">
                                    <span class="text-3xl">📷</span>
                                </div>
                            </div>
                        </div>

                        <button
                            class="mt-4 w-full py-2 border-2 border-dashed border-gray-300 rounded-lg text-gray-600 hover:border-indigo-400 hover:text-indigo-600 transition duration-200">
                            + Add Note or Photo
                        </button>
                    </div>
                </div>

                <div class="lg:col-span-1 space-y-6">
                    <div class="bg-white rounded-lg shadow-sm border border-gray-200 p-6">
                        <h3 class="text-lg font-bold text-gray-900 mb-4">Statistics</h3>
                        <div class="space-y-4">
                            <div>
                                <div class="flex justify-between text-sm mb-1">
                                    <span class="text-gray-600">Completion</span>
                                    <span class="font-semibold">65%</span>
                                </div>
                                <div class="w-full bg-gray-200 rounded-full h-2">
                                    <div class="bg-indigo-600 h-2 rounded-full" style="width: 65%"></div>
                                </div>
                            </div>

                            <div class="pt-4 border-t border-gray-200">
                                <div class="flex justify-between mb-2">
                                    <span class="text-sm text-gray-600">Total Milestones</span>
                                    <span class="font-semibold text-gray-900">5</span>
                                </div>
                                <div class="flex justify-between mb-2">
                                    <span class="text-sm text-gray-600">Completed</span>
                                    <span class="font-semibold text-green-600">3</span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-sm text-gray-600">Remaining</span>
                                    <span class="font-semibold text-gray-600">2</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-lg shadow-sm border border-gray-200 p-6">
                        <h3 class="text-lg font-bold text-gray-900 mb-4">Actions</h3>
                        <div class="space-y-2">
                            <button
                                class="w-full bg-green-600 hover:bg-green-700 text-white font-medium py-2 px-4 rounded-lg transition duration-200">
                                ✓ Mark as Complete
                            </button>
                            <button
                                class="w-full bg-gray-100 hover:bg-gray-200 text-gray-700 font-medium py-2 px-4 rounded-lg transition duration-200">
                                📤 Share Goal
                            </button>
                            <button
                                class="w-full bg-gray-100 hover:bg-gray-200 text-gray-700 font-medium py-2 px-4 rounded-lg transition duration-200">
                                📥 Export as PDF
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- REPORTS PAGE -->
    <div id="reportsPage" class="page-content hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
            <div class="flex items-center justify-between mb-8">
                <div>
                    <h2 class="text-3xl font-bold text-gray-900">Progress Reports</h2>
                    <p class="text-gray-600 mt-1">Analyze your achievements and track your journey</p>
                </div>
                <button
                    class="bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-2 px-6 rounded-lg transition duration-200">
                    📥 Export PDF Report
                </button>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                <div class="bg-gradient-to-br from-green-500 to-green-600 rounded-lg shadow-lg p-6 text-white">
                    <div class="flex items-center justify-between mb-4">
                        <span class="text-5xl">✅</span>
                        <div class="text-right">
                            <p class="text-green-100 text-sm">Goals Completed</p>
                            <p class="text-4xl font-bold">8</p>
                        </div>
                    </div>
                    <p class="text-green-100 text-sm">33% completion rate</p>
                </div>

                <div class="bg-gradient-to-br from-blue-500 to-blue-600 rounded-lg shadow-lg p-6 text-white">
                    <div class="flex items-center justify-between mb-4">
                        <span class="text-5xl">⏳</span>
                        <div class="text-right">
                            <p class="text-blue-100 text-sm">In Progress</p>
                            <p class="text-4xl font-bold">12</p>
                        </div>
                    </div>
                    <p class="text-blue-100 text-sm">50% of total goals</p>
                </div>

                <div class="bg-gradient-to-br from-yellow-500 to-yellow-600 rounded-lg shadow-lg p-6 text-white">
                    <div class="flex items-center justify-between mb-4">
                        <span class="text-5xl">🏆</span>
                        <div class="text-right">
                            <p class="text-yellow-100 text-sm">Badges Earned</p>
                            <p class="text-4xl font-bold">5</p>
                        </div>
                    </div>
                    <p class="text-yellow-100 text-sm">Keep going!</p>
                </div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-6">
                <div class="bg-white rounded-lg shadow-sm border border-gray-200 p-6">
                    <h3 class="text-lg font-bold text-gray-900 mb-4">Monthly Progress</h3>
                    <canvas id="monthlyChart"></canvas>
                </div>

                <div class="bg-white rounded-lg shadow-sm border border-gray-200 p-6">
                    <h3 class="text-lg font-bold text-gray-900 mb-4">Goals by Category</h3>
                    <canvas id="categoryChart"></canvas>
                </div>
            </div>

            <div class="bg-white rounded-lg shadow-sm border border-gray-200 p-6">
                <h3 class="text-lg font-bold text-gray-900 mb-4">Recent Achievements</h3>
                <div class="space-y-4">
                    <div class="flex items-center justify-between p-4 bg-green-50 rounded-lg border border-green-200">
                        <div class="flex items-center space-x-4">
                            <div
                                class="w-12 h-12 bg-green-500 rounded-full flex items-center justify-center text-white text-xl">
                                ✓</div>
                            <div>
                                <h4 class="font-semibold text-gray-900">Visit Japan</h4>
                                <p class="text-sm text-gray-600">Completed on March 15, 2025</p>
                            </div>
                        </div>
                        <span class="text-green-600 font-semibold">100%</span>
                    </div>

                    <div class="flex items-center justify-between p-4 bg-green-50 rounded-lg border border-green-200">
                        <div class="flex items-center space-x-4">
                            <div
                                class="w-12 h-12 bg-green-500 rounded-full flex items-center justify-center text-white text-xl">
                                ✓</div>
                            <div>
                                <h4 class="font-semibold text-gray-900">Read 50 Books</h4>
                                <p class="text-sm text-gray-600">Completed on February 28, 2025</p>
                            </div>
                        </div>
                        <span class="text-green-600 font-semibold">100%</span>
                    </div>

                    <div class="flex items-center justify-between p-4 bg-blue-50 rounded-lg border border-blue-200">
                        <div class="flex items-center space-x-4">
                            <div
                                class="w-12 h-12 bg-blue-500 rounded-full flex items-center justify-center text-white text-xl">
                                ⏳</div>
                            <div>
                                <h4 class="font-semibold text-gray-900">Learn to play guitar</h4>
                                <p class="text-sm text-gray-600">Currently in progress</p>
                            </div>
                        </div>
                        <span class="text-blue-600 font-semibold">65%</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- PROFILE PAGE -->
    <div id="profilePage" class="page-content hidden">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
            <h2 class="text-3xl font-bold text-gray-900 mb-8">Profile Settings</h2>

            <div class="bg-white rounded-lg shadow-sm border border-gray-200 p-8 mb-6">
                <h3 class="text-xl font-bold text-gray-900 mb-6">Personal Information</h3>

                <div class="flex items-center space-x-6 mb-6">
                    <div
                        class="w-24 h-24 bg-indigo-500 rounded-full flex items-center justify-center text-white text-3xl font-bold">
                        JD</div>
                    <div>
                        <button
                            class="bg-indigo-600 hover:bg-indigo-700 text-white font-medium py-2 px-4 rounded-lg transition duration-200 mb-2">
                            Upload Photo
                        </button>
                        <p class="text-sm text-gray-600">JPG, PNG or GIF. Max size 2MB</p>
                    </div>
                </div>

                <form class="space-y-4">
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">First Name</label>
                            <input type="text" value="John"
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Last Name</label>
                            <input type="text" value="Doe"
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent">
                        </div>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Email Address</label>
                        <input type="email" value="john@example.com"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent">
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Bio</label>
                        <textarea rows="3"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent"
                            placeholder="Tell us about yourself...">Dream chaser and adventure seeker 🌟</textarea>
                    </div>

                    <button type="submit"
                        class="bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-2 px-6 rounded-lg transition duration-200">
                        Save Changes
                    </button>
                </form>
            </div>

            <div class="bg-white rounded-lg shadow-sm border border-gray-200 p-8 mb-6">
                <h3 class="text-xl font-bold text-gray-900 mb-6">Change Password</h3>

                <form class="space-y-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Current Password</label>
                        <input type="password"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent">
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">New Password</label>
                        <input type="password"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent">
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Confirm New Password</label>
                        <input type="password"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent">
                    </div>

                    <button type="submit"
                        class="bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-2 px-6 rounded-lg transition duration-200">
                        Update Password
                    </button>
                </form>
            </div>

            <div class="bg-white rounded-lg shadow-sm border border-gray-200 p-8">
                <h3 class="text-xl font-bold text-gray-900 mb-6">Preferences</h3>

                <div class="space-y-4">
                    <div class="flex items-center justify-between">
                        <div>
                            <h4 class="font-semibold text-gray-900">Email Notifications</h4>
                            <p class="text-sm text-gray-600">Receive email updates about your goals</p>
                        </div>
                        <label class="relative inline-flex items-center cursor-pointer">
                            <input type="checkbox" checked class="sr-only peer">
                            <div
                                class="w-11 h-6 bg-gray-200 peer-focus:ring-4 peer-focus:ring-indigo-300 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-indigo-600">
                            </div>
                        </label>
                    </div>

                    <div class="flex items-center justify-between pt-4 border-t border-gray-200">
                        <div>
                            <h4 class="font-semibold text-gray-900">Public Profile</h4>
                            <p class="text-sm text-gray-600">Allow others to see your achievements</p>
                        </div>
                        <label class="relative inline-flex items-center cursor-pointer">
                            <input type="checkbox" class="sr-only peer">
                            <div
                                class="w-11 h-6 bg-gray-200 peer-focus:ring-4 peer-focus:ring-indigo-300 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-indigo-600">
                            </div>
                        </label>
                    </div>

                    <div class="flex items-center justify-between pt-4 border-t border-gray-200">
                        <div>
                            <h4 class="font-semibold text-gray-900">Weekly Summary</h4>
                            <p class="text-sm text-gray-600">Get weekly progress reports</p>
                        </div>
                        <label class="relative inline-flex items-center cursor-pointer">
                            <input type="checkbox" checked class="sr-only peer">
                            <div
                                class="w-11 h-6 bg-gray-200 peer-focus:ring-4 peer-focus:ring-indigo-300 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-indigo-600">
                            </div>
                        </label>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Add Goal Modal -->
    <div id="goalModal"
        class="hidden fixed inset-0 bg-gray-900 bg-opacity-50 flex items-center justify-center z-50 p-4">
        <div class="bg-white rounded-lg shadow-xl max-w-2xl w-full max-h-screen overflow-y-auto">
            <div class="p-6">
                <div class="flex items-center justify-between mb-6">
                    <h2 class="text-2xl font-bold text-gray-900">Add New Goal</h2>
                    <button onclick="toggleModal()" class="text-gray-400 hover:text-gray-600">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>

                <form class="space-y-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Goal Title</label>
                        <input type="text"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent"
                            placeholder="e.g., Learn to play guitar">
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Description</label>
                        <textarea rows="3"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent"
                            placeholder="Describe your goal in detail..."></textarea>
                    </div>

                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Status</label>
                            <select
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent">
                                <option>Not Started</option>
                                <option>In Progress</option>
                                <option>Completed</option>
                            </select>
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Deadline (Optional)</label>
                            <input type="date"
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent">
                        </div>
                    </div>

                    <div class="flex space-x-3 pt-4">
                        <button type="submit"
                            class="flex-1 bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-2 px-4 rounded-lg transition duration-200">
                            Create Goal
                        </button>
                        <button type="button" onclick="toggleModal()"
                            class="flex-1 bg-gray-200 hover:bg-gray-300 text-gray-700 font-semibold py-2 px-4 rounded-lg transition duration-200">
                            Cancel
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        function showPage(pageName) {
            const pages = document.querySelectorAll('.page-content');
            pages.forEach(page => page.classList.add('hidden'));

            const targetPage = document.getElementById(pageName + 'Page');
            if (targetPage) {
                targetPage.classList.remove('hidden');
            }

            if (pageName === 'reports') {
                setTimeout(initReportsCharts, 100);
            }
            if (pageName === 'dashboard') {
                setTimeout(initDashboardChart, 100);
            }
        }

        function toggleModal() {
            const modal = document.getElementById('goalModal');
            modal.classList.toggle('hidden');
        }

        function initDashboardChart() {
            const ctx = document.getElementById('progressChart');
            if (!ctx) return;

            new Chart(ctx, {
                type: 'doughnut',
                data: {
                    labels: ['Completed', 'In Progress', 'Not Started'],
                    datasets: [{
                        data: [8, 12, 4],
                        backgroundColor: ['#10b981', '#3b82f6', '#e5e7eb'],
                        borderWidth: 0
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: true,
                    plugins: {
                        legend: {
                            position: 'bottom',
                            labels: {
                                padding: 15,
                                font: {
                                    size: 12
                                }
                            }
                        }
                    }
                }
            });
        }

        function initReportsCharts() {
            const monthlyCtx = document.getElementById('monthlyChart');
            const categoryCtx = document.getElementById('categoryChart');

            if (monthlyCtx) {
                new Chart(monthlyCtx, {
                    type: 'line',
                    data: {
                        labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct'],
                        datasets: [{
                            label: 'Goals Completed',
                            data: [1, 2, 3, 2, 4, 3, 5, 4, 6, 8],
                            borderColor: '#6366f1',
                            backgroundColor: 'rgba(99, 102, 241, 0.1)',
                            tension: 0.4,
                            fill: true
                        }]
                    },
                    options: {
                        responsive: true,
                        plugins: {
                            legend: {
                                display: false
                            }
                        },
                        scales: {
                            y: {
                                beginAtZero: true
                            }
                        }
                    }
                });
            }

            if (categoryCtx) {
                new Chart(categoryCtx, {
                    type: 'doughnut',
                    data: {
                        labels: ['Travel', 'Skills', 'Health', 'Creative', 'Career'],
                        datasets: [{
                            data: [6, 8, 4, 3, 3],
                            backgroundColor: ['#f59e0b', '#8b5cf6', '#10b981', '#ec4899', '#3b82f6']
                        }]
                    },
                    options: {
                        responsive: true,
                        plugins: {
                            legend: {
                                position: 'bottom'
                            }
                        }
                    }
                });
            }
        }

        showPage('login');
    </script>
</body>

</html>