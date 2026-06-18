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

                        Wujudkan Masa Depan Bersama Beasiswa

                    </span>

                    <h1 class="hero-title mt-4">

                        Temukan Program

                        <br>

                        Beasiswa Terbaik

                        <br>

                        Untuk Masa Depanmu

                    </h1>

                    <p class="hero-text">

                        Platform pengelolaan program beasiswa

                        yang membantu mahasiswa mencari,

                        mendaftar, dan memantau proses

                        seleksi secara transparan.

                    </p>

                    <div class="mt-5">

                        <a href="/program" class="btn btn-main">

                            Cari Beasiswa

                        </a>

                        <a href="#cara-kerja" class="btn btn-outline-main ms-3">

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

            <div class="row g-4">

                <div class="col-md-3">

                    <div class="stat-card">

                        <h2>500+</h2>

                        <p>Program Beasiswa</p>

                    </div>

                </div>


                <div class="col-md-3">

                    <div class="stat-card">

                        <h2>18.500+</h2>

                        <p>Pendaftar</p>

                    </div>

                </div>


                <div class="col-md-3">

                    <div class="stat-card">

                        <h2>7.850+</h2>

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




    <!-- KATEGORI -->

    <section class="section fade-up">

        <div class="container text-center">

            <h5 class="text-primary">

                Kategori Beasiswa

            </h5>

            <h2 class="fw-bold mb-5">

                Pilih Beasiswa

                Sesuai Kebutuhanmu

            </h2>

            <div class="row g-4">

                <div class="col-lg-3">

                    <div class="category-card">

                        <div class="icon">

                            🎓

                        </div>

                        <h4>

                            Akademik

                        </h4>

                        <p>

                            IPK, Transkrip,

                            dan Prestasi Akademik.

                        </p>

                    </div>

                </div>


                <div class="col-lg-3">

                    <div class="category-card">

                        <div class="icon">

                            🏆

                        </div>

                        <h4>

                            Non Akademik

                        </h4>

                        <p>

                            Olahraga,

                            Organisasi,

                            dan Seni.

                        </p>

                    </div>

                </div>


                <div class="col-lg-3">

                    <div class="category-card">

                        <div class="icon">

                            🌏

                        </div>

                        <h4>

                            Luar Negeri

                        </h4>

                        <p>

                            Program Internasional

                            dan Pertukaran Pelajar.

                        </p>

                    </div>

                </div>


                <div class="col-lg-3">

                    <div class="category-card">

                        <div class="icon">

                            💼

                        </div>

                        <h4>

                            Bidang Studi

                        </h4>

                        <p>

                            Teknologi Informasi,

                            Bisnis, dan Kesehatan.

                        </p>

                    </div>

                </div>

            </div>

        </div>

    </section>




    <!-- CARA KERJA -->

    <section id="cara-kerja" class="section fade-up">

        <div class="container text-center">

            <h5 class="text-primary">

                Cara Kerja

            </h5>

            <h2 class="fw-bold mb-5">

                3 Langkah Mudah

                Mendapatkan Beasiswa

            </h2>

            <div class="row g-4">

                <div class="col-md-4">

                    <div class="category-card">

                        <div class="icon">

                            🔍

                        </div>

                        <h4>

                            Cari Beasiswa

                        </h4>

                        <p>

                            Temukan program

                            yang sesuai.

                        </p>

                    </div>

                </div>


                <div class="col-md-4">

                    <div class="category-card">

                        <div class="icon">

                            📄

                        </div>

                        <h4>

                            Lengkapi Dokumen

                        </h4>

                        <p>

                            Unggah seluruh

                            persyaratan.

                        </p>

                    </div>

                </div>


                <div class="col-md-4">

                    <div class="category-card">

                        <div class="icon">

                            🚀

                        </div>

                        <h4>

                            Kirim Pendaftaran

                        </h4>

                        <p>

                            Pantau hasil

                            seleksi.

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

                    <h5 class="text-primary">

                        Mengapa Memilih Kami

                    </h5>

                    <h2 class="fw-bold mb-5">

                        Platform Beasiswa

                        Yang Terpercaya

                    </h2>

                    <div class="category-card mb-3">

                        ✔ Informasi Lengkap

                    </div>

                    <div class="category-card mb-3">

                        ✔ Proses Mudah

                    </div>

                    <div class="category-card mb-3">

                        ✔ Banyak Pilihan

                    </div>

                    <div class="category-card">

                        ✔ Dukungan Pengguna

                    </div>

                </div>



                <div class="col-lg-6 text-center">

                    <img src="{{ asset('images/hero-illustration.jpg') }}" class="hero-image">

                </div>

            </div>

        </div>

    </section>




    <!-- TESTIMONI -->

    <section class="section fade-up">

        <div class="container">

            <div class="testimonial">

                <h2>

                    Testimoni Awardee

                </h2>

                <br>

                <p>

                    "Platform ini membantu saya

                    mendapatkan beasiswa

                    dengan lebih mudah

                    dan transparan."

                </p>

                <br>

                <strong>

                    — Mahasiswa Penerima

                </strong>

            </div>

        </div>

    </section>




    <!-- CTA -->

    <section class="section fade-up">

        <div class="container text-center">

            <h2 class="fw-bold">

                Siap Meraih Masa Depan

                Dengan Beasiswa?

            </h2>

            <p class="hero-text mx-auto">

                Daftarkan dirimu sekarang

                dan raih kesempatan terbaik.

            </p>

            <div class="mt-4">

                <a href="/program" class="btn btn-main">

                    Daftar Sekarang

                </a>

            </div>

        </div>

    </section>




    <!-- FOOTER -->

    <footer>

        <p>

            © 2026 ScholarHub

        </p>

    </footer>

@endsection