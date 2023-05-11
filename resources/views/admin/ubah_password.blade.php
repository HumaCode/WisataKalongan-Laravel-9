@extends('admin_dashboard')

@section('admin')

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0"> <i class="fas fa-key"></i> &nbsp;{{ $title }}</h1>
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

        <div class="col-md-8">
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

                    <form method="post" action="{{ route('update.password') }}">
                        @csrf

                        <div class="form-group">
                            <label for="old_password">Password Lama</label>
                            <input type="password" name="old_password"
                                class="form-control form-control-sm  @error('old_password') is-invalid @enderror"
                                style="border-radius: 0px;" id="old_password">
                            @error('old_password')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="new_password">Password Baru</label>
                            <input type="password" name="new_password"
                                class="form-control form-control-sm @error('new_password') is-invalid @enderror"
                                style="border-radius: 0px;" id="new_password">
                            @error('new_password')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="new_password_confirmation">Ulangi Password</label>
                            <input type="password" name="new_password_confirmation" class="form-control form-control-sm"
                                style="border-radius: 0px;" id="new_password_confirmation">
                        </div>

                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <button type="submit" class="btn bg-cyan btn-sm btn-flat "><i class="fas fa-pencil-alt"></i>
                        &nbsp;
                        Ubah Password</button>
                </div>
                </form>
            </div>
        </div>

    </div>
</section>

@endsection