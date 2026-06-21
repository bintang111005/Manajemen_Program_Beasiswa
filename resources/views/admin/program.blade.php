
@extends('layouts.admin')

@section('title')

    Program Beasiswa

@endsection


@section('content')

    <div class="card-admin">


        @if(session('success'))

            <div class="alert alert-success mb-4">

                {{ session('success') }}

            </div>

        @endif


        <div class="d-flex justify-content-between align-items-center mb-4">


            <h4>

                Daftar Program Beasiswa

            </h4>


            <a href="/scholarships/create" class="btn btn-success">

                + Tambah Program

            </a>


        </div>


        <div class="table-responsive">


            <table class="table align-middle">


                <thead>

                    <tr>

                        <th>No</th>

                        <th>Nama Program</th>

                        <th>Penyelenggara</th>

                        <th>Kuota</th>

                        <th>Deadline</th>

                        <th>Status</th>

                        <th>Aksi</th>

                    </tr>

                </thead>


                <tbody>


                    @forelse($scholarships as $scholarship)


                        <tr>


                            <td>

                                {{ $loop->iteration }}

                            </td>


                            <td>

                                {{ $scholarship->name }}

                            </td>


                            <td>

                                {{ $scholarship->provider }}

                            </td>


                            <td>

                                {{ $scholarship->quota }}

                            </td>


                            <td>

                                {{ $scholarship->deadline }}

                            </td>


                            <td>

                                @if($scholarship->status == 'open')

                                    <span class="badge bg-success">

                                        Aktif

                                    </span>

                                @else

                                    <span class="badge bg-danger">

                                        Nonaktif

                                    </span>

                                @endif

                            </td>


                            <td>


                                <a href="/scholarships/{{ $scholarship->id }}/edit" class="btn btn-warning btn-sm">

                                    ✏️

                                </a>


                                <form action="/scholarships/{{ $scholarship->id }}" method="POST" class="d-inline">

                                    @csrf

                                    @method('DELETE')


                                    <button type="submit" class="btn btn-danger btn-sm"
                                        onclick="return confirm('Hapus program ini?')">

                                        🗑️

                                    </button>


                                </form>


                            </td>


                        </tr>


                    @empty


                        <tr>

                            <td colspan="7" class="text-center py-4">

                                Belum ada data program beasiswa.

                            </td>

                        </tr>


                    @endforelse


                </tbody>


            </table>


        </div>


    </div>

@endsection
