@extends('layouts.app')

@section('content')
<!-- Page Header -->
<section class="relative h-[60vh] flex items-center justify-center bg-black overflow-hidden rounded-b-[3rem]">
    <div class="absolute inset-0">
        <img src="{{ asset('images/about.png') }}" alt="About Header" class="w-full h-full object-cover opacity-50">
    </div>
    <div class="relative z-10 text-center text-white" data-aos="zoom-in">
        <h1 class="text-6xl md:text-8xl font-serif font-bold tracking-widest uppercase mb-4">Tentang Kami</h1>
        <div class="w-24 h-1 bg-[#BC2C3D] mx-auto rounded-full"></div>
    </div>
</section>

<!-- Content -->
<section class="py-32 px-10 bg-white">
    <div class="max-w-4xl mx-auto space-y-16">
        <div class="space-y-8" data-aos="fade-up">
            <h2 class="text-4xl font-serif font-bold text-[#1A1A1A]">Warisan Rasa Terjaga</h2>
            <p class="text-xl text-gray-600 leading-relaxed font-light italic">
                "Shusi bukan sekadar restoran; ia adalah perpanjangan dari dedikasi kami terhadap kesederhanaan dan kualitas."
            </p>
        </div>

        <div class="grid md:grid-cols-2 gap-16">
            <div data-aos="fade-right">
                <p class="text-gray-600 leading-relaxed mb-6 font-light">
                    Didirikan pada tahun 2024, Shusi mengusung konsep kemurnian rasa. Kami percaya bahwa sushi terbaik lahir dari tiga elemen utama: ikan yang segar, nasi yang dimasak sempurna dengan bumbu rahasia, dan sentuhan wasabi autentik.
                </p>
            </div>
            <div data-aos="fade-left">
                <p class="text-gray-600 leading-relaxed mb-6 font-light">
                    Setiap chef kami telah melewati pelatihan bertahun-tahun untuk menguasai teknik pemotongan yang presisi. Di sini, Anda tidak hanya menikmati makanan, Anda merayakan seni kuliner yang telah diwariskan turun-temurun.
                </p>
            </div>
        </div>

        <div class="relative h-[500px] overflow-hidden rounded-3xl" data-aos="zoom-in">
            <img src="{{ asset('images/menu-1.png') }}" alt="Chef at work" class="w-full h-full object-cover grayscale">
            <div class="absolute inset-0 bg-black/20"></div>
        </div>
    </div>
</section>
@endsection
