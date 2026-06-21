@extends('layouts.admin')

@section('title')

    Verifikasi Berkas

@endsection


@section('content')


    <div class="card-admin">


        <h4 class="mb-4">

            Daftar Berkas Menunggu Verifikasi

        </h4>


        <div class="table-responsive">


            <table class="table table-hover align-middle">


                <thead>


                    <tr>

                        <th>No</th>

                        <th>Nama</th>

                        <th>NIM</th>

                        <th>Program</th>

                        <th>Status</th>

                        <th>Aksi</th>

                    </tr>


                </thead>


                <tbody>


                    @forelse($applications as $application)


                        <tr>


                            <td>

                                {{ $loop->iteration }}

                            </td>


                            <td>

                                {{ $application->user->name }}

                            </td>


                            <td>

                                {{ $application->nim }}

                            </td>


                            <td>

                                {{ $application->program }}

                            </td>


                            <td>

                                <span class="badge bg-warning">

                                    Menunggu Verifikasi

                                </span>

                            </td>


                            <td>


                                <a href="/admin/verification/{{ $application->id }}" class="btn btn-primary btn-sm">

                                    📄 Verifikasi

                                </a>


                            </td>


                        </tr>


                    @empty


                        <tr>


                            <td colspan="6" class="text-center py-4">


                                Tidak ada berkas yang menunggu verifikasi.


                            </td>


                        </tr>


                    @endforelse


                </tbody>


            </table>


        </div>


    </div>


@endsection