@extends('layouts.admin')

@section('title', 'Verifikasi Berkas')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">

    <div>

        <h2 class="fw-bold">

            Verifikasi Berkas

        </h2>

        <p class="text-secondary">

            Periksa seluruh dokumen mahasiswa sebelum memberikan keputusan.

        </p>

    </div>

    <span class="badge bg-warning rounded-pill px-4 py-2">

        {{ $applications->count() }}

        Menunggu Verifikasi

    </span>

</div>

<div class="card-custom p-4 mb-4">

    <div class="row">

        <div class="col-lg-5">

            <div class="input-group">

                <span class="input-group-text bg-white border-end-0">

                    <i class="bi bi-search"></i>

                </span>

                <input type="text" id="searchVerification" class="form-control border-start-0"
                    placeholder="Cari mahasiswa...">

            </div>

        </div>

    </div>

</div>

<div class="row g-4" id="verificationCards">

    @foreach($applications as $application)

            <div class="col-lg-6">

                <div class="card-custom p-4 h-100 verification-item">

                    <div class="d-flex justify-content-between">

                        <div class="d-flex">

                            <div style="width:65px;
        height:65px;
        border-radius:50%;
        background:#2563eb;
        display:flex;
        justify-content:center;
        align-items:center;
        color:white;
        font-size:24px;
        font-weight:bold;">

                                {{ strtoupper(substr($application->user->name, 0, 1)) }}

                            </div>

                            <div class="ms-3">

                                <h5 class="fw-bold mb-1">

                                    {{ $application->user->name }}

                                </h5>

                                <div class="text-secondary">

                                    {{ $application->nim }}

                                </div>

                                <div class="mt-2">

                                    <span class="badge bg-primary">

                                        {{ $application->program }}

                                    </span>

                                </div>

                            </div>

                        </div>

                        <div>

                            <span class="badge bg-warning">

                                Submitted

                            </span>

                        </div>

                    </div>

                    <hr>

                    <div class="row">

                        <div class="col-6 mb-3">

                            <small class="text-secondary">

                                IPK

                            </small>

                            <h6 class="fw-bold">

                                {{ $application->gpa }}

                            </h6>

                        </div>

                        <div class="col-6 mb-3">

                            <small class="text-secondary">

                                Semester

                            </small>

                            <h6 class="fw-bold">

                                {{ $application->semester }}

                            </h6>

                        </div>

                        <div class="col-6">

                            <small class="text-secondary">

                                Program Studi

                            </small>

                            <h6 class="fw-bold">

                                {{ $application->major }}

                            </h6>

                        </div>

                        <div class="col-6">

                            <small class="text-secondary">

                                Jenjang

                            </small>

                            <h6 class="fw-bold">

                                {{ $application->jenjang }}

                            </h6>

                        </div>

                    </div>

                    <hr>

                    <a href="/admin/verification/{{ $application->id }}" class="btn btn-primary w-100 rounded-pill">

                        <i class="bi bi-folder2-open me-2"></i>

                        Periksa Dokumen

                    </a>

                </div>

            </div>

    @endforeach

</div>@if($applications->count()==0)

<div class="card-custom p-5 mt-4 text-center">

    <i class="bi bi-folder-x display-1 text-secondary"></i>

    <h3 class="fw-bold mt-4">

        Tidak Ada Berkas

    </h3>

    <p class="text-secondary">

        Saat ini belum ada mahasiswa yang menunggu verifikasi.

    </p>

</div>

@endif

<script>

const searchVerification = document.getElementById('searchVerification');

if(searchVerification){

    searchVerification.addEventListener('keyup', function(){

        let keyword = this.value.toLowerCase();

        let cards = document.querySelectorAll('.verification-item');

        cards.forEach(function(card){

            let text = card.innerText.toLowerCase();

            card.parentElement.style.display = text.includes(keyword) ? '' : 'none';

        });

    });

}

</script>

@endsection