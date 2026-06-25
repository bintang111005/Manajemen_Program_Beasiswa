@extends('layouts.admin')

@section('title','Program Beasiswa')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">

    <div>

        <h2 class="fw-bold">

            Program Beasiswa

        </h2>

        <p class="text-secondary mb-0">

            Kelola seluruh program beasiswa yang tersedia.

        </p>

    </div>

    <button class="btn btn-primary rounded-pill px-4"
            data-bs-toggle="modal"
            data-bs-target="#modalTambah">

        <i class="bi bi-plus-circle me-2"></i>

        Tambah Program

    </button>

</div>

<div class="row g-4 mb-4">

    <div class="col-lg-4">

        <div class="card-custom p-4">

            <small class="text-secondary">

                Total Program

            </small>

            <h2 class="fw-bold mt-2">

                {{ $scholarships->count() }}

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

                       id="searchProgram"

                       class="form-control border-start-0"

                       placeholder="Cari program beasiswa...">

            </div>

        </div>

    </div>

</div>

<div class="card-custom p-4">

    <div class="table-responsive">

        <table class="table align-middle" id="programTable">

            <thead>

            <tr>

                <th>#</th>

                <th>Nama Program</th>

                <th>Deskripsi</th>

                <th>Kuota</th>

                <th>Aksi</th>

            </tr>

            </thead>

            <tbody>

            @foreach($scholarships as $program)

            <tr>

                <td>

                    {{ $loop->iteration }}

                </td>

                <td>

                    <span class="fw-semibold">

                        {{ $program->name }}

                    </span>

                </td>

                <td>

                    {{ Str::limit($program->description,60) }}

                </td>

                <td>

                    <span class="badge bg-primary">

                        {{ $program->quota }}

                    </span>

                </td>

                <td>

                    <div class="d-flex gap-2">

                        <a href="{{ route('scholarships.edit',$program->id) }}"

                           class="btn btn-sm btn-warning rounded-pill">

                            <i class="bi bi-pencil"></i>

                        </a>

                        <form action="{{ route('scholarships.destroy',$program->id) }}"

                              method="POST">

                            @csrf

                            @method('DELETE')
                            <button type="submit"
                                    class="btn btn-sm btn-danger rounded-pill"
                                    onclick="return confirm('Yakin ingin menghapus program ini?')">

                                <i class="bi bi-trash"></i>

                            </button>

                        </form>

                    </div>

                </td>

            </tr>

            @endforeach

            </tbody>

        </table>

    </div>

</div>

<!-- ===========================
        MODAL TAMBAH PROGRAM
=========================== -->

<div class="modal fade"

     id="modalTambah"

     tabindex="-1">

    <div class="modal-dialog modal-lg">

        <div class="modal-content border-0 rounded-4">

            <div class="modal-header">

                <h5 class="modal-title fw-bold">

                    Tambah Program Beasiswa

                </h5>

                <button class="btn-close"

                        data-bs-dismiss="modal">

                </button>

            </div>

            <form action="{{ route('scholarships.store') }}"

                  method="POST">

                @csrf

                <div class="modal-body">

                    <div class="mb-3">

                        <label class="form-label">

                            Nama Program

                        </label>

                        <input type="text"

                               name="name"

                               class="form-control"

                               required>

                    </div>

                    <div class="mb-3">

                        <label class="form-label">

                            Deskripsi

                        </label>

                        <textarea class="form-control"

                                  rows="5"

                                  name="description"

                                  required></textarea>

                    </div>

                    <div class="mb-3">

                        <label class="form-label">

                            Kuota

                        </label>

                        <input type="number"

                               name="quota"

                               class="form-control"

                               required>

                    </div>

                </div>

                <div class="modal-footer">

                    <button class="btn btn-light rounded-pill"

                            data-bs-dismiss="modal">

                        Batal

                    </button>

                    <button class="btn btn-primary rounded-pill px-4">

                        Simpan Program

                    </button>

                </div>

            </form>

        </div>

    </div>

</div>

<script>

document.getElementById('searchProgram').addEventListener('keyup', function(){

    let keyword = this.value.toLowerCase();

    let rows = document.querySelectorAll('#programTable tbody tr');

    rows.forEach(function(row){

        let text = row.innerText.toLowerCase();

        row.style.display = text.includes(keyword) ? '' : 'none';

    });

});

</script>

@endsection