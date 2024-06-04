@extends('layouts.master', ['title' => 'Daftar Lapangan'])
@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Daftar Lapangan</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item">Manajemen Lapangan</li>
                    <li class="breadcrumb-item active">Daftar Lapangan</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <br>
                            <a href="/lapangan/tambah" class="btn btn-success"><i class="bx bx-add-to-queue"></i>
                                Tambah Lapangan</a>
                            <br><br>
                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th>Nama Lapangan</th>
                                        <th>Harga PerJam</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($lapangan as $lap)
                                        <tr>
                                            <td>{{ $lap->nama_lapangan }}</td>
                                            <td>{{ $lap->harga_perjam }}</td>
                                            <td>
                                                <a href="/lapangan/edit/{{ $lap->id }}" class="btn btn-primary"> <i
                                                        class="bx bxs-edit">Edit</i></a>
                                                <form action="/lapangan/hapus/{{ $lap->id }}" method="POST"
                                                    style="display: inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger"
                                                        onclick="return confirm('Apakah Anda yakin ingin menghapus lapangan ini?')"><i
                                                        class="bx bxs-edit">Hapus</i></button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <!-- End Table with stripped rows -->

                        </div>
                    </div>

                </div>
            </div>
        </section>

    </main><!-- End #main -->
@endsection
