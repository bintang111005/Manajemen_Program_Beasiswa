@extends('layouts.app')

@section('content')

<h2 class="mb-4">

Tambah Beasiswa

</h2>

<form
action="{{ route('scholarships.store') }}"
method="POST">

@csrf

<div class="mb-3">

<label>

Nama Beasiswa

</label>

<input
type="text"
name="name"
class="form-control"
required>

</div>

<div class="mb-3">

<label>

Provider

</label>

<input
type="text"
name="provider"
class="form-control"
required>

</div>

<div class="mb-3">

<label>

Dana Per Bulan

</label>

<input
type="number"
name="amount_monthly"
class="form-control">

</div>

<div class="mb-3">

<label>

Deadline

</label>

<input
type="date"
name="deadline"
class="form-control"
required>

</div>

<div class="mb-3">

<label>

Kuota

</label>

<input
type="number"
name="quota"
class="form-control"
required>

</div>

<div class="mb-3">

<label>

Deskripsi

</label>

<textarea
name="description"
rows="4"
class="form-control">
</textarea>

</div>

<div class="mb-3">

<label>

Status

</label>

<select
name="status"
class="form-select">

<option value="open">

Open

</option>

<option value="closed">

Closed

</option>

<option value="completed">

Completed

</option>

</select>

</div>

<button
class="btn btn-primary">

Simpan

</button>

<a
href="{{ route('scholarships.index') }}"
class="btn btn-secondary">

Kembali

</a>

</form>

@endsection