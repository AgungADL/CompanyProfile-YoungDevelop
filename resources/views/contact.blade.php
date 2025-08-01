@extends('layouts.app')

@section('title', 'Hubungi Kami - YoungDevelop')

@section('description',
    'Hubungi YoungDevelop untuk diskusi proyek, konsultasi gratis, atau pertanyaan seputar
    pengembangan website, aplikasi, dan solusi digital. Tim kami siap membantu Anda.')
@section('keywords',
    'kontak youngdevelop, formulir kontak, jasa web developer, konsultasi digital, pertanyaan proyek,
    email youngdevelop, whatsapp youngdevelop')

@section('content')

    <section class="min-h-screen bg-gradient-to-b from-white to-emerald-50 py-16 px-6 md:py-24 overflow-hidden">
        <div class="max-w-5xl mx-auto">
            {{-- HERO SECTION / HEADER --}}
            <div class="text-center mb-12 md:mb-16" data-aos="fade-up" data-aos-duration="1000">
                <h1 class="text-4xl md:text-5xl font-extrabold text-emerald-700 leading-tight mb-4">
                    Mari Diskusikan Ide Anda
                </h1>
                <p class="text-gray-700 text-lg md:text-xl max-w-2xl mx-auto">
                    Apakah Anda memiliki pertanyaan, ide brilian, atau proyek digital yang ingin diwujudkan? Kami siap
                    mendengarkan. Silakan hubungi kami melalui formulir di bawah atau opsi kontak lainnya.
                </p>
            </div>

            @if (session('success'))
                <div class="bg-emerald-100 border-l-4 border-emerald-500 text-emerald-800 p-4 rounded-lg shadow-md mb-8 animate-fade-in"
                    data-aos="zoom-in">
                    <div class="flex items-center">
                        <svg class="h-6 w-6 text-emerald-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        <p class="font-medium">{{ session('success') }}</p>
                    </div>
                </div>
            @endif

            <div class="bg-white shadow-2xl rounded-2xl p-8 md:p-12 lg:p-16 flex flex-col lg:flex-row gap-10 lg:gap-16 items-start"
                data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                {{-- INFORMASI KONTAK ALTERNATIF --}}
                <div class="lg:w-1/2 text-gray-700 space-y-6 lg:sticky lg:top-24">
                    <h2 class="text-2xl md:text-3xl font-bold text-emerald-700 mb-4">Informasi Kontak Kami</h2>
                    <p class="text-lg leading-relaxed">
                        Kami berkomitmen untuk merespons setiap pesan secepat mungkin. Untuk pertanyaan umum atau diskusi
                        awal, Anda juga bisa menghubungi kami melalui:
                    </p>
                    <div class="space-y-4 text-md">
                        <div class="flex items-center">
                            <svg class="h-6 w-6 text-emerald-600 mr-3 flex-shrink-0" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                </path>
                            </svg>
                            <p>Email: <a href="mailto:younggdevelop@gmail.com"
                                    class="text-emerald-600 hover:underline font-medium">younggdevelop@gmail.com</a></p>
                        </div>

                        <div class="flex items-center">
                            <svg class="h-6 w-6 text-emerald-600 mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M4 4a2 2 0 00-2 2v8a2 2 0 002 2h14a2 2 0 002-2V6a2 2 0 00-2-2H4zm3 7a1 1 0 011-1h6a1 1 0 110 2H8a1 1 0 01-1-1z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <p>WhatsApp: <a href="https://wa.me/6289676482037" target="_blank"
                                    class="text-emerald-600 hover:underline font-medium">+62 896-7648-2037</a></p>
                        </div>

                        <div class="flex items-start">
                            <svg class="h-6 w-6 text-emerald-600 mr-3 mt-1 flex-shrink-0" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                                </path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                            <p>Alamat: Jalan Ceuri Terusan Kopo KM 13.5, Katapang, Soreang, Katapang, Bandung, Jawa Barat
                                40971, Indonesia.</p>
                        </div>
                    </div>
                    <p class="text-sm text-gray-500 mt-4">Kami akan merespons pesan Anda dalam waktu 1x24 jam kerja.</p>
                </div>

                {{-- FORMULIR KONTAK --}}
                <div class="lg:w-1/2 w-full">
                    <h2 class="text-2xl md:text-3xl font-bold text-emerald-700 mb-6">Kirim Pesan Anda</h2>
                    <form action="{{ route('kontak.kirim') }}" method="POST" class="grid grid-cols-1 gap-6">
                        @csrf
                        <div>
                            <label for="name" class="block text-gray-700 text-sm font-semibold mb-2">Nama Lengkap Anda
                                <span class="text-red-500">*</span></label>
                            <input type="text" id="name" name="name" placeholder="Contoh: Budi Santoso"
                                value="{{ old('name') }}"
                                class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-emerald-400 focus:border-transparent transition-all duration-200 @error('name') border-red-500 ring-red-200 @enderror"
                                required>
                            @error('name')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="email" class="block text-gray-700 text-sm font-semibold mb-2">Email Aktif <span
                                    class="text-red-500">*</span></label>
                            <input type="email" id="email" name="email" placeholder="Contoh: nama@domain.com"
                                value="{{ old('email') }}"
                                class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-emerald-400 focus:border-transparent transition-all duration-200 @error('email') border-red-500 ring-red-200 @enderror"
                                required>
                            @error('email')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="phone" class="block text-gray-700 text-sm font-semibold mb-2">Nomor
                                Telepon/WhatsApp (Opsional)</label>
                            <input type="tel" id="phone" name="phone" placeholder="Contoh: +62 812-3456-7890"
                                value="{{ old('phone') }}"
                                class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-emerald-400 focus:border-transparent transition-all duration-200 @error('phone') border-red-500 ring-red-200 @enderror">
                            @error('phone')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="subject" class="block text-gray-700 text-sm font-semibold mb-2">Subjek Pesan <span
                                    class="text-red-500">*</span></label>
                            <input type="text" id="subject" name="subject"
                                placeholder="Contoh: Permintaan Penawaran Website Bisnis" value="{{ old('subject') }}"
                                class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-emerald-400 focus:border-transparent transition-all duration-200 @error('subject') border-red-500 ring-red-200 @enderror"
                                required>
                            @error('subject')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="message" class="block text-gray-700 text-sm font-semibold mb-2">Detail Pesan /
                                Kebutuhan Proyek Anda <span class="text-red-500">*</span></label>
                            <textarea id="message" name="message" rows="6"
                                placeholder="Jelaskan kebutuhan website/aplikasi Anda, fitur yang diinginkan, atau pertanyaan spesifik lainnya..."
                                class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-emerald-400 focus:border-transparent transition-all duration-200 @error('message') border-red-500 ring-red-200 @enderror"
                                required>{{ old('message') }}</textarea>
                            @error('message')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <button type="submit"
                            class="bg-emerald-600 text-white font-bold py-3 px-6 rounded-lg shadow-md hover:bg-emerald-700 transition-all duration-300 transform hover:scale-105">
                            Kirim Pesan Sekarang
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
