
@extends('layouts.app')

@section('content')

    <section class="section">

        <div class="container">

            <div class="col-lg-8 mx-auto">

                <div class="category-card">

                    <h2 class="fw-bold text-center mb-3">

                        Upload Dokumen

                    </h2>

                    <p class="text-center text-muted mb-5">

                        Unggah seluruh dokumen yang dibutuhkan.

                    </p>

                    <form action="/student" method="GET" enctype="multipart/form-data">

                        <div class="mb-4">

                            <label class="form-label">

                                KTP

                            </label>

                            <input type="file" class="form-control" required>

                        </div>


                        <div class="mb-4">

                            <label class="form-label">

                                KTM

                            </label>

                            <input type="file" class="form-control" required>

                        </div>


                        <div class="mb-4">

                            <label class="form-label">

                                Transkrip Nilai

                            </label>

                            <input type="file" class="form-control" required>

                        </div>


                        <div class="mb-4">

                            <label class="form-label">

                                Sertifikat Prestasi

                            </label>

                            <input type="file" class="form-control">

                        </div>


                        <div class="mb-5">

                            <label class="form-label">

                                Esai Motivasi (PDF)

                            </label>

                            <input type="file" class="form-control" required>

                        </div>


                        <button type="submit" class="btn btn-main w-100">

                            Kirim Pendaftaran

                        </button>

                    </form>

                </div>

            </div>

        </div>

    </section>

@endsection