@extends('layouts.app')

@section('content')

    <section class="section">

        <div class="container">

            <h1 class="fw-bold mb-5">

                Dashboard Admin

            </h1>


            <div class="row g-4">


                <div class="col-md-3">

                    <div class="stat-card">

                        <h4>

                            Total Program

                        </h4>

                        <br>

                        <h2>

                            {{ $totalProgram }}

                        </h2>

                    </div>

                </div>



                <div class="col-md-3">

                    <div class="stat-card">

                        <h4>

                            Total Pendaftar

                        </h4>

                        <br>

                        <h2>

                            {{ $totalPendaftar }}

                        </h2>

                    </div>

                </div>



                <div class="col-md-3">

                    <div class="stat-card">

                        <h4>

                            Total Diterima

                        </h4>

                        <br>

                        <h2>

                            {{ $totalDiterima }}

                        </h2>

                    </div>

                </div>



                <div class="col-md-3">

                    <div class="stat-card">

                        <h4>

                            Total Ditolak

                        </h4>

                        <br>

                        <h2>

                            {{ $totalDitolak }}

                        </h2>

                    </div>

                </div>


            </div>



            <div class="category-card mt-5 p-5">


                <h3 class="mb-4">

                    Menu Cepat

                </h3>


                <div class="d-grid gap-3">


                    <a href="/scholarships" class="btn btn-main">

                        🎓 Kelola Program Beasiswa

                    </a>


                    <a href="/applications" class="btn btn-outline-dark">

                        👥 Data Pendaftar

                    </a>


                    <a href="/applications" class="btn btn-outline-dark">

                        📄 Verifikasi Berkas

                    </a>


                    <a href="/student/announcement" class="btn btn-outline-dark">

                        📢 Pengumuman

                    </a>


                    <a href="/" class="btn btn-danger">

                        🚪 Logout

                    </a>


                </div>


            </div>

        </div>

    </section>

@endsection