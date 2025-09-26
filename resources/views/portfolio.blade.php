@extends('layouts.app')

@section('content')
    <div class="max-w-7xl mx-auto lg:grid lg:grid-cols-12 lg:gap-16 px-6 lg:px-8 py-24 lg:py-32">

        <!-- Kolom Kiri (Navigasi Sticky) -->
        <header class="hidden lg:block lg:col-span-3">
            <div class="sticky top-24">

                <!-- Foto Profil Pemicu Modal -->
                <button type="button" data-modal-target="image-modal" data-modal-toggle="image-modal"
                    class="cursor-pointer group">
                    <img src="{{ asset('profile.jpg') }}" alt="Foto Profil"
                        class="rounded-full w-24 h-24 object-cover mb-8 border-2 border-dark-card group-hover:border-accent-lime transition-colors duration-300">
                </button>

                <h1 class="text-3xl font-black text-text-light">Winaldo</h1>
                <h2 class="text-lg text-text-muted mt-2">Software Engineer & Mekanik Otomotif</h2>
                <nav class="mt-12">
                    <ul class="space-y-4">
                        <li><a href="#about"
                                class="nav-link text-text-muted hover:text-text-light transition-all duration-300 before:content-[''] before:inline-block before:w-0 before:h-px before:bg-text-light before:mr-4 before:transition-all before:duration-300">Saya</a>
                        </li>
                        <li><a href="#projects"
                                class="nav-link text-text-muted hover:text-text-light transition-all duration-300 before:content-[''] before:inline-block before:w-0 before:h-px before:bg-text-light before:mr-4 before:transition-all before:duration-300">Proyek</a>
                        </li>
                        <li><a href="#skills"
                                class="nav-link text-text-muted hover:text-text-light transition-all duration-300 before:content-[''] before:inline-block before:w-0 before:h-px before:bg-text-light before:mr-4 before:transition-all before:duration-300">Skills</a>
                        </li>
                        <li><a href="#contact"
                                class="nav-link text-text-muted hover:text-text-light transition-all duration-300 before:content-[''] before:inline-block before:w-0 before:h-px before:bg-text-light before:mr-4 before:transition-all before:duration-300">Kontak</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </header>

        <!-- Kolom Kanan (Konten Scroll) -->
        <main class="lg:col-span-9">

            <!-- Section Tentang -->
            <section id="about" class="content-section min-h-screen">
                <h2 class="headline text-5xl lg:text-7xl font-black text-text-light mb-8">Saya merancang dan membangun
                    pengalaman digital.</h2>
                <div class="text-lg text-text-muted space-y-6 max-w-3xl">
                    <p>Berawal dari rasa penasaran, saya menemukan menantang hidup untuk memecahkan masalah melalui kode. Saya
                        menikmati proses membangun aplikasi dari ide abstrak hingga menjadi solusi yang fungsional
                        dan elegan, layaknya menyusun sebuah puzzle yang kompleks. Sebenarnya saya tidak terlalu meminati
                    bidang Programmer ini, saya cuma coba coba saja.</p>
                    <p>Tujuan karir saya adalah menjadi developer serba bisa, Menjadi mekanik Otomotif Motor, bermain gitar, Mendaki gunung, dan masih banyak lagi.
                        Saya selalu mengikuti perkembangan teknologi terbaru
                        dengan fokus pada pengalaman pengguna yang
                        intuitif dan performa yang solid.</p>
                </div>
            </section>

            <!-- Section Proyek -->
            <section id="projects" class="content-section min-h-screen">
                <h2 class="headline text-4xl lg:text-5xl font-black text-text-light mb-12">Proyek Yang Pernah dikerjakan</h2>
                <div class="space-y-12">
                    @php
                        $projects = [
                            [
                                'name' => 'Aplikasi Web Kasir',
                                'desc' => 'Aplikasi POS full-stack dari nol dengan fitur lengkap.',
                                'tags' => ['Laravel', 'Tailwind', 'Alpine.js'],
                                'link' => 'https://github.com/Winaldo2111082047/Aplikasi-Web-Kasir.git',
                            ],
                            [
                                'name' => 'Sistem Manajemen KBK',
                                'desc' => 'Sistem manajemen akademik internal.',
                                'tags' => ['Laravel'],
                                'link' => 'https://github.com/simakti/pblkbk.git',
                            ],
                            [
                                'name' => 'Manajemen Keuangan',
                                'desc' => 'Aplikasi pencatatan finansial dengan antarmuka modern.',
                                'tags' => ['React', 'Laravel', 'MUI'],
                                'link' => 'https://github.com/Winaldo2111082047/proyek-keuangan.git',
                            ],
                        ];
                    @endphp
                    @foreach ($projects as $project)
                        <div class="project-card group">
                            <a href="{{ $project['link'] }}" target="_blank"
                                class="block p-8 bg-dark-card rounded-2xl border border-transparent hover:border-accent-lime transition-colors duration-300">
                                <h3 class="text-2xl font-bold text-text-light mb-3">{{ $project['name'] }}</h3>
                                <p class="text-text-muted mb-4">{{ $project['desc'] }}</p>
                                <div class="flex flex-wrap gap-3">
                                    @foreach ($project['tags'] as $tag)
                                        <span
                                            class="text-sm font-medium py-1 px-3 bg-accent-lime/10 text-accent-lime rounded-full">{{ $tag }}</span>
                                    @endforeach
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </section>

            <!-- ======================================================= -->
            <!-- SECTION KETERAMPILAN DENGAN IKON DARI FILE GAMBAR ANDA -->
            <!-- ======================================================= -->
            <section id="skills" class="content-section min-h-screen">
                <h2 class="headline text-4xl lg:text-5xl font-black text-text-light mb-12">Keterampilan & Teknologi</h2>
                <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                    @php
                        // Pastikan nama file di sini sama persis dengan nama file yang Anda download
                        $skills = [
                            ['name' => 'Laravel', 'logo' => 'laravel.svg'],
                            ['name' => 'JavaScript', 'logo' => 'javascript.svg'],
                            ['name' => 'React & Next.js', 'logo' => 'react.svg'],
                            ['name' => 'Flutter', 'logo' => 'flutter.svg'],
                            ['name' => 'Dart', 'logo' => 'dart.svg'],
                            ['name' => 'Node.js', 'logo' => 'nodejs.svg'],
                            ['name' => 'Tailwind CSS', 'logo' => 'tailwindcss.svg'],
                            ['name' => 'Git & GitHub', 'logo' => 'github.svg'],
                        ];
                    @endphp
                    @foreach ($skills as $skill)
                        <div
                            class="project-card flex flex-col items-center justify-center text-center p-6 bg-dark-card rounded-2xl border border-transparent hover:border-accent-lime transition-colors duration-300">
                            <div class="w-16 h-16 mb-4 flex items-center justify-center">
                                <img src="{{ asset('icons/' . $skill['logo']) }}" alt="{{ $skill['name'] }} Logo"
                                    class="h-12 w-12 object-contain">
                            </div>
                            <p class="font-medium text-text-muted">{{ $skill['name'] }}</p>
                        </div>
                    @endforeach
                </div>
            </section>

            <!-- Section Kontak -->
            <section id="contact" class="content-section min-h-screen">
                <h2 class="headline text-4xl lg:text-5xl font-black text-text-light mb-8">Hubungi Saya</h2>
                <p class="text-lg text-text-muted max-w-2xl mb-12">Saya selalu terbuka untuk kolaborasi atau sekadar
                    berdiskusi. Jangan ragu untuk mengirim pesan.</p>

                <form id="contact-form" action="https://formspree.io/f/xjkakwvd" method="POST"
                    class="max-w-3xl space-y-6 text-left">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="name" class="block text-sm font-medium text-text-muted mb-2">Nama Anda</label>
                            <input type="text" id="name" name="name" placeholder="Nama Lengkap"
                                class="w-full bg-dark-card border-2 border-transparent p-4 rounded-lg focus:outline-none focus:border-accent-lime transition-colors"
                                required>
                        </div>
                        <div>
                            <label for="email" class="block text-sm font-medium text-text-muted mb-2">Email Anda</label>
                            <input type="email" id="email" name="email" placeholder="email@contoh.com"
                                class="w-full bg-dark-card border-2 border-transparent p-4 rounded-lg focus:outline-none focus:border-accent-lime transition-colors"
                                required>
                        </div>
                    </div>
                    <div>
                        <label for="message" class="block text-sm font-medium text-text-muted mb-2">Pesan</label>
                        <textarea id="message" name="message" placeholder="Tulis pesan Anda di sini..." rows="5"
                            class="w-full bg-dark-card border-2 border-transparent p-4 rounded-lg focus:outline-none focus:border-accent-lime transition-colors"
                            required></textarea>
                    </div>
                    <div>
                        <button type="submit"
                            class="font-bold bg-accent-lime text-dark-bg py-3 px-8 rounded-full hover:opacity-80 transition-opacity">
                            Kirim Pesan
                        </button>
                    </div>
                </form>

                <div class="mt-16 pt-8 border-t border-dark-card max-w-3xl">
                    <p class="text-text-muted mb-4">Atau hubungi langsung melalui:</p>
                    <a href="https://wa.me/62895616031287" target="_blank"
                        class="inline-flex items-center gap-3 text-lg font-bold text-text-light hover:text-accent-lime transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="currentColor">
                            <path
                                d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.894 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.886-.001 2.269.654 4.298 1.908 6.054l-1.212 4.385 4.515-1.182z" />
                        </svg>
                        <span>0895616031287</span>
                    </a>
                </div>
            </section>

            <footer class="mt-32 pt-8 border-t border-dark-card text-center text-text-muted">
                <p>&copy; {{ date('Y') }} - Winaldo.</p>
            </footer>

        </main>

    </div>

    <!-- Modal untuk Memperbesar Gambar (dari Flowbite) -->
    <div id="image-modal" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-full max-h-full bg-black/80 backdrop-blur-sm">
        <div class="relative p-4 w-full max-w-4xl max-h-full">
            <!-- Konten Modal -->
            <div class="relative">
                <!-- Tombol Close (X) di pojok atas -->
                <button type="button"
                    class="absolute -top-4 -right-4 text-gray-400 bg-dark-card hover:bg-gray-600 hover:text-white rounded-full text-sm w-10 h-10 ms-auto inline-flex justify-center items-center"
                    data-modal-hide="image-modal">
                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
                <!-- Gambar yang diperbesar -->
                <img src="{{ asset('profile.jpg') }}" alt="Foto Profil Diperbesar"
                    class="rounded-lg w-full max-h-[90vh] object-contain">
            </div>
        </div>
    </div>
@endsection
