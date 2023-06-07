
@extends('layout.main')
@section('content')

    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-3 text-white mb-4 animated slideInDown">Cagar Budaya</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Services</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Features Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <p class="fs-5 fw-bold text-primary">Cagar Budaya</p>
                    <h1 class="display-5 mb-4">Cagar Budaya Yang Ada di Pekalongan</h1>
                    <p class="mb-4">
                        Pekalongan memiliki beberapa cagar budaya yang dapat dikunjungi oleh para wisatawan yang tertarik dengan 
                        sejarah dan kekayaan budaya daerah. Berikut adalah beberapa contoh cagar budaya di Pekalongan
                    </p>
                    <a class="btn btn-primary py-3 px-4">Yuk Jelajahi Bersama</a>
                </div>
                <div class="col-lg-6">
                    <div class="row g-4 align-items-center">
                        <div class="col-md-6">
                            <div class="row g-4">
                                <div class="col-12 wow fadeIn" data-wow-delay="0.3s">
                                    <div class="text-center rounded py-5 px-4" style="box-shadow: 0 0 45px rgba(0,0,0,.08);">
                                        <div class="btn-square bg-light rounded-circle mx-auto mb-4" style="width: 90px; height: 90px;">
                                            <i class="fa fa-mosque fa-3x text-primary"></i>
                                        </div>
                                        <h4 class="mb-0">Muslim</h4>
                                    </div>
                                </div>
                                <div class="col-12 wow fadeIn" data-wow-delay="0.5s">
                                    <div class="text-center rounded py-5 px-4" style="box-shadow: 0 0 45px rgba(0,0,0,.08);">
                                        <div class="btn-square bg-light rounded-circle mx-auto mb-4" style="width: 90px; height: 90px;">
                                            <i class="fa fa-church fa-3x text-primary"></i>
                                        </div>
                                        <h4 class="mb-0">Katolik</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 wow fadeIn" data-wow-delay="0.7s">
                            <div class="text-center rounded py-5 px-4" style="box-shadow: 0 0 45px rgba(0,0,0,.08);">
                                <div class="btn-square bg-light rounded-circle mx-auto mb-4" style="width: 90px; height: 90px;">
                                    <i class="fa fa-torii-gate fa-3x text-primary"></i>
                                </div>
                                <h4 class="mb-0">Tionghoa</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->


     <!-- Team Start -->
     <div class="container-xxl py-5">
        <div class="container">
            {{-- <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="fs-5 fw-bold text-primary">Event Acara</p>
                <h1 class="display-5 mb-5">Cagar Budaya Terpopuler</h1>
            </div> --}}
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item rounded">
                        <img class="img-fluid" src="assets/img/balon2.jpg" alt="">
                        <div class="team-text">
                            <h4 class="mb-0">Balon Udara</h4>
                            <p class="text-primary">Kota Pekalongan</p>
                            <div class="team-social d-flex">
                                <a class="btn btn-square rounded-circle me-2" href=""><i class="fa fa-link"></i></a>
                                <a class="btn btn-square rounded-circle me-2" href=""><i class="fab fa-youtube"></i></a>
                                <a class="btn btn-square rounded-circle me-2" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item rounded">
                        <img class="img-fluid" src="assets/img/pekanraya.jpg" alt="">
                        <div class="team-text">
                            <h4 class="mb-0">Pekan Raya</h4>
                            <p class="text-primary">Alun-alun Mataram</p>
                            <div class="team-social d-flex">
                                <a class="btn btn-square rounded-circle me-2" href=""><i class="fa fa-link"></i></a>
                                <a class="btn btn-square rounded-circle me-2" href=""><i class="fab fa-youtube"></i></a>
                                <a class="btn btn-square rounded-circle me-2" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item rounded">
                        <img class="img-fluid" src="assets/img/musik.jpg" alt="">
                        <div class="team-text">
                            <h4 class="mb-0">Konser Musik</h4>
                            <p class="text-primary">Kota Pekalongan</p>
                            <div class="team-social d-flex">
                                <a class="btn btn-square rounded-circle me-2" href=""><i class="fa fa-link"></i></a>
                                <a class="btn btn-square rounded-circle me-2" href=""><i class="fab fa-youtube"></i></a>
                                <a class="btn btn-square rounded-circle me-2" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- Team End -->

    @endsection