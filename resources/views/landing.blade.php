<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VIVA Premium - Nonton Drama & Film Tanpa Iklan Kualitas Jernih</title>
    <meta name="description" content="VIVA hadir sebagai solusi nonton premium tanpa iklan, kualitas video jernih 4K UHD, dan fitur download offline hemat kuota.">
    
    <!-- Vite Assets -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Inline styles for instant initial background paint and glowing circles to prevent flashing -->
    <style>
        body {
            background-color: #0B0E1B;
        }
    </style>
</head>
<body class="bg-midnight text-white font-sans antialiased selection:bg-cyan-accent/30 selection:text-cyan-accent overflow-x-hidden">

    <!-- Ambient Ambient Glow Background Orbs -->
    <div class="absolute top-[-10%] left-[-10%] w-[50vw] h-[50vw] rounded-full bg-cyan-accent/5 blur-[120px] pointer-events-none"></div>
    <div class="absolute top-[20%] right-[-10%] w-[45vw] h-[45vw] rounded-full bg-gold-accent/5 blur-[120px] pointer-events-none"></div>
    <div class="absolute bottom-[20%] left-[-5%] w-[40vw] h-[40vw] rounded-full bg-cyan-accent/5 blur-[120px] pointer-events-none"></div>

    <!-- Navigation Header -->
    <header class="fixed top-0 left-0 right-0 z-50 transition-all duration-300" id="main-header">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-20 glass-nav px-6 sm:px-8 my-4 rounded-2xl">
                <!-- Logo -->
                <div class="flex items-center space-x-2">
                    <a href="#" class="font-display text-3xl font-extrabold tracking-wider text-gradient-cyan-gold flex items-center space-x-1">
                        <span>VIVA</span>
                        <span class="inline-block w-2 h-2 rounded-full bg-gold-accent animate-pulse"></span>
                    </a>
                </div>

                <!-- Navigation Links (Desktop) -->
                <nav class="hidden md:flex items-center space-x-8 text-sm font-medium">
                    <a href="#" class="text-cyan-accent transition-colors duration-200">Beranda</a>
                    <a href="#fitur" class="text-gray-300 hover:text-cyan-accent transition-colors duration-200">Fitur</a>
                    <a href="#katalog" class="text-gray-300 hover:text-cyan-accent transition-colors duration-200">Katalog</a>
                    <a href="#paket" class="text-gray-300 hover:text-cyan-accent transition-colors duration-200">Paket Premium</a>
                    <a href="#faq" class="text-gray-300 hover:text-cyan-accent transition-colors duration-200">FAQ</a>
                </nav>

                <!-- Action Button -->
                <div class="flex items-center space-x-4">
                    <a href="#" class="hidden sm:inline-block text-sm font-medium text-gray-300 hover:text-cyan-accent transition-colors duration-200">Masuk</a>
                    <a href="#paket" class="px-5 py-2.5 text-xs font-semibold uppercase tracking-wider text-midnight bg-cyan-accent hover:bg-cyan-accent/80 rounded-xl transition-all duration-300 shadow-cyan-glow hover:shadow-cyan-glow-intense hover:scale-[1.03]">
                        Coba Gratis
                    </a>
                </div>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="relative pt-36 pb-20 md:pt-48 md:pb-28 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
            
            <!-- Hero Text Content -->
            <div class="lg:col-span-7 flex flex-col items-start text-left z-10">
                <!-- Badge -->
                <div class="inline-flex items-center space-x-2 px-3 py-1 rounded-full bg-cyan-accent/10 border border-cyan-accent/25 text-cyan-accent text-xs font-semibold mb-6 animate-pulse-slow">
                    <span class="w-1.5 h-1.5 rounded-full bg-cyan-accent"></span>
                    <span>DRAMA STREAMING TANPA GANGGUAN</span>
                </div>

                <!-- Emotional Headline -->
                <h1 class="font-display text-4xl sm:text-5xl md:text-6xl font-black tracking-tight leading-none mb-6">
                    Bebaskan Menontonmu. <br>
                    <span class="text-gradient-cyan-gold">Nikmati Drama Terbaik Tanpa Gangguan.</span>
                </h1>

                <!-- Required Emotional Copy -->
                <p class="text-gray-300 text-base sm:text-lg leading-relaxed mb-8 max-w-2xl border-l-2 border-cyan-accent/30 pl-4">
                    Lelah dengan iklan yang mengganggu keseruan ketika menonton drama, apalagi saat gambar terlihat buram dan kuota boros? Bayangkan betapa menyebalkannya momen seru yang rusak karena buffering atau resolusi rendah yang menyakitkan mata di saat Anda ingin santai. VIVA hadir sebagai solusinya, memberikan pengalaman nonton premium tanpa iklan, kualitas video yang jernih, serta fitur download untuk nonton secara offline kapan saja.
                </p>

                <!-- Premium CTA & Trust Signals -->
                <div class="flex flex-col sm:flex-row items-stretch sm:items-center space-y-4 sm:space-y-0 sm:space-x-6 w-full sm:w-auto">
                    <!-- Glowing Gold CTA -->
                    <a href="#paket" class="relative group inline-flex items-center justify-center px-8 py-4 font-display font-bold text-midnight bg-gradient-to-r from-amber-400 via-gold-accent to-amber-500 rounded-full tracking-wide text-center glow-gold transform transition-all duration-300 hover:scale-105 active:scale-95 focus:outline-none">
                        <!-- Extra decorative glow ring behind -->
                        <span class="absolute inset-0 rounded-full bg-gold-accent/20 filter blur-md group-hover:blur-xl transition-all duration-300"></span>
                        <svg class="w-5 h-5 mr-2 text-midnight fill-current" viewBox="0 0 20 20"><path d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z"/></svg>
                        Mulai Nonton Premium
                    </a>
                    
                    <a href="#katalog" class="inline-flex items-center justify-center px-6 py-4 font-semibold text-white hover:text-cyan-accent border border-white/10 hover:border-cyan-accent/30 rounded-full bg-white/5 backdrop-blur-sm transition-all duration-300">
                        Jelajahi Katalog
                    </a>
                </div>

                <!-- Small Trust Indicator -->
                <div class="flex items-center space-x-6 mt-8 text-xs text-gray-400 font-medium">
                    <span class="flex items-center"><svg class="w-4 h-4 mr-1 text-cyan-accent" fill="currentColor" viewBox="0 0 20 20"><path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"/><path fill-rule="evenodd" d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100-2H7zm3 0a1 1 0 100-2h3a1 1 0 100-2h-3z" clip-rule="evenodd"/></svg>Uji Coba 7 Hari</span>
                    <span class="flex items-center"><svg class="w-4 h-4 mr-1 text-gold-accent" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 1.944A11.954 11.954 0 012.166 5C2.056 5.649 2 6.319 2 7c0 5.225 3.34 9.67 8 11.317 4.66-1.647 8-6.092 8-11.317 0-.681-.056-1.351-.166-2C17.834 5 17.056 5.649 10 1.944zM10 14a1 1 0 110-2 1 1 0 010 2zm1-4a1 1 0 10-2 0v-3a1 1 0 002 0v3z" clip-rule="evenodd"/></svg>Tanpa Kontrak Mengikat</span>
                </div>
            </div>

            <!-- Hero Poster Stack Visual (Creative representation of high-end OTT interface) -->
            <div class="lg:col-span-5 relative z-10 flex justify-center items-center h-[450px] lg:h-auto">
                <div class="relative w-[280px] h-[410px]">
                    <!-- Rear Floating Poster Card -->
                    <div class="absolute top-[-30px] left-[-35px] w-[260px] h-[380px] rounded-2xl overflow-hidden shadow-2xl border border-white/5 opacity-55 rotate-[-8deg] transform scale-95 transition-all duration-700 hover:rotate-0 hover:scale-100 hover:opacity-90">
                        <img src="https://placehold.co/400x600/0B0E1B/15D1E4?text=My+Sweet+Drama" alt="Drama Poster Back" class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-midnight via-transparent to-transparent"></div>
                    </div>
                    
                    <!-- Middle Glowing Premium Card -->
                    <div class="absolute top-[30px] right-[-35px] w-[260px] h-[380px] rounded-2xl overflow-hidden shadow-2xl border border-gold-accent/25 opacity-70 rotate-[8deg] transform scale-95 transition-all duration-700 hover:rotate-0 hover:scale-100 hover:opacity-90">
                        <img src="https://placehold.co/400x600/0B0E1B/15D1E4?text=Cyber+Odyssey" alt="Drama Poster Middle" class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-midnight via-transparent to-transparent"></div>
                        <div class="absolute top-3 right-3 px-2 py-0.5 rounded bg-gold-accent text-midnight text-[9px] font-extrabold uppercase">Premium</div>
                    </div>

                    <!-- Main Front Featured Poster Card -->
                    <div class="absolute top-0 left-0 w-[280px] h-[410px] rounded-2xl overflow-hidden shadow-2xl border border-cyan-accent/20 glow-cyan transition-all duration-500 hover:scale-[1.03] z-20">
                        <img src="https://placehold.co/400x600/0B0E1B/15D1E4?text=VIVA+Premium" alt="VIVA Main Poster" class="w-full h-full object-cover">
                        
                        <!-- Overlay overlay -->
                        <div class="absolute inset-0 bg-gradient-to-t from-midnight via-midnight/40 to-transparent"></div>
                        
                        <!-- Bottom Info Overlay -->
                        <div class="absolute bottom-6 left-6 right-6">
                            <span class="px-2 py-0.5 rounded bg-cyan-accent text-midnight text-[9px] font-bold uppercase tracking-wider mb-2 inline-block">4K ULTRA HD</span>
                            <h3 class="font-display text-xl font-bold text-white mb-1">VIVA Premium Experience</h3>
                            <p class="text-xs text-cyan-accent flex items-center font-medium">
                                <svg class="w-3.5 h-3.5 mr-1 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                4.9 (1.2jt Ulasan)
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- Features Section -->
    <section id="fitur" class="py-20 bg-midnight/50 relative border-t border-white/5">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <h2 class="font-display text-3xl sm:text-4xl font-extrabold tracking-tight mb-4">
                    Maksimalkan Waktu Luang Anda Dengan <span class="text-cyan-accent">Fitur Unggulan</span>
                </h2>
                <p class="text-gray-400 text-sm sm:text-base">
                    Ubah ruang bersantai Anda menjadi bioskop privat yang mewah. Bebaskan diri dari segala hambatan menonton tradisional.
                </p>
                <div class="w-12 h-1 bg-gradient-to-r from-cyan-accent to-gold-accent mx-auto mt-6 rounded-full"></div>
            </div>

            <!-- Features Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                @foreach ($features as $feature)
                    <div class="glass-card rounded-2xl p-8 flex flex-col items-start relative overflow-hidden group">
                        <!-- Border animation container -->
                        <div class="absolute inset-0 bg-gradient-to-br from-cyan-accent/10 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                        
                        <!-- Icon -->
                        <div class="p-3 bg-cyan-accent/10 rounded-xl mb-6 relative z-10 border border-cyan-accent/10">
                            {!! $feature['icon'] !!}
                        </div>

                        <!-- Content -->
                        <h3 class="font-display text-xl font-bold mb-3 relative z-10 text-white group-hover:text-cyan-accent transition-colors duration-300">
                            {{ $feature['title'] }}
                        </h3>
                        <p class="text-gray-400 text-sm leading-relaxed relative z-10">
                            {{ $feature['description'] }}
                        </p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Catalog Section (Poster Grid) -->
    <section id="katalog" class="py-20 relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col md:flex-row md:items-end justify-between mb-12">
            <div>
                <h2 class="font-display text-3xl sm:text-4xl font-black tracking-tight mb-3">
                    Katalog Populer di <span class="text-gradient-cyan-gold">VIVA</span>
                </h2>
                <p class="text-gray-400 text-sm sm:text-base max-w-xl">
                    Temukan drama-drama romantis, aksi menegangkan, film fiksi ilmiah kelas dunia, dan banyak lagi.
                </p>
            </div>
            
            <!-- Category Tabs (Decorative & Semi-functional) -->
            <div class="flex items-center space-x-2 mt-6 md:mt-0 bg-white/5 backdrop-blur-md p-1.5 rounded-xl border border-white/5 self-start md:self-auto text-xs font-semibold overflow-x-auto max-w-full">
                <button class="px-4 py-2 rounded-lg bg-cyan-accent text-midnight transition-all duration-300 whitespace-nowrap">Semua</button>
                <button class="px-4 py-2 rounded-lg text-gray-300 hover:text-white transition-all duration-300 whitespace-nowrap">Trending</button>
                <button class="px-4 py-2 rounded-lg text-gray-300 hover:text-white transition-all duration-300 whitespace-nowrap">Drama Korea</button>
                <button class="px-4 py-2 rounded-lg text-gray-300 hover:text-white transition-all duration-300 whitespace-nowrap">Film Aksi</button>
            </div>
        </div>

        <!-- 4-Column Poster Grid -->
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 sm:gap-6 lg:gap-8">
            @foreach ($posters as $poster)
                <div class="group relative aspect-[2/3] rounded-2xl overflow-hidden border border-white/5 hover:border-cyan-accent/35 shadow-lg bg-card-navy transition-all duration-500 hover:scale-[1.03] hover:shadow-cyan-glow cursor-pointer">
                    <!-- Poster Image (the requested placeholder URL) -->
                    <img src="{{ $poster['image'] }}" alt="{{ $poster['title'] }}" class="w-full h-full object-cover transition-all duration-700 group-hover:scale-105">

                    <!-- Premium Badge (if exists) -->
                    @if ($poster['badge'])
                        <div class="absolute top-3 left-3 z-10 px-2 py-0.5 rounded text-[9px] font-extrabold uppercase tracking-wider {{ $poster['badge'] === 'Eksklusif' ? 'bg-gold-accent text-midnight' : 'bg-cyan-accent text-midnight' }}">
                            {{ $poster['badge'] }}
                        </div>
                    @endif

                    <!-- Gradient Overlay from bottom to top -->
                    <div class="absolute inset-0 bg-gradient-to-t from-midnight via-midnight/60 to-transparent opacity-80 group-hover:opacity-95 transition-opacity duration-300"></div>

                    <!-- Static rating always visible in top right -->
                    <div class="absolute top-3 right-3 flex items-center space-x-1 bg-midnight/60 backdrop-blur-md px-2 py-0.5 rounded text-[10px] font-semibold text-gold-accent">
                        <svg class="w-3 h-3 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                        <span>{{ $poster['rating'] }}</span>
                    </div>

                    <!-- Slide up overlay metadata on hover -->
                    <div class="absolute bottom-0 left-0 right-0 p-4 sm:p-6 translate-y-3 group-hover:translate-y-0 transition-transform duration-300">
                        <p class="text-[10px] text-cyan-accent font-semibold tracking-wider uppercase mb-1">{{ $poster['genre'] }}</p>
                        <h3 class="font-display text-base sm:text-lg font-bold text-white group-hover:text-cyan-accent transition-colors duration-300 leading-tight mb-2">
                            {{ $poster['title'] }}
                        </h3>
                        
                        <!-- Watch Action Link (Sleek Glassmorphic button) -->
                        <div class="flex items-center text-xs text-white font-bold opacity-0 group-hover:opacity-100 transition-opacity duration-300 delay-75">
                            <span class="mr-1.5">Tonton Sekarang</span>
                            <svg class="w-3.5 h-3.5 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        
        <!-- Explore More CTA -->
        <div class="text-center mt-12">
            <p class="text-gray-400 text-xs sm:text-sm mb-4">Ingin tontonan seru lainnya? Ratusan drama premium siap Anda mainkan.</p>
            <a href="#paket" class="inline-flex items-center space-x-1.5 px-6 py-3 rounded-xl border border-cyan-accent/20 text-cyan-accent font-semibold hover:bg-cyan-accent/5 hover:border-cyan-accent/50 hover:scale-[1.02] transition-all duration-300 text-xs sm:text-sm">
                <span>Daftar Sekarang & Mulai Menonton</span>
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
            </a>
        </div>
    </section>

    <!-- Pricing / Packages Section -->
    <section id="paket" class="py-20 bg-midnight/35 relative border-t border-white/5">
        <!-- Center Glow behind card -->
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[35vw] h-[35vw] rounded-full bg-gold-accent/5 blur-[120px] pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <h2 class="font-display text-3xl sm:text-4xl font-extrabold tracking-tight mb-4">
                    Pilih Paket Langganan <span class="text-gold-accent">VIVA Premium</span> Anda
                </h2>
                <p class="text-gray-400 text-sm sm:text-base">
                    Investasikan ketenangan bersantai Anda dengan paket nonton beresolusi tinggi tanpa gangguan iklan.
                </p>
                <div class="w-12 h-1 bg-gradient-to-r from-gold-accent to-cyan-accent mx-auto mt-6 rounded-full"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-4xl mx-auto">
                
                <!-- Free with Ads Tier Card -->
                <div class="glass-card rounded-3xl p-8 sm:p-10 flex flex-col justify-between relative overflow-hidden border border-white/5 opacity-75 hover:opacity-100 transition-opacity">
                    <div>
                        <span class="px-3 py-1 rounded-full bg-white/5 border border-white/10 text-gray-300 text-xs font-semibold uppercase tracking-wider mb-6 inline-block">Paket Standar</span>
                        <h3 class="font-display text-2xl font-bold mb-2">Gratis Dengan Iklan</h3>
                        <p class="text-gray-400 text-xs sm:text-sm mb-6">Nikmati drama-drama tertentu secara gratis dengan gangguan jeda iklan berkala.</p>
                        
                        <!-- Price -->
                        <div class="flex items-baseline mb-8">
                            <span class="text-4xl font-extrabold font-display">Rp 0</span>
                            <span class="text-gray-400 text-sm ml-2">/selamanya</span>
                        </div>

                        <!-- Feature Checklist -->
                        <ul class="space-y-4 text-xs sm:text-sm text-gray-300 mb-8 border-t border-white/5 pt-8">
                            <li class="flex items-center">
                                <svg class="w-4 h-4 mr-3 text-red-500/80" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M6 18L18 6M6 6l12 12"/></svg>
                                <span class="text-gray-400 line-through">Menonton Tanpa Iklan</span>
                            </li>
                            <li class="flex items-center">
                                <svg class="w-4 h-4 mr-3 text-cyan-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
                                <span>Kualitas Gambar Standar (480p/720p)</span>
                            </li>
                            <li class="flex items-center">
                                <svg class="w-4 h-4 mr-3 text-red-500/80" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M6 18L18 6M6 6l12 12"/></svg>
                                <span class="text-gray-400 line-through">Fitur Download & Nonton Offline</span>
                            </li>
                            <li class="flex items-center">
                                <svg class="w-4 h-4 mr-3 text-cyan-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
                                <span>Akses Hanya Drama Non-Premium</span>
                            </li>
                        </ul>
                    </div>

                    <a href="#" class="w-full py-4 text-center text-xs sm:text-sm font-bold text-white hover:text-cyan-accent border border-white/10 hover:border-cyan-accent/30 rounded-full bg-white/5 transition-all duration-300">
                        Mulai Nonton Gratis
                    </a>
                </div>

                <!-- VIVA Premium Tier Card (GLOWING GOLD) -->
                <div class="glass-card-gold rounded-3xl p-8 sm:p-10 flex flex-col justify-between relative overflow-hidden transform scale-[1.02] md:scale-[1.03] shadow-2xl">
                    <!-- Featured Corner Ribbon -->
                    <div class="absolute top-5 right-5 px-3 py-1 rounded-full bg-gold-accent/15 border border-gold-accent/30 text-gold-accent text-[10px] font-extrabold uppercase tracking-wider animate-pulse">
                        Sangat Direkomendasikan
                    </div>

                    <div>
                        <span class="px-3 py-1 rounded-full bg-gold-accent text-midnight text-xs font-semibold uppercase tracking-wider mb-6 inline-block">Paket Premium</span>
                        <h3 class="font-display text-2xl font-bold mb-2">VIVA Premium Unlimited</h3>
                        <p class="text-gray-300 text-xs sm:text-sm mb-6">Akses bebas penuh ke ribuan drama berkualitas 4K UHD, download offline, dan 100% tanpa iklan.</p>
                        
                        <!-- Price -->
                        <div class="flex items-baseline mb-8">
                            <span class="text-4xl sm:text-5xl font-black font-display text-gold-accent">Rp 29.000</span>
                            <span class="text-gray-300 text-sm ml-2">/bulan</span>
                        </div>

                        <!-- Feature Checklist -->
                        <ul class="space-y-4 text-xs sm:text-sm text-gray-200 mb-8 border-t border-gold-accent/15 pt-8">
                            <li class="flex items-center">
                                <svg class="w-4 h-4 mr-3 text-gold-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
                                <strong>Nonton Drama 100% Tanpa Iklan</strong>
                            </li>
                            <li class="flex items-center">
                                <svg class="w-4 h-4 mr-3 text-gold-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
                                <span>Kualitas Audio & Video Jernih (4K UHD)</span>
                            </li>
                            <li class="flex items-center">
                                <svg class="w-4 h-4 mr-3 text-gold-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
                                <span>Unduhan Offline Sepuasnya (Simpan Kuota)</span>
                            </li>
                            <li class="flex items-center">
                                <svg class="w-4 h-4 mr-3 text-gold-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
                                <strong>Akses VIP Semua Episode Baru Serentak</strong>
                            </li>
                        </ul>
                    </div>

                    <a href="#" class="w-full py-4 text-center text-xs sm:text-sm font-bold text-midnight bg-gradient-to-r from-amber-400 to-gold-accent hover:from-amber-300 hover:to-amber-500 rounded-full tracking-wide glow-gold transition-all duration-300 transform hover:scale-[1.02]">
                        Mulai Uji Coba Gratis 7 Hari
                    </a>
                </div>

            </div>
        </div>
    </section>

    <!-- FAQs Section -->
    <section id="faq" class="py-20 relative max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="font-display text-3xl sm:text-4xl font-extrabold tracking-tight mb-4">
                Pertanyaan Yang <span class="text-cyan-accent">Sering Diajukan</span>
            </h2>
            <p class="text-gray-400 text-sm sm:text-base">
                Masih memiliki pertanyaan seputar VIVA Premium? Temukan jawabannya di bawah ini.
            </p>
            <div class="w-12 h-1 bg-gradient-to-r from-cyan-accent to-gold-accent mx-auto mt-6 rounded-full"></div>
        </div>

        <!-- Accordion container -->
        <div class="space-y-4">
            @foreach ($faqs as $index => $faq)
                <div class="glass-card rounded-2xl overflow-hidden border border-white/5 transition-all duration-300">
                    <button class="w-full flex items-center justify-between p-6 text-left text-sm sm:text-base font-bold font-display hover:text-cyan-accent transition-colors duration-200 focus:outline-none faq-btn" data-target="faq-ans-{{ $index }}">
                        <span>{{ $faq['question'] }}</span>
                        <!-- Accordion Icon arrow -->
                        <span class="p-1 bg-white/5 rounded-lg border border-white/10 text-cyan-accent transform transition-transform duration-300 icon-span">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7"/></svg>
                        </span>
                    </button>
                    <!-- Content dynamic height -->
                    <div id="faq-ans-{{ $index }}" class="max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                        <div class="p-6 pt-0 text-xs sm:text-sm text-gray-400 leading-relaxed border-t border-white/5 mt-4">
                            {{ $faq['answer'] }}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    <!-- Footer Section -->
    <footer class="bg-[#080A15] border-t border-white/5 pt-16 pb-12 relative overflow-hidden">
        <!-- Glow bottom right -->
        <div class="absolute bottom-[-10%] right-[-10%] w-[30vw] h-[30vw] rounded-full bg-cyan-accent/5 blur-[90px] pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-12 gap-8 mb-12">
                <!-- Branding column -->
                <div class="md:col-span-5">
                    <a href="#" class="font-display text-3xl font-extrabold tracking-wider text-gradient-cyan-gold mb-4 inline-block">
                        VIVA
                    </a>
                    <p class="text-gray-400 text-xs sm:text-sm mb-6 leading-relaxed max-w-sm">
                        Layanan streaming drama berkualitas premium tanpa iklan yang dirancang khusus untuk kenyamanan menonton maksimal kapan pun dan di mana pun.
                    </p>
                    <!-- Social Icons -->
                    <div class="flex items-center space-x-4">
                        <a href="#" class="p-2.5 bg-white/5 hover:bg-cyan-accent/10 border border-white/10 hover:border-cyan-accent/30 rounded-xl text-gray-400 hover:text-cyan-accent transition-all duration-300">
                            <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/></svg>
                        </a>
                        <a href="#" class="p-2.5 bg-white/5 hover:bg-cyan-accent/10 border border-white/10 hover:border-cyan-accent/30 rounded-xl text-gray-400 hover:text-cyan-accent transition-all duration-300">
                            <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                        </a>
                    </div>
                </div>

                <!-- Fast Links Grid -->
                <div class="md:col-span-2 md:col-start-7">
                    <h4 class="font-display font-semibold text-sm tracking-wide text-white uppercase mb-4">Navigasi</h4>
                    <ul class="space-y-2.5 text-xs sm:text-sm">
                        <li><a href="#" class="text-gray-400 hover:text-cyan-accent transition-colors duration-200">Beranda</a></li>
                        <li><a href="#fitur" class="text-gray-400 hover:text-cyan-accent transition-colors duration-200">Fitur</a></li>
                        <li><a href="#katalog" class="text-gray-400 hover:text-cyan-accent transition-colors duration-200">Katalog</a></li>
                        <li><a href="#paket" class="text-gray-400 hover:text-cyan-accent transition-colors duration-200">Paket Premium</a></li>
                    </ul>
                </div>

                <div class="md:col-span-2">
                    <h4 class="font-display font-semibold text-sm tracking-wide text-white uppercase mb-4">Bantuan</h4>
                    <ul class="space-y-2.5 text-xs sm:text-sm">
                        <li><a href="#faq" class="text-gray-400 hover:text-cyan-accent transition-colors duration-200">FAQ</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-cyan-accent transition-colors duration-200">Syarat Ketentuan</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-cyan-accent transition-colors duration-200">Kebijakan Privasi</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-cyan-accent transition-colors duration-200">Hubungi Kami</a></li>
                    </ul>
                </div>

                <div class="md:col-span-3">
                    <h4 class="font-display font-semibold text-sm tracking-wide text-white uppercase mb-4">Newsletter</h4>
                    <p class="text-gray-400 text-xs mb-4">Dapatkan info terupdate dan drama baru rilis gratis langsung ke email Anda.</p>
                    <form action="#" class="flex flex-col space-y-2">
                        <input type="email" placeholder="Alamat email Anda" class="px-4 py-2.5 bg-white/5 border border-white/10 rounded-xl text-xs focus:outline-none focus:border-cyan-accent/50 text-white placeholder-gray-500">
                        <button type="submit" class="px-4 py-2.5 bg-cyan-accent hover:bg-cyan-accent/90 text-midnight font-bold rounded-xl text-xs uppercase tracking-wider transition-all duration-300 shadow-cyan-glow hover:shadow-cyan-glow-intense">Langganan</button>
                    </form>
                </div>
            </div>

            <div class="border-t border-white/5 pt-8 mt-12 flex flex-col sm:flex-row justify-between items-center text-xs text-gray-500">
                <p>&copy; 2026 VIVA Premium. Seluruh Hak Cipta Dilindungi.</p>
                <p class="mt-2 sm:mt-0">Dibuat dengan ❤️ oleh Senior Developer & UI/UX Designer</p>
            </div>
        </div>
    </footer>

    <!-- Interactive FAQs vanilla JS and header scroll logic -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // FAQs Accordion Logic
            const faqBtns = document.querySelectorAll('.faq-btn');
            
            faqBtns.forEach(btn => {
                btn.addEventListener('click', () => {
                    const targetId = btn.getAttribute('data-target');
                    const answerDiv = document.getElementById(targetId);
                    const iconSpan = btn.querySelector('.icon-span');
                    
                    // Close other open accordions
                    faqBtns.forEach(otherBtn => {
                        const otherTarget = otherBtn.getAttribute('data-target');
                        if (otherTarget !== targetId) {
                            const otherAns = document.getElementById(otherTarget);
                            const otherIcon = otherBtn.querySelector('.icon-span');
                            otherAns.style.maxHeight = null;
                            otherIcon.style.transform = 'rotate(0deg)';
                            otherBtn.closest('.glass-card').classList.remove('border-cyan-accent/25');
                        }
                    });
                    
                    // Toggle current accordion
                    if (answerDiv.style.maxHeight) {
                        answerDiv.style.maxHeight = null;
                        iconSpan.style.transform = 'rotate(0deg)';
                        btn.closest('.glass-card').classList.remove('border-cyan-accent/25');
                    } else {
                        answerDiv.style.maxHeight = answerDiv.scrollHeight + "px";
                        iconSpan.style.transform = 'rotate(180deg)';
                        btn.closest('.glass-card').classList.add('border-cyan-accent/25');
                    }
                });
            });

            // Sticky Header Blur effect on Scroll
            const header = document.getElementById('main-header');
            window.addEventListener('scroll', () => {
                if (window.scrollY > 50) {
                    header.querySelector('.glass-nav').style.transform = 'translateY(-4px)';
                    header.querySelector('.glass-nav').style.boxShadow = '0 10px 30px -10px rgba(11, 14, 27, 0.5)';
                } else {
                    header.querySelector('.glass-nav').style.transform = 'translateY(0)';
                    header.querySelector('.glass-nav').style.boxShadow = 'none';
                }
            });
        });
    </script>
</body>
</html>
