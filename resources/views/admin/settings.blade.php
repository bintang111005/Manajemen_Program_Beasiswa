@extends('layouts.admin')

@section('title', 'Pengaturan')

@section('content')

<form action="{{ route('admin.settings.update') }}" method="POST">
    @csrf
    @method('PUT')

    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2 class="fw-bold">
                Pengaturan
            </h2>
            <p class="text-secondary mb-0">
                Kelola informasi administrator dan akun Anda.
            </p>
        </div>
        <button type="submit" class="btn btn-primary rounded-pill px-4">
            <i class="bi bi-floppy me-2"></i>
            Simpan Perubahan
        </button>
    </div>

    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show mb-4" role="alert">
            <i class="bi bi-check-circle me-2"></i> {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    @if($errors->any())
        <div class="alert alert-danger mb-4">
            <ul class="mb-0">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="row g-4">
        <!-- Avatar Section -->
        <div class="col-lg-4">
            <div class="card-custom p-4 text-center h-100">
                <div style="width:100px; height:100px; border-radius:50%; background:#008080; color:white; display:flex; align-items:center; justify-content:center; font-size:40px; font-weight:bold; margin:auto;">
                    {{ strtoupper(substr($admin->name, 0, 1)) }}
                </div>
                <h4 class="mt-4">{{ $admin->name }}</h4>
                <p class="text-secondary">Administrator</p>
            </div>
        </div>

        <!-- Informasi Admin -->
        <div class="col-lg-8">
            <div class="card-custom p-4 h-100">
                <h5 class="fw-bold mb-4">
                    <i class="bi bi-person-fill text-primary me-2"></i> Informasi Akun
                </h5>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Nama</label>
                        <input type="text" name="name" class="form-control" value="{{ old('name', $admin->name) }}" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Email / Username</label>
                        <input type="email" name="email" class="form-control" value="{{ old('email', $admin->email) }}" required>
                    </div>
                </div>

                <hr class="my-4 text-secondary">

                <h5 class="fw-bold mb-4">
                    <i class="bi bi-shield-lock-fill text-success me-2"></i> Keamanan (Opsional)
                </h5>
                <p class="text-secondary small mb-3">Biarkan kosong jika tidak ingin mengubah password.</p>
                
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Password Baru</label>
                        <input type="password" name="password" class="form-control" placeholder="********">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Role</label>
                        <input type="text" class="form-control" value="Administrator" readonly disabled>
                    </div>
                </div>

            </div>
        </div>
    </div>
</form>

@endsection
