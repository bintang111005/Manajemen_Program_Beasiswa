@extends('layouts.app')

@section('content')

    <section class="section fade-up">

        <div class="container">

            <div class="col-lg-8 mx-auto">

                <div class="category-card">

                    <h2 class="fw-bold text-center mb-3">

                        Formulir Pendaftaran Beasiswa

                    </h2>

                    <p class="text-center text-muted mb-5">

                        Lengkapi data berikut untuk melanjutkan pendaftaran.

                    </p>

                    <form action="/applications" method="POST">

                        @csrf

                        <div class="mb-4">

                            <label class="form-label">

                                Program Beasiswa

                            </label>

                            <input type="text" class="form-control" value="{{

        session('program') == 'akademik'

        ? 'Prestasi Akademik'

        : (session('program') == 'non-akademik'

            ? 'Prestasi Non Akademik'

            : 'Bantuan Ekonomi')

    }}" readonly>

                        </div>

                        <div class="mb-4">

                            <label class="form-label">

                                Nama Lengkap

                            </label>

                            <input type="text" class="form-control" value="{{ auth()->user()->name }}" readonly>

                        </div>

                        <div class="mb-4">

                            <label class="form-label">

                                NIM

                            </label>

                            <input type="text" name="nim" class="form-control" required>

                        </div>

                        <div class="mb-4">

                            <label class="form-label">

                                Program Studi

                            </label>

                            <input type="text" name="major" class="form-control" required>

                        </div>

                        <div class="mb-4">

                            <label class="form-label">

                                Jenjang Pendidikan

                            </label>

                            <select name="jenjang" class="form-select" required>

                                <option value="">

                                    Pilih Jenjang

                                </option>

                                <option value="D3">

                                    D3

                                </option>

                                <option value="D4">

                                    D4

                                </option>

                                <option value="S1">

                                    S1

                                </option>

                                <option value="S2">

                                    S2

                                </option>

                            </select>

                        </div>

                        <div class="mb-4">

                            <label class="form-label">

                                Semester

                            </label>

                            <input type="number" name="semester" class="form-control" required>

                        </div>

                        <div class="mb-4">

                            <label class="form-label">

                                IPK

                            </label>

                            <input type="number" step="0.01" min="0" max="4" name="gpa" class="form-control" required>

                        </div>

                        <div class="mb-4">

                            <label class="form-label">

                                Nomor HP

                            </label>

                            <input type="text" name="phone" class="form-control" required>

                        </div>

                        <div class="mb-4">

                            <label class="form-label">

                                Alamat

                            </label>

                            <textarea name="address" rows="3" class="form-control" required>

    </textarea>

                        </div>

                        <div class="mb-5">

                            <label class="form-label">

                                Esai Motivasi

                            </label>

                            <textarea name="motivation_letter" rows="5" class="form-control" required>

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