@extends('layouts.app')

@section('content')

    <section class="section">

        <div class="container">

            <div class="col-lg-6 mx-auto">

                <div class="category-card">

                    <h2 class="fw-bold mb-4">

                        Buat Akun

                    </h2>

                    <form>

                        <div class="mb-3">

                            <label>

                                Nama Lengkap

                            </label>

                            <input type="text" class="form-control">

                        </div>

                        <div class="mb-3">

                            <label>

                                Email

                            </label>

                            <input type="email" class="form-control">

                        </div>

                        <div class="mb-3">

                            <label>

                                Password

                            </label>

                            <input type="password" class="form-control">

                        </div>

                        <button class="btn btn-main">

                            Daftar

                        </button>

                    </form>

                </div>

            </div>

        </div>

    </section>

@endsection