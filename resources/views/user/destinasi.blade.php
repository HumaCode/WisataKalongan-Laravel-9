@extends('layout.main')
@section('content')

<style>
    .h-search-form {
        width: 100%;
        position: relative;
    }

    .h-search-form input {
        width: 100%;
        padding: 0 30px;
        border-radius: 50px;
        border: 3px solid #348E38;
        font-weight: 600;
        font-size: 16px;
        text-transform: capitalize;
        color: #333;
        height: 70px;
    }

    .h-search-form button {
        position: absolute;
        right: 6px;
        height: 60px;
        border: none;
        color: #fff;
        background: #348E38;
        top: 5px;
        border-radius: 50px;
        width: 100px;
    }

    .h-search-form button:hover {
        background: #072A19;
    }
</style>

<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center py-5">
        <h1 class="display-3 text-white mb-4 animated slideInDown">Destinasi Wisata</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                <li class="breadcrumb-item active" aria-current="page">Destinasi</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->


<!-- Projects Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <p class="fs-5 fw-bold text-primary">Obyek Wisata</p>
            <h1 class="display-5 mb-5">Beberapa Wisata Yang Terpopuler</h1>
        </div>
        <div class="row wow fadeInUp" data-wow-delay="0.3s">
            <div class="col-12 text-center mb-4">
                {{-- <ul class="list-inline rounded mb-5" id="portfolio-flters">
                    <li class="mx-2 active" data-filter="*">Semua</li>
                    <li class="mx-2" data-filter=".first">Pegunungan</li>
                    <li class="mx-2" data-filter=".second">Wisata Air</li>
                </ul> --}}

                <div class="h-search-form">
                    <form action="{{ route('destinasiwisata') }}" method="get">
                        <input type="text" name="q" value="{{ request('q') }}" placeholder="Cari Destinasi Disini..">
                        <button><i class="fas fa-search"></i></button>
                    </form>
                </div>


            </div>
        </div>

        <div class="row g-4 portfolio-container mt-2">

            @foreach ($destinasi as $item)

            <div class="col-lg-4 col-md-6 portfolio-item first wow fadeInUp" data-wow-delay="0.1s">
                <div class="portfolio-inner rounded">
                    <img class="img-fluid" src="{{ url($item->gambar) }}" alt="">
                    <div class="portfolio-text">
                        <h4 class="text-white mb-4">{{ $item->nama }}</h4>
                        <div class="d-flex">
                            <a class="btn btn-lg-square rounded-circle mx-2" href="{{ url($item->gambar) }}"
                                data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square rounded-circle mx-2"
                                href="{{ route('detail.wisata', $item->slug) }}" class="nav-item nav-link 
                            {{ ($title == 'Destinasi Wisata') ? 'active' : '' }}"><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            @endforeach




        </div>
    </div>
</div>
<!-- Projects End -->


@endsection