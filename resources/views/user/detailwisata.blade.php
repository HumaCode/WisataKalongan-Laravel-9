@extends('layout.main')
@section('content')

<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center py-5">
        <h1 class="display-3 text-white mb-4 animated slideInDown">Detail Wisata</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                <li class="breadcrumb-item active" aria-current="page">Projects</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->

<div class="untree_co-section">
    <div class="container">
        <div class="row justify-content-between align-items-center">

            <div class="col-lg-6">
                <figure class="img-play-video">
                    <a id="play-video" class="video-play-button" href="https://www.youtube.com/watch?v=mwtbEGNABWU"
                        data-fancybox>
                        <span></span>
                    </a>
                    {{-- <h2 class="section-title text-left mb-4">PANTAI WONOKERTO</h2> --}}
                    <img src="assets/img/Pantai Wonokerto 2.jpg" alt="Image" class="img-fluid rounded-20">
                </figure>
            </div>

            <div class="col-lg-5">
                <h2 class="section-title text-left mb-4">PANTAI WONOKERTO</h2>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there
                    live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics,
                    a large language ocean.</p>

                <ul class="list-unstyled two-col clearfix">
                    <li>Nama Wisata &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </li>
                    <li>Alamat &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</li>
                    <li>Harga Tiket &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</li>
                    <li>Jam Operasional &nbsp;&nbsp;&nbsp;:</li>
                    <li>Lokasi &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</li>
                    <li>Railways &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</li>
                </ul>

                {{-- <p><a href="#" class="btn btn-primary">Pesan Tiket</a></p> --}}

            </div>

    <!-- Quote Start -->
    <div class="container-fluid quote my-5 py-5" data-parallax="scroll" data-image-src="assets/img/hutan.jpg">
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
                                    <label for="gname">Nama Lengkap</label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control bg-light border-0" id="gmail"
                                        placeholder="Gurdian Email">
                                    <label for="gmail">Email</label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control bg-light border-0" id="cname"
                                        placeholder="Child Name">
                                    <label for="cname">Nomor HP/WA</label>
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

        </div>
    </div>
</div>


@endsection

   