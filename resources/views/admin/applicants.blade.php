@extends('layouts.admin')

@section('title','Data Pendaftar')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">

    <div>

        <h2 class="fw-bold">

            Data Pendaftar

        </h2>

        <p class="text-secondary mb-0">

            Kelola seluruh data mahasiswa yang telah mendaftar.

        </p>

    </div>

    <span class="badge bg-primary rounded-pill px-4 py-2">

        Total :

        {{ $applications->count() }}

    </span>

</div>

<div class="card-custom p-4 mb-4">

    <div class="row">

        <div class="col-lg-5">

            <div class="input-group">

                <span class="input-group-text bg-white border-end-0">

                    <i class="bi bi-search"></i>

                </span>

                <input

                    type="text"

                    class="form-control border-start-0"

                    id="searchApplicant"

                    placeholder="Cari mahasiswa...">

            </div>

        </div>

    </div>

</div>

<div class="card-custom p-0 overflow-hidden">

<div class="table-responsive">

<table class="table align-middle mb-0"

id="applicantTable">

<thead>

<tr>

<th width="70">

Mahasiswa

</th>

<th>

Program

</th>

<th>

IPK

</th>

<th>

Status

</th>

<th width="160">

Aksi

</th>

</tr>

</thead>

<tbody>

@foreach($applications as $application)

<tr>

<td>

<div class="d-flex align-items-center">

<div

style="width:52px;

height:52px;

border-radius:50%;

background:#2563eb;

color:white;

display:flex;

align-items:center;

justify-content:center;

font-weight:bold;

font-size:18px;">

{{ strtoupper(substr($application->user->name,0,1)) }}

</div>

<div class="ms-3">

<div class="fw-semibold">

{{ $application->user->name }}

</div>

<small class="text-secondary">

{{ $application->nim }}

</small>

</div>

</div>

</td>

<td>

{{ $application->program }}

</td>

<td>

<span class="badge bg-primary">

{{ $application->gpa }}

</span>

</td>

<td>

@if($application->status=='submitted')

<span class="badge bg-warning">

Menunggu

</span>

@elseif($application->status=='awarded')

<span class="badge bg-success">

Diterima

</span>

@else

<span class="badge bg-danger">

Ditolak

</span>

@endif

</td>

<td>

<div class="d-flex gap-2">

<a

href="/admin/verification/{{ $application->id }}"

class="btn btn-primary btn-sm rounded-pill">

<i class="bi bi-eye"></i>

Detail

</a>

<form

action="{{ route('applications.destroy',$application->id) }}"

method="POST">

@csrf

@method('DELETE')                            <button

                                onclick="return confirm('Yakin ingin menghapus data ini?')"

                                class="btn btn-danger btn-sm rounded-pill">

                                <i class="bi bi-trash"></i>

                            </button>

                        </form>

                    </div>

                </td>

            </tr>

            @endforeach

            </tbody>

        </table>

    </div>

</div>

@if($applications->count()==0)

<div class="card-custom mt-4 p-5 text-center">

    <i class="bi bi-inbox display-3 text-secondary"></i>

    <h4 class="mt-4">

        Belum Ada Data Pendaftar

    </h4>

    <p class="text-secondary">

        Semua data pendaftar akan muncul di halaman ini.

    </p>

</div>

@endif

<script>

document.getElementById('searchApplicant').addEventListener('keyup',function(){

let value=this.value.toLowerCase();

let rows=document.querySelectorAll('#applicantTable tbody tr');

rows.forEach(function(row){

row.style.display=row.innerText.toLowerCase().includes(value)?'':'none';

});

});

</script>

@endsection