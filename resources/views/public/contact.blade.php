@extends('layouts.app')

@section('content')

    <section class="section fade-up">

        <div class="container">

            <div class="text-center mb-5">

                <span class="hero-badge">

                    Hubungi Kami

                </span>

                <h1 class="hero-title mt-4 mx-auto">

                    Kontak Kami

                </h1>

                <p class="hero-text mx-auto">

                    Apabila memiliki pertanyaan seputar pendaftaran beasiswa,

                    silakan hubungi kami melalui informasi berikut.

                </p>

            </div>


            <div class="row g-4">


                <!-- INFORMASI -->

                <div class="col-lg-5">

                    <div class="category-card h-100">

                        <h3 class="fw-bold mb-4">

                            Informasi Kontak

                        </h3>


                        <div class="mb-4">

                            <h5>

                                📍 Alamat

                            </h5>

                            <p>

                                Politeknik Negeri Padang

                                <br>

                                Limau Manis,

                                Kota Padang,

                                Sumatera Barat

                            </p>

                        </div>


                        <div class="mb-4">

                            <h5>

                                📧 Email

                            </h5>

                            <p>

                                scholarhub@gmail.com

                            </p>

                        </div>


                        <div class="mb-4">

                            <h5>

                                📞 Telepon

                            </h5>

                            <p>

                                +62 812 3456 7890

                            </p>

                        </div>


                        <div>

                            <h5>

                                🕒 Jam Operasional

                            </h5>

                            <p>

                                Senin - Jumat

                                <br>

                                08.00 - 16.00 WIB

                            </p>

                        </div>

                    </div>

                </div>



                <!-- FORM -->

                <div class="col-lg-7">

                    <div class="category-card">

                        <h3 class="fw-bold mb-4">

                            Kirim Pesan

                        </h3>


                        <form>

                            <div class="mb-4">

                                <label class="form-label">

                                    Nama Lengkap

                                </label>

                                <input type="text" class="form-control" required>

                            </div>


                            <div class="mb-4">

                                <label class="form-label">

                                    Email

                                </label>

                                <input type="email" class="form-control" required>

                            </div>


                            <div class="mb-4">

                                <label class="form-label">

                                    Subjek

                                </label>

                                <input type="text" class="form-control" required>

                            </div>


                            <div class="mb-4">

                                <label class="form-label">

                                    Pesan

                                </label>

                                <textarea rows="6" class="form-control" required>

        </textarea>

                            </div>


                            <button type="submit" class="btn btn-main">

                                Kirim Pesan

                            </button>

                        </form>

                    </div>

                </div>

            </div>

        </div>

    </section>

@endsection