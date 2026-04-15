<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Shusi - Japanese Modern Cuisine</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;600;700&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-[#F9F7F2] text-[#1A1A1A] font-sans selection:bg-[#BC2C3D] selection:text-white overflow-x-hidden">
    
    <!-- Splash Screen -->
    <div id="splash-screen" class="fixed inset-0 z-[100] bg-black flex items-center justify-center">
        <h1 class="splash-logo text-6xl md:text-8xl font-serif font-bold tracking-[0.3em] text-white uppercase">SHUSI</h1>
    </div>

    <!-- Main Wrapper (Hidden initially for Splash transition) -->
    <div id="main-wrapper" class="opacity-0 transition-opacity duration-700">
        
        <!-- Navbar -->
        <nav class="fixed top-0 left-0 w-full z-50 py-6 px-10 transition-all duration-300 flex justify-between items-center" id="main-nav">
            <!-- Center Logo (Absolute) -->
            <div class="absolute left-1/2 -translate-x-1/2">
                <a href="/" id="nav-logo" class="text-3xl font-serif font-bold tracking-widest text-white hover:scale-110 transition-transform duration-300 block">SHUSI</a>
            </div>

            <!-- Left Spacer -->
            <div class="hidden md:block w-1/3"></div>

            <!-- Right Menu -->
            <div class="w-full md:w-2/3 flex justify-end items-center gap-8">
                <div class="hidden md:flex items-center gap-8">
                    <a href="{{ route('home') }}" class="nav-link text-white {{ request()->routeIs('home') ? 'active' : '' }}">Home</a>
                    <a href="{{ route('about') }}" class="nav-link text-white {{ request()->routeIs('about') ? 'active' : '' }}">About</a>
                    <a href="{{ route('menu') }}" class="nav-link text-white {{ request()->routeIs('menu') ? 'active' : '' }}">Menu</a>
                    <a href="{{ route('contact') }}" class="nav-link text-white {{ request()->routeIs('contact') ? 'active' : '' }}">Contact</a>
                </div>
                
                <!-- Mobile Menu Toggle -->
                <button class="md:hidden text-2xl text-white" id="nav-toggle">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
        </nav>

        <!-- Main Content -->
        <main>
            @yield('content')
        </main>

        <!-- Footer -->
        <footer class="bg-[#1A1A1A] text-white py-20 px-10 text-center rounded-t-3xl border-t-8 border-[#BC2C3D]">
            <div class="max-w-4xl mx-auto space-y-8" data-aos="zoom-in">
                <h2 class="text-4xl font-serif font-bold tracking-widest text-[#BC2C3D]">SHUSI</h2>
                <p class="text-gray-400 font-light max-w-md mx-auto">Modern minimalist Japanese cuisine served with passion and elegance.</p>
                
                <div class="flex justify-center gap-6 text-xl">
                    <a href="#" class="hover:text-[#BC2C3D] transition-colors"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="hover:text-[#BC2C3D] transition-colors"><i class="fab fa-facebook"></i></a>
                    <a href="#" class="hover:text-[#BC2C3D] transition-colors"><i class="fab fa-twitter"></i></a>
                </div>

                <div class="pt-10">
                    <a href="{{ route('menu') }}" class="inline-block px-10 py-4 border border-[#BC2C3D] text-[#BC2C3D] hover:bg-[#BC2C3D] hover:text-white transition-all duration-500 tracking-widest text-sm uppercase font-semibold rounded-full">Pesan Sekarang</a>
                </div>
                
                <p class="text-xs text-gray-500 pt-20">&copy; {{ date('Y') }} Shusi Restaurant. All rights reserved.</p>
            </div>
        </footer>

    </div>
</body>
</html>
