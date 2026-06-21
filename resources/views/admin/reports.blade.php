
@extends('layouts.admin')

@section('title')

Laporan

@endsection


@section('content')


<div class="row g-4">


    <div class="col-md-3">


        <div class="card-admin text-center">


            <h1>

                {{ $totalProgram }}

            </h1>


            <p>

                Program Beasiswa

            </p>


        </div>


    </div>


    <div class="col-md-3">


        <div class="card-admin text-center">


            <h1>

                {{ $totalPendaftar }}

            </h1>


            <p>

                Total Pendaftar

            </p>


        </div>


    </div>


    <div class="col-md-3">


        <div class="card-admin text-center">


            <h1>

                {{ $totalDiterima }}

            </h1>


            <p>

                Diterima

            </p>


        </div>


    </div>


    <div class="col-md-3">


        <div class="card-admin text-center">


            <h1>

                {{ $totalDitolak }}

            </h1>


            <p>

                Ditolak

            </p>


        </div>


    </div>


</div>


<div class="card-admin mt-4">


    <h4 class="mb-4">

        Statistik Kelulusan

    </h4>


    <div class="progress"

        style="height:30px;">


        <div

            class="progress-bar"

            role="progressbar"

            style="width:{{ $persentase }}%">


            {{ $persentase }}%


        </div>


    </div>


    <p class="mt-3 text-muted">


        Persentase mahasiswa yang lolos seleksi.


    </p>


</div>


@endsection
