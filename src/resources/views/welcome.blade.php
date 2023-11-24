<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet"/>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="antialiased">
<div
    class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 selection:bg-red-500 selection:text-white">
    @if (Route::has('login'))
        <livewire:welcome.navigation/>
    @endif

    <div class="max-w-7xl mx-auto p-6 lg:p-8">

        <!-- Features Section -->
        <section class="container mx-auto my-16 p-8  shadow-lg rounded-lg">
            <h2 class="text-3xl font-bold mb-8">Key Features</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Feature 1 -->
                <div class="p-4  rounded-lg">
                    <h3 class="text-xl font-semibold mb-2">Convenient Donations</h3>
                    <p class="text-gray-600">Make your Zakat donations seamlessly with just a few clicks.</p>
                </div>
                <!-- Feature 2 -->
                <div class="p-4  rounded-lg">
                    <h3 class="text-xl font-semibold mb-2">Transparent Tracking</h3>
                    <p class="text-gray-600">Track and manage your donations to see the impact you make.</p>
                </div>
                <!-- Feature 3 -->
                <div class="p-4  rounded-lg">
                    <h3 class="text-xl font-semibold mb-2">Secure Transactions</h3>
                    <p class="text-gray-600">Your donations are processed securely to ensure privacy and safety.</p>
                </div>
            </div>
        </section>

        <!-- Register Section -->
        @if(!@auth())
        <section class=" py-16 rounded-lg">
            <div class="container mx-auto text-center">
                <h2 class="text-3xl font-bold mb-8">Register for Zakat donations today</h2>
                <p class="text-gray-600 mb-8">Join the community of generous individuals making a difference.</p>
                <div>
                    <a href="{{route('register')}}" class="bg-blue-500 hover:bg-blue-600 text-white py-3 px-6 rounded-full">Register Now</a>
                </div>
            </div>
        </section>
        @endif
    </div>
</div>
</body>
</html>
