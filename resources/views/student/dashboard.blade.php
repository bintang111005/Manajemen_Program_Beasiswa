@extends('layouts.app')

@section('content')

    <section class="section">

        <div class="container">

            <h1 class="fw-bold mb-5">

                Dashboard Mahasiswa

            </h1>


            <div class="category-card p-5">


                <!-- DATA MAHASISWA -->

                <h3 class="mb-4">

                    👤 Data Mahasiswa

                </h3>


                <div class="mb-3">

                    <strong>Nama :</strong>

                    {{ auth()->user()->name }}

                </div>


                <div class="mb-3">

                    <strong>NIM :</strong>

                    {{ $application->nim }}

                </div>


                <div class="mb-3">

                    <strong>Program Studi :</strong>

                    {{ $application->major }}

                </div>


                <div class="mb-3">

                    <strong>Jenjang :</strong>

                    {{ $application->jenjang }}

                </div>


                <div class="mb-5">

                    <strong>Semester :</strong>

                    {{ $application->semester }}

                </div>



                <hr class="my-5">



                <!-- INFORMASI BEASISWA -->

                <h3 class="mb-4">

                    🎓 Informasi Beasiswa

                </h3>


                <div class="mb-3">

                    <strong>Program :</strong>

                    {{ ucfirst($application->program) }}

                </div>


                <div class="mb-3">

                    <strong>Status :</strong>

                    <span class="badge bg-warning">

                        {{ ucfirst($application->status) }}

                    </span>

                </div>


                <div class="mb-5">

                    <strong>Tanggal Daftar :</strong>

                    {{ $application->created_at->format('d M Y') }}

                </div>



                <hr class="my-5">



                <!-- STATUS BERKAS -->

                <h3 class="mb-4">

                    📄 Status Berkas

                </h3>


                <p>

                    ✅ Foto Diri

                </p>


                <p>

                    ✅ KTP

                </p>


                <p>

                    ✅ KTM

                </p>


                <p>

                    ✅ Dokumen Pendukung

                </p>


            </div>



            <div class="mt-5">

                <a href="/student/status" class="btn btn-main">

                    Lihat Status Seleksi

                </a>

            </div>


        </div>

    </section>

@endsection
