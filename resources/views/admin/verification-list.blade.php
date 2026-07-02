@extends('layouts.admin')

@section('title', 'Verifikasi Berkas')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">
    <div>
        <h2 class="fw-bold">
            Verifikasi Berkas
        </h2>
        <p class="text-secondary mb-0">
            Periksa seluruh dokumen mahasiswa sebelum memberikan keputusan.
        </p>
    </div>
</div>

<div class="row g-4 mb-4">
    <div class="col-lg-4">
        <div class="card-custom p-4">
            <small class="text-secondary">
                Menunggu Verifikasi
            </small>
            <h2 class="fw-bold mt-2">
                {{ $applications->count() }}
            </h2>
        </div>
    </div>
    <div class="col-lg-8">
        <div class="card-custom p-4">
            <div class="input-group">
                <span class="input-group-text bg-white border-end-0">
                    <i class="bi bi-search"></i>
                </span>
                <input type="text"
                       id="searchVerification"
                       class="form-control border-start-0"
                       placeholder="Cari mahasiswa...">
            </div>
        </div>
    </div>
</div>

<div class="card-custom p-4">
    <div class="table-responsive">
        <table class="table align-middle" id="verificationTable">
            <thead>
            <tr>
                <th>#</th>
                <th>Nama Mahasiswa</th>
                <th>Program Studi</th>
                <th>IPK</th>
                <th>Program Beasiswa</th>
                <th>Aksi</th>
            </tr>
            </thead>
            <tbody>
            @foreach($applications as $application)
            <tr>
                <td>
                    {{ $loop->iteration }}
                </td>
                <td>
                    <div class="fw-bold">{{ $application->user->name }}</div>
                    <div class="text-secondary" style="font-size: 13px;">{{ $application->nim }}</div>
                </td>
                <td>
                    <div class="fw-semibold">{{ $application->major }}</div>
                    <div class="text-secondary" style="font-size: 13px;">Semester {{ $application->semester }} | {{ $application->jenjang }}</div>
                </td>
                <td>
                    <span class="badge bg-success">
                        {{ $application->gpa }}
                    </span>
                </td>
                <td>
                    <span class="badge bg-primary">
                        {{ $application->program }}
                    </span>
                </td>
                <td>
                    <a href="/admin/verification/{{ $application->id }}"
                       class="btn btn-sm btn-primary rounded-pill px-3">
                        <i class="bi bi-folder2-open me-1"></i> Periksa
                    </a>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
        @if($applications->count() == 0)
        <div class="text-center py-5">
            <i class="bi bi-folder-x display-1 text-secondary"></i>
            <h4 class="fw-bold mt-3">Tidak Ada Berkas</h4>
            <p class="text-secondary">Saat ini belum ada mahasiswa yang menunggu verifikasi.</p>
        </div>
        @endif
    </div>
</div>

<script>
document.getElementById('searchVerification')?.addEventListener('keyup', function(){
    let keyword = this.value.toLowerCase();
    let rows = document.querySelectorAll('#verificationTable tbody tr');
    rows.forEach(function(row){
        let text = row.innerText.toLowerCase();
        row.style.display = text.includes(keyword) ? '' : 'none';
    });
});
</script>

@endsection