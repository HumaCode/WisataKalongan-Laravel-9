@extends('layout.main')
@section('content')

<!-- Carousel Start -->

<div class="container-fluid p-0 wow fadeIn" data-wow-delay="0.1s">
    <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="w-100" src="assets/img/Black Canyon.jpg" alt="Image">
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <h1 class="display-1 text-white mb-5 animated slideInDown">Jelajahi Destinasi Wisata
                                    Pekalongan</h1>
                                <a href="" class="btn btn-primary py-sm-3 px-sm-4">Explore More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="w-100" src="assets/img/batik.jpg" alt="Image">
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <h1 class="display-1 text-white mb-5 animated slideInDown">Beragam Budaya & Event
                                    Menarik</h1>
                                <a href="" class="btn btn-primary py-sm-3 px-sm-4">Explore More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
<!-- Carousel End -->


<!-- Top Feature Start -->
<div class="container-fluid top-feature py-5 pt-lg-0">
    <div class="container py-5 pt-lg-0">
        <div class="row gx-0">
            <div class="col-lg-4 wow fadeIn" data-wow-delay="0.1s">
                <div class="bg-white shadow d-flex align-items-center h-100 px-5" style="min-height: 160px;">
                    <div class="d-flex">
                        <div class="flex-shrink-0 btn-lg-square rounded-circle bg-light">
                            <i class="fa fa-calendar text-primary"></i>
                        </div>
                        <div class="ps-3">
                            <h4>Jadwal Event</h4>
                            <span>Jadwal event terbaru hanya ada di website kami</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 wow fadeIn" data-wow-delay="0.3s">
                <div class="bg-white shadow d-flex align-items-center h-100 px-5" style="min-height: 160px;">
                    <div class="d-flex">
                        <div class="flex-shrink-0 btn-lg-square rounded-circle bg-light">
                            <i class="fa fa-users text-primary"></i>
                        </div>
                        <div class="ps-3">
                            <h4>Tim</h4>
                            <span>Tim kami siap membantu anda jika ada kendala</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 wow fadeIn" data-wow-delay="0.5s">
                <div class="bg-white shadow d-flex align-items-center h-100 px-5" style="min-height: 160px;">
                    <div class="d-flex">
                        <div class="flex-shrink-0 btn-lg-square rounded-circle bg-light">
                            <i class="fa fa-phone text-primary"></i>
                        </div>
                        <div class="ps-3">
                            <h4>Tersedia 24/7</h4>
                            <span>Layanan kami terbaik dan tersedia 24 jam untuk anda</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Top Feature End -->


<!-- About Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5 align-items-end">
            <div class="col-lg-3 col-md-5 wow fadeInUp" data-wow-delay="0.1s">
                <img class="img-fluid rounded" data-wow-delay="0.1s" src="assets/img/curug.jpg">
            </div>
            <div class="col-lg-6 col-md-7 wow fadeInUp" data-wow-delay="0.3s">
                <h1 class="display-1 text-primary mb-0">20</h1>
                <p class="text-primary mb-4">Wisata Alam</p>
                <h1 class="display-5 mb-4">Mengapa berkunjung ke Pekalongan</h1>
                <p class="mb-4">
                    Pekalongan juga menawarkan keindahan alam yang menarik. Anda juga dapat menikmati pemandangan
                    indah di Curug Bajing, Curug Muncar, Curug Cinde dan masih banyak lagi.
                </p>
                <a class="btn btn-primary py-3 px-4" href="">Explore More</a>
            </div>
            <div class="col-lg-3 col-md-12 wow fadeInUp" data-wow-delay="0.5s">
                <div class="row g-5">
                    <div class="col-12 col-sm-6 col-lg-12">
                        <div class="border-start ps-4">
                            <i class="fa fa-award fa-3x text-primary mb-3"></i>
                            <h4 class="mb-3">Penghargaan</h4>
                            <span>Pekalongan telah diakui sebagai salah satu kota pariwisata di Indonesia.
                            </span>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-12">
                        <div class="border-start ps-4">
                            <i class="fa fa-city fa-3x text-primary mb-3"></i>
                            <h4 class="mb-3">Pekalongan</h4>
                            <span>Mendapatkan penghargaan sebagai Kota Layak Huni dari Kementerian
                                Pekerjaan Umum dan Perumahan Rakyat Republik Indonesia</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->


<!-- Facts Start -->
<div class="container-fluid facts my-5 py-5" data-parallax="scroll" data-image-src="assets/img/Telaga Mangunan 2.jpg">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-sm-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.1s">
                <h1 class="display-4 text-white" data-toggle="counter-up">335</h1>
                <span class="fs-5 fw-semi-bold text-light">Pengunjung</span>
            </div>
            <div class="col-sm-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.3s">
                <h1 class="display-4 text-white" data-toggle="counter-up">20</h1>
                <span class="fs-5 fw-semi-bold text-light">Wisata Alam</span>
            </div>
            <div class="col-sm-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.5s">
                <h1 class="display-4 text-white" data-toggle="counter-up">1</h1>
                <span class="fs-5 fw-semi-bold text-light">Unesco</span>
            </div>
            <div class="col-sm-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.7s">
                <h1 class="display-4 text-white" data-toggle="counter-up">10</h1>
                <span class="fs-5 fw-semi-bold text-light">Penghargaan</span>
            </div>
        </div>
    </div>
</div>
<!-- Facts End -->


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
                        {{-- <a class="btn btn-sm" href=""><i class="fa fa-plus text-primary me-2"></i>Read More</a>
                        --}}
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
                        {{-- <a class="btn btn-sm" href=""><i class="fa fa-plus text-primary me-2"></i>Read More</a>
                        --}}
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
                        {{-- <a class="btn btn-sm" href=""><i class="fa fa-plus text-primary me-2"></i>Read More</a>
                        --}}
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
                        {{-- <a class="btn btn-sm" href=""><i class="fa fa-plus text-primary me-2"></i>Read More</a>
                        --}}
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
                        {{-- <a class="btn btn-sm" href=""><i class="fa fa-plus text-primary me-2"></i>Read More</a>
                        --}}
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
                        {{-- <a class="btn btn-sm" href=""><i class="fa fa-plus text-primary me-2"></i>Read More</a>
                        --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Service End -->


<!-- Quote Start -->
<div class="container-fluid quote my-5 py-5" data-parallax="scroll" data-image-src="assets/img/Telaga Rawa Jaya.jpg">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="bg-white rounded p-4 p-sm-5 wow fadeIn" data-wow-delay="0.5s">
                    <h1 class="display-5 text-center mb-5">Dapatkan Tiket</h1>
                    <div class="row g-3">
                        <div class="col-sm-6">
                            <div class="form-floating">
                                <input type="text" class="form-control bg-light border-0" id="gname"
                                    placeholder="Gurdian Name">
                                <label for="gname">Your Name</label>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-floating">
                                <input type="email" class="form-control bg-light border-0" id="gmail"
                                    placeholder="Gurdian Email">
                                <label for="gmail">Your Email</label>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-floating">
                                <input type="text" class="form-control bg-light border-0" id="cname"
                                    placeholder="Child Name">
                                <label for="cname">Your Mobile</label>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-floating">
                                <input type="text" class="form-control bg-light border-0" id="cage"
                                    placeholder="Child Age">
                                <label for="cage">Service Type</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <textarea class="form-control bg-light border-0" placeholder="Leave a message here"
                                    id="message" style="height: 100px"></textarea>
                                <label for="message">Message</label>
                            </div>
                        </div>
                        <div class="col-12 text-center">
                            <button class="btn btn-primary py-3 px-4" type="submit">Pesan Sekarang</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Quote End -->


<!-- Projects Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <p class="fs-5 fw-bold text-primary">Obyek Wisata</p>
            <h1 class="display-5 mb-5">Beberapa Wisata Yang Terpopuler</h1>
        </div>
        <div class="row wow fadeInUp" data-wow-delay="0.3s">
            <div class="col-12 text-center">
                <ul class="list-inline rounded mb-5" id="portfolio-flters">
                    <li class="mx-2 active" data-filter="*">Semua</li>
                    <li class="mx-2" data-filter=".first">Pegunungan</li>
                    <li class="mx-2" data-filter=".second">Wisata Air</li>
                </ul>
            </div>
        </div>
        <div class="row g-4 portfolio-container">
            <div class="col-lg-4 col-md-6 portfolio-item first wow fadeInUp" data-wow-delay="0.1s">
                <div class="portfolio-inner rounded">
                    <img class="img-fluid" src="assets/img/Pantai Wonokerto 2.jpg" alt="">
                    <div class="portfolio-text">
                        <h4 class="text-white mb-4">Pantai Wonokerto</h4>
                        <div class="d-flex">
                            <a class="btn btn-lg-square rounded-circle mx-2" href="assets/img/Pantai Wonokerto 2.jpg"
                                data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square rounded-circle mx-2" href=""><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item second wow fadeInUp" data-wow-delay="0.3s">
                <div class="portfolio-inner rounded">
                    <img class="img-fluid" src="assets/img/Pantai Krematorium Pekalongan.jpg" alt="">
                    <div class="portfolio-text">
                        <h4 class="text-white mb-4">Pantai Krematorium</h4>
                        <div class="d-flex">
                            <a class="btn btn-lg-square rounded-circle mx-2"
                                href="assets/img/Pantai Krematorium Pekalongan.jpg" data-lightbox="portfolio"><i
                                    class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square rounded-circle mx-2" href=""><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item first wow fadeInUp" data-wow-delay="0.5s">
                <div class="portfolio-inner rounded">
                    <img class="img-fluid" src="assets/img/Pantai pasir kencana.jpg" alt="">
                    <div class="portfolio-text">
                        <h4 class="text-white mb-4">Pantai Pasir Kencana</h4>
                        <div class="d-flex">
                            <a class="btn btn-lg-square rounded-circle mx-2"
                                href="assets/assets/img/Pantai pasir kencana.jpg" data-lightbox="portfolio"><i
                                    class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square rounded-circle mx-2" href=""><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item second wow fadeInUp" data-wow-delay="0.1s">
                <div class="portfolio-inner rounded">
                    <img class="img-fluid" src="assets/img/Black Canyon.jpg" alt="">
                    <div class="portfolio-text">
                        <h4 class="text-white mb-4">Black Canyon</h4>
                        <div class="d-flex">
                            <a class="btn btn-lg-square rounded-circle mx-2" href="assets/img/Black Canyon.jpg"
                                data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square rounded-circle mx-2" href=""><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item first wow fadeInUp" data-wow-delay="0.3s">
                <div class="portfolio-inner rounded">
                    <img class="img-fluid" src="assets/img/Bukit Pawuluhan.jpg" alt="">
                    <div class="portfolio-text">
                        <h4 class="text-white mb-4">Bukit Pawuluhan</h4>
                        <div class="d-flex">
                            <a class="btn btn-lg-square rounded-circle mx-2" href="assets/img/Bukit Pawuluhan.jpg"
                                data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square rounded-circle mx-2" href=""><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item second wow fadeInUp" data-wow-delay="0.5s">
                <div class="portfolio-inner rounded">
                    <img class="img-fluid" src="assets/img/Curug Madu.jpg" alt="">
                    <div class="portfolio-text">
                        <h4 class="text-white mb-4">Curug Madu</h4>
                        <div class="d-flex">
                            <a class="btn btn-lg-square rounded-circle mx-2" href="assets/img/Curug Madu.jpg"
                                data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square rounded-circle mx-2" href=""><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Projects End -->


<!-- Testimonial Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-5 wow fadeInUp" data-wow-delay="0.1s">
                <p class="fs-5 fw-bold text-primary">Testimonial</p>
                <h1 class="display-5 mb-5">Testimonial Dari Klien Kami!</h1>
                <p class="mb-4">Testimonial ini dapat memberikan gambaran positif kepada calon pengunjung tentang
                    pengalaman orang lain yang telah mengunjungi tempat wisata tersebut.</p>
                <a class="btn btn-primary py-3 px-4" href="">See More</a>
            </div>
            <div class="col-lg-7 wow fadeInUp" data-wow-delay="0.5s">
                <div class="owl-carousel testimonial-carousel">
                    <div class="testimonial-item">
                        <img class="img-fluid rounded mb-3" src="assets/img/fotoprofil1.jpg" alt="">
                        <p class="fs-6">
                            Saya telah mencoba berbagai kegiatan menantang seperti hiking, menyelam,
                            dan menyusuri sungai. Tim instruktur yang berpengalaman
                            dan fasilitas yang baik membuat pengalaman saya menjadi luar biasa.
                        </p>
                        <h4>Sarah Aprilia</h4>
                        <span>Selebgram</span>
                    </div>
                    <div class="testimonial-item">
                        <img class="img-fluid rounded mb-3" src="assets/img/fotoprofil2.jpg" alt="">
                        <p class="fs-6">"Mereka sangat perhatian dan membantu dalam mengatur perjalanan saya.
                            Saya merasa aman dan nyaman selama perjalanan, dan mereka memberikan pengalaman yang tak
                            terlupakan.
                        </p>
                        <h4>Anwar Ibrahim</h4>
                        <span>Brand Ambasador</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>
<!-- Testimonial End -->
@endsection