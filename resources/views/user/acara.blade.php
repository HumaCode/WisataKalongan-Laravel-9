@extends('layout.main')
@section('content')


<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center py-5">
        <h1 class="display-3 text-white mb-4 animated slideInDown">Event Acara</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                <li class="breadcrumb-item active" aria-current="page">Event</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->


<div class="untree_co-section">
    <div class="container">
        {{-- <div class="row justify-content-center text-center mb-5">
            <div class="col-lg-6">
                <h2 class="section-title text-center mb-3">Berbagai Event Menarik</h2>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there
                    live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics,
                    a large language ocean.</p>
            </div>
        </div> --}}


        <!-- Team Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                    <p class="fs-5 fw-bold text-primary">Event Acara</p>
                    <h1 class="display-5 mb-5">Beragam Event Menarik Pekalongan</h1>
                </div>
                <div class="row g-4">

                    @foreach ($event as $item)

                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="team-item rounded">
                            <img class="img-fluid" src="{{ url($item->gambar) }}" alt="">
                            <div class="team-text">
                                <h4 class="mb-0">{{ $item->nama }}</h4>
                                <p class="text-primary">{{ $item->alamat }}</p>
                                <div class="team-social d-flex">
                                    <a class="btn btn-square rounded-circle me-2"
                                        href="{{ route('acara.detail', $item->slug) }}"><i class="fa fa-link"></i></a>
                                    <a class="btn btn-square rounded-circle me-2" href=""><i
                                            class="fab fa-youtube"></i></a>
                                    <a class="btn btn-square rounded-circle me-2" href=""><i
                                            class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach


                </div>
            </div>
        </div>
        <!-- Team End -->

    </div>
</div>

@endsection