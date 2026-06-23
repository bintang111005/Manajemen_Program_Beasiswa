@extends('layouts.app')

@section('content')

    <section class="section">

        <div class="container">

            <div class="col-lg-8 mx-auto">

                <div class="category-card">

                    <h2 class="fw-bold mb-5 text-center">

                        Status Tahap Seleksi

                    </h2>


                    <div class="timeline">


                        <!-- FORMULIR -->

                        <div class="d-flex align-items-center mb-4">

                            <div class="me-3 fs-3">

                                ✅

                            </div>

                            <div>

                                <h5>

                                    Pengisian Formulir

                                </h5>

                                <small>

                                    Selesai

                                </small>

                            </div>

                        </div>


                        <!-- DOKUMEN -->

                        <div class="d-flex align-items-center mb-4">

                            <div class="me-3 fs-3">

                                ✅

                            </div>

                            <div>

                                <h5>

                                    Upload Dokumen

                                </h5>

                                <small>

                                    Selesai

                                </small>

                            </div>

                        </div>


                        <!-- VERIFIKASI -->

                        <div class="d-flex align-items-center mb-4">


                            @if(

                                    $application->status == 'submitted'

                                )

                                <div class="me-3 fs-3">

                                    ⏳

                                </div>

                                <div>

                                    <h5>

                                        Verifikasi Admin

                                    </h5>

                                    <small>

                                        Sedang Diproses

                                    </small>

                                </div>


                            @else


                                <div class="me-3 fs-3">

                                    ✅

                                </div>

                                <div>

                                    <h5>

                                        Verifikasi Admin

                                    </h5>

                                    <small>

                                        Selesai

                                    </small>

                                </div>


                            @endif


                        </div>


                        <!-- PENGUMUMAN -->

                        <div class="d-flex align-items-center mb-4">


                            @if(

                                    $application->status == 'submitted'

                                )

                                <div class="me-3 fs-3">

                                    ⬜

                                </div>

                                <div>

                                    <h5>

                                        Pengumuman

                                    </h5>

                                    <small>

                                        Menunggu Hasil

                                    </small>

                                </div>


                            @else


                                <div class="me-3 fs-3">

                                    ✅

                                </div>

                                <div>

                                    <h5>

                                        Pengumuman

                                    </h5>

                                    <small>

                                        Selesai

                                    </small>

                                </div>


                            @endif


                        </div>


                    </div>


                    <div class="mt-5 text-center">


                        <a href="/student" class="btn btn-main">

                            Kembali ke Dashboard

                        </a>


                    </div>


                </div>

            </div>

        </div>

    </section>

@endsection