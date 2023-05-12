@extends('admin_dashboard')


@push('css')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

<style>
    #container {
        width: 1000px;
        margin: 20px auto;
    }

    .ck-editor__editable[role="textbox"] {
        /* editing area */
        min-height: 200px;
    }

    .ck-content .image {
        /* block images */
        max-width: 80%;
        margin: 20px auto;
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

                <form id="myForm" method="post" action="{{ route('store.destinasi') }}" enctype="multipart/form-data">
                    @csrf

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="nama">Nama Destinasi</label>
                                <input type="text" name="nama" class="form-control form-control-sm"
                                    style="border-radius: 0px;" id="nama">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="kategori_id">Kategori</label>

                                <select name="kategori_id" id="kategori_id" class="form-control form-control-sm"
                                    style="border-radius: 0px;">

                                    <option selected disabled>-- Pilih --</option>

                                    @foreach ($kategori as $item)
                                    <option value="{{ $item->id }}">{{ $item->nama }}</option>
                                    @endforeach

                                </select>

                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">

                            <button type="button" class="btn btn-xs btn-flat btn-success" id="b">Dengan Tiket</button>
                            <button type="button" class="btn btn-xs btn-flat btn-danger" id="bt">Batal</button>


                            <div id="g" style="display: none;" class="mt-1">


                                <div class="form-group">
                                    <input type="number" min="0" name="harga_tiket" class="form-control form-control-sm"
                                        style="border-radius: 0px;" id="harga_tiket" placeholder="Masukan Harga Tiket"
                                        style="display: none;">
                                </div>



                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="buka">Jam Buka</label>
                                <input type="text" name="buka" class=" form-control form-control-sm"
                                    style="border-radius: 0px;" id="buka">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <input type="text" name="alamat" class=" form-control form-control-sm"
                                    style="border-radius: 0px;" id="alamat">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="lokasi">Lokasi</label>
                                <input type="text" name="lokasi" class="form-control form-control-sm"
                                    style="border-radius: 0px;" id="lokasi">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="editor">Deskripsi</label>
                        <textarea name="deskripsi" id="editor" rows="5" class="form-control form-control-sm"
                            style="border-radius: 0px;"></textarea>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="image">Gambar</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" name="image" id="image"
                                            class="custom-file-input form-control-sm" id="image"
                                            style="border-radius: 0px;">
                                        <label class="custom-file-label" for="image">Pilih Foto</label>
                                    </div>
                                </div>
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
                        Simpan</button>


                </form>

            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->

    </div>
</section>


@endsection

@push('scripts')

{{-- ckeditor --}}
<script src="https://cdn.ckeditor.com/ckeditor5/37.1.0/classic/ckeditor.js"></script>

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


    // validation with js
    $(document).ready(function (){
        $('#myForm').validate({
            rules: {
                nama: {
                    required : true,
                },  
                kategori_id: {
                    required : true,
                },  
                buka: {
                    required : true,
                },  
                alamat: {
                    required : true,
                },  
                lokasi: {
                    required : true,
                },  
                descripsi: {
                    required : true,
                },  
                image: {
                    required : true,
                },  
            },
            messages :{
                nama: {
                    required : 'Nama Destinasi tidak boleh kosong',
                }, 
                kategori_id: {
                    required : 'Kategori harus dipiliih',
                }, 
                buka: {
                    required : 'Jam Buka tidak boleh kosong',
                }, 
                alamat: {
                    required : 'Alamat tidak boleh kosong',
                }, 
                lokasi: {
                    required : 'Lokasi tidak boleh kosong',
                }, 
                descripsi: {
                    required : 'Lokasi tidak boleh kosong',
                }, 
                image: {
                    required : 'Lokasi tidak boleh kosong',
                }, 

            },
            errorElement : 'span', 
            errorPlacement: function (error,element) {
                error.addClass('invalid-feedback');
                element.closest('.form-group').append(error);
            },
            highlight : function(element, errorClass, validClass){
                $(element).addClass('is-invalid');
            },
            unhighlight : function(element, errorClass, validClass){
                $(element).removeClass('is-invalid');
            },
        });
    });

    // ckeditor
    ClassicEditor.create(document.querySelector('#editor'))
        .then(editor => {
                  console.log(editor);
        }).catch(error => {
            console.error(error);
        });

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
        $('#b').click(function() {
            document.getElementById("g").style.display = "revert";
        })
        $('#bt').click(function() {
            document.getElementById("g").style.display = "none";
        })

        // $('#v').click(function() {
        //     document.getElementById("vv").style.display = "revert";
        // })
        // $('#vt').click(function() {
        //     document.getElementById("vv").style.display = "none";
        // })
    })
</script>

@endpush