
@extends('layouts.app')

@section('content')

    <section class="section">

        <div class="container">

            <div class="col-lg-6 mx-auto">

                <div class="category-card">

                    <h2 class="fw-bold text-center mb-3">

                        Registrasi Akun

                    </h2>

                    <p class="text-center text-muted mb-5">

                        Buat akun terlebih dahulu untuk mendaftar beasiswa.

                    </p>


                    <form action="/register" method="POST">

                        @csrf


                        <div class="mb-4">

                            <label class="form-label">

                                Nama Lengkap

                            </label>

                            <input type="text" name="name" class="form-control" required>

                        </div>


                        <div class="mb-4">

                            <label class="form-label">

                                Email

                            </label>

                            <input type="email" name="email" class="form-control" required>

                        </div>


                        <div class="mb-4">

                            <label class="form-label">

                                Password

                            </label>

                            <input type="password" name="password" class="form-control" required>

                        </div>


                        <button type="submit" class="btn btn-main w-100">

                            Daftar

                        </button>

                    </form>


                    <div class="text-center mt-4">

                        Sudah punya akun?

                        <a href="/login" class="fw-bold text-decoration-none">

                            Login

                        </a>

                    </div>

                </div>

            </div>

        </div>

    </section>

@endsection
