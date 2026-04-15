@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<section class="relative h-screen flex items-center justify-center overflow-hidden bg-black rounded-b-[3rem]">
    <div class="absolute inset-0">
        <img src="{{ asset('images/hero.png') }}" alt="Sushi Hero" class="w-full h-full object-cover opacity-60">
    </div>
    
    <div class="relative z-10 text-center text-white px-4">
        <h1 class="hero-title text-7xl md:text-9xl font-serif font-bold tracking-[0.2em] mb-8 uppercase">SHUSI</h1>
        <div class="hero-btn">
            <a href="{{ route('menu') }}" class="inline-block px-12 py-5 bg-white text-black hover:bg-[#BC2C3D] hover:text-white transition-all duration-500 tracking-widest text-sm uppercase font-bold shadow-xl rounded-full">Pesan Sekarang</a>
        </div>
    </div>
</section>

<!-- About Section -->
<section class="py-32 px-10 bg-white">
    <div class="max-w-7xl mx-auto grid md:grid-cols-2 gap-20 items-center">
        <div class="relative group" data-aos="zoom-in">
            <div class="overflow-hidden rounded-3xl">
                <img src="{{ asset('images/about.png') }}" alt="About Shusi" class="w-full h-[600px] object-cover grayscale hover:grayscale-0 transition-all duration-700">
            </div>
            <div class="absolute -bottom-6 -right-6 w-40 h-40 border-4 border-[#BC2C3D] -z-10 bg-[#F9F7F2] rounded-3xl"></div>
        </div>
        
        <div class="space-y-10" data-aos="fade-left">
            <h2 class="text-5xl font-serif font-bold tracking-tight text-[#1A1A1A]">Tentang Kami</h2>
            <p class="text-lg text-gray-600 leading-relaxed font-light">
                Berawal dari kecintaan akan seni kuliner tradisional Jepang, Shusi hadir untuk membawa pengalaman autentik di tengah hiruk pikuk modernitas. Kami percaya bahwa setiap potongan sushi adalah sebuah harmoni antara kesegaran bahan dan ketelatenan tangan sang chef.
            </p>
            <p class="text-lg text-gray-600 leading-relaxed font-light">
                Dengan bahan yang diterbangkan langsung dari pasar ikan terbaik, kami menjamin kualitas rasa yang tidak tertandingi. Nikmati keindahan minimalis dan keanggunan rasa di setiap sajian kami.
            </p>
            <div>
                <a href="{{ route('about') }}" class="inline-block px-10 py-4 border-2 border-[#1A1A1A] text-[#1A1A1A] hover:bg-[#1A1A1A] hover:text-white transition-all duration-500 tracking-widest text-sm uppercase font-bold rounded-full">Baca Selengkapnya</a>
            </div>
        </div>
    </div>
</section>

<!-- Menu Section -->
<section class="relative py-40 px-10 overflow-hidden rounded-[3rem] mx-4 md:mx-10 my-10">
    <!-- Background Image with Fade & 0.5 Opacity -->
    <div class="absolute inset-0 z-0">
        <img src="{{ asset('images/bgjapan2.jpg') }}" class="w-full h-full object-cover opacity-50 transition-opacity duration-1000" alt="Background Menu">
        <div class="absolute inset-0 bg-[#BC2C3D]/60 mix-blend-multiply"></div>
        <div class="absolute inset-0 bg-gradient-to-b from-black/40 via-transparent to-black/40"></div>
    </div>

    <div class="relative z-10 max-w-7xl mx-auto text-center space-y-20 text-white">
        <div class="space-y-4" data-aos="zoom-in">
            <h2 class="text-5xl font-serif font-bold tracking-tight">Menu</h2>
            <div class="w-24 h-1 bg-white mx-auto rounded-full"></div>
        </div>

        <div class="grid md:grid-cols-3 gap-10">
            @for ($i = 0; $i < 3; $i++)
            <div class="relative group overflow-hidden rounded-2xl shadow-2xl" data-aos="zoom-in" data-aos-delay="{{ $i * 100 }}">
                <img src="{{ asset('images/menu-1.png') }}" alt="Sushi Menu" class="w-full h-[400px] object-cover transition-transform duration-1000 group-hover:scale-110">
                <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex items-center justify-center">
                    <p class="text-2xl font-serif tracking-widest uppercase">Premium Nigiri</p>
                </div>
            </div>
            @endfor
        </div>

        <div data-aos="zoom-in">
            <a href="{{ route('menu') }}" class="inline-block px-12 py-5 bg-white text-[#BC2C3D] hover:bg-black hover:text-white transition-all duration-500 tracking-widest text-sm uppercase font-bold rounded-full">Lihat Menu</a>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section class="py-32 px-10 bg-[#F9F7F2]">
    <div class="max-w-5xl mx-auto text-center space-y-16">
        <div class="space-y-4" data-aos="zoom-in">
            <h2 class="text-5xl font-serif font-bold tracking-tight text-[#1A1A1A]">Kontak Kami</h2>
            <p class="text-gray-500 uppercase tracking-widest text-sm">RESERVASI & PERTANYAAN</p>
        </div>

        <div class="grid md:grid-cols-2 gap-10 text-left">
            <div class="bg-white p-12 shadow-sm border-l-8 border-[#BC2C3D] rounded-3xl" data-aos="fade-right">
                <h3 class="text-2xl font-serif font-bold mb-6">Kunjungi Kami</h3>
                <p class="text-gray-600 mb-8 leading-relaxed font-light italic">
                    Jl. Senopati No. 45, Kebayoran Baru, Jakarta Selatan. 12110
                </p>
                <div class="space-y-2 text-sm uppercase font-bold tracking-tighter text-[#BC2C3D]">
                    <p>Phone: +62 21 555-0123</p>
                    <p>Open: 11:00 AM - 10:00 PM</p>
                </div>
            </div>

            <div class="relative group h-full min-h-[300px] rounded-3xl overflow-hidden shadow-lg" data-aos="zoom-in">
                <img src="{{ asset('images/hero.png') }}" alt="Sushi Contact" class="w-full h-full object-cover">
                <div class="absolute inset-0 bg-[#BC2C3D]/20"></div>
            </div>
        </div>

        <div data-aos="zoom-in">
            <a href="{{ route('contact') }}" class="inline-block px-12 py-5 bg-[#BC2C3D] text-white hover:bg-black transition-all duration-500 tracking-widest text-sm uppercase font-bold rounded-full">Hubungi Kami</a>
        </div>
    </div>
</section>
@endsection
