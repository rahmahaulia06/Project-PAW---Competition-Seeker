<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Competition Seeker</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-white text-[#1E1B4B] font-sans">

    <!-- NAVBAR -->
    <nav class="w-full h-[68px] bg-white border-b border-[#eee9fa] flex items-center">
        <div class="w-full max-w-[1240px] mx-auto px-6 flex items-center justify-between gap-6">

            <!-- Logo -->
            <a href="/" class="flex items-center gap-2 no-underline whitespace-nowrap text-[19px] font-bold text-[#1E1B4B]">
                <img
                    src="{{ asset('images/logo.png') }}"
                    alt="Logo PAW"
                    class="w-[30px] h-[30px] object-contain"
                >
                <span>
                    Competition<span class="text-[#6D28D9]">Seeker</span>
                </span>
            </a>

            <!-- Menu Navigasi -->
            <div class="flex items-center gap-7 h-[38px]">

                <a
                    href="/"
                    class="h-[38px] flex items-center text-sm text-[#6D28D9] border-b-2 border-[#6D28D9] no-underline"
                >
                    Beranda
                </a>

                <!-- Dropdown Kategori -->
                <details class="relative h-[38px] flex items-center group">

                    <summary class="flex items-center gap-2 h-[38px] cursor-pointer list-none text-sm text-[#1E1B4B] hover:text-[#6D28D9]">
                        Kategori

                        <span class="w-[7px] h-[7px] border-r-[1.5px] border-b-[1.5px] border-current rotate-45 -mt-1 transition-transform group-open:rotate-[225deg] group-open:mt-1"></span>
                    </summary>

                    <div class="absolute top-[45px] left-[-12px] z-50 w-[190px] p-2 bg-white border border-[#E9DFFF] rounded-xl shadow-lg">

                        <a href="#kategori" class="block px-3 py-2.5 rounded-lg text-[13px] text-[#1E1B4B] no-underline hover:bg-[#F5F3FF] hover:text-[#6D28D9]">
                            Teknologi
                        </a>

                        <a href="#kategori" class="block px-3 py-2.5 rounded-lg text-[13px] text-[#1E1B4B] no-underline hover:bg-[#F5F3FF] hover:text-[#6D28D9]">
                            Bisnis
                        </a>

                        <a href="#kategori" class="block px-3 py-2.5 rounded-lg text-[13px] text-[#1E1B4B] no-underline hover:bg-[#F5F3FF] hover:text-[#6D28D9]">
                            Seni & Desain
                        </a>

                        <a href="#kategori" class="block px-3 py-2.5 rounded-lg text-[13px] text-[#1E1B4B] no-underline hover:bg-[#F5F3FF] hover:text-[#6D28D9]">
                            Olahraga
                        </a>

                        <a href="#kategori" class="block px-3 py-2.5 rounded-lg text-[13px] text-[#1E1B4B] no-underline hover:bg-[#F5F3FF] hover:text-[#6D28D9]">
                            Sosial
                        </a>

                        <a href="#kategori" class="block px-3 py-2.5 rounded-lg text-[13px] text-[#1E1B4B] no-underline hover:bg-[#F5F3FF] hover:text-[#6D28D9]">
                            Akademik
                        </a>

                    </div>
                </details>
            </div>

            <!-- Search Bar -->
            <div class="w-[210px] h-[38px] border border-[#E9DFFF] rounded-full flex items-center px-3 bg-white">

                <span class="text-[15px] text-gray-500">⌕</span>

                <input
                    type="search"
                    placeholder="Cari kompetisi..."
                    class="w-full min-w-0 border-0 outline-none shadow-none text-xs bg-transparent pl-2 focus:ring-0"
                >
            </div>

            <!-- Tombol Login dan Register -->
            <div class="flex items-center gap-[9px] whitespace-nowrap">

                <a
                    href="{{ route('login') }}"
                    class="no-underline text-[13px] px-5 py-[10px] rounded-full border border-[#1E1B4B] text-[#1E1B4B] hover:bg-[#F5F3FF] transition"
                >
                    Masuk
                </a>

                <a
                    href="{{ route('register') }}"
                    class="no-underline text-[13px] px-5 py-[10px] rounded-full bg-[#6D28D9] text-white hover:bg-[#4C1D95] transition"
                >
                    Daftar
                </a>

            </div>
        </div>
    </nav>


    <!-- HERO SECTION -->
    <section class="max-w-[1240px] min-h-[480px] mx-auto my-[35px] px-16 py-[55px] rounded-3xl bg-gradient-to-r from-[#F5F3FF] to-[#EDE5FF] flex items-center justify-between gap-9">

        <!-- Hero Content -->
        <div class="flex-1 max-w-[560px]">

            <span class="inline-block text-[#6D28D9] bg-[#E9DDFF] px-4 py-[9px] rounded-full text-[11px] font-bold tracking-widest">
                TEMUKAN PELUANGMU
            </span>

            <h1 class="mt-[22px] mb-[18px] text-[#1E1B4B] text-[46px] leading-[1.2] font-extrabold">
                Find It, Join It,
                <span class="block text-[#6D28D9]">
                    Win It!
                </span>
            </h1>

            <p class="text-[#625F78] text-[15px] leading-[1.8] mb-7">
                Discover various competitions and opportunities
                unlock your potential, showcase your talents,
                and achieve excellence.
            </p>

            <a
                href="#kompetisi"
                class="inline-flex items-center gap-3.5 px-6 py-3.5 rounded-full bg-[#6D28D9] text-white no-underline text-sm font-bold hover:bg-[#4C1D95] hover:-translate-y-0.5 transition duration-200"
            >
                Jelajahi Kompetisi
                <span>→</span>
            </a>

        </div>

        <!-- Hero Illustration -->
        <div class="flex-1 flex justify-center items-center">

            <img
                src="{{ asset('images/hero-competition.png') }}"
                alt="Ilustrasi kompetisi"
                class="w-full max-w-[430px] h-[350px] object-contain"
            >

        </div>

    </section>


<!-- KATEGORI POPULER -->
<section id="kategori" class="max-w-[1150px] mx-auto px-6 mt-10 mb-11">

    <!-- Judul dan Link -->
    <div class="flex items-center justify-between mb-5">
        <h2 class="text-[22px] font-bold text-[#1E1B4B]">
            Kategori
        </h2>

        <a href="#kategori"
           class="text-[13px] font-medium text-[#6D28D9] no-underline hover:text-[#4C1D95]">
            Lihat semua kategori
            <span class="ml-1">→</span>
        </a>
    </div>

    <!-- Daftar Kategori -->
    <div class="flex flex-wrap items-center gap-3">
         <!-- Semua -->
    <a href="#kompetisi"
       class="flex items-center gap-3 px-7 py-3 rounded-full bg-[#6D28D9] text-white text-[13px] font-semibold no-underline shadow-lg shadow-purple-200">
        <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round">
            <rect x="3" y="3" width="7" height="7" rx="1"/>
            <rect x="14" y="3" width="7" height="7" rx="1"/>
            <rect x="3" y="14" width="7" height="7" rx="1"/>
            <rect x="14" y="14" width="7" height="7" rx="1"/>
        </svg>
        Semua
    </a>

    <!-- Teknologi -->
    <a href="#kompetisi"
       class="flex items-center gap-3 px-6 py-3 rounded-full bg-[#F5F3FF] text-[#1E1B4B] text-[13px] font-medium no-underline hover:bg-[#E9DDFF] transition">
        <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
            <rect x="5" y="5" width="14" height="14" rx="3"/>
            <path d="M9 9h6v6H9zM9 2v3m6-3v3M9 19v3m6-3v3M2 9h3m-3 6h3m14-6h3m-3 6h3"/>
        </svg>
        Teknologi
    </a>

    <!-- Bisnis -->
    <a href="#kompetisi"
       class="flex items-center gap-3 px-6 py-3 rounded-full bg-[#F5F3FF] text-[#1E1B4B] text-[13px] font-medium no-underline hover:bg-[#E9DDFF] transition">
        <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
            <rect x="3" y="7" width="18" height="14" rx="2"/>
            <path d="M8 7V5a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2M3 12h18m-10 0v2h2v-2"/>
        </svg>
        Bisnis
    </a>

    <!-- Akademik -->
    <a href="#kompetisi"
       class="flex items-center gap-3 px-6 py-3 rounded-full bg-[#F5F3FF] text-[#1E1B4B] text-[13px] font-medium no-underline hover:bg-[#E9DDFF] transition">
        <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
            <path d="m2 10 10-5 10 5-10 5-10-5Z"/>
            <path d="M6 12v5c3 3 9 3 12 0v-5m4-2v7"/>
        </svg>
        Akademik
    </a>

    <!-- Seni & Desain -->
    <a href="#kompetisi"
       class="flex items-center gap-3 px-6 py-3 rounded-full bg-[#F5F3FF] text-[#1E1B4B] text-[13px] font-medium no-underline hover:bg-[#E9DDFF] transition">
        <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
            <path d="M12 3a9 9 0 1 0 0 18h1.5a2.5 2.5 0 0 0 1.8-4.2 1.5 1.5 0 0 1 1.1-2.6H19a2 2 0 0 0 2-2A9 9 0 0 0 12 3Z"/>
            <circle cx="7.5" cy="10" r="1"/>
            <circle cx="11" cy="7" r="1"/>
            <circle cx="16" cy="8" r="1"/>
        </svg>
        Seni & Desain
    </a>

    <!-- Olahraga -->
    <a href="#kompetisi"
       class="flex items-center gap-3 px-6 py-3 rounded-full bg-[#F5F3FF] text-[#1E1B4B] text-[13px] font-medium no-underline hover:bg-[#E9DDFF] transition">
        <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
            <path d="M8 21h8m-4-4v4M7 3h10v5a5 5 0 0 1-10 0V3Z"/>
            <path d="M7 5H4v2a4 4 0 0 0 4 4m9-6h3v2a4 4 0 0 1-4 4"/>
        </svg>
        Olahraga
    </a>

    <!-- Sosial -->
    <a href="#kompetisi"
       class="flex items-center gap-3 px-6 py-3 rounded-full bg-[#F5F3FF] text-[#1E1B4B] text-[13px] font-medium no-underline hover:bg-[#E9DDFF] transition">
        <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
            <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/>
            <circle cx="9" cy="7" r="4"/>
            <path d="M22 21v-2a4 4 0 0 0-3-3.87M16 3.13a4 4 0 0 1 0 7.75"/>
        </svg>
        Sosial
    </a>
    </div>
    </section>


<!-- KOMPETISI TERBARU -->
<section id="kompetisi" class="max-w-[1150px] mx-auto px-6 pt-7 pb-10 border-t border-[#F0ECFA]">

    <!-- Judul Section -->
    <div class="flex items-center justify-between mb-6">
        <div class="flex items-center gap-4">
            <span class="w-8 h-[2px] bg-[#6D28D9]"></span>
            <h2 class="text-[22px] font-bold text-[#1E1B4B]">
                Kompetisi Terbaru
            </h2>
        </div>

        <button class="flex items-center gap-2 px-4 py-2 rounded-full border border-[#E9DFFF] text-[13px] text-[#1E1B4B] hover:bg-[#F5F3FF]">
            Terbaru
            <span>⌄</span>
        </button>
    </div>

    <!-- Grid Kompetisi -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">

        <!-- Kartu 1 -->
        <article class="overflow-hidden rounded-2xl border border-[#EEE9FA] bg-white">
            <div class="h-[118px] bg-gradient-to-br from-[#DCD2FF] to-[#A98BF8] flex items-center justify-center">
                <svg class="w-20 h-20 text-white/80" viewBox="0 0 100 100" fill="none">
                    <rect x="12" y="15" width="76" height="55" rx="6" fill="currentColor"/>
                    <rect x="18" y="21" width="64" height="43" rx="3" fill="#39247F"/>
                    <path d="M27 31h30M27 40h43M27 49h22" stroke="#C8B7FF" stroke-width="3" stroke-linecap="round"/>
                    <path d="M5 75h90l-10 8H15l-10-8Z" fill="#4C1D95"/>
                </svg>
            </div>

            <div class="p-4">
                <span class="inline-block px-3 py-1 rounded-full bg-[#DBEAFE] text-[#2563EB] text-[11px] font-medium">
                    Teknologi
                </span>

                <h3 class="mt-3 mb-3 text-[15px] font-bold text-[#1E1B4B]">
                    Hackathon Nasional 2026
                </h3>

                <div class="space-y-2 text-[12px] text-[#625F78]">
                    <p>▢ &nbsp; 30 Sep 2026</p>
                    <p>⌖ &nbsp; Universitas Indonesia</p>
                </div>

                <div class="mt-4 flex items-center justify-between">
                    <span class="px-3 py-1.5 rounded-full bg-[#DCFCE7] text-[#15803D] text-[11px] font-medium">
                        ● Pendaftaran Dibuka
                    </span>

                    <a href="#kompetisi" class="w-9 h-9 rounded-full border border-[#E9DFFF] flex items-center justify-center text-[#6D28D9] no-underline hover:bg-[#F5F3FF]">
                        →
                    </a>
                </div>
            </div>
        </article>

        <!-- Kartu 2 -->
        <article class="overflow-hidden rounded-2xl border border-[#EEE9FA] bg-white">
            <div class="h-[118px] bg-gradient-to-br from-[#E9D2FF] to-[#C18AF7] flex items-center justify-center">
                <svg class="w-20 h-20 text-white/90" viewBox="0 0 100 100" fill="none">
                    <rect x="15" y="12" width="70" height="45" rx="4" fill="currentColor"/>
                    <path d="m25 43 15-14 12 9 18-20 10 12" stroke="#7C3AED" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                    <circle cx="25" cy="76" r="8" fill="#51208F"/>
                    <circle cx="50" cy="70" r="8" fill="#29205A"/>
                    <circle cx="75" cy="76" r="8" fill="#51208F"/>
                    <path d="M15 95c0-10 5-15 10-15s10 5 10 15m5 0c0-15 5-20 10-20s10 5 10 20m5 0c0-10 5-15 10-15s10 5 10 15" fill="#39247F"/>
                </svg>
            </div>

            <div class="p-4">
                <span class="inline-block px-3 py-1 rounded-full bg-[#F3E8FF] text-[#9333EA] text-[11px] font-medium">
                    Bisnis
                </span>

                <h3 class="mt-3 mb-3 text-[15px] font-bold text-[#1E1B4B]">
                    Business Plan Competition
                </h3>

                <div class="space-y-2 text-[12px] text-[#625F78]">
                    <p>▢ &nbsp; 15 Okt 2026</p>
                    <p>⌖ &nbsp; Binus University</p>
                </div>

                <div class="mt-4 flex items-center justify-between">
                    <span class="px-3 py-1.5 rounded-full bg-[#FAE8FF] text-[#A21CAF] text-[11px] font-medium">
                        ● Segera Dibuka
                    </span>

                    <a href="#kompetisi" class="w-9 h-9 rounded-full border border-[#E9DFFF] flex items-center justify-center text-[#6D28D9] no-underline hover:bg-[#F5F3FF]">
                        →
                    </a>
                </div>
            </div>
        </article>

        <!-- Kartu 3 -->
        <article class="overflow-hidden rounded-2xl border border-[#EEE9FA] bg-white">
            <div class="h-[118px] bg-gradient-to-br from-[#F8D5EE] to-[#C5A8F5] flex items-center justify-center">
                <svg class="w-20 h-20 text-white" viewBox="0 0 100 100" fill="none">
                    <path d="M22 28c-12 0-18 10-18 23 0 14 10 24 25 24h38c17 0 29-12 29-29 0-18-13-30-31-30H22Z" fill="currentColor"/>
                    <circle cx="30" cy="43" r="6" fill="#7C3AED"/>
                    <circle cx="50" cy="32" r="6" fill="#EC4899"/>
                    <circle cx="70" cy="43" r="6" fill="#3B82F6"/>
                    <circle cx="57" cy="60" r="6" fill="#F59E0B"/>
                    <path d="m84 18-17 63m29-54L76 84" stroke="#39247F" stroke-width="4" stroke-linecap="round"/>
                </svg>
            </div>

            <div class="p-4">
                <span class="inline-block px-3 py-1 rounded-full bg-[#FCE7F3] text-[#BE185D] text-[11px] font-medium">
                    Seni & Desain
                </span>

                <h3 class="mt-3 mb-3 text-[15px] font-bold text-[#1E1B4B]">
                    Lomba Desain Poster Nasional
                </h3>

                <div class="space-y-2 text-[12px] text-[#625F78]">
                    <p>▢ &nbsp; 1 Nov 2026</p>
                    <p>♙ &nbsp; Institut Teknologi Bandung</p>
                </div>

                <div class="mt-4 flex items-center justify-between">
                    <span class="px-3 py-1.5 rounded-full bg-[#F3F4F6] text-[#4B5563] text-[11px] font-medium">
                        ● Ditutup
                    </span>

                    <a href="#kompetisi" class="w-9 h-9 rounded-full border border-[#E9DFFF] flex items-center justify-center text-[#6D28D9] no-underline hover:bg-[#F5F3FF]">
                        →
                    </a>
                </div>
            </div>
        </article>

        <!-- Kartu 4 -->
        <article class="overflow-hidden rounded-2xl border border-[#EEE9FA] bg-white">
            <div class="h-[118px] bg-gradient-to-br from-[#C7DDFF] to-[#A58AF5] flex items-center justify-center">
                <svg class="w-20 h-20 text-white/90" viewBox="0 0 100 100" fill="none">
                    <circle cx="48" cy="49" r="29" stroke="#FACC15" stroke-width="3" fill="#FDE68A"/>
                    <path d="M22 36c18-8 43 4 52 24M25 64c18 9 39 3 51-12M48 20c-10 19-10 39 2 58" stroke="#7C3AED" stroke-width="3" stroke-linecap="round"/>
                    <path d="M79 8v82M91 8v82M67 8h29M67 28h29M67 48h29M67 68h29M67 88h29" stroke="white" stroke-width="2" opacity=".8"/>
                </svg>
            </div>

            <div class="p-4">
                <span class="inline-block px-3 py-1 rounded-full bg-[#DCFCE7] text-[#15803D] text-[11px] font-medium">
                    Olahraga
                </span>

                <h3 class="mt-3 mb-3 text-[15px] font-bold text-[#1E1B4B]">
                    National Volleyball Championship
                </h3>

                <div class="space-y-2 text-[12px] text-[#625F78]">
                    <p>▢ &nbsp; 20 Nov 2026</p>
                    <p>♙ &nbsp; Universitas Gadjah Mada</p>
                </div>

                <div class="mt-4 flex items-center justify-between">
                    <span class="px-3 py-1.5 rounded-full bg-[#DCFCE7] text-[#15803D] text-[11px] font-medium">
                        ● Pendaftaran Dibuka
                    </span>

                    <a href="#kompetisi" class="w-9 h-9 rounded-full border border-[#E9DFFF] flex items-center justify-center text-[#6D28D9] no-underline hover:bg-[#F5F3FF]">
                        →
                    </a>
                </div>
            </div>
        </article>
    </div>
 </section>
</body>
</html>