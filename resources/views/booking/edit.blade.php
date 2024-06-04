@extends('layouts.master', ['title' => 'Edit Booking'])
@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Edit Booking</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item">Manajemen Booking</li>
                    <li class="breadcrumb-item active">Edit Booking</li>
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
                                    <h5 class="card-title">Form Edit Booking</h5>

                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif

                                    <form action="/booking/update/{{ $booking->id }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <div class="row mb-3">
                                            <label for="users_id" class="col-md-4 col-lg-3 col-form-label">User</label>
                                            <div class="col-md-6 col-lg-6">
                                                <input type="text" class="form-control"
                                                    value="{{ Auth::user()->nama_user }}" disabled>
                                                <input type="text" name="users_id" id="users_id" class="form-control"
                                                    value="{{ Auth::user()->id }}" hidden>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="lapangan_id"
                                                class="col-md-4 col-lg-3 col-form-label">Lapangan</label>
                                            <div class="col-md-6 col-lg-6">
                                                <select name="lapangan_id" id="lapangan_id" class="form-control" required>
                                                    @foreach ($lapangans as $lapangan)
                                                        <option value="{{ $lapangan->id }}"
                                                            {{ $booking->lapangan_id == $lapangan->id ? 'selected' : '' }}>
                                                            {{ $lapangan->nama_lapangan }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="waktu_booking" class="col-md-4 col-lg-3 col-form-label">Waktu
                                                Booking</label>
                                            <div class="col-md-6 col-lg-6">
                                                <input type="datetime-local" name="waktu_booking" id="waktu_booking"
                                                    class="form-control"
                                                    value="{{ date('Y-m-d\TH:i', strtotime($booking->waktu_booking)) }}"
                                                    required>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="jam_booking" class="col-md-4 col-lg-3 col-form-label">Jam
                                                Bermain</label>
                                            <div class="col-md-6 col-lg-6">
                                                <input type="number" name="jam_booking" id="jam_booking"
                                                    class="form-control" value="{{ $booking->jam_booking }}" required>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="bayar" class="col-md-4 col-lg-3 col-form-label">Bayar</label>
                                            <div class="col-md-6 col-lg-6">
                                                <input type="number" name="bayar" id="bayar" class="form-control"
                                                    value="{{ $booking->bayar }}" required>
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
