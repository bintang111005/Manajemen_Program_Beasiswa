```php
@extends('layouts.app')

@section('content')

    <!-- HERO -->

    <section class="hero-section">

        <div class="mesh-left"></div>

        <div class="mesh-right"></div>

        <div class="container">

            <div class="row align-items-center gy-5">

                <div class="col-lg-6">

                    <span class="hero-badge">

                        🎓 Platform Manajemen Program Beasiswa

                    </span>

                    <h1 class="hero-title mt-4">

                        Temukan Program

                        <br>

                        Beasiswa Terbaik

                        <br>

                        Untuk Masa Depanmu

                    </h1>

                    <p class="hero-text">

                        Platform pengelolaan program beasiswa mulai dari pengumuman, pendaftaran, unggah dokumen, proses
                        seleksi, hingga penetapan penerima beasiswa secara transparan.

                    </p>

                    <div class="mt-5 d-flex flex-wrap gap-3">

                        <a href="#kategori-beasiswa" class="btn btn-main">

                            Cari Beasiswa

                        </a>

                        <a href="#cara-kerja" class="btn btn-outline-main">

                            Pelajari Lebih Lanjut

                        </a>

                    </div>

                </div>



                <div class="col-lg-6">

                    <div class="hero-visual">

                        <img src="{{ asset('images/hero-illustration.jpg') }}" class="hero-image" alt="Hero">

                    </div>

                </div>

            </div>

        </div>

    </section>




    <!-- STATISTIK -->

    <section class="section fade-up">

        <div class="container">

            <div class="row g-4 text-center">

                <div class="col-md-3">

                    <div class="stat-card">

                        <h2>

                            250+

                        </h2>

                        <p>

                            Program Beasiswa

                        </p>

                    </div>

                </div>



                <div class="col-md-3">

                    <div class="stat-card">

                        <h2>

                            18.500+

                        </h2>

                        <p>

                            Pendaftar

                        </p>

                    </div>

                </div>



                <div class="col-md-3">

                    <div class="stat-card">

                        <h2>

                            7.850+

                        </h2>

                        <p>

                            Penerima

                        </p>

                    </div>

                </div>



                <div class="col-md-3">

                    <div class="stat-card">

                        <h2>

                            120+

                        </h2>

                        <p>

                            Institusi Mitra

                        </p>

                    </div>

                </div>

            </div>

        </div>

    </section>




    ```php
    <!-- KATEGORI -->

    <section id="kategori-beasiswa" class="section fade-up"></section>

    <div class="container text-center">

        <h5 class="text-primary">

            Kategori Beasiswa

        </h5>

        <h2 class="fw-bold mb-5">

            Pilih Jenjang Pendidikan

        </h2>

        <p class="hero-text mx-auto mb-5">

            Pilih jenjang pendidikan yang sesuai sebelum melanjutkan ke jalur pendaftaran.

        </p>

        <div class="row g-4 justify-content-center">



            <!-- S1 -->

            <div class="col-lg-4">

                <div class="category-card h-100">

                    <div class="icon">

                        🎓

                    </div>

                    <h3>

                        Beasiswa S1

                    </h3>

                    <p>

                        Program beasiswa untuk mahasiswa jenjang Sarjana (S1).

                    </p>

                    <br>

                    <a href="/program" class="btn btn-main">

                        Pilih Program

                    </a>

                </div>

            </div>



            <!-- S2 -->

            <div class="col-lg-4">

                <div class="category-card h-100">

                    <div class="icon">

                        📖

                    </div>

                    <h3>

                        Beasiswa S2

                    </h3>

                    <p>

                        Program beasiswa untuk mahasiswa jenjang Magister (S2).

                    </p>

                    <br>

                    <a href="/program" class="btn btn-main">

                        Pilih Program

                    </a>

                </div>

            </div>



            <!-- S3 -->

            <div class="col-lg-4">

                <div class="category-card h-100">

                    <div class="icon">

                        🎖

                    </div>

                    <h3>

                        Beasiswa S3

                    </h3>

                    <p>

                        Program beasiswa untuk mahasiswa jenjang Doktor (S3).

                    </p>

                    <br>

                    <a href="/program" class="btn btn-main">

                        Pilih Program

                    </a>

                </div>

            </div>

        </div>

    </div>

    </section>

    <!-- CARA KERJA -->

    <section id="cara-kerja" class="section fade-up">

        <div class="container text-center">

            <h5 class="text-primary mb-3">

                Cara Kerja

            </h5>

            <h2 class="fw-bold mb-5">

                3 Langkah Mudah

            </h2>

            <div class="row g-4">

                <div class="col-md-4">

                    <div class="category-card">

                        <div class="icon">

                            🔎

                        </div>

                        <h4>

                            Cari Beasiswa

                        </h4>

                        <p>

                            Pilih program yang sesuai dengan kebutuhanmu.

                        </p>

                    </div>

                </div>



                <div class="col-md-4">

                    <div class="category-card">

                        <div class="icon">

                            📝

                        </div>

                        <h4>

                            Lengkapi Dokumen

                        </h4>

                        <p>

                            Unggah semua persyaratan yang dibutuhkan.

                        </p>

                    </div>

                </div>



                <div class="col-md-4">

                    <div class="category-card">

                        <div class="icon">

                            📤

                        </div>

                        <h4>

                            Kirim Pendaftaran

                        </h4>

                        <p>

                            Pantau status seleksi secara real-time.

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

                    <h5 class="text-primary mb-3">

                        Mengapa Memilih Kami

                    </h5>

                    <h2 class="fw-bold mb-5">

                        Platform Beasiswa Yang Terpercaya

                    </h2>

                    <div class="category-card mb-3">

                        ✔ Informasi Lengkap & Terpercaya

                    </div>

                    <div class="category-card mb-3">

                        ✔ Proses Mudah & Cepat

                    </div>

                    <div class="category-card mb-3">

                        ✔ Banyak Pilihan Program

                    </div>

                    <div class="category-card">

                        ✔ Dukungan Pengguna

                    </div>

                </div>



                <div class="col-lg-6 text-center">

                    <img src="{{ asset('images/hero-illustration.jpg') }}" class="hero-image" alt="Feature">

                </div>

            </div>

        </div>

    </section>

    <!-- FOOTER -->

    <footer>

        <p>

            © 2026 ScholarHub - Manajemen Program Beasiswa

        </p>

    </footer>

@endsection
```