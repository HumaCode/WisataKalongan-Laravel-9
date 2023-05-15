@extends('admin_dashboard')


@push('css')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

<link rel="stylesheet" href="{{ asset('backend') }}/trix/trix.css">
<script src="{{ asset('backend') }}/trix/trix.js"></script>


<style>
    trix-toolbar [data-trix-button-group="file-tools"] {
        display: none;
    }
</style>

@endpush

@section('admin')

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0"> <i class="nav-icon fas fa-edit"></i> &nbsp;{{ $title }}</h1>
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

        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Ubah</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">

                <form method="post" action="{{ route('update.event') }}" enctype="multipart/form-data">
                    @csrf

                    <input type="hidden" name="id" value="{{ $event->id }}">

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="nama">Nama Event</label>
                                <input type="text" name="nama"
                                    class="form-control form-control-sm  @error('nama') is-invalid @enderror"
                                    style="border-radius: 0px;" id="nama" value="{{ old('nama', $event->nama) }}">
                                @error('nama')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="slug">Slug</label>
                                <input type="text" name="slug"
                                    class="form-control form-control-sm @error('slug') is-invalid @enderror"
                                    style="border-radius: 0px;" id="slug" readonly
                                    value="{{ old('slug', $event->slug) }}">
                                @error('slug')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row">

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="tgl_mulai">Tangal Mulai</label>
                                <input type="date" name="tgl_mulai"
                                    class=" form-control form-control-sm @error('tgl_mulai') is-invalid @enderror"
                                    style="border-radius: 0px;" id="tgl_mulai"
                                    value="{{ old('tgl_mulai', $event->tgl_mulai) }}">
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="tgl_selesai">Tangal Selesai</label>
                                <input type="date" name="tgl_selesai"
                                    class=" form-control form-control-sm @error('tgl_selesai') is-invalid @enderror"
                                    style="border-radius: 0px;" id="tgl_selesai"
                                    value="{{ old('tgl_selesai', $event->tgl_selesai) }}">
                            </div>
                        </div>


                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="waktu">Waktu</label>
                                <input type="text" name="waktu"
                                    class=" form-control form-control-sm @error('waktu') is-invalid @enderror"
                                    style="border-radius: 0px;" id="waktu" value="{{ old('waktu', $event->waktu) }}">
                                @error('waktu')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <input type="text" name="alamat"
                                    class=" form-control form-control-sm @error('alamat') is-invalid @enderror"
                                    style="border-radius: 0px;" id="alamat" value="{{ old('alamat', $event->alamat) }}">
                                @error('alamat')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="penyelenggara">Penyelenggara</label>
                                <input type="text" name="penyelenggara"
                                    class="form-control form-control-sm @error('penyelenggara') is-invalid @enderror"
                                    style="border-radius: 0px;" id="penyelenggara"
                                    value="{{ old('penyelenggara', $event->penyelenggara) }}">
                                @error('penyelenggara')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="lokasi">Lokasi</label>
                                <input type="text" name="lokasi"
                                    class="form-control form-control-sm @error('lokasi') is-invalid @enderror"
                                    style="border-radius: 0px;" id="lokasi" value="{{ old('lokasi', $event->lokasi) }}">
                                <small>* masukan link lokasi dari google map</small><br>
                                @error('lokasi')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="editor">Deskripsi</label>
                        <input id="deskripsi" type="hidden" name="deskripsi"
                            value="{{ old('deskripsi', $event->deskripsi) }}">
                        <trix-editor input="deskripsi"></trix-editor>
                        @error('deskripsi')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror



                        {{-- <textarea name="deskripsi" id="editor" rows="5" class="form-control form-control-sm"
                            style="border-radius: 0px;"></textarea> --}}
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="image">Gambar</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" name="image" id="image"
                                            class="custom-file-input form-control-sm @error('image') is-invalid @enderror"
                                            id="image" style="border-radius: 0px;" accept=".png,.jpg">
                                        <label class="custom-file-label" for="image">Pilih Foto</label>
                                    </div>
                                </div>
                                @error('image')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                        </div>
                        <div class="col-md-6">
                            <label for="photo" class="form-label">Proview Gambar</label>
                            <div class="input-group">
                                <img class="img-fluid pad" id="showImage" src="{{ url($event->gambar) }}" alt="Photo">


                            </div>
                        </div>
                    </div>


                    <button type="submit" class="btn bg-cyan btn-sm btn-flat"><i class="fas fa-edit"></i>
                        &nbsp;
                        Ubah Data</button>


                </form>

            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->

    </div>
</section>


@endsection

@push('scripts')



<script>
    $(function () {
      bsCustomFileInput.init();
    });
    

    $(document).ready(function() {
        $('#image').change(function(e) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#showImage').attr('src', e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        })
    })
   

    // slug
    const nama = document.querySelector('#nama');
    const slug = document.querySelector('#slug');

    nama.addEventListener('change', function() {
        fetch('/event/checkSlug?nama=' + nama.value)
        .then(response => response.json())
        .then(data => slug.value = data.slug)
    })


    document.addEventListener('trix-file-accept', function(e) {
        e.preventDefault();
    })


</script>

@endpush