@extends('layouts.master', ['title' => 'Edit Lapangan'])
@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Edit Lapangan</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item">Manajemen Lapangan</li>
                    <li class="breadcrumb-item active">Edit Lapangan</li>
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
                                    <h5 class="card-title">Form Edit Lapangan</h5>

                                    @if ($errors->any())
                                        <div>
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                    <form action="/lapangan/update/{{$lapangan->id}}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <div class="row mb-3">
                                            <label for="nama_lapangan" class="col-md-4 col-lg-3 col-form-label">Nama</label>
                                            <div class="col-md-6 col-lg-6">
                                                <input name="nama_lapangan" type="text" class="form-control"
                                                    value="{{ old('nama_lapangan', $lapangan->nama_lapangan) }}" required>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="harga_perjam" class="col-md-4 col-lg-3 col-form-label">Harga Perjam</label>
                                            <div class="col-md-6 col-lg-6">
                                                <input name="harga_perjam" type="text" class="form-control"
                                                    value="{{ old('harga_perjam', $lapangan->harga_perjam) }}" required>
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
