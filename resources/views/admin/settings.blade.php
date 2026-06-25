@extends('layouts.admin')

@section('title', 'Pengaturan')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">

    <div>

        <h2 class="fw-bold">

            Pengaturan

        </h2>

        <p class="text-secondary mb-0">

            Kelola informasi administrator dan konfigurasi sistem ScholarHub.

        </p>

    </div>

    <button class="btn btn-primary rounded-pill px-4">

        <i class="bi bi-floppy me-2"></i>

        Simpan Perubahan

    </button>

</div>

<div class="row g-4">

    <div class="col-lg-4">

        <div class="card-custom p-4 text-center">

            <div style="width:100px;
height:100px;
border-radius:50%;
background:#2563eb;
color:white;
display:flex;
align-items:center;
justify-content:center;
font-size:40px;
font-weight:bold;
margin:auto;">

                A

            </div>

            <h4 class="mt-4">

                Administrator

            </h4>

            <p class="text-secondary">

                ScholarHub System

            </p>

            <hr>

            <div class="d-grid">

                <button class="btn btn-outline-primary rounded-pill">

                    <i class="bi bi-camera me-2"></i>

                    Ganti Foto

                </button>

            </div>

        </div>

    </div>

    <div class="col-lg-8">

        <div class="card-custom p-4">

            <h5 class="fw-bold mb-4">

                Informasi Admin

            </h5>

            <div class="row">

                <div class="col-md-6 mb-3">

                    <label class="form-label">

                        Nama

                    </label>

                    <input type="text" class="form-control" value="Administrator">

                </div>

                <div class="col-md-6 mb-3">

                    <label class="form-label">

                        Email

                    </label>

                    <input type="email" class="form-control" value="admin@scholarhub.com">

                </div>

                <div class="col-md-6">

                    <label class="form-label">

                        Username

                    </label>

                    <input type="text" class="form-control" value="admin">

                </div>

                <div class="col-md-6">

                    <label class="form-label">

                        Role

                    </label>

                    <input type="text" class="form-control" value="Administrator" readonly>

                </div>

            </div>

        </div>

    </div>

<div class="row mt-4">

    <!-- Pengaturan Sistem -->
    <div class="col-lg-6">

        <div class="card-custom p-4 h-100">

            <h5 class="fw-bold mb-4">

                <i class="bi bi-gear-fill text-primary me-2"></i>

                Pengaturan Sistem

            </h5>

            <div class="mb-3">

                <label class="form-label">

                    Nama Sistem

                </label>

                <input
                    type="text"
                    class="form-control"
                    value="ScholarHub">

            </div>

            <div class="mb-3">

                <label class="form-label">

                    Tahun Akademik

                </label>

                <input
                    type="text"
                    class="form-control"
                    value="2026">

            </div>

            <div class="mb-3">

                <label class="form-label">

                    Status Sistem

                </label>

                <select class="form-select">

                    <option selected>

                        Aktif

                    </option>

                    <option>

                        Maintenance

                    </option>

                </select>

            </div>

        </div>

    </div>

    <!-- Keamanan -->
    <div class="col-lg-6">

        <div class="card-custom p-4 h-100">

            <h5 class="fw-bold mb-4">

                <i class="bi bi-shield-lock-fill text-success me-2"></i>

                Keamanan

            </h5>

            <div class="mb-3">

                <label class="form-label">

                    Password Baru

                </label>

                <input
                    type="password"
                    class="form-control"
                    placeholder="********">

            </div>

            <div class="mb-3">

                <label class="form-label">

                    Konfirmasi Password

                </label>

                <input
                    type="password"
                    class="form-control"
                    placeholder="********">

            </div>

            <div class="form-check form-switch mt-3">

                <input
                    class="form-check-input"
                    type="checkbox"
                    checked>

                <label class="form-check-label">

                    Aktifkan Verifikasi Login

                </label>

            </div>

        </div>

    </div>

</div>

<div class="row mt-4">

    <!-- Preferensi -->
    <div class="col-lg-6">

        <div class="card-custom p-4 h-100">

            <h5 class="fw-bold mb-4">

                <i class="bi bi-sliders text-warning me-2"></i>

                Preferensi

            </h5>

            <div class="form-check form-switch mb-3">

                <input
                    class="form-check-input"
                    type="checkbox"
                    checked>

                <label class="form-check-label">

                    Email Notifikasi

                </label>

            </div>

            <div class="form-check form-switch mb-3">

                <input
                    class="form-check-input"
                    type="checkbox"
                    checked>

                <label class="form-check-label">

                    Notifikasi Dashboard

                </label>

            </div>

            <div class="form-check form-switch">

                <input
                    class="form-check-input"
                    type="checkbox">

                <label class="form-check-label">

                    Mode Maintenance

                </label>

            </div>

        </div>

    </div>

    <!-- Informasi -->
    <div class="col-lg-6">

        <div class="card-custom p-4 h-100">

            <h5 class="fw-bold mb-4">

                <i class="bi bi-info-circle-fill text-info me-2"></i>

                Informasi Aplikasi

            </h5>

            <table class="table table-borderless mb-0">

                <tr>

                    <td class="text-secondary">

                        Versi

                    </td>

                    <td>

                        1.0.0

                    </td>

                </tr>

                <tr>

                    <td class="text-secondary">

                        Framework

                    </td>

                    <td>

                        Laravel 13

                    </td>

                </tr>

                <tr>

                    <td class="text-secondary">

                        PHP

                    </td>

                    <td>

                        8.5

                    </td>

                </tr>

                <tr>

                    <td class="text-secondary">

                        Database

                    </td>

                    <td>

                        MariaDB

                    </td>

                </tr>

            </table>

        </div>

    </div>

</div>

<div class="text-end mt-4">

    <button class="btn btn-primary rounded-pill px-5">

        <i class="bi bi-floppy me-2"></i>

        Simpan Perubahan

    </button>

</div>

@endsection