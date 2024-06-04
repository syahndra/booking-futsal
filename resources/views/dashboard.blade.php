@extends('layouts.master', ['title' => 'Dashboard'])
@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Dashboard</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section dashboard">
            <div class="row">

                <!-- Left side columns -->
                <div class="col-lg-12">
                    <div class="row">

                        <div class="col-lg-12">

                            <div class="card">
                              <div class="card-body">
                                <h5 class="card-title">Selamat Datang</h5>
                                <p>Di Dashboard Aplikasi Booking Futsal</p>
                              </div>
                            </div>
                  
                          </div>
                        
                    </div>
                </div><!-- End Left side columns -->

            </div>
        </section>

    </main><!-- End #main -->
@endsection
