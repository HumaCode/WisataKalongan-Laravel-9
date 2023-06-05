
@extends('layout.main')
@section('content')

    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-3 text-white mb-4 animated slideInDown">Layanan Informasi</h1>
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


    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="fs-5 fw-bold text-primary">Layanan Kami</p>
                <h1 class="display-5 mb-5">Layanan Yang Kami Tawarkan Untuk Anda</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item rounded d-flex h-100">
                        <div class="service-img rounded">
                            <img class="img-fluid" src="assets/img/Pantai Wonokerto 2.jpg" alt="">
                        </div>
                        <div class="service-text rounded p-5">
                            <div class="btn-square rounded-circle mx-auto mb-3">
                                <img class="img-fluid" src="assets/img/icon/island.png" alt="Icon">
                            </div>
                            <h4 class="mb-3">Destinasi Wisata</h4>
                            <p class="mb-4">Pekalongan memiliki beberapa destinasi wisata menarik untuk dikunjungi dari
                                pantai hingga Pegunungan.</p>
                            <a class="btn btn-sm" href=""><i class="fa fa-plus text-primary me-2"></i>Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item rounded d-flex h-100">
                        <div class="service-img rounded">
                            <img class="img-fluid" src="assets/img/Museum Batik.jpg" alt="">
                        </div>
                        <div class="service-text rounded p-5">
                            <div class="btn-square rounded-circle mx-auto mb-3">
                                <img class="img-fluid" src="assets/img/icon/photography.png" alt="Icon">
                            </div>
                            <h4 class="mb-3">Cagar Budaya</h4>
                            <p class="mb-4">Pekalongan memiliki beberapa cagar budaya yang memiliki nilai sejarah dan
                                kebudayaan yang penting.</p>
                            <a class="btn btn-sm" href=""><i class="fa fa-plus text-primary me-2"></i>Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item rounded d-flex h-100">
                        <div class="service-img rounded">
                            <img class="img-fluid" src="assets/img/balon2.jpg" alt="">
                        </div>
                        <div class="service-text rounded p-5">
                            <div class="btn-square rounded-circle mx-auto mb-3">
                                <img class="img-fluid" src="assets/img/icon/hot-air-balloons.png" alt="Icon">
                            </div>
                            <h4 class="mb-3">Event Acara</h4>
                            <p class="mb-4">Sebagai kota yang aktif secara budaya dan sosial, Pekalongan sering
                                mengadakan berbagai acara dan event yang menarik.</p>
                            <a class="btn btn-sm" href=""><i class="fa fa-plus text-primary me-2"></i>Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item rounded d-flex h-100">
                        <div class="service-img rounded">
                            <img class="img-fluid" src="assets/img/Pasir kencana.jpg" alt="">
                        </div>
                        <div class="service-text rounded p-5">
                            <div class="btn-square rounded-circle mx-auto mb-3">
                                <img class="img-fluid" src="assets/img/icon/travel-guide.png" alt="Icon">
                            </div>
                            <h4 class="mb-3">Panduan Wisata</h4>
                            <p class="mb-4">Pastikan anda telah mempersiapkan segala kebutuhan seperti tiket
                                transportasi, akomodasi, dan transportasi.</p>
                            <a class="btn btn-sm" href=""><i class="fa fa-plus text-primary me-2"></i>Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item rounded d-flex h-100">
                        <div class="service-img rounded">
                            <img class="img-fluid" src="assets/img/Lolong 2.png" alt="">
                        </div>
                        <div class="service-text rounded p-5">
                            <div class="btn-square rounded-circle mx-auto mb-3">
                                <img class="img-fluid" src="assets/img/icon/flight.png" alt="Icon">
                            </div>
                            <h4 class="mb-3">Rencana Perjalanan</h4>
                            <p class="mb-4">Cek jadwal operasional tempat wisata yang ingin Anda kunjungi, serta
                                periksa apakah ada event khusus yang berlangsung.</p>
                            <a class="btn btn-sm" href=""><i class="fa fa-plus text-primary me-2"></i>Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item rounded d-flex h-100">
                        <div class="service-img rounded">
                            <img class="img-fluid" src="assets/img/Welo Asri 2.jpg" alt="">
                        </div>
                        <div class="service-text rounded p-5">
                            <div class="btn-square rounded-circle mx-auto mb-3">
                                <img class="img-fluid" src="assets/img/icon/tourist.png" alt="Icon">
                            </div>
                            <h4 class="mb-3">Informasi</h4>
                            <p class="mb-4">Segala bentuk informasi bisa anda dapatkan di website kami, website kami
                                selalu update informasi dalam satu hari 24 jam.</p>
                            <a class="btn btn-sm" href=""><i class="fa fa-plus text-primary me-2"></i>Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->

    @endsection