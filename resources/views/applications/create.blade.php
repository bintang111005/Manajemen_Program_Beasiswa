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


                        <!-- PROGRAM BEASISWA -->

                        <div class="mb-4">

                            <label class="form-label">

                                Program Beasiswa

                            </label>


                            @if(session('program'))


                                @php

                                    $scholarship = \App\Models\Scholarship::find(

                                        session('program')

                                    );

                                @endphp


                                <input type="text" class="form-control" value="{{ $scholarship->name }}" readonly>


                                <input type="hidden" name="program" value="{{ $scholarship->id }}">


                            @else


                                <select name="program" class="form-select" required>


                                    <option value="">

                                        Pilih Program Beasiswa

                                    </option>


                                    @foreach(\App\Models\Scholarship::where('status', 'open')->get() as $scholarship)


                                        <option value="{{ $scholarship->id }}">

                                            {{ $scholarship->name }}

                                        </option>


                                    @endforeach


                                </select>


                            @endif


                        </div>


                        <!-- NAMA -->

                        <div class="mb-4">

                            <label class="form-label">

                                Nama Lengkap

                            </label>


                            <input type="text" class="form-control" value="{{ auth()->user()->name }}" readonly>


                        </div>


                        <!-- NIM -->

                        <div class="mb-4">

                            <label class="form-label">

                                NIM

                            </label>


                            <input type="text" name="nim" class="form-control" required>


                        </div>


                        <!-- PRODI -->

                        <div class="mb-4">

                            <label class="form-label">

                                Program Studi

                            </label>


                            <input type="text" name="major" class="form-control" required>


                        </div>


                        <!-- JENJANG -->

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


                        <!-- SEMESTER -->

                        <div class="mb-4">

                            <label class="form-label">

                                Semester

                            </label>


                            <input type="number" name="semester" class="form-control" required>


                        </div>


                        <!-- IPK -->

                        <div class="mb-4">

                            <label class="form-label">

                                IPK

                            </label>


                            <input type="number" step="0.01" min="0" max="4" name="gpa" class="form-control" required>


                        </div>


                        <!-- NO HP -->

                        <div class="mb-4">

                            <label class="form-label">

                                Nomor HP

                            </label>


                            <input type="text" name="phone" class="form-control" required>


                        </div>


                        <!-- ALAMAT -->

                        <div class="mb-4">

                            <label class="form-label">

                                Alamat

                            </label>


                            <textarea name="address" rows="3" class="form-control" required></textarea>


                        </div>


                        <!-- MOTIVASI -->

                        <div class="mb-5">

                            <label class="form-label">

                                Esai Motivasi

                            </label>


                            <textarea name="motivation_letter" rows="5" class="form-control" required></textarea>


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