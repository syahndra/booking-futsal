@extends('layouts.master', ['title' => 'Tambah User'])
@section('content')
<main id="main" class="main">

    <div class="pagetitle">
        <h1>Tambah User</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item">Manajemen User</li>
                <li class="breadcrumb-item active">Tambah User</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        {{-- <h5 class="card-title">Form Pengajuan</h5> --}}
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Form Tambah User</h5>

                                @if ($errors->any())
                                <div>
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                                @endif
                                <form action="/users/proses_tambah" method="POST">
                                    @csrf
                                    <div class="row mb-3">
                                        <label for="nama_user" class="col-md-4 col-lg-3 col-form-label">Nama User</label>
                                        <div class="col-md-6 col-lg-6">
                                            <input name="nama_user" type="text" class="form-control"
                                                value="{{ old('nama_user') }}" required>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="username" class="col-md-4 col-lg-3 col-form-label">Username</label>
                                        <div class="col-md-6 col-lg-6">
                                            <input name="username" type="text" class="form-control"
                                                value="{{ old('username') }}" required>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="email" class="col-md-4 col-lg-3 col-form-label">Email</label>
                                        <div class="col-md-6 col-lg-6">
                                            <input name="email" type="text" class="form-control"
                                                value="{{ old('email') }}" required>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="password" class="col-md-4 col-lg-3 col-form-label">Password</label>
                                        <div class="col-md-6 col-lg-6">
                                            <input name="password" type="text" class="form-control" required>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="level" class="col-md-4 col-lg-3 col-form-label">Level</label>
                                        <div class="col-md-6 col-lg-6">
                                            <select name="level" id="level" class="form-select"
                                                aria-label="Default select example" required>
                                                <option selected>--Pilih Opsi--</option>
                                                <option value="admin">Admin</option>
                                                <option value="superadmin">Super Admin</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-primary"><i class="bi bi-save-fill"></i>
                                            Simpan</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

</main><!-- End #main -->
@endsection