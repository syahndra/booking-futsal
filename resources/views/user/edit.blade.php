@extends('layouts.master', ['title' => 'Edit User'])
@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Edit User</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item">Manajemen User</li>
                    <li class="breadcrumb-item active">Edit User</li>
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
                                    <h5 class="card-title">Form Edit User</h5>

                                    @if ($errors->any())
                                        <div>
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                    <form action="/users/update/{{$user->id}}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <div class="row mb-3">
                                            <label for="nama_user" class="col-md-4 col-lg-3 col-form-label">Nama</label>
                                            <div class="col-md-6 col-lg-6">
                                                <input name="nama_user" type="text" class="form-control"
                                                    value="{{ old('nama_user', $user->nama_user) }}" required>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="username" class="col-md-4 col-lg-3 col-form-label">Username</label>
                                            <div class="col-md-6 col-lg-6">
                                                <input name="username" type="text" class="form-control"
                                                    value="{{ old('username', $user->username) }}" required>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="email" class="col-md-4 col-lg-3 col-form-label">Email</label>
                                            <div class="col-md-6 col-lg-6">
                                                <input name="email" type="text" class="form-control"
                                                    value="{{ old('email', $user->email) }}" required>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="password" class="col-md-4 col-lg-3 col-form-label">Password-isi jika ingin mengubah</label>
                                            <div class="col-md-6 col-lg-6">
                                                <input name="password" type="text" class="form-control">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="level" class="col-md-4 col-lg-3 col-form-label">Level</label>
                                            <div class="col-md-6 col-lg-6">
                                                <select name="level" id="level" class="form-select"
                                                    aria-label="Default select example">
                                                    <option value="admin" {{ $user->level == 'admin' ? 'selected' : '' }}>
                                                        Admin</option>
                                                    <option value="superadmin"
                                                        {{ $user->level == 'superadmin' ? 'selected' : '' }}>Super Admin
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary"><i class="bi bi-save-fill"></i>
                                                Simpan Perubahan</button>
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
