
@extends('layouts.admin')

@section('title')

    Data Pendaftar

@endsection


@section('content')

    <div class="card-admin">

        <h4 class="mb-4">

            Data Pendaftar Beasiswa

        </h4>


        <div class="table-responsive">


            <table class="table align-middle">


                <thead>

                    <tr>

                        <th>No</th>

                        <th>Nama</th>

                        <th>NIM</th>

                        <th>Program</th>

                        <th>Semester</th>

                        <th>IPK</th>

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

                                {{ $application->semester }}

                            </td>


                            <td>

                                {{ $application->gpa }}

                            </td>


                            <td>


                                @if($application->status == 'submitted')

                                    <span class="badge bg-warning">

                                        Menunggu

                                    </span>

                                @elseif($application->status == 'reviewing')

                                    <span class="badge bg-info">

                                        Diproses

                                    </span>

                                @elseif($application->status == 'awarded')

                                    <span class="badge bg-success">

                                        Diterima

                                    </span>

                                @else

                                    <span class="badge bg-danger">

                                        Ditolak

                                    </span>

                                @endif


                            </td>


                            <td>


                                <a href="/admin/verification" class="btn btn-primary btn-sm">

                                    Lihat

                                </a>


                            </td>


                        </tr>


                    @empty


                        <tr>

                            <td colspan="8" class="text-center">

                                Belum ada pendaftar.

                            </td>

                        </tr>


                    @endforelse


                </tbody>


            </table>


        </div>


    </div>

@endsection