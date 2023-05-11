@extends('admin_dashboard')

@section('admin')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>


<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0"> <i class="nav-icon fas fa-user"></i> &nbsp;{{ $title }}</h1>
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


<!-- Main content -->
<section class="content">
    <div class="container-fluid">

        <div class="col-md-12">
            <div class="card card-outline card-cyan">
                <div class="card-header">
                    <h3 class="card-title">{{ $adminData->name }}</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                    </div>
                    <!-- /.card-tools -->
                </div>
                <!-- /.card-header -->
                <div class="card-body">

                    <form method="post" action="{{ route('profile.store') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="card-body">

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">Nama</label>
                                        <input type="text" name="name" value="{{ old('name', $adminData->name) }}"
                                            class="form-control form-control-sm" style="border-radius: 0px;" id="name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="username">Username</label>
                                        <input type="text" name="username"
                                            value="{{ old('username', $adminData->username) }}"
                                            class="form-control form-control-sm" style="border-radius: 0px;"
                                            id="username">
                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" value="{{ old('email', $adminData->email) }}" name="email"
                                            class="form-control form-control-sm" style="border-radius: 0px;" id="email">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="phone">No. Hp</label>
                                        <input type="number" min="0" name="phone"
                                            value="{{ old('phone', $adminData->phone) }}"
                                            class="form-control form-control-sm" style="border-radius: 0px;" id="phone">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="image">Foto</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" name="photo" id="image"
                                            class="custom-file-input form-control-sm" id="image"
                                            style="border-radius: 0px;">
                                        <label class="custom-file-label" for="image">Pilih Foto</label>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="photo" class="form-label"></label>
                                <img id="showImage"
                                    src="{{ (!empty($adminData->photo)) ? url('backend/img/' . $adminData->photo) : url('backend/img/user.png') }}"
                                    class="profile-user-img img-fluid img-circle" alt="profile-image">
                            </div>


                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn bg-cyan btn-sm btn-flat"><i class="fas fa-pencil-alt"></i>
                                &nbsp;
                                Ubah</button>
                        </div>
                    </form>

                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>

    </div><!-- /.container-fluid -->
</section>
<!-- /.content -->


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

@endsection