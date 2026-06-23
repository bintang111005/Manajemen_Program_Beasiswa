@extends('layouts.app')

@section('content')

    <section class="section">

        <div class="container">

            <div class="category-card">


                <h2 class="fw-bold mb-4">

                    Dashboard Mahasiswa

                </h2>


                <div class="row g-4">


                    <div class="col-md-4">

                        <div class="stat-card text-center">

                            <h5>

                                🎓 Program

                            </h5>

                            <br>

                            <h4>

                                {{ $application->program }}

                            </h4>

                        </div>

                    </div>


                    <div class="col-md-4">

                        <div class="stat-card text-center">

                            <h5>

                                📚 Jenjang

                            </h5>

                            <br>

                            <h4>

                                {{ $application->jenjang }}

                            </h4>

                        </div>

                    </div>


                    <div class="col-md-4">

                        <div class="stat-card text-center">

                            <h5>

                                📌 Status

                            </h5>

                            <br>


                            @if($application->status == 'submitted')

                                <span class="badge bg-warning">

                                    Menunggu Review

                                </span>


                            @elseif($application->status == 'awarded')

                                <span class="badge bg-success">

                                    Diterima

                                </span>


                            @elseif($application->status == 'rejected')

                                <span class="badge bg-danger">

                                    Ditolak

                                </span>


                            @endif


                        </div>

                    </div>


                </div>


                <div class="row mt-5">


                    <div class="col-md-6 mb-3">


                        <a href="/student/status" class="btn btn-outline-primary w-100">

                            📄 Status Seleksi

                        </a>


                    </div>


                    <div class="col-md-6 mb-3">


                        <a href="/student/announcement" class="btn btn-success w-100">

                            📢 Lihat Pengumuman

                        </a>


                    </div>


                </div>


                <div class="mt-4">


                    <form action="/logout" method="POST">


                        @csrf


                        <button class="btn btn-danger">

                            🚪 Logout

                        </button>


                    </form>


                </div>


            </div>

        </div>

    </section>

@endsection