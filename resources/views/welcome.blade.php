@extends('layouts.app')

@section('content')

    <!-- HERO -->
    <section class="hero-section fade-up">

        <div class="mesh-left"></div>
        <div class="mesh-right"></div>

        <div class="container">

            <div class="row align-items-center">

                <!-- LEFT -->
                <div class="col-lg-6">

                    <h1 class="hero-title">
                        Temukan Program
                        <br>
                        Beasiswa Terbaik
                    </h1>

                    <p class="hero-text">
                        Platform pengelolaan program beasiswa
                        dari pengumuman hingga penetapan
                        penerima.

                        Daftar, unggah dokumen,
                        pantau seleksi,
                        dan lihat hasil secara transparan.
                    </p>

                    <a href="/program" class="btn btn-main mt-4">
                        Daftar Sekarang
                    </a>

                </div>

                <!-- RIGHT -->
                <div class="col-lg-6">

                    <div class="hero-visual">

                        <img src="{{ asset('images/hero-illustration.jpg') }}" class="hero-image">

                    </div>

                </div>

            </div>

        </div>

    </section>


    <!-- STAT -->
    <section class="section fade-up">

        <div class="container">

            <div class="row g-4">

                <div class="col-md-4">

                    <div class="stat-card">

                        <h2>500+</h2>

                        <p>Awardee</p>

                    </div>

                </div>

                <div class="col-md-4">

                    <div class="stat-card">

                        <h2>1000+</h2>

                        <p>Pendaftar</p>

                    </div>

                </div>

                <div class="col-md-4">

                    <div class="stat-card">

                        <h2>98%</h2>

                        <p>Kelulusan</p>

                    </div>

                </div>

            </div>

        </div>

    </section>



    <!-- KATEGORI -->
    <section class="section fade-up">

        <div class="container">

            <h2 class="mb-5 fw-bold">

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

                            Prestasi Nilai, Transkrip,
                            dan Sertifikat Akademik.

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

                            Prestasi Organisasi,
                            Olahraga, Seni,
                            dan Portofolio.

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

                <h2>

                    Testimoni Awardee

                </h2>

                <br>

                <p>

                    "Program ini membantu saya
                    mengembangkan prestasi dan
                    mendukung pendidikan saya."

                </p>

                <br>

                <strong>

                    — Mahasiswa Penerima

                </strong>

            </div>

        </div>

    </section>



    <style>
        /* HERO */

        .hero-section {

            position: relative;

            padding: 120px 0;

            overflow: hidden;

            animation: heroOpen 1.2s ease;

        }



        .hero-title {

            font-size: 74px;

            font-weight: 800;

            line-height: 1.05;

            letter-spacing: -3px;

        }



        .hero-text {

            margin-top: 25px;

            font-size: 18px;

            line-height: 1.9;

            color: #667575;

            max-width: 560px;

        }



        /* IMAGE */

        .hero-image {

            width: 100%;

            max-width: 580px;

            /* MELENGKUNG */
            border-radius: 40px;

            box-shadow:
                0 30px 70px rgba(0, 43, 43, .18);

            transition: .5s;

        }



        .hero-image:hover {

            transform:
                translateY(-8px);

        }



        /* MESH */

        .mesh-left {

            position: absolute;

            width: 500px;

            height: 500px;

            background: #002B2B;

            left: -220px;

            top: 100px;

            filter: blur(150px);

            opacity: .08;

            border-radius: 50%;

        }



        .mesh-right {

            position: absolute;

            width: 420px;

            height: 420px;

            background: #2BC4C4;

            right: -150px;

            bottom: 40px;

            filter: blur(150px);

            opacity: .18;

            border-radius: 50%;

        }



        /* CARD */

        .stat-card,

        .category-card {

            background: white;

            padding: 45px;

            border-radius: 30px;

            box-shadow:
                0 12px 35px rgba(0, 0, 0, .05);

        }



        .stat-card h2 {

            color: #008080;

            font-size: 54px;

        }



        .category-card {

            transition: .4s;

        }



        .category-card:hover {

            transform:
                translateY(-8px);

        }



        /* TESTIMONI */

        .testimonial {

            padding: 80px;

            border-radius: 40px;

            color: white;

            background:
                linear-gradient(135deg,
                    #002B2B,
                    #005959);

        }



        /* ANIMATION */

        .fade-up {

            opacity: 0;

            transform:
                translateY(70px);

            transition:
                all 1s ease;

        }



        .fade-up.show {

            opacity: 1;

            transform:
                translateY(0);

        }



        /* HERO LOAD */

        @keyframes heroOpen {

            from {

                opacity: 0;

                transform:
                    translateY(40px);

            }

            to {

                opacity: 1;

                transform:
                    translateY(0);

            }

        }



        /* MOBILE */

        @media(max-width:992px) {

            .hero-title {

                font-size: 48px;

            }

            .hero-image {

                margin-top: 50px;

            }

        }
    </style>



    <script>

        const observer = new IntersectionObserver(

            (entries) => {

                entries.forEach(

                    (entry) => {

                        if (

                            entry.isIntersecting

                        ) {

                            entry.target.classList.add(

                                "show"

                            );

                        }

                    }

                );

            },

            {

                threshold: .15

            }

        );

        document

            .querySelectorAll(

                ".fade-up"

            )

            .forEach(

                (el) => {

                    observer.observe(el);

                });

    </script>

@endsection