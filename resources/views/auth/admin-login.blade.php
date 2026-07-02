@extends('layouts.app')

@section('content')

    <section class="section">

        <div class="container">

            <div class="col-lg-5 mx-auto">

                <div class="category-card">

                    <h2 class="fw-bold text-center mb-3">

                        Login Admin

                    </h2>

                    <p class="text-center text-muted mb-5">

                        Masuk sebagai administrator.

                    </p>


                    <form action="/admin-login" method="POST">

                        @csrf


                        <div class="mb-4">

                            <label class="form-label">

                                Username

                            </label>

                            <input type="text" name="username" class="form-control" required>

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

                </div>

            </div>

        </div>

    </section>

@endsection