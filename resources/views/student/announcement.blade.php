@extends('layouts.app')

@section('content')

    <section class="section">

        <div class="container">

            <div class="col-lg-8 mx-auto">

                <div class="category-card text-center">


                    @if($application->status == 'awarded')


                        <h2>

                            🎉 Selamat

                        </h2>


                        <p class="mt-4">

                            Anda dinyatakan

                            <strong>

                                DITERIMA

                            </strong>

                            sebagai penerima beasiswa.

                        </p>


                    @elseif($application->status == 'rejected')


                        <h2>

                            ❌ Mohon Maaf

                        </h2>


                        <p class="mt-4">

                            Anda dinyatakan

                            <strong>

                                DITOLAK

                            </strong>

                            seleksi beasiswa.

                        </p>


                    @else


                        <h2>

                            ⏳ Menunggu Pengumuman

                        </h2>


                        <p class="mt-4">

                            Berkas Anda masih direview admin.

                        </p>


                    @endif


                    <a href="/student" class="btn btn-main mt-4">

                        Kembali ke Dashboard

                    </a>


                </div>

            </div>

        </div>

    </section>

@endsection