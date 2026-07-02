@extends('layouts.app')

@section('content')

    <!-- HERO -->

    <section class="hero-section">

        <div class="mesh-left"></div>

        <div class="mesh-right"></div>

        <!-- Floating Logo Cards -->
        <!-- React Card -->
        <div class="floating-card card-react">
            <svg viewBox="-11.5 -10.23174 23 20.46348" xmlns="http://www.w3.org/2000/svg">
                <circle cx="0" cy="0" r="2.05" fill="#00D8FF"/>
                <g stroke="#00D8FF" stroke-width="1" fill="none">
                    <ellipse rx="11" ry="4.2"/>
                    <ellipse rx="11" ry="4.2" transform="rotate(60)"/>
                    <ellipse rx="11" ry="4.2" transform="rotate(120)"/>
                </g>
            </svg>
        </div>

        <!-- PHP Card -->
        <div class="floating-card card-php">
            <svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                <ellipse cx="50" cy="50" rx="42" ry="24" fill="#777BB4" />
                <text x="50" y="58" font-family="'Plus Jakarta Sans', sans-serif" font-size="20" font-weight="bold" fill="#FFFFFF" text-anchor="middle">PHP</text>
            </svg>
        </div>

        <!-- Tailwind/Cross Card -->
        <div class="floating-card card-tailwind">
            <svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                <rect x="15" y="15" width="70" height="70" rx="20" fill="#38BDF8" />
                <path d="M35 35 L65 65 M65 35 L35 65" stroke="#FFFFFF" stroke-width="12" stroke-linecap="round" />
            </svg>
        </div>

        <!-- GitHub Card -->
        <div class="floating-card card-github">
            <svg viewBox="0 0 98 96" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M48.854 0C21.839 0 0 22 0 49.217c0 21.756 13.993 40.268 33.4 46.794 2.44.447 3.337-1.077 3.337-2.382 0-1.173-.045-5.023-.068-9.14-13.59 2.97-16.458-5.834-16.458-5.834-2.22-5.697-5.433-7.213-5.433-7.213-4.437-3.06.338-3.002.338-3.002 4.907.347 7.489 5.093 7.489 5.093 4.36 7.534 11.44 5.357 14.225 4.097.444-3.19 1.705-5.364 3.1-6.6-10.85-1.246-22.257-5.474-22.257-24.373 0-5.385 1.902-9.78 5.02-13.228-.503-1.244-2.174-6.262.477-13.044 0 0 4.102-1.328 13.435 5.06A46.4 46.4 0 0 1 48.854 20.4a46.1 46.1 0 0 1 12.235 1.66c9.323-6.388 13.418-5.06 13.418-5.06 2.658 6.782.987 11.8.487 13.044 3.13 3.448 5.016 7.843 5.016 13.228 0 18.948-11.425 23.112-22.308 24.33 1.755 1.525 3.327 4.512 3.327 9.09 0 6.564-.058 11.848-.058 13.473 0 1.314.887 2.853 3.364 2.373C84.024 89.47 98 70.966 98 49.217 98 22 76.16 0 48.854 0z" fill="#24292f"/>
            </svg>
        </div>

        <div class="container">

            <div class="row justify-content-center text-center">

                <div class="col-lg-10 col-xl-9">

                    <span class="hero-badge">

                        <span class="status-dot"></span> 🎓 Platform Manajemen Program Beasiswa

                    </span>

                    <h1 class="hero-title mt-4">

                        Temukan Program

                        <br>

                        Beasiswa Terbaik Untuk

                        <br>

                        Masa Depanmu

                    </h1>

                    <p class="hero-text mx-auto" style="max-width: 720px;">

                        Platform pengelolaan program beasiswa mulai dari pengumuman, pendaftaran, unggah dokumen, proses
                        seleksi, hingga penetapan penerima beasiswa secara transparan.

                    </p>

                    <!-- Feature Pills -->
                    <div class="feature-pills-container">
                        <div class="feature-pill">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#008080" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>
                            Cari Beasiswa
                        </div>
                        <div class="feature-pill">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#3182CE" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                            Terpercaya & Transparan
                        </div>
                        <div class="feature-pill">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#DD6B20" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/></svg>
                            Proses Cepat & Mudah
                        </div>
                    </div>

                    <div class="mt-5">

                        <a href="#program" class="btn btn-main px-5 py-3">

                            Mulai Sekarang <span style="font-size: 18px; line-height: 1; vertical-align: middle; margin-left: 4px;">&rsaquo;</span>

                        </a>

                        <div class="mt-4">
                            <a href="#program" style="text-decoration: none; color: var(--text-soft); font-size: 13px; font-weight: 700; letter-spacing: 1px; display: inline-block;">
                                PELAJARI LEBIH
                                <br>
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" style="margin-top: 5px; color: var(--text-soft);"><path d="M6 9l6 6 6-6"/></svg>
                            </a>
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>


    <!-- STATISTIK -->

    <section class="section fade-up">

        @php
            $totalProgram = \App\Models\Scholarship::count();
            $totalPendaftar = \App\Models\ScholarshipApplication::count();
            $totalPenerima = \App\Models\ScholarshipApplication::where('status', 'awarded')->count();
        @endphp

        <div class="container">

            <div class="row g-4 text-center">

                <div class="col-md-3">

                    <div class="stat-card">

                        <h2>{{ $totalProgram }}</h2>

                        <p>Program Beasiswa</p>

                    </div>

                </div>



                <div class="col-md-3">

                    <div class="stat-card">

                        <h2>{{ $totalPendaftar }}</h2>

                        <p>Pendaftar</p>

                    </div>

                </div>



                <div class="col-md-3">

                    <div class="stat-card">

                        <h2>{{ $totalPenerima }}</h2>

                        <p>Penerima</p>

                    </div>

                </div>



                <div class="col-md-3">

                    <div class="stat-card">

                        <h2>120+</h2>

                        <p>Institusi Mitra</p>

                    </div>

                </div>

            </div>

        </div>

    </section>


    <!-- PROGRAM BEASISWA -->

    <section id="program" class="section fade-up">
        <div class="container">
            <div id="react-scholarship-explorer" data-scholarships="{{ $scholarships->toJson() }}"></div>
        </div>
    </section>


    <!-- CARA KERJA -->

    <section id="cara-kerja" class="section fade-up" style="background: #FAFCFC;">

        <div class="container text-center">

            <span class="section-subtitle">Cara Kerja</span>

            <h2 class="section-title mb-5">3 Langkah Mudah</h2>

            <div class="row g-4">

                <div class="col-md-4">

                    <div class="category-card h-100">

                        <div class="step-number">01</div>

                        <div class="icon-circle mx-auto">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>
                        </div>

                        <h4 class="fw-bold mb-3" style="font-size: 20px; color: var(--dark-teal);">
                            Cari Beasiswa
                        </h4>

                        <p class="text-muted" style="font-size: 15px; line-height: 1.6;">
                            Pilih program yang sesuai dengan kebutuhan dan kualifikasimu.
                        </p>

                    </div>

                </div>



                <div class="col-md-4">

                    <div class="category-card h-100">

                        <div class="step-number">02</div>

                        <div class="icon-circle mx-auto">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/><polyline points="10 9 9 9 8 9"/></svg>
                        </div>

                        <h4 class="fw-bold mb-3" style="font-size: 20px; color: var(--dark-teal);">
                            Lengkapi Dokumen
                        </h4>

                        <p class="text-muted" style="font-size: 15px; line-height: 1.6;">
                            Unggah semua berkas dan persyaratan yang dibutuhkan dengan mudah.
                        </p>

                    </div>

                </div>



                <div class="col-md-4">

                    <div class="category-card h-100">

                        <div class="step-number">03</div>

                        <div class="icon-circle mx-auto">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M22 2L11 13M22 2l-7 20-4-9-9-4z"/></svg>
                        </div>

                        <h4 class="fw-bold mb-3" style="font-size: 20px; color: var(--dark-teal);">
                            Kirim Pendaftaran
                        </h4>

                        <p class="text-muted" style="font-size: 15px; line-height: 1.6;">
                            Kirim formulir dan pantau status seleksi Anda secara real-time.
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </section>




    <!-- KEUNGGULAN -->

    <section class="section fade-up">

        <div class="container">

            <div class="row align-items-center gy-5">

                <div class="col-lg-6">

                    <span class="section-subtitle">Mengapa Memilih Kami</span>

                    <h2 class="section-title mb-5">Platform Beasiswa Yang Terpercaya & Transparan</h2>

                    <div class="checkmark-list">
                        <div class="checkmark-item">
                            <span class="checkmark-icon">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                            </span>
                            Informasi Lengkap & Terpercaya
                        </div>
                        <div class="checkmark-item">
                            <span class="checkmark-icon">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                            </span>
                            Proses Pendaftaran Mudah & Cepat
                        </div>
                        <div class="checkmark-item">
                            <span class="checkmark-icon">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                            </span>
                            Banyak Pilihan Program Beasiswa Mitra
                        </div>
                        <div class="checkmark-item">
                            <span class="checkmark-icon">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                            </span>
                            Dukungan Pengguna & Layanan Transparan
                        </div>
                    </div>

                </div>



                <div class="col-lg-6 text-center">

                    <div class="hero-visual">
                        <img src="{{ asset('images/hero-person.jpg') }}" class="hero-image" alt="Feature Student" style="border-radius: 30px; box-shadow: 0 20px 40px rgba(0, 43, 43, 0.12); width: 100%; max-width: 500px; height: 450px; object-fit: cover;">
                        <div class="floating-card" style="right: 5%; top: 15%; width: 160px; height: auto; padding: 15px; border-radius: 16px; flex-direction: column; align-items: flex-start; text-align: left;">
                            <span style="font-size: 24px; font-weight: 800; color: var(--primary);">{{ \App\Models\ScholarshipApplication::where('status', 'awarded')->count() }}</span>
                            <span style="font-size: 11px; font-weight: 600; color: var(--text-soft); line-height: 1.2; margin-top: 4px;">Penerima Beasiswa Aktif</span>
                        </div>
                    </div>

                </div>

            </div>

        </div>

    </section>

    <section class="section fade-up" style="background: var(--bg);">
        <div class="container">
            <div id="react-faq"></div>
        </div>
    </section>

    <!-- FOOTER -->

    <footer>

        <p>

            © 2026 ScholarHub - Manajemen Program Beasiswa

        </p>

    </footer>

@endsection