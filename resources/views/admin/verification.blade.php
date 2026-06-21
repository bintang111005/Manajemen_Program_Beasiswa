
@extends('layouts.admin')

@section('title')

    Verifikasi Berkas

@endsection


@section('content')

    <div class="card-admin">


        <h4 class="mb-4">

            Verifikasi Berkas Mahasiswa

        </h4>


        <div class="row">


            <div class="col-md-6 mb-3">

                <label class="fw-bold">

                    Nama

                </label>

                <input type="text" class="form-control" value="{{ $application->user->name ?? '-' }}" readonly>

            </div>


            <div class="col-md-6 mb-3">

                <label class="fw-bold">

                    NIM

                </label>

                <input type="text" class="form-control" value="{{ $application->nim }}" readonly>

            </div>


            <div class="col-md-6 mb-3">

                <label class="fw-bold">

                    Program Beasiswa

                </label>

                <input type="text" class="form-control" value="{{ $application->program }}" readonly>

            </div>


            <div class="col-md-6 mb-4">

                <label class="fw-bold">

                    IPK

                </label>

                <input type="text" class="form-control" value="{{ $application->gpa }}" readonly>

            </div>


        </div>


        <hr>


        <h5 class="mb-4">

            Dokumen Pendaftaran

        </h5>


        <div class="row">


            @if($application->photo)

                <div class="col-md-4 mb-3">

                    <a target="_blank" href="{{ asset('storage/' . $application->photo) }}" class="btn btn-outline-primary w-100">

                        📷 Foto Diri

                    </a>

                </div>

            @endif


            @if($application->ktp)

                <div class="col-md-4 mb-3">

                    <a target="_blank" href="{{ asset('storage/' . $application->ktp) }}" class="btn btn-outline-primary w-100">

                        🪪 KTP

                    </a>

                </div>

            @endif


            @if($application->ktm)

                <div class="col-md-4 mb-3">

                    <a target="_blank" href="{{ asset('storage/' . $application->ktm) }}" class="btn btn-outline-primary w-100">

                        🎓 KTM

                    </a>

                </div>

            @endif


            @if($application->document_1)

                <div class="col-md-4 mb-3">

                    <a target="_blank" href="{{ asset('storage/' . $application->document_1) }}"
                        class="btn btn-outline-secondary w-100">

                        📄 Dokumen 1

                    </a>

                </div>

            @endif


            @if($application->document_2)

                <div class="col-md-4 mb-3">

                    <a target="_blank" href="{{ asset('storage/' . $application->document_2) }}"
                        class="btn btn-outline-secondary w-100">

                        📄 Dokumen 2

                    </a>

                </div>

            @endif


            @if($application->document_3)

                <div class="col-md-4 mb-3">

                    <a target="_blank" href="{{ asset('storage/' . $application->document_3) }}"
                        class="btn btn-outline-secondary w-100">

                        📄 Dokumen 3

                    </a>

                </div>

            @endif


        </div>


        <hr>


        <div class="d-flex gap-3">


            <form action="{{ route('applications.update', $application->id) }}" method="POST">


                @csrf

                @method('PUT')


                <input type="hidden" name="status" value="awarded">


                <button type="submit" class="btn btn-success">

                    ✅ Terima

                </button>


            </form>


            <form action="{{ route('applications.update', $application->id) }}" method="POST">


                @csrf

                @method('PUT')


                <input type="hidden" name="status" value="rejected">


                <button type="submit" class="btn btn-danger">

                    ❌ Tolak

                </button>


            </form>


            <a href="/admin/applicants" class="btn btn-secondary">

                ← Kembali

            </a>


        </div>


    </div>

@endsection