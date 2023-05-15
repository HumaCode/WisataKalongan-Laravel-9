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
                <h1 class="m-0"> <i class="nav-icon fas fa-plus"></i> &nbsp;{{ $title }}</h1>
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
                <h3 class="card-title">Tambah</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">

                <form method="post" action="{{ route('store.cagarbudaya') }}" enctype="multipart/form-data">
                    @csrf

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="nama">Nama Cagar Budaya</label>
                                <input type="text" name="nama"
                                    class="form-control form-control-sm  @error('nama') is-invalid @enderror"
                                    style="border-radius: 0px;" id="nama" value="{{ old('nama') }}">
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
                                    style="border-radius: 0px;" id="slug" readonly value="{{ old('slug') }}">
                                @error('slug')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>



                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <input type="text" name="alamat"
                                    class=" form-control form-control-sm @error('alamat') is-invalid @enderror"
                                    style="border-radius: 0px;" id="alamat" value="{{ old('alamat') }}">
                                @error('alamat')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="lokasi">Lokasi</label>
                                <input type="text" name="lokasi"
                                    class="form-control form-control-sm @error('lokasi') is-invalid @enderror"
                                    style="border-radius: 0px;" id="lokasi" value="{{ old('lokasi') }}">
                                <small>* masukan link lokasi dari google map</small><br>
                                @error('lokasi')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="editor">Deskripsi</label>
                        <input id="deskripsi" type="hidden" name="deskripsi" value="{{ old('deskripsi') }}">
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
                                <small>* ukuran gambar 800x500 pixel</small><br>

                                @error('image')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                        </div>
                        <div class="col-md-6">
                            <label for="photo" class="form-label">Proview Gambar</label>
                            <div class="input-group">
                                <img class="img-fluid pad" id="showImage" src="{{ url('backend/img/noimg.png') }}"
                                    alt="Photo">


                            </div>
                        </div>
                    </div>


                    <button type="submit" class="btn bg-cyan btn-sm btn-flat"><i class="fas fa-save"></i>
                        &nbsp;
                        Simpan Data</button>


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
        fetch('/budaya/checkSlug?nama=' + nama.value)
        .then(response => response.json())
        .then(data => slug.value = data.slug)
    })


    document.addEventListener('trix-file-accept', function(e) {
        e.preventDefault();
    })


</script>

@endpush