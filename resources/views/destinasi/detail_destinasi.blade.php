@extends('admin_dashboard')


@section('admin')
{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script> --}}



<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0"> <i class="nav-icon fa fa-map-marker"></i> &nbsp;{{ $title }}</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}">{{ config('app.name') }}</a></li>
                    <li class="breadcrumb-item">{{ $title }}</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->


<section class="content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-md-12">
                <!-- Profile Image -->
                <div class="card ">
                    <div class="card-header">
                        <h3 class="card-title">{{ $destinasi->nama }}</h3>

                        <div class="card-tools">
                            Kategori : <span class="badge badge-info">{{ $destinasi->kategori->nama }}</span>
                        </div>
                        <!-- /.card-tools -->
                    </div>
                    <div class="card-body ">
                        <div class="text-center">
                            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                </ol>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img class="d-block w-100" src="{{ url($destinasi->gambar) }}"
                                            alt="First slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="{{ url($destinasi->gambar2) }}"
                                            alt="Second slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="{{ url($destinasi->gambar3) }}"
                                            alt="Third slide">
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
                                    data-slide="prev">
                                    <span class="carousel-control-custom-icon" aria-hidden="true">
                                        <i class="fas fa-chevron-left"></i>
                                    </span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
                                    data-slide="next">
                                    <span class="carousel-control-custom-icon" aria-hidden="true">
                                        <i class="fas fa-chevron-right"></i>
                                    </span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>

                        </div>


                        <p class="text-muted text-center mt-3">{{ $destinasi->alamat }}</p>

                        <ul class="list-group list-group-unbordered mb-3">
                            <li class="list-group-item">
                                <b>Jam Buka</b> <a class="float-right">{{ $destinasi->buka }}</a>
                            </li>
                            <li class="list-group-item">
                                <b>Harga Tiket</b> <a class="float-right">{{ $destinasi->tiket == 1 ?
                                    $destinasi->harga_tiket : '--' }}</a>
                            </li>
                        </ul>

                        <div id="accordion">
                            <div class="card ">
                                <div class="card-header">
                                    <h4 class="card-title w-100">
                                        <a class="d-block w-100" data-toggle="collapse" href="#collapseOne">
                                            Tentang
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseOne" class="collapse" data-parent="#accordion">
                                    <div class="card-body">
                                        <p>{!! $destinasi->deskripsi !!}</p>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>

                    <div class="card-footer">
                        <div class="row">
                            <div class="col-md-6">
                                <a href="{{ route('destinasi') }}" class="btn btn-sm btn-danger btn-block"><i
                                        class="fas fa-arrow-left"></i> &nbsp; Kembali</a>
                            </div>
                            <div class="col-md-6">
                                <a href="{{ $destinasi->lokasi }}" target="_blank" class="btn bg-cyan btn-block"><i
                                        class="nav-icon fa fa-map-marker"></i> &nbsp; <b>Lihat
                                        Lokasi</b></a>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>

        </div>
    </div>


    </div><!-- /.container-fluid -->
</section>


@endsection