@extends('admin_dashboard')


@section('admin')

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
            <div class="col-md-5">

                <div class="card ">

                    <div class="card-header">
                        <h3 class="card-title">{{ $event->nama }}</h3>


                    </div>

                    <div class="card-body ">
                        <div class="text-center">
                            <img class="img-fluid " src="{{ url($event->gambar) }}" alt="User profile picture">
                        </div>

                        <p class="profile-username text-center">{{ $event->alamat }} </p>


                        <ul class="list-group list-group-unbordered mb-3">
                            <li class="list-group-item">
                                <b>Tanggal Mulai</b> <a class="float-right">{{ tanggal_indonesia($event->tgl_mulai)
                                    }}</a>
                            </li>
                            <li class="list-group-item">
                                <b>Tanggal Selesai</b> <a class="float-right">{{ tanggal_indonesia($event->tgl_selesai)
                                    }}</a>
                            </li>
                        </ul>

                        <a href="{{ $event->lokasi }}" target="_blank" class="btn bg-cyan btn-sm btn-block btn-flat"><i
                                class="nav-icon fa fa-map-marker"></i> &nbsp;<b>Lokasi</b></a>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->

            </div>

            <div class="col-md-7">
                <div class="card ">

                    <div class="card-header">
                        <h3 class="card-title">Tentang</h3>


                    </div>

                    <div class="card-body ">

                        <p>{!! $event->deskripsi !!}</p>



                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <a href="{{ route('event') }}" class="btn btn-sm btn-danger btn-block"><i
                                class="fas fa-arrow-left"></i> &nbsp; Kembali</a>

                    </div>
                </div>
                <!-- /.card -->
            </div>
</section>
@endsection