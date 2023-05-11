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

        <div class="row">

            <section class="col-md-8 connectedSortable">
                <div class="card card-outline card-cyan">
                    <div class="card-header">
                        <h3 class="card-title">{{ $adminData->name }}</h3>


                    </div>

                    <form id="myForm" method="post" action="{{ route('profile.store') }}" enctype="multipart/form-data">
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
                                Ubah Profil</button>
                        </div>
                    </form>
                </div>
                <!-- /.card -->
            </section>

            <section class="col-md-4 connectedSortable">
                <div class="card card-cyan card-outline">
                    <div class="card-header">
                    </div>
                    <div class="card-body box-profile">
                        <div class="text-center">
                            <img class="profile-user-img img-fluid img-circle"
                                src="{{ (!empty($adminData->photo)) ? url('backend/img/' . $adminData->photo) : url('backend/img/user.png') }}"
                                alt="User profile picture">
                        </div>

                        <h3 class="profile-username text-center">{{ $adminData->name }}</h3>

                        <p class="text-muted text-center">{{ $adminData->email }}</p>

                        <ul class="list-group list-group-unbordered mb-3">
                            <li class="list-group-item">
                                <b>Username</b> <a class="float-right">{{ $adminData->username }}</a>
                            </li>
                            <li class="list-group-item">
                                <b>No. Hp</b> <a class="float-right">{{ $adminData->phone }}</a>
                            </li>
                        </ul>

                        <a href="#" class="btn bg-cyan btn-block btn-flat btn-sm"><b>Reset Password</b></a>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </section>

            {{-- <div class="col-md-4">
                <div class="card card-outline card-cyan">
                    <div class="card-header">
                        <h3 class="card-title">Ubah Password</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                        <!-- /.card-tools -->
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">

                        <form method="post" action="{{ route('profile.store') }}">
                            @csrf

                            <div class="form-group">
                                <label for="old_password">Password Lama</label>
                                <input type="password" name="old_password" class="form-control form-control-sm"
                                    style="border-radius: 0px;" id="old_password">
                            </div>

                            <div class="form-group">
                                <label for="new_password">Password Baru</label>
                                <input type="password" name="new_password" class="form-control form-control-sm"
                                    style="border-radius: 0px;" id="new_password">
                            </div>

                            <div class="form-group">
                                <label for="new_password_confirm">Ulangi Password</label>
                                <input type="password" name="new_password_confirm" class="form-control form-control-sm"
                                    style="border-radius: 0px;" id="new_password_confirm">
                            </div>

                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <button type="submit" class="btn bg-cyan btn-sm btn-flat btn-block"><i
                                class="fas fa-pencil-alt"></i>
                            &nbsp;
                            Ubah Pawwsord</button>
                    </div>
                    </form>
                </div>
            </div> --}}

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


    // validation with js
    $(document).ready(function (){
        $('#myForm').validate({
            rules: {
                name: {
                    required : true,
                },  
                username: {
                    required : true,
                },  
                email: {
                    required : true,
                },  
                phone: {
                    required : true,
                },  
            },
            messages :{
                name: {
                    required : 'Nama tidak boleh kosong',
                }, 
                username: {
                    required : 'Username tidak boleh kosong',
                }, 
                email: {
                    required : 'Email tidak boleh kosong',
                }, 
                phone: {
                    required : 'No. Hp tidak boleh kosong',
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

    
</script>


@endsection