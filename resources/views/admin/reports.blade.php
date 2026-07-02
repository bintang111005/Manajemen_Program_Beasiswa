@extends('layouts.admin')

@section('title', 'Laporan')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">

    <div>

        <h2 class="fw-bold">

            Laporan & Statistik

        </h2>

        <p class="text-secondary mb-0">

            Ringkasan keseluruhan proses seleksi beasiswa ScholarHub.

        </p>

    </div>

    <div class="dropdown">

        <button class="btn btn-primary rounded-pill px-4 dropdown-toggle" type="button" id="dropdownExport" data-bs-toggle="dropdown" aria-expanded="false">

            <i class="bi bi-download me-2"></i> Export

        </button>

        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownExport">

            <li><a class="dropdown-item" href="#" onclick="exportExcel()">Export Excel</a></li>

            <li><a class="dropdown-item" href="#" onclick="exportPDF()">Export PDF / Print</a></li>

        </ul>

    </div>

</div>

<div class="row g-4">

    <div class="col-lg-3">

        <div class="card-custom p-4">

            <small class="text-secondary">

                Total Program

            </small>

            <h2 class="fw-bold mt-2">

                {{ $totalProgram }}

            </h2>

            <div class="progress mt-3">

                <div class="progress-bar bg-primary" style="width:100%">

                </div>

            </div>

        </div>

    </div>

    <div class="col-lg-3">

        <div class="card-custom p-4">

            <small class="text-secondary">

                Total Pendaftar

            </small>

            <h2 class="fw-bold mt-2">

                {{ $totalPendaftar }}

            </h2>

            <div class="progress mt-3">

                <div class="progress-bar bg-info" style="width:85%">

                </div>

            </div>

        </div>

    </div>

    <div class="col-lg-3">

        <div class="card-custom p-4">

            <small class="text-secondary">

                Diterima

            </small>

            <h2 class="fw-bold mt-2 text-success">

                {{ $totalDiterima }}

            </h2>

            <div class="progress mt-3">

                <div class="progress-bar bg-success" style="width:70%">

                </div>

            </div>

        </div>

    </div>

    <div class="col-lg-3">

        <div class="card-custom p-4">

            <small class="text-secondary">

                Ditolak

            </small>

            <h2 class="fw-bold mt-2 text-danger">

                {{ $totalDitolak }}

            </h2>

            <div class="progress mt-3">

                <div class="progress-bar bg-danger" style="width:40%">

                </div>

            </div>

        </div>

    </div>

</div>

<div class="row mt-4">

    <div class="col-lg-8">

        <div class="card-custom p-4">

            <h5 class="fw-bold mb-4">

                Ringkasan Statistik

            </h5>

            <p class="text-secondary">

                Dashboard laporan menampilkan perkembangan proses seleksi,
                jumlah pendaftar,
                hasil seleksi,
                dan statistik program beasiswa berdasarkan data terbaru.

            </p>

            <div class="row mt-4">

                <div class="col-md-6">

                    <h6>

                        Persentase Kelulusan

                    </h6>

                    <div class="progress mb-3">

                        <div class="progress-bar bg-success" style="width:75%">

                            75%

                        </div>

                    </div>

                </div>

                <div class="col-md-6">

                    <h6>

                        Persentase Penolakan

                    </h6>

                    <div class="progress">

                        <div class="progress-bar bg-danger" style="width:25%">

                            25%

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div><div class="col-lg-4">

    <div class="card-custom p-4 h-100">

        <h5 class="fw-bold mb-4">

            Ringkasan

        </h5>

        <div class="d-flex justify-content-between mb-3">

            <span class="text-secondary">

                Program Aktif

            </span>

            <strong>

                {{ $totalProgram }}

            </strong>

        </div>

        <div class="d-flex justify-content-between mb-3">

            <span class="text-secondary">

                Mahasiswa Mendaftar

            </span>

            <strong>

                {{ $totalPendaftar }}

            </strong>

        </div>

        <div class="d-flex justify-content-between mb-3">

            <span class="text-secondary">

                Lolos Seleksi

            </span>

            <strong class="text-success">

                {{ $totalDiterima }}

            </strong>

        </div>

        <div class="d-flex justify-content-between">

            <span class="text-secondary">

                Tidak Lolos

            </span>

            <strong class="text-danger">

                {{ $totalDitolak }}

            </strong>

        </div>

    </div>

</div>

</div>

<div class="row mt-4">

    <div class="col-lg-6">

        <div class="card-custom p-4 h-100">

            <h5 class="fw-bold mb-4">

                Aktivitas Sistem

            </h5>

            <div class="d-flex align-items-center mb-3">

                <div class="bg-success rounded-circle me-3"

                     style="width:12px;height:12px;"></div>

                <span>

                    Program beasiswa aktif dan berjalan normal.

                </span>

            </div>

            <div class="d-flex align-items-center mb-3">

                <div class="bg-primary rounded-circle me-3"

                     style="width:12px;height:12px;"></div>

                <span>

                    Seluruh data telah tersinkronisasi.

                </span>

            </div>

            <div class="d-flex align-items-center">

                <div class="bg-warning rounded-circle me-3"

                     style="width:12px;height:12px;"></div>

                <span>

                    Menunggu proses verifikasi admin.

                </span>

            </div>

        </div>

    </div>

    <div class="col-lg-6">

        <div class="card-custom p-4 h-100">

            <h5 class="fw-bold mb-4">

                Informasi Dashboard

            </h5>

            <table class="table table-borderless mb-0">

                <tr>

                    <td class="text-secondary">

                        Tahun

                    </td>

                    <td class="fw-semibold">

                        2026

                    </td>

                </tr>

                <tr>

                    <td class="text-secondary">

                        Versi Sistem

                    </td>

                    <td class="fw-semibold">

                        ScholarHub 1.0

                    </td>

                </tr>

                <tr>

                    <td class="text-secondary">

                        Status

                    </td>

                    <td>

                        <span class="badge bg-success">

                            Online

                        </span>

                    </td>

                </tr>

                <tr>

                    <td class="text-secondary">

                        Database

                    </td>

                    <td>

                        <span class="badge bg-primary">

                            Connected

                        </span>

                    </td>

                </tr>

            </table>

        </div>

    </div>

</div>


@php
    $allApps = \App\Models\ScholarshipApplication::with('user', 'scholarship')->latest()->get();
@endphp
<div style="display:none;" id="exportArea">
    <div class="text-center mb-4">
        <h2>Laporan Data Pendaftar Beasiswa</h2>
        <p>Dicetak pada: {{ now()->format('d M Y H:i') }}</p>
    </div>
    <table class="table table-bordered" id="exportTable">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Lengkap</th>
                <th>Program Beasiswa</th>
                <th>NIM</th>
                <th>Program Studi</th>
                <th>Jenjang</th>
                <th>Semester</th>
                <th>IPK</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach($allApps as $index => $app)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $app->user ? $app->user->name : '-' }}</td>
                <td>{{ $app->scholarship ? $app->scholarship->name : $app->program }}</td>
                <td>{{ $app->nim }}</td>
                <td>{{ $app->major }}</td>
                <td>{{ $app->jenjang }}</td>
                <td>{{ $app->semester }}</td>
                <td>{{ $app->gpa }}</td>
                <td>{{ strtoupper($app->status) }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<script>
    function exportPDF() {
        let printContents = document.getElementById('exportArea').innerHTML;
        let originalContents = document.body.innerHTML;
        
        document.body.innerHTML = printContents;
        document.body.style.display = 'block';
        window.print();
        
        document.body.innerHTML = originalContents;
        window.location.reload();
    }

    function exportExcel() {
        let table = document.getElementById("exportTable");
        let rows = table.querySelectorAll("tr");
        let csv = [];
        
        for (let i = 0; i < rows.length; i++) {
            let row = [], cols = rows[i].querySelectorAll("td, th");
            for (let j = 0; j < cols.length; j++) {
                let data = cols[j].innerText.replace(/(\r\n|\n|\r)/gm, "").replace(/(\s\s)/gm, " ");
                data = data.replace(/"/g, '""');
                row.push('"' + data + '"');
            }
            csv.push(row.join(";"));
        }
        
        let csvFile = new Blob([csv.join("\n")], {type: "text/csv"});
        let downloadLink = document.createElement("a");
        downloadLink.download = "Laporan_Beasiswa.csv";
        downloadLink.href = window.URL.createObjectURL(csvFile);
        downloadLink.style.display = "none";
        document.body.appendChild(downloadLink);
        downloadLink.click();
    }
</script>

@endsection