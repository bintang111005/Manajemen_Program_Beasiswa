
@extends('layouts.app')

@section('content')

    <section class="section">

        <div class="container">

            <div class="col-lg-8 mx-auto">

                <div class="category-card">

                    <h2 class="fw-bold mb-4 text-center">

                        Formulir Pendaftaran Beasiswa

                    </h2>

                    <p class="text-center text-muted mb-5">

                        Lengkapi data berikut sebelum mengunggah dokumen.

                    </p>

                    <form action="/applications/upload" method="GET">

                        <div class="row">

                            <div class="col-md-6 mb-4">

                                <label class="form-label">

                                    Nama Lengkap

                                </label>

                                <input type="text" class="form-control" required>

                            </div>



                            <div class="col-md-6 mb-4">

                                <label class="form-label">

                                    NIM

                                </label>

                                <input type="text" class="form-control" required>

                            </div>

                        </div>



                        <div class="row">

                            <div class="col-md-6 mb-4">

                                <label class="form-label">

                                    Program Studi

                                </label>

                                <input type="text" class="form-control" required>

                            </div>



                            <div class="col-md-6 mb-4">

                                <label class="form-label">

                                    Semester

                                </label>

                                <input type="number" class="form-control" required>

                            </div>

                        </div>



                        <div class="mb-4">

                            <label class="form-label">

                                Jenis Beasiswa

                            </label>

                            <select class="form-select">

                                <option>

                                    Akademik

                                </option>

                                <option>

                                    Non Akademik

                                </option>

                            </select>

                        </div>



                        <div class="mb-4">

                            <label class="form-label">

                                Esai Motivasi

                            </label>

                            <textarea rows="5" class="form-control" required>

    </textarea>

                        </div>



                        <button type="submit" class="btn btn-main w-100">

                            Lanjut Upload Dokumen

                        </button>

                    </form>

                </div>

            </div>

        </div>

    </section>

@endsection
