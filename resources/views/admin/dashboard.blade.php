@extends('layouts.admin')

@section('title')

    Dashboard

@endsection


@section('content')
    <div class="mb-4">

        <h2>

            Selamat Datang, Admin 👋

        </h2>

        <p class="text-muted">

            Kelola program beasiswa dengan mudah dan efisien.

        </p>

    </div>

    <div class="row g-4">


        <div class="col-md-3">

            <div class="card-admin">

                <h6>

                    Total Program

                </h6>

                <h2 class="stat-number">

                    {{ $totalProgram }}

                </h2>

            </div>

        </div>



        <div class="col-md-3">

            <div class="card-admin">

                <h6>

                    Total Pendaftar

                </h6>

                <h2 class="stat-number">

                    {{ $totalPendaftar }}

                </h2>

            </div>

        </div>



        <div class="col-md-3">

            <div class="card-admin">

                <h6>

                    Penerima Beasiswa

                </h6>

                <h2 class="stat-number">

                    {{ $totalDiterima }}

                </h2>

            </div>

        </div>



        <div class="col-md-3">

            <div class="card-admin">

                <h6>

                    Pengajuan Ditolak

                </h6>

                <h2 class="stat-number">

                    {{ $totalDitolak }}

                </h2>

            </div>

        </div>


    </div>



    <div class="row mt-4">


        <div class="col-lg-8">

            <div class="card-admin">

                <h5>

                    Aktivitas Terbaru

                </h5>

                <hr>


                <p>

                    📄 Pendaftaran baru masuk

                </p>


                <p>

                    📄 Berkas mahasiswa diverifikasi

                </p>


                <p>

                    📄 Pengumuman diperbarui

                </p>

            </div>

        </div>



        <div class="col-lg-4">

            <div class="card-admin">

                <h5>

                    Pengumuman

                </h5>

                <hr>


                <p>

                    Pendaftaran beasiswa tahun 2026 telah dibuka.

                </p>

            </div>

        </div>


    </div>


@endsection