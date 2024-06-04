@extends('layouts.master', ['title' => 'Daftar Booking'])
@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Daftar Booking</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item">Manajemen Booking</li>
                    <li class="breadcrumb-item active">Daftar Booking</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <br>
                            <a href="/booking/tambah" class="btn btn-success"><i class="bx bx-add-to-queue"></i>
                                Tambah Booking</a>
                            <br><br>
                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th>User</th>
                                        <th>Lapangan</th>
                                        <th>Waktu Booking</th>
                                        <th>Jam Bermain</th>
                                        <th>Harga Perjam</th>
                                        <th>Total</th>
                                        <th>Bayar</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($bookings as $booking)
                                        <tr>
                                            <td>{{ $booking->users->nama_user }}</td>
                                            <td>{{ $booking->lapangan->nama_lapangan }}</td>
                                            <td>{{ $booking->waktu_booking }}</td>
                                            <td>{{ $booking->jam_booking }}</td>
                                            <td>{{ $booking->lapangan->harga_perjam }}</td>
                                            <td>{{ $booking->total }}</td>
                                            <td>{{ $booking->bayar }}</td>
                                            <td>
                                                <a href="/booking/edit/{{ $booking->id }}" class="btn btn-primary"> <i
                                                        class="bx bxs-edit">Edit</i></a>
                                                <form action="/booking/hapus/{{ $booking->id }}" method="POST"
                                                    style="display: inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger"
                                                        onclick="return confirm('Apakah Anda yakin ingin menghapus booking ini?')"><i
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
