@extends('layouts.app')

@section('content')


    <!-- HERO -->

    <section class="section fade-up">

        <div class="container">

            <div class="row align-items-center gy-5">

                <!-- KIRI -->

                <div class="col-lg-6">

                    <h1 class="hero-title">

                        Temukan Program
                        <br>

                        Beasiswa Terbaik

                    </h1>

                    <p class="hero-text">

                        Platform pengelolaan program beasiswa
                        dari pengumuman hingga penetapan
                        penerima. Daftar, unggah dokumen,
                        pantau seleksi, dan lihat hasil
                        secara transparan.

                    </p>

                    <div class="mt-5">

                        <a href="/program" class="btn btn-main">

                            Daftar Sekarang

                        </a>

                    </div>

                </div>



                <!-- KANAN -->

                <div class="col-lg-6">

                    <div class="hero-visual">

                        <div class="mesh-left"></div>

                        <div class="mesh-right"></div>

                        <img src="{{ asset('images/hero-illustration.jpg') }}" alt="Scholarship Illustration"
                            class="hero-image">

                    </div>

                </div>

            </div>

        </div>

    </section>




    <!-- STATISTIK -->

    <section class="section fade-up">

        <div class="container">

            <div class="row g-4">

                <div class="col-md-4">

                    <div class="stat-card">

                        <h2>

                            500+

                        </h2>

                        <p>

                            Awardee

                        </p>

                    </div>

                </div>


                <div class="col-md-4">

                    <div class="stat-card">

                        <h2>

                            1000+

                        </h2>

                        <p>

                            Pendaftar

                        </p>

                    </div>

                </div>


                <div class="col-md-4">

                    <div class="stat-card">

                        <h2>

                            98%

                        </h2>

                        <p>

                            Kelulusan

                        </p>

                    </div>

                </div>

            </div>

        </div>

    </section>




    <!-- PROGRAM -->

    <section class="section fade-up">

        <div class="container">

            <h2 class="fw-bold mb-5">

                Program Beasiswa

            </h2>

            <div class="row g-4">

                <div class="col-lg-6">

                    <div class="category-card">

                        <div class="icon">

                            🎓

                        </div>

                        <h3>

                            Akademik

                        </h3>

                        <p>

                            Fokus pada prestasi nilai,
                            IPK, riset, dan pencapaian
                            akademik mahasiswa.

                        </p>

                    </div>

                </div>



                <div class="col-lg-6">

                    <div class="category-card">

                        <div class="icon">

                            🏆

                        </div>

                        <h3>

                            Non Akademik

                        </h3>

                        <p>

                            Fokus pada prestasi organisasi,
                            minat, bakat, olahraga,
                            dan kreativitas.

                        </p>

                    </div>

                </div>

            </div>

        </div>

    </section>




    <!-- TESTIMONI -->

    <section class="section fade-up">

        <div class="container">

            <div class="testimonial">

                <h2 class="fw-bold">

                    Testimoni Awardee

                </h2>

                <br>

                <p style="font-size:18px; line-height:1.8;">

                    "Program ini membantu saya
                    melanjutkan pendidikan,
                    mengembangkan kemampuan,
                    dan membuka kesempatan baru."

                </p>

                <br>

                <strong>

                    — Mahasiswa Penerima Beasiswa

                </strong>

            </div>

        </div>

    </section>


@endsection