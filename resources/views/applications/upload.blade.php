
@extends('layouts.app')

@section('content')

    <section class="section fade-up">

        <div class="container">

            <div class="col-lg-8 mx-auto">

                <div class="category-card">

                    <h2 class="fw-bold text-center mb-3">

                        Upload Dokumen

                    </h2>

                    <p class="text-center text-muted mb-5">

                        Unggah seluruh dokumen yang dibutuhkan.

                    </p>


                    <form action="/upload-document" method="POST" enctype="multipart/form-data">

                        @csrf


                        <!-- PROGRAM -->

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



                        <!-- FOTO -->

                        <div class="mb-4">

                            <label class="form-label">

                                Foto Diri (3x4)

                            </label>

                            <input type="file" name="photo" class="form-control" accept=".jpg,.jpeg,.png" required>

                        </div>



                        <!-- KTP -->

                        <div class="mb-4">

                            <label class="form-label">

                                KTP

                            </label>

                            <input type="file" name="ktp" class="form-control" accept=".jpg,.jpeg,.png,.pdf" required>

                        </div>



                        <!-- KTM -->

                        <div class="mb-5">

                            <label class="form-label">

                                KTM (Kartu Tanda Mahasiswa)

                            </label>

                            <input type="file" name="ktm" class="form-control" accept=".jpg,.jpeg,.png,.pdf" required>

                        </div>



                        @if(session('program') == 'akademik')

                            <div class="mb-4">

                                <label class="form-label">

                                    Transkrip Nilai

                                </label>

                                <input type="file" name="document_1" class="form-control" required>

                            </div>


                            <div class="mb-4">

                                <label class="form-label">

                                    Kartu Hasil Studi (KHS)

                                </label>

                                <input type="file" name="document_2" class="form-control" required>

                            </div>


                            <div class="mb-5">

                                <label class="form-label">

                                    Sertifikat Akademik (Opsional)

                                </label>

                                <input type="file" name="document_3" class="form-control">

                            </div>


                        @elseif(session('program') == 'non-akademik')

                            <div class="mb-4">

                                <label class="form-label">

                                    Sertifikat Prestasi

                                </label>

                                <input type="file" name="document_1" class="form-control" required>

                            </div>


                            <div class="mb-4">

                                <label class="form-label">

                                    Portofolio

                                </label>

                                <input type="file" name="document_2" class="form-control" required>

                            </div>


                            <div class="mb-5">

                                <label class="form-label">

                                    Sertifikat Organisasi (Opsional)

                                </label>

                                <input type="file" name="document_3" class="form-control">

                            </div>


                        @else

                            <div class="mb-4">

                                <label class="form-label">

                                    Kartu Keluarga

                                </label>

                                <input type="file" name="document_1" class="form-control" required>

                            </div>


                            <div class="mb-4">

                                <label class="form-label">

                                    Surat Keterangan Tidak Mampu

                                </label>

                                <input type="file" name="document_2" class="form-control" required>

                            </div>


                            <div class="mb-5">

                                <label class="form-label">

                                    Slip Gaji Orang Tua

                                </label>

                                <input type="file" name="document_3" class="form-control" required>

                            </div>

                        @endif


                        <button type="submit" class="btn btn-main w-100">

                            Kirim Pendaftaran

                        </button>


                    </form>

                </div>

            </div>

        </div>

    </section>

@endsection