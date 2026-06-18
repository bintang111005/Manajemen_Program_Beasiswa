
@extends('layouts.app')

@section('content')

    <section class="section">

        <div class="container">

            <div class="col-lg-6 mx-auto">

                <div class="category-card">

                    <h2 class="fw-bold text-center mb-3">

                        Login

                    </h2>

                    <p class="text-center text-muted mb-5">

                        Masuk untuk melanjutkan pendaftaran beasiswa.

                    </p>


                    <form action="/login" method="POST">

                        @csrf


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

                            Masuk

                        </button>

                    </form>


                    <div class="text-center mt-4">

                        Belum punya akun?

                        <a href="/register" class="fw-bold text-decoration-none">

                            Daftar Akun

                        </a>

                    </div>

                </div>

            </div>

        </div>

    </section>

@endsection
