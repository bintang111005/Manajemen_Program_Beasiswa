@extends('layouts.admin')

@section('title', 'Verifikasi Berkas')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">

    <div>

        <h2 class="fw-bold">

            Verifikasi Berkas

        </h2>

        <p class="text-secondary mb-0">

            Periksa seluruh dokumen mahasiswa sebelum menentukan hasil seleksi.

        </p>

    </div>

    <a href="/admin/applicants" class="btn btn-light rounded-pill px-4">

        <i class="bi bi-arrow-left me-2"></i>

        Kembali

    </a>

</div>

<div class="card-custom p-4 mb-4">

    <div class="row align-items-center">

        <div class="col-md-2 text-center">

            <div style="width:90px;
height:90px;
border-radius:50%;
background:#2563eb;
display:flex;
justify-content:center;
align-items:center;
margin:auto;
font-size:36px;
font-weight:bold;
color:white;">

                {{ strtoupper(substr($application->user->name, 0, 1)) }}

            </div>

        </div>

        <div class="col-md-10">

            <div class="row">

                <div class="col-md-6 mb-3">

                    <label class="text-secondary">

                        Nama Mahasiswa

                    </label>

                    <h5 class="fw-bold">

                        {{ $application->user->name }}

                    </h5>

                </div>

                <div class="col-md-6 mb-3">

                    <label class="text-secondary">

                        NIM

                    </label>

                    <h5 class="fw-bold">

                        {{ $application->nim }}

                    </h5>

                </div>

                <div class="col-md-6">

                    <label class="text-secondary">

                        Program

                    </label>

                    <h5 class="fw-bold">

                        {{ $application->program }}

                    </h5>

                </div>

                <div class="col-md-3">

                    <label class="text-secondary">

                        Semester

                    </label>

                    <h5 class="fw-bold">

                        {{ $application->semester }}

                    </h5>

                </div>

                <div class="col-md-3">

                    <label class="text-secondary">

                        IPK

                    </label>

                    <h5 class="fw-bold text-success">

                        {{ $application->gpa }}

                    </h5>

                </div>

            </div>

        </div>

    </div>

</div>

<div class="row g-4">

    @if($application->photo)

        <div class="col-md-4">

            <div class="card-custom p-4 text-center h-100">

                <i class="bi bi-camera-fill display-5 text-primary"></i>

                <h5 class="mt-3">

                    Foto Diri

                </h5>

                <p class="text-secondary">

                    Foto mahasiswa.

                </p>

                <div class="d-grid gap-2">

                    <a target="_blank" href="{{ asset('storage/' . $application->photo) }}"
                        class="btn btn-primary rounded-pill">

                        <i class="bi bi-eye me-2"></i>

                        Lihat

                    </a>

                    <a href="{{ asset('storage/' . $application->photo) }}" download
                        class="btn btn-outline-primary rounded-pill">

                        <i class="bi bi-download me-2"></i>

                        Download

                    </a>

                </div>

            </div>

        </div>

    @endif

    @if($application->ktp)

        <div class="col-md-4">

            <div class="card-custom p-4 text-center h-100">

                <i class="bi bi-person-vcard-fill display-5 text-success"></i>

                <h5 class="mt-3">

                    KTP

                </h5>

                <p class="text-secondary">

                    Identitas mahasiswa.

                </p>

                <div class="d-grid gap-2">

                    <a target="_blank" href="{{ asset('storage/' . $application->ktp) }}"
                        class="btn btn-success rounded-pill">

                        <i class="bi bi-eye me-2"></i>

                        Lihat

                    </a>

                    <a href="{{ asset('storage/' . $application->ktp) }}" download
                        class="btn btn-outline-success rounded-pill">

                        <i class="bi bi-download me-2"></i>

                        Download

                    </a>

                </div>

            </div>

        </div>

    @endif

    @if($application->ktm)

        <div class="col-md-4">

            <div class="card-custom p-4 text-center h-100">

                <i class="bi bi-mortarboard-fill display-5 text-warning"></i>

                <h5 class="mt-3">

                    KTM

                </h5>

                <p class="text-secondary">

                    Kartu Tanda Mahasiswa.

                </p>

                <div class="d-grid gap-2">

                    <a target="_blank" href="{{ asset('storage/' . $application->ktm) }}"
                        class="btn btn-warning rounded-pill text-white">

                        <i class="bi bi-eye me-2"></i>

                        Lihat

                    </a>

                    <a href="{{ asset('storage/' . $application->ktm) }}" download
                        class="btn btn-outline-warning rounded-pill">

                        <i class="bi bi-download me-2"></i>

                        Download

                    </a>

                </div>

            </div>

        </div>

    @endif
    @if($application->document_1)

<div class="col-md-4">

    <div class="card-custom p-4 text-center h-100">

        <i class="bi bi-file-earmark-text-fill display-5 text-info"></i>

        <h5 class="mt-3">

            Dokumen 1

        </h5>

        <p class="text-secondary">

            Dokumen pendukung pertama.

        </p>

        <div class="d-grid gap-2">

            <a target="_blank"
               href="{{ asset('storage/'.$application->document_1) }}"
               class="btn btn-info text-white rounded-pill">

                <i class="bi bi-eye me-2"></i>

                Lihat

            </a>

            <a href="{{ asset('storage/'.$application->document_1) }}"
               download
               class="btn btn-outline-info rounded-pill">

                <i class="bi bi-download me-2"></i>

                Download

            </a>

        </div>

    </div>

</div>


@endif
@if($application->document_2)

<div class="col-md-4">

    <div class="card-custom p-4 text-center h-100">

        <i class="bi bi-file-earmark-check-fill display-5 text-secondary"></i>

        <h5 class="mt-3">

            Dokumen 2

        </h5>

        <p class="text-secondary">

            Dokumen pendukung kedua.

        </p>

        <div class="d-grid gap-2">

            <a target="_blank"
               href="{{ asset('storage/'.$application->document_2) }}"
               class="btn btn-secondary rounded-pill">

                <i class="bi bi-eye me-2"></i>

                Lihat

            </a>

            <a href="{{ asset('storage/'.$application->document_2) }}"
               download
               class="btn btn-outline-secondary rounded-pill">

                <i class="bi bi-download me-2"></i>

                Download

            </a>

        </div>

    </div>

</div>

@endif

@if($application->document_3)

<div class="col-md-4">

    <div class="card-custom p-4 text-center h-100">

        <i class="bi bi-award-fill display-5 text-danger"></i>

        <h5 class="mt-3">

            Dokumen 3

        </h5>

        <p class="text-secondary">

            Dokumen tambahan.

        </p>

        <div class="d-grid gap-2">

            <a target="_blank"
               href="{{ asset('storage/'.$application->document_3) }}"
               class="btn btn-danger rounded-pill">

                <i class="bi bi-eye me-2"></i>

                Lihat

            </a>

            <a href="{{ asset('storage/'.$application->document_3) }}"
               download
               class="btn btn-outline-danger rounded-pill">

                <i class="bi bi-download me-2"></i>

                Download

            </a>

        </div>

    </div>

</div>

@endif

</div>

<div class="card-custom p-4 mt-4">

    <h5 class="fw-bold mb-3">

        Keputusan Verifikasi

    </h5>

    <p class="text-secondary mb-4">

        Pastikan seluruh dokumen telah diperiksa sebelum memberikan keputusan akhir.

    </p>

    <div class="d-flex flex-wrap gap-3">

        <form action="{{ route('applications.update',$application->id) }}"
              method="POST">

            @csrf
            @method('PUT')

            <input type="hidden"
                   name="status"
                   value="awarded">

            <button class="btn btn-success btn-lg rounded-pill px-5">

                <i class="bi bi-check-circle-fill me-2"></i>

                Terima

            </button>

        </form>

        <form action="{{ route('applications.update',$application->id) }}"
              method="POST">

            @csrf
            @method('PUT')

            <input type="hidden"
                   name="status"
                   value="rejected">

            <button class="btn btn-danger btn-lg rounded-pill px-5">

                <i class="bi bi-x-circle-fill me-2"></i>

                Tolak

            </button>

        </form>

        <a href="/admin/applicants"
           class="btn btn-light btn-lg rounded-pill px-5">

            <i class="bi bi-arrow-left me-2"></i>

            Kembali

        </a>

    </div>

</div>

@endsection