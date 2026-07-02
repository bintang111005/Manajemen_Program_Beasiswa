@extends('layouts.admin')

@section('title','Dashboard')

@section('content')

<div class="row mb-4">

    <div class="col-lg-8">

        <h2 class="fw-bold">

            Selamat Datang 👋

        </h2>

        <p class="text-secondary">

            Kelola seluruh program beasiswa, pantau perkembangan pendaftar,
            dan lakukan proses seleksi mahasiswa melalui dashboard ini.

        </p>

    </div>

    <div class="col-lg-4 text-lg-end">

        <a href="/admin/program"

           class="btn btn-primary rounded-pill px-4 py-2">

            <i class="bi bi-plus-circle me-2"></i>

            Tambah Program

        </a>

    </div>

</div>

<div class="row g-4">

    <div class="col-xl-3 col-md-6">

        <div class="card-custom p-4 h-100">

            <div class="d-flex justify-content-between">

                <div>

                    <small class="text-secondary">

                        Total Program

                    </small>

                    <h2 class="fw-bold mt-3">

                        {{ $totalProgram }}

                    </h2>

                    <span class="text-success">

                        Semua Program Aktif

                    </span>

                </div>

                <div>

                    <div style="width:65px;height:65px;border-radius:18px;background:#eef5ff;display:flex;align-items:center;justify-content:center;">

                        <i class="bi bi-mortarboard-fill fs-2 text-primary"></i>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <div class="col-xl-3 col-md-6">

        <div class="card-custom p-4 h-100">

            <div class="d-flex justify-content-between">

                <div>

                    <small class="text-secondary">

                        Total Pendaftar

                    </small>

                    <h2 class="fw-bold mt-3">

                        {{ $totalPendaftar }}

                    </h2>

                    <span class="text-primary">

                        Mahasiswa Terdaftar

                    </span>

                </div>

                <div>

                    <div style="width:65px;height:65px;border-radius:18px;background:#eefcf7;display:flex;align-items:center;justify-content:center;">

                        <i class="bi bi-people-fill fs-2 text-success"></i>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <div class="col-xl-3 col-md-6">

        <div class="card-custom p-4 h-100">

            <div class="d-flex justify-content-between">

                <div>

                    <small class="text-secondary">

                        Diterima

                    </small>

                    <h2 class="fw-bold mt-3 text-success">

                        {{ $totalDiterima }}

                    </h2>

                    <span class="text-success">

                        Lolos Seleksi

                    </span>

                </div>

                <div>

                    <div style="width:65px;height:65px;border-radius:18px;background:#ecfdf3;display:flex;align-items:center;justify-content:center;">

                        <i class="bi bi-patch-check-fill fs-2 text-success"></i>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <div class="col-xl-3 col-md-6">

        <div class="card-custom p-4 h-100">

            <div class="d-flex justify-content-between">

                <div>

                    <small class="text-secondary">

                        Ditolak

                    </small>

                    <h2 class="fw-bold mt-3 text-danger">

                        {{ $totalDitolak }}

                    </h2>

                    <span class="text-danger">

                        Tidak Lolos

                    </span>

                </div>

                <div>

                    <div style="width:65px;height:65px;border-radius:18px;background:#fff1f2;display:flex;align-items:center;justify-content:center;">

                        <i class="bi bi-x-circle-fill fs-2 text-danger"></i>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

<div class="row mt-4">

    <div class="col-lg-12">

        <div class="card-custom p-4">

            <div class="d-flex justify-content-between align-items-center mb-4">

                <h5 class="fw-bold mb-0">

                    Statistik Pendaftaran

                </h5>

                <span class="badge bg-primary">

                    Tahun 2026

                </span>

            </div>

            <div class="progress mb-4" style="height:14px;border-radius:20px;">

                <div class="progress-bar bg-primary"

                     style="width:70%">

                </div>

            </div>

            <div class="row text-center">

                <div class="col">

                    <h4 class="fw-bold">

                        {{ $totalProgram }}

                    </h4>

                    <small class="text-secondary">

                        Program

                    </small>

                </div>

                <div class="col">

                    <h4 class="fw-bold">

                        {{ $totalPendaftar }}

                    </h4>

                    <small class="text-secondary">

                        Pendaftar

                    </small>

                </div>

                <div class="col">

                    <h4 class="fw-bold text-success">

                        {{ $totalDiterima }}

                    </h4>

                    <small class="text-secondary">

                        Diterima

                    </small>

                </div>

                <div class="col">

                    <h4 class="fw-bold text-danger">

                        {{ $totalDitolak }}

                    </h4>

                    <small class="text-secondary">

                        Ditolak

                    </small>

                </div>

            </div>

        </div>



</div>

<div class="row mt-4">

    <div class="col-lg-7">

        <div class="card-custom p-4">

            <div class="d-flex justify-content-between align-items-center mb-4">

                <h5 class="fw-bold mb-0">

                    Aktivitas Terbaru

                </h5>

                <span class="badge bg-success">

                    Live

                </span>

            </div>

            <div class="d-flex mb-4">

                <div class="me-3">

                    <div class="rounded-circle bg-primary"

                         style="width:12px;height:12px;margin-top:8px;"></div>

                </div>

                <div>

                    <h6 class="fw-bold mb-1">

                        Pendaftaran Baru

                    </h6>

                    <small class="text-secondary">

                        Mahasiswa baru telah mengirim formulir pendaftaran.

                    </small>

                </div>

            </div>

            <div class="d-flex mb-4">

                <div class="me-3">

                    <div class="rounded-circle bg-success"

                         style="width:12px;height:12px;margin-top:8px;"></div>

                </div>

                <div>

                    <h6 class="fw-bold mb-1">

                        Berkas Diverifikasi

                    </h6>

                    <small class="text-secondary">

                        Admin telah menyelesaikan proses pemeriksaan dokumen.

                    </small>

                </div>

            </div>

            <div class="d-flex">

                <div class="me-3">

                    <div class="rounded-circle bg-warning"

                         style="width:12px;height:12px;margin-top:8px;"></div>

                </div>

                <div>

                    <h6 class="fw-bold mb-1">

                        Pengumuman Seleksi

                    </h6>

                    <small class="text-secondary">

                        Status penerima beasiswa telah diperbarui.

                    </small>

                </div>

            </div>

        </div>

    </div>

    <div class="col-lg-5">

        <div class="card-custom p-4 h-100">

            <div class="d-flex justify-content-between mb-4">

                <h5 class="fw-bold mb-0">

                    Ringkasan Sistem

                </h5>

                <i class="bi bi-pie-chart-fill text-primary"></i>

            </div>

            <div class="mb-4">

                <small class="text-secondary">

                    Program Beasiswa

                </small>

                <div class="progress mt-2" style="height:10px;">

                    <div class="progress-bar bg-primary"

                         style="width:100%"></div>

                </div>

            </div>

            <div class="mb-4">

                <small class="text-secondary">

                    Pendaftaran

                </small>

                <div class="progress mt-2" style="height:10px;">

                    <div class="progress-bar bg-success"

                         style="width:85%"></div>

                </div>

            </div>

            <div class="mb-4">

                <small class="text-secondary">

                    Verifikasi

                </small>

                <div class="progress mt-2" style="height:10px;">

                    <div class="progress-bar bg-warning"

                         style="width:75%"></div>

                </div>

            </div>

            <div>

                <small class="text-secondary">

                    Pengumuman

                </small>

                <div class="progress mt-2" style="height:10px;">

                    <div class="progress-bar bg-danger"

                         style="width:60%"></div>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection
