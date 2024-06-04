@extends('layouts.master', ['title' => 'Profil Developer'])
@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Profil</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item">Users</li>
                    <li class="breadcrumb-item active">Profil</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section profile">
            <div class="row">
                <div class="col-xl-4">

                    <div class="card">
                        <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

                            <img src="{{asset('template/img/profile-img.jpeg')}}" alt="Profile" class="rounded-circle">
                            <h2>M. Syahndra Ramadhan</h2>
                            <center><h3>Mahasiswa Politeknik Harapan Bersama</h3></center>                            
                            <div class="social-links mt-2">
                                <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                                <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-xl-8">

                    <div class="card">
                        <div class="card-body pt-3">
                            <div class="tab-content pt-2">
                                <div class="tab-pane fade show active profile-overview">
                                    <h5 class="card-title">Profile Details</h5>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label ">Nama Lengkap</div>
                                        <div class="col-lg-9 col-md-8">M. Syahndra Ramadhan</div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Nomor Induk Mahasiswa</div>
                                        <div class="col-lg-9 col-md-8">24094006</div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Tempat, Tanggal Lahir</div>
                                        <div class="col-lg-9 col-md-8">Indramayu, 19 Desember 1998</div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Program Studi/Jurusan</div>
                                        <div class="col-lg-9 col-md-8">D4 Teknik Informatika</div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Alamat</div>
                                        <div class="col-lg-9 col-md-8">Wisma Bhakti Praja No.12 Brebes</div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">No. Handphone</div>
                                        <div class="col-lg-9 col-md-8">083866097243</div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Email</div>
                                        <div class="col-lg-9 col-md-8">mohammadsyahndra@gmail.com</div>
                                    </div>

                                </div>

                            </div><!-- End Bordered Tabs -->

                        </div>
                    </div>

                </div>
            </div>
        </section>

    </main><!-- End #main -->
@endsection
