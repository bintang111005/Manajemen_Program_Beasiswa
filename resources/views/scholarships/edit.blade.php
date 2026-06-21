@extends('layouts.admin')

@section('title')

    Edit Program Beasiswa

@endsection


@section('content')

    <div class="card-admin">

        <h4 class="mb-4">

            Edit Program Beasiswa

        </h4>


        <form action="/scholarships/{{ $scholarship->id }}" method="POST">

            @csrf

            @method('PUT')


            <div class="mb-3">

                <label class="form-label">

                    Nama Program

                </label>

                <input type="text" name="name" class="form-control" value="{{ $scholarship->name }}" required>

            </div>


            <div class="mb-3">

                <label class="form-label">

                    Penyelenggara

                </label>

                <input type="text" name="provider" class="form-control" value="{{ $scholarship->provider }}" required>

            </div>


            <div class="mb-3">

                <label class="form-label">

                    Deskripsi

                </label>

                <textarea name="description" rows="4" class="form-control">{{ $scholarship->description }}</textarea>

            </div>


            <div class="row">


                <div class="col-md-6">

                    <div class="mb-3">

                        <label class="form-label">

                            Kuota

                        </label>

                        <input type="number" name="quota" class="form-control" value="{{ $scholarship->quota }}" required>

                    </div>

                </div>


                <div class="col-md-6">

                    <div class="mb-3">

                        <label class="form-label">

                            Deadline

                        </label>

                        <input type="date" name="deadline" class="form-control" value="{{ $scholarship->deadline }}"
                            required>

                    </div>

                </div>


            </div>


            <div class="mb-3">

                <label class="form-label">

                    Nominal Per Bulan

                </label>

                <input type="number" name="amount_monthly" class="form-control" value="{{ $scholarship->amount_monthly }}">

            </div>


            <div class="mb-3">

                <label class="form-label">

                    Persyaratan

                </label>

                <textarea name="requirements" rows="4" class="form-control">{{ $scholarship->requirements }}</textarea>

            </div>


            <div class="row">


                <div class="col-md-6">

                    <div class="mb-3">

                        <label class="form-label">

                            Mulai Periode

                        </label>

                        <input type="date" name="start_period" class="form-control"
                            value="{{ $scholarship->start_period }}">

                    </div>

                </div>


                <div class="col-md-6">

                    <div class="mb-3">

                        <label class="form-label">

                            Akhir Periode

                        </label>

                        <input type="date" name="end_period" class="form-control" value="{{ $scholarship->end_period }}">

                    </div>

                </div>


            </div>


            <div class="mb-4">

                <label class="form-label">

                    Status

                </label>

                <select name="status" class="form-select" required>


                    <option value="open" {{ $scholarship->status == 'open' ? 'selected' : '' }}>

                        Aktif

                    </option>


                    <option value="closed" {{ $scholarship->status == 'closed' ? 'selected' : '' }}>

                        Nonaktif

                    </option>


                </select>

            </div>


            <button type="submit" class="btn btn-warning">

                Update Program

            </button>


            <a href="/admin/program" class="btn btn-secondary">

                Kembali

            </a>


        </form>

    </div>

@endsection