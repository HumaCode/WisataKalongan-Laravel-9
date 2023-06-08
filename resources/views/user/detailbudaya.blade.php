@extends('layout.main')
@section('content')

<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center py-5">
        <h1 class="display-3 text-white mb-4 animated slideInDown">Detail Cagar Budaya</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                <li class="breadcrumb-item active" aria-current="page">Cagar Budaya</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->

<div class="untree_co-section">
    <div class="container">
        <div class="row justify-content-between align-items-center">

            <div class="row">
                <div class="col-lg-5">
                    <figure class="img-play-video">

                        {{-- <h2 class="section-title text-left mb-4">PANTAI WONOKERTO</h2> --}}
                        <img src="{{ url($budaya->gambar) }}" alt="Image" class="img-fluid rounded-20">
                    </figure>
                </div>

                <div class="col-lg-6 offset-1">
                    <h2 class="section-title text-left mb-4">{{ $budaya->nama }}</h2>


                    <table class="table">

                        <tbody>
                            <tr>
                                <th scope="row" width="250">Nama Cagar Budaya</th>
                                <td>{{ $budaya->nama }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Alamat</th>
                                <td>{{ $budaya->alamat }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Lokasi</th>
                                <td><a href="{{ $budaya->lokasi }}" class="btn btn-success btn-sm"
                                        target="_blank">Klik</a></td>
                            </tr>
                            <tr>
                                <th scope="row">Dilihat</th>
                                <td>{{ $budaya->dilihat }} Kali</td>
                            </tr>

                        </tbody>
                    </table>

                </div>

            </div>

            <p>{!! $budaya->deskripsi !!}</p>


        </div>
    </div>
</div>


@endsection