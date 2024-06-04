@extends('layouts.master', ['title' => 'Tambah Booking'])
@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Tambah Booking</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item">Manajemen Booking</li>
                    <li class="breadcrumb-item active">Tambah Booking</li>
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
                                    <h5 class="card-title">Form Tambah Booking</h5>

                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif

                                    <form action="/booking/proses_tambah" method="POST">
                                        @csrf
                                        <div class="row mb-3">
                                            <label for="users_id" class="col-md-4 col-lg-3 col-form-label">Petugas</label>
                                            <div class="col-md-6 col-lg-6">
                                                <input type="text" class="form-control"
                                                    value="{{ Auth::user()->nama_user }}" disabled>
                                                <input type="text" name="users_id" id="users_id" class="form-control"
                                                    value="{{ Auth::user()->id }}" hidden>
                                                {{-- <select name="users_id" id="users_id" class="form-control" required>
                                                    <option selected disabled>--Pilih Opsi--</option>
                                                    @foreach ($users as $user)
                                                        <option value="{{ $user->id }}">{{ $user->nama_user }}</option>
                                                    @endforeach
                                                </select> --}}
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="lapangan_id"
                                                class="col-md-4 col-lg-3 col-form-label">Lapangan</label>
                                            <div class="col-md-6 col-lg-6">
                                                <select name="lapangan_id" id="lapangan_id" class="form-control" required>
                                                    <option selected disabled>--Pilih Opsi--</option>
                                                    @foreach ($lapangans as $lapangan)
                                                        <option value="{{ $lapangan->id }}">{{ $lapangan->nama_lapangan }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="waktu_booking" class="col-md-4 col-lg-3 col-form-label">Waktu
                                                Booking</label>
                                            <div class="col-md-6 col-lg-6">
                                                <input type="datetime-local" name="waktu_booking" id="waktu_booking"
                                                    class="form-control" required>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="jam_booking" class="col-md-4 col-lg-3 col-form-label">Jam
                                                Bermain</label>
                                            <div class="col-md-6 col-lg-6">
                                                <input type="number" name="jam_booking" id="jam_booking"
                                                    class="form-control" required>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="bayar" class="col-md-4 col-lg-3 col-form-label">Bayar</label>
                                            <div class="col-md-6 col-lg-6">
                                                <input type="number" name="bayar" id="bayar" class="form-control"
                                                    required>
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
