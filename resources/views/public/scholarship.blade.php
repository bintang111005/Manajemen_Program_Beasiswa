@extends('layouts.app')

@section('content')

    <section class="section">

        <div class="container">

            <div class="text-center mb-5">

                <span class="hero-badge">

                    Program Beasiswa

                </span>

                <h1 class="hero-title mt-4 mx-auto">

                    Pilih Program Beasiswa

                </h1>

                <p class="hero-text mx-auto">

                    Pilih program yang sesuai dengan kebutuhanmu.

                </p>

            </div>


            <div class="row g-5 justify-content-center">


                <div class="col-lg-4">

                    <div class="category-card text-center h-100">

                        <div class="icon">

                            🎓

                        </div>

                        <h3>

                            Prestasi Akademik

                        </h3>

                        <br>

                        <p>

                            IPK minimal 3.50

                        </p>

                        <p>

                            Upload Transkrip Nilai

                        </p>

                        <p>

                            Sertifikat Akademik

                        </p>

                        <br>

                        <a href="/login?program=akademik" class="btn btn-main">

                            Pilih Program

                        </a>

                    </div>

                </div>



                <div class="col-lg-4">

                    <div class="category-card text-center h-100">

                        <div class="icon">

                            🏆

                        </div>

                        <h3>

                            Prestasi Non Akademik

                        </h3>

                        <br>

                        <p>

                            Upload Portofolio

                        </p>

                        <p>

                            Upload Sertifikat Prestasi

                        </p>

                        <p>

                            Sertifikat Organisasi

                        </p>

                        <br>

                        <a href="/login?program=non-akademik" class="btn btn-main">

                            Pilih Program

                        </a>

                    </div>

                </div>



                <div class="col-lg-4">

                    <div class="category-card text-center h-100">

                        <div class="icon">

                            💰

                        </div>

                        <h3>

                            Bantuan Ekonomi

                        </h3>

                        <br>

                        <p>

                            Kartu Keluarga

                        </p>

                        <p>

                            Surat Tidak Mampu

                        </p>

                        <p>

                            Slip Gaji Orang Tua

                        </p>

                        <br>

                        <a href="/login?program=ekonomi" class="btn btn-main">

                            Pilih Program

                        </a>

                    </div>

                </div>


            </div>

        </div>

    </section>

@endsection