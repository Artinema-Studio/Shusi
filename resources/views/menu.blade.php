@extends('layouts.app')

@section('content')
<!-- Page Header -->
<section class="relative h-[60vh] flex items-center justify-center bg-black overflow-hidden rounded-b-[3rem]">
    <div class="absolute inset-0">
        <img src="{{ asset('images/menu-1.png') }}" alt="Menu Header" class="w-full h-full object-cover opacity-50">
    </div>
    <div class="relative z-10 text-center text-white" data-aos="zoom-in">
        <h1 class="text-6xl md:text-8xl font-serif font-bold tracking-widest uppercase mb-4">Menu</h1>
        <div class="w-24 h-1 bg-[#BC2C3D] mx-auto rounded-full"></div>
    </div>
</section>

/comment 

<!-- Full Menu -->
<section class="py-32 px-10 bg-[#F9F7F2]">
    <div class="max-w-7xl mx-auto space-y-32">
        
        <!-- Category 1: Nigiri -->
        <div class="space-y-16">
            <div class="text-center" data-aos="fade-up">
                <h2 class="text-4xl font-serif font-bold text-[#1A1A1A] uppercase tracking-widest mb-4">Nigiri Selection</h2>
                <p class="text-gray-500 uppercase tracking-tighter text-sm">Kesegaran Laut di Setiap Suapan</p>
            </div>

            <div class="grid md:grid-cols-2 gap-x-20 gap-y-10">
                @php
                    $items = [
                        ['name' => 'Otoro', 'price' => '120k', 'desc' => 'Lemak perut tuna pilihan, meleleh di mulut.'],
                        ['name' => 'Hamachi', 'price' => '85k', 'desc' => 'Ikan yellowtail segar dengan sentuhan jeruk lemon.'],
                        ['name' => 'Sake', 'price' => '65k', 'desc' => 'Salmon Norwegia berkualitas dengan gradasi lemak sempurna.'],
                        ['name' => 'Unagi', 'price' => '90k', 'desc' => 'Belut panggang dengan saus tare manis autentik.'],
                    ];
                @endphp
                @foreach($items as $item)
                <div class="flex justify-between items-start border-b border-gray-200 pb-6 group" data-aos="fade-up">
                    <div class="space-y-1">
                        <h3 class="text-xl font-bold uppercase transition-colors group-hover:text-[#BC2C3D]">{{ $item['name'] }}</h3>
                        <p class="text-gray-500 font-light italic text-sm">{{ $item['desc'] }}</p>
                    </div>
                    <span class="text-[#BC2C3D] font-bold">{{ $item['price'] }}</span>
                </div>
                @endforeach
            </div>
        </div>

        <!-- Image Gallery -->
        <div class="grid md:grid-cols-4 gap-4">
             @for ($i = 0; $i < 4; $i++)
             <div class="overflow-hidden aspect-square rounded-2xl" data-aos="zoom-in" data-aos-delay="{{ $i * 100 }}">
                <img src="{{ asset('images/menu-1.png') }}" class="w-full h-full object-cover grayscale hover:grayscale-0 transition-all duration-700">
             </div>
             @endfor
        </div>

        <!-- Category 2: Sashimi -->
        <div class="space-y-16">
            <div class="text-center" data-aos="fade-up">
                <h2 class="text-4xl font-serif font-bold text-[#1A1A1A] uppercase tracking-widest mb-4">Premium Sashimi</h2>
                <p class="text-gray-500 uppercase tracking-tighter text-sm">Kemurnian Tanpa Campuran</p>
            </div>

            <div class="grid md:grid-cols-2 gap-x-20 gap-y-10">
                @php
                    $sashimi = [
                        ['name' => 'Bluefin Tuna Platter', 'price' => '350k', 'desc' => 'Koleksi Akami, Chutoro, dan Otoro.'],
                        ['name' => 'Hokkaido Scallop', 'price' => '150k', 'desc' => 'Hotate segar yang manis dan lembut dari laut utara.'],
                    ];
                @endphp
                @foreach($sashimi as $item)
                <div class="flex justify-between items-start border-b border-gray-200 pb-6 group" data-aos="fade-up">
                    <div class="space-y-1">
                        <h3 class="text-xl font-bold uppercase transition-colors group-hover:text-[#BC2C3D]">{{ $item['name'] }}</h3>
                        <p class="text-gray-500 font-light italic text-sm">{{ $item['desc'] }}</p>
                    </div>
                    <span class="text-[#BC2C3D] font-bold">{{ $item['price'] }}</span>
                </div>
                @endforeach
            </div>
        </div>

    </div>
</section>
@endsection
