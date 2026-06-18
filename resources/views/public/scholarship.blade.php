```php
@extends('layouts.app')

@section('content')

    <section class="hero-section">

        <div class="container text-center">

            <h5 class="text-primary">

                Program Beasiswa

            </h5>

            <h1 class="hero-title mx-auto mt-4">

                Pilih Jalur Pendaftaran

            </h1>

            <p class="hero-text mx-auto">

                Tentukan jalur beasiswa yang sesuai dengan prestasi yang kamu miliki.

            </p>

        </div>

    </section>




    <section class="section fade-up">

        <div class="container">

            <div class="row g-5 justify-content-center">



                <!-- AKADEMIK -->

                <div class="col-lg-5">

                    <div class="category-card h-100">

                        <div class="icon">

                            🎓

                        </div>

                        <h2>

                            Jalur Akademik

                        </h2>

                        <br>

                        <p>

                            Berbasis nilai akademik dan pencapaian pendidikan.

                        </p>

                        <hr>

                        <p>✔ Input IPK</p>

                        <p>✔ Upload Transkrip</p>

                        <p>✔ Sertifikat Akademik</p>

                        <p>✔ Esai Motivasi</p>

                        <br>

                        <a href="/applications/create" class="btn btn-main">

                            Pilih Jalur

                        </a>

                    </div>

                </div>





                <!-- NON AKADEMIK -->

                <div class="col-lg-5">

                    <div class="category-card h-100">

                        <div class="icon">

                            🏆

                        </div>

                        <h2>

                            Jalur Non Akademik

                        </h2>

                        <br>

                        <p>

                            Berbasis minat, bakat, organisasi, dan prestasi.

                        </p>

                        <hr>

                        <p>✔ Upload Portofolio</p>

                        <p>✔ Sertifikat Prestasi</p>

                        <p>✔ Sertifikat Organisasi</p>

                        <p>✔ Esai Motivasi</p>

                        <br>

                        <a href="/applications/create" class="btn btn-main">

                            Pilih Jalur

                        </a>

                    </div>

                </div>

            </div>

        </div>

    </section>

@endsection
```