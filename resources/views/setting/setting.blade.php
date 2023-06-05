@extends('admin_dashboard')


@push('css')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
@endpush

@section('admin')
{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script> --}}



<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0"> <i class="nav-icon fas fa-cog"></i> &nbsp;{{ $title }}</h1>
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
                <h3 class="card-title">Setting</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">

                <form method="post" action="{{ route('store.setting') }}" enctype="multipart/form-data">
                    @csrf

                    <input type="hidden" name="id" value="{{ $setting->id }}">

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" name="title"
                                    class="form-control form-control-sm  @error('title') is-invalid @enderror"
                                    style="border-radius: 0px;" id="title" value="{{ old('title', $setting->title) }}">
                                @error('title')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="meta_keyword">Keyword</label>
                                <input type="text" name="meta_keyword"
                                    class="form-control form-control-sm @error('meta_keyword') is-invalid @enderror"
                                    style="border-radius: 0px;" id="meta_keyword"
                                    value="{{ old('meta_keyword', $setting->meta_keyword) }}">
                                @error('meta_keyword')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="meta_author">Author</label>
                                <input type="text" name="meta_author"
                                    class="form-control form-control-sm  @error('meta_author') is-invalid @enderror"
                                    style="border-radius: 0px;" id="meta_author"
                                    value="{{ old('meta_author', $setting->meta_author) }}">
                                @error('meta_author')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="meta_description">Deskripsi</label>
                                <input type="text" name="meta_description"
                                    class="form-control form-control-sm @error('meta_description') is-invalid @enderror"
                                    style="border-radius: 0px;" id="meta_description"
                                    value="{{ old('meta_description', $setting->meta_description) }}">
                                @error('meta_description')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="tentang">Tentang</label>

                        <textarea name="tentang" id="tentang" rows="3"
                            class="form-control form-control-sm @error('tentang') is-invalid @enderror"
                            style="border-radius: 0px;">{{ old('tentang', $setting->tentang) }}</textarea>

                        @error('tentang')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <input type="text" name="alamat"
                                    class=" form-control form-control-sm @error('alamat') is-invalid @enderror"
                                    style="border-radius: 0px;" id="alamat"
                                    value="{{ old('alamat', $setting->alamat) }}">
                                @error('alamat')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="tlp">Telepon</label>
                                <input type="text" name="tlp"
                                    class="form-control form-control-sm @error('tlp') is-invalid @enderror"
                                    style="border-radius: 0px;" id="tlp" value="{{ old('tlp', $setting->tlp) }}">
                                @error('tlp')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" name="email"
                                    class="form-control form-control-sm @error('email') is-invalid @enderror"
                                    style="border-radius: 0px;" id="email" value="{{ old('email', $setting->email) }}">
                                @error('email')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="ig">Instagram</label>
                                <input type="text" name="ig"
                                    class=" form-control form-control-sm @error('ig') is-invalid @enderror"
                                    style="border-radius: 0px;" id="ig" value="{{ old('ig', $setting->ig) }}">
                                @error('ig')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="youtube">Youtube</label>
                                <input type="text" name="youtube"
                                    class=" form-control form-control-sm @error('youtube') is-invalid @enderror"
                                    style="border-radius: 0px;" id="youtube"
                                    value="{{ old('youtube', $setting->youtube) }}">
                                @error('youtube')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="facebook">Facebook</label>
                                <input type="text" name="facebook"
                                    class="form-control form-control-sm @error('facebook') is-invalid @enderror"
                                    style="border-radius: 0px;" id="facebook"
                                    value="{{ old('facebook', $setting->facebook) }}">
                                @error('facebook')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="twitter">Twitter</label>
                                <input type="text" name="twitter"
                                    class="form-control form-control-sm @error('twitter') is-invalid @enderror"
                                    style="border-radius: 0px;" id="twitter"
                                    value="{{ old('twitter', $setting->twitter) }}">
                                @error('twitter')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="image">Logo</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" name="image" id="image"
                                            class="custom-file-input form-control-sm @error('image') is-invalid @enderror"
                                            id="image" style="border-radius: 0px;" accept=".png,.jpg">
                                        <label class="custom-file-label" for="image">Pilih Logo</label>
                                    </div>
                                </div>

                                @error('image')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                        </div>
                        <div class="col-md-6">
                            <label for="photo" class="form-label">Proview Logo</label>
                            <div class="input-group">
                                <img class="img-fluid pad" id="showImage" src="{{ url($setting->logo) }}" alt="Photo">


                            </div>
                        </div>
                    </div>


                    <button type="submit" class="btn bg-cyan btn-sm btn-flat"><i class="fas fa-pen"></i>
                        &nbsp;
                        Ubah</button>


                </form>

            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->

    </div><!-- /.container-fluid -->
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

</script>



@endpush