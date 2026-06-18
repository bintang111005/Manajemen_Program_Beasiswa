
@extends('layouts.app')

@section('content')

    <section class="section">

        <div class="container">

            <h1 class="fw-bold mb-5">

                Dashboard Mahasiswa

            </h1>


            <div class="row g-4">

                <div class="col-md-4">

                    <div class="stat-card">

                        <h3>

                            Status Pendaftaran

                        </h3>

                        <br>

                        <span class="badge bg-warning">

                            Menunggu Review

                        </span>

                    </div>

                </div>



                <div class="col-md-4">

                    <div class="stat-card">

                        <h3>

                            Jalur Beasiswa

                        </h3>

                        <br>

                        <p>

                            Akademik

                        </p>

                    </div>

                </div>



                <div class="col-md-4">

                    <div class="stat-card">

                        <h3>

                            Jenjang

                        </h3>

                        <br>

                        <p>

                            S1

                        </p>

                    </div>

                </div>

            </div>


            <div class="mt-5">

                <a href="/student/status" class="btn btn-main">

                    Lihat Status Seleksi

                </a>

            </div>

        </div>

    </section>

@endsection