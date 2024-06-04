@extends('layouts.master', ['title' => 'Daftar User'])
@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Daftar User</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item">Manajemen User</li>
                    <li class="breadcrumb-item active">Daftar User</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <br>
                            <a href="/users/tambah" class="btn btn-success"><i class="bx bx-add-to-queue"></i>
                                Tambah User</a>
                            <br><br>
                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Username</th>
                                        <th>Level</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
                                        <tr>
                                            <td>{{ $user->nama_user }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>{{ $user->username }}</td>
                                            <td>{{ $user->level }}</td>
                                            <td>
                                                <a href="/users/edit/{{ $user->id }}" class="btn btn-primary"> <i
                                                        class="bx bxs-edit">Edit</i></a>
                                                <form action="/users/hapus/{{ $user->id }}" method="POST"
                                                    style="display: inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger"
                                                        onclick="return confirm('Apakah Anda yakin ingin menghapus user ini?')"><i
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
