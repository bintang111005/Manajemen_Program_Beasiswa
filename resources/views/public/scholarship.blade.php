@extends('layouts.app')

@section('content')

    <section class="section">

        <div class="container">

            <div class="text-center mb-5">

                <span class="hero-badge">

                    Pilih Jalur Pendaftaran

                </span>

                <h1 class="hero-title-center mt-4">

                    Pilih Jalur Beasiswa

                </h1>

                <p class="hero-text mx-auto">

                    Silakan pilih jalur yang sesuai dengan kemampuan dan prestasimu.

                </p>

            </div>


            <div class="row g-5 justify-content-center">

                <!-- AKADEMIK -->

                <div class="col-lg-5">

                    <div class="category-card text-center h-100">

                        <div class="icon">

                            🎓

                        </div>

                        <h3>

                            Jalur Akademik

                        </h3>

                        <p>

                            Untuk mahasiswa yang memiliki prestasi akademik.

                        </p>

                        <ul class="list-unstyled my-4">

                            <li>✔ Input IPK</li>

                            <li>✔ Upload Transkrip</li>

                            <li>✔ Upload Sertifikat</li>

                        </ul>

                        <a href="/register" class="btn btn-main">

                            Pilih Jalur

                        </a>

                    </div>

                </div>


                <!-- NON AKADEMIK -->

                <div class="col-lg-5">

                    <div class="category-card text-center h-100">

                        <div class="icon">

                            🏆

                        </div>

                        <h3>

                            Jalur Non Akademik

                        </h3>

                        <p>

                            Untuk mahasiswa yang memiliki prestasi non akademik.

                        </p>

                        <ul class="list-unstyled my-4">

                            <li>✔ Upload Portofolio</li>

                            <li>✔ Upload Prestasi</li>

                            <li>✔ Upload Sertifikat</li>

                        </ul>

                        <a href="/register" class="btn btn-main">

                            Pilih Jalur

                        </a>

                    </div>

                </div>

            </div>

        </div>

    </section>

@endsection