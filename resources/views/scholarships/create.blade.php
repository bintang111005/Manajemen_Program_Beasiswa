@extends('layouts.admin')

@section('title')

    Tambah Program Beasiswa

@endsection


@section('content')

    <div class="card-admin">

        <h4 class="mb-4">

            Tambah Program Beasiswa

        </h4>


        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif


        <form action="/scholarships" method="POST">

            @csrf


            <div class="mb-3">

                <label class="form-label">

                    Nama Program

                </label>

                <input type="text" name="name" class="form-control" required>

            </div>


            <div class="mb-3">

                <label class="form-label">

                    Penyelenggara

                </label>

                <input type="text" name="provider" class="form-control" required>

            </div>


            <div class="mb-3">

                <label class="form-label">

                    Deskripsi

                </label>

                <textarea name="description" rows="4" class="form-control">

    </textarea>

            </div>


            <div class="row">


                <div class="col-md-6">

                    <div class="mb-3">

                        <label class="form-label">

                            Kuota

                        </label>

                        <input type="number" name="quota" class="form-control" required>

                    </div>

                </div>


                <div class="col-md-6">

                    <div class="mb-3">

                        <label class="form-label">

                            Deadline

                        </label>

                        <input type="date" name="deadline" class="form-control" required>

                    </div>

                </div>


            </div>


            <div class="mb-3">

                <label class="form-label">

                    Nominal per Bulan

                </label>

                <input type="number" name="amount_monthly" class="form-control">

            </div>


            <div class="mb-3">

                <label class="form-label">

                    Persyaratan

                </label>

                <textarea name="requirements" rows="4" class="form-control">

    </textarea>

            </div>


            <div class="row">


                <div class="col-md-6">

                    <div class="mb-3">

                        <label class="form-label">

                            Mulai Periode

                        </label>

                        <input type="date" name="start_period" class="form-control">

                    </div>

                </div>


                <div class="col-md-6">

                    <div class="mb-3">

                        <label class="form-label">

                            Akhir Periode

                        </label>

                        <input type="date" name="end_period" class="form-control">

                    </div>

                </div>


            </div>


            <div class="mb-4">

                <label class="form-label">

                    Status

                </label>

                <select name="status" class="form-select" required>

                    <option value="open">

                        Aktif

                    </option>

                    <option value="closed">

                        Nonaktif

                    </option>

                </select>

            </div>


            <button type="submit" class="btn btn-success">

                Simpan Program

            </button>


            <a href="/admin/program" class="btn btn-secondary">

                Kembali

            </a>


        </form>

    </div>

@endsection