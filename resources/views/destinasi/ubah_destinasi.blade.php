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

                <form method="post" action="{{ route('update.destinasi') }}" enctype="multipart/form-data">
                    @csrf

                    <input type="hidden" name="slug_lama" value="{{ $destinasi->slug }}">

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="nama">Nama Destinasi</label>
                                <input type="text" name="nama"
                                    class="form-control form-control-sm  @error('nama') is-invalid @enderror"
                                    style="border-radius: 0px;" id="nama" value="{{ old('nama', $destinasi->nama) }}">
                                @error('nama')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="slug">Slug</label>
                                <input type="text" name="slug"
                                    class="form-control form-control-sm @error('slug') is-invalid @enderror"
                                    style="border-radius: 0px;" id="slug" readonly value="{{ $destinasi->slug }}">
                                @error('slug')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="kategori_id">Kategori</label>

                                <select name="kategori_id" id="kategori_id"
                                    class="form-control form-control-sm @error('kategori_id') is-invalid @enderror"
                                    style="border-radius: 0px;">

                                    <option selected disabled>-- Pilih --</option>

                                    @foreach ($kategori as $item)
                                    @if ($item->id == $destinasi->kategori_id)
                                    <option value="{{ $item->id }}" selected>{{ $item->nama }}</option>
                                    @else
                                    <option value="{{ $item->id }}">{{ $item->nama }}</option>
                                    @endif
                                    @endforeach

                                </select>
                                @error('kategori_id')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror

                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">

                            @if ($destinasi->tiket == 0)
                            <button type="button" class="btn btn-xs btn-flat btn-success" id="b">Dengan Tiket</button>
                            <button type="button" class="btn btn-xs btn-flat btn-danger" id="bt">Batal</button>
                            @endif

                            @if ($destinasi->harga_tiket != null)
                            <div id="g">
                                <div class="form-group">
                                    <label for="buka">Harga Tiket</label>
                                    <input type="text" name="harga_tiket" class="form-control form-control-sm"
                                        style="border-radius: 0px;" id="harga_tiket" placeholder="Masukan Harga Tiket"
                                        value="{{ $destinasi->harga_tiket }}">
                                </div>
                            </div>
                            @else
                            <div id="g" style="display: none;" class="mt-1">
                                <div class="form-group">
                                    <input type="text" name="harga_tiket" class="form-control form-control-sm"
                                        style="border-radius: 0px;" id="harga_tiket" placeholder="Masukan Harga Tiket">
                                </div>
                            </div>
                            @endif


                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="buka">Jam Buka</label>
                                <input type="text" name="buka"
                                    class=" form-control form-control-sm @error('buka') is-invalid @enderror"
                                    style="border-radius: 0px;" id="buka" value="{{ old('buka', $destinasi->buka) }}">
                                @error('buka')
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
                                    style="border-radius: 0px;" id="alamat"
                                    value="{{ old('alamat', $destinasi->alamat) }}">
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
                                    style="border-radius: 0px;" id="lokasi"
                                    value="{{ old('lokasi', $destinasi->lokasi) }}">
                                <small>* link lokasi dari google map</small><br>

                                @error('lokasi')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="editor">Deskripsi</label>
                        <input id="deskripsi" type="hidden" name="deskripsi"
                            value="{{ old('deskripsi', $destinasi->deskripsi) }}">
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
                                <label for="image">Gambar 1</label>
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
                                <img class="img-fluid pad" id="showImage" src="{{ url($destinasi->gambar) }}"
                                    alt="Photo">


                            </div>
                        </div>
                    </div>

                    <hr>

                    <div class="row ">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="image2">Gambar 2</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" name="image2" id="image2"
                                            class="custom-file-input gambar2 form-control-sm @error('image') is-invalid @enderror"
                                            style="border-radius: 0px;" accept=".png,.jpg">
                                        <label class="custom-file-label" for="image2">Pilih Foto</label>
                                    </div>
                                </div>
                                <small>* ukuran gambar 800x500 pixel</small><br>
                                @error('image2')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                        </div>
                        <div class="col-md-6">
                            <label for="photo" class="form-label">Proview Gambar</label>
                            <div class="input-group">
                                <img class="img-fluid pad" id="showImage2" src="{{ url($destinasi->gambar2) }}"
                                    alt="Photo">


                            </div>
                        </div>
                    </div>

                    <hr>

                    <div class="row ">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="image3">Gambar 3</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" name="image3" id="image3"
                                            class="custom-file-input gambar3 form-control-sm @error('image3') is-invalid @enderror"
                                            style="border-radius: 0px;" accept=".png,.jpg">
                                        <label class="custom-file-label" for="image3">Pilih Foto</label>
                                    </div>
                                </div>
                                <small>* ukuran gambar 800x500 pixel</small><br>
                                @error('image3')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                        </div>
                        <div class="col-md-6">
                            <label for="photo" class="form-label">Proview Gambar</label>
                            <div class="input-group">
                                <img class="img-fluid pad" id="showImage3" src="{{ url($destinasi->gambar3) }}"
                                    alt="Photo">


                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn bg-cyan btn-sm btn-flat"><i class="fas fa-edit"></i>
                        &nbsp;
                        Ubah</button>


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

    $(document).ready(function() {
        $('#image').change(function(e) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#showImage').attr('src', e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        })
    })
   
    $(document).ready(function() {
        $('#image2').change(function(e) {
            var reader2 = new FileReader();
            reader2.onload = function(e) {
                $('#showImage2').attr('src', e.target.result);
            }
            reader2.readAsDataURL(e.target.files['0']);
        })
    })

    $(document).ready(function() {
        $('#image3').change(function(e) {
            var reader3 = new FileReader();
            reader3.onload = function(e) {
                $('#showImage3').attr('src', e.target.result);
            }
            reader3.readAsDataURL(e.target.files['0']);
        })
    })


    $(document).ready(function() {
        $('#b').click(function() {
            document.getElementById("g").style.display = "revert";
        })
        $('#bt').click(function() {
            document.getElementById("g").style.display = "none";
        })
    });

    // slug
    const nama = document.querySelector('#nama');
    const slug = document.querySelector('#slug');

    nama.addEventListener('change', function() {
        fetch('/destinasi/checkSlug?nama=' + nama.value)
        .then(response => response.json())
        .then(data => slug.value = data.slug)
    })


    document.addEventListener('trix-file-accept', function(e) {
        e.preventDefault();
    })


</script>

@endpush