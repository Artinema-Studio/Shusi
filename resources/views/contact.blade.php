@extends('layouts.app')

@section('content')
<!-- Page Header -->
<section class="relative h-[60vh] flex items-center justify-center bg-black overflow-hidden rounded-b-[3rem]">
    <div class="absolute inset-0">
        <img src="{{ asset('images/hero.png') }}" alt="Contact Header" class="w-full h-full object-cover opacity-50">
    </div>
    <div class="relative z-10 text-center text-white" data-aos="zoom-in">
        <h1 class="text-6xl md:text-8xl font-serif font-bold tracking-widest uppercase mb-4">Kontak Kami</h1>
        <div class="w-24 h-1 bg-[#BC2C3D] mx-auto rounded-full"></div>
    </div>
</section>

<!-- Contact Detail -->
<section class="py-32 px-10 bg-white">
    <div class="max-w-7xl mx-auto grid md:grid-cols-2 gap-32">
        <div class="space-y-16" data-aos="fade-right">
            <div class="space-y-6">
                <h2 class="text-4xl font-serif font-bold text-[#1A1A1A]">Hubungi Kami</h2>
                <p class="text-gray-500 font-light">Kami siap melayani reservasi dan menjawab pertanyaan Anda dengan sepenuh hati.</p>
            </div>

            <div class="space-y-10">
                <div class="flex gap-6 items-start">
                    <div class="w-12 h-12 bg-[#BC2C3D] flex items-center justify-center text-white shrink-0 rounded-xl">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <div>
                        <h4 class="font-bold uppercase tracking-widest text-sm mb-2">Lokasi</h4>
                        <p class="text-gray-600 font-light italic">Jl. Senopati No. 45, Kebayoran Baru, Jakarta Selatan. 12110</p>
                    </div>
                </div>

                <div class="flex gap-6 items-start">
                    <div class="w-12 h-12 bg-[#BC2C3D] flex items-center justify-center text-white shrink-0 rounded-xl">
                        <i class="fas fa-phone"></i>
                    </div>
                    <div>
                        <h4 class="font-bold uppercase tracking-widest text-sm mb-2">Telepon</h4>
                        <p class="text-gray-600 font-light">+62 21 555-0123</p>
                    </div>
                </div>

                <div class="flex gap-6 items-start">
                    <div class="w-12 h-12 bg-[#BC2C3D] flex items-center justify-center text-white shrink-0 rounded-xl">
                        <i class="fas fa-clock"></i>
                    </div>
                    <div>
                        <h4 class="font-bold uppercase tracking-widest text-sm mb-2">Jam Operasional</h4>
                        <p class="text-gray-600 font-light">Selasa - Minggu: 11:00 AM - 10:00 PM</p>
                        <p class="text-gray-600 font-light italic text-sm">Senin: TUTUP</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-[#F9F7F2] p-12 space-y-10 shadow-xl rounded-3xl" data-aos="fade-left">
            <h3 class="text-2xl font-serif font-bold">Kirim Pesan</h3>
            <form action="#" class="space-y-6">
                <div class="space-y-2">
                    <label class="text-xs uppercase font-bold tracking-widest text-gray-500">Nama Lengkap</label>
                    <input type="text" class="w-full bg-transparent border-b border-gray-300 py-3 focus:outline-none focus:border-[#BC2C3D] transition-colors" placeholder="Masukkan nama Anda">
                </div>
                <div class="space-y-2">
                    <label class="text-xs uppercase font-bold tracking-widest text-gray-500">Alamat Email</label>
                    <input type="email" class="w-full bg-transparent border-b border-gray-300 py-3 focus:outline-none focus:border-[#BC2C3D] transition-colors" placeholder="email@domain.com">
                </div>
                <div class="space-y-2">
                    <label class="text-xs uppercase font-bold tracking-widest text-gray-500">Pesan</label>
                    <textarea rows="4" class="w-full bg-transparent border-b border-gray-300 py-3 focus:outline-none focus:border-[#BC2C3D] transition-colors" placeholder="Ceritakan kebutuhan Anda"></textarea>
                </div>
                <button type="submit" class="w-full py-5 bg-[#BC2C3D] text-white uppercase tracking-widest font-bold hover:bg-black transition-all duration-500 rounded-full">Kirim Sekarang</button>
            </form>
        </div>
    </div>
</section>

<!-- Map Placeholder -->
<section class="h-[500px] grayscale rounded-t-[3rem] overflow-hidden" data-aos="zoom-in">
    <iframe class="w-full h-full" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15865.234149202685!2d106.8049615!3d-6.2235959!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f3e498687701%3A0xc3f9260662d00160!2sSenopati%2C%20Keb%20Baru%2C%20South%20Jakarta%20City!5e0!3m2!1sen!2sid!4v1713250000000!5m2!1sen!2sid" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</section>
@endsection
