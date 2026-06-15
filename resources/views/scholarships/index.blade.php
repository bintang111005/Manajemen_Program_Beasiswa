@extends('layouts.app')

@section('content')

<div class="d-flex justify-content-between mb-4">

<h2>Data Beasiswa</h2>

<a
href="{{ route('scholarships.create') }}"
class="btn btn-success">

Tambah Beasiswa

</a>

</div>

<table class="table table-bordered">

<thead class="table-primary">

<tr>

<th>No</th>
<th>Nama</th>
<th>Provider</th>
<th>Kuota</th>
<th>Status</th>
<th>Aksi</th>

</tr>

</thead>

<tbody>

@forelse($scholarships as $item)

<tr>

<td>

{{ $loop->iteration }}

</td>

<td>

{{ $item->name }}

</td>

<td>

{{ $item->provider }}

</td>

<td>

{{ $item->quota }}

</td>

<td>

{{ ucfirst($item->status) }}

</td>

<td>

<a
href="{{ route('scholarships.show',$item->id) }}"
class="btn btn-info btn-sm">

Detail

</a>

<a
href="{{ route('scholarships.edit',$item->id) }}"
class="btn btn-warning btn-sm">

Edit

</a>

<form
action="{{ route('scholarships.destroy',$item->id) }}"
method="POST"
class="d-inline">

@csrf

@method('DELETE')

<button
class="btn btn-danger btn-sm">

Hapus

</button>

</form>

</td>

</tr>

@empty

<tr>

<td
colspan="6"
class="text-center">

Belum ada data

</td>

</tr>

@endforelse

</tbody>

</table>

@endsection