
@extends('layouts.app')

@section('content')

    <section class="section">

        <div class="container">

            <div class="text-center mb-5">

                <span class="hero-badge">

                    Program Beasiswa

                </span>

                <h1 class="hero-title-center mt-4">

                    Pilih Jalur Beasiswa

                </h1>

                <p class="hero-text mx-auto">

                    Pilih jalur pendaftaran yang sesuai dengan prestasi yang kamu miliki.

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

                        <br>

                        <p>

                            Untuk mahasiswa yang memiliki prestasi akademik.

                        </p>

                        <hr>

                        <p>

                            ✔ Input IPK

                        </p>

                        <p>

                            ✔ Upload Transkrip Nilai

                        </p>

                        <p>

                            ✔ Upload Sertifikat Akademik

                        </p>

                        <br>

                        <a href="/login" class="btn btn-main">

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

                        <br>

                        <p>

                            Untuk mahasiswa yang memiliki prestasi non akademik.

                        </p>

                        <hr>

                        <p>

                            ✔ Upload Portofolio

                        </p>

                        <p>

                            ✔ Upload Sertifikat Prestasi

                        </p>

                        <p>

                            ✔ Upload Sertifikat Organisasi

                        </p>

                        <br>

                        <a href="/login" class="btn btn-main">

                            Pilih Jalur

                        </a>

                    </div>

                </div>

            </div>

        </div>

    </section>

@endsection
