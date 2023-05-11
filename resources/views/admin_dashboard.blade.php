@php
$id = Auth::user()->id;
$adminData = App\Models\User::find($id);
@endphp

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Panel Admin | {{ $title }}</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('backend') }}/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    {{--
    <link rel="stylesheet"
        href="{{ asset('backend') }}/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css"> --}}
    <!-- iCheck -->


    {{--
    <link rel="stylesheet" href="{{ asset('backend') }}/plugins/icheck-bootstrap/icheck-bootstrap.min.css"> --}}
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{ asset('backend') }}/plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('backend') }}/dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ asset('backend') }}/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    {{--
    <link rel="stylesheet" href="{{ asset('backend') }}/plugins/daterangepicker/daterangepicker.css"> --}}
    <!-- summernote -->
    {{--
    <link rel="stylesheet" href="{{ asset('backend') }}/plugins/summernote/summernote-bs4.min.css"> --}}

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">

    @stack('css')
</head>

<body class="layout-navbar-fixed text-sm layout-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        {{-- <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="{{ asset('backend') }}/dist/img/AdminLTELogo.png" alt="AdminLTELogo"
                height="60" width="60">
        </div> --}}

        <!-- Navbar -->
        @include('body.header')
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        @include('body.sidebar')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">

            @yield('admin')

        </div>


        <!-- /.content-wrapper -->
        @include('body.footer')



        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-warning" id="exampleModalLabel"><i
                                class="fas fa-exclamation-triangle text-warning"></i>
                            &nbsp; Konfirmasi Logout</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Apakah yakin anda akan logout dan mengakhiri session login sekarang..?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger btn-flat btn-sm" data-dismiss="modal"><i
                                class="fas fa-ban"></i> &nbsp; Batal</button>

                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <a href="{{ route('logout') }}" class="btn btn-primary btn-flat btn-sm" onclick="event.preventDefault();
                                    this.closest('form').submit();">
                                <i class="fas fa-check"></i> &nbsp;

                                Ya

                            </a>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="{{ asset('backend') }}/plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="{{ asset('backend') }}/plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('backend') }}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    {{-- <script src="{{ asset('backend') }}/plugins/chart.js/Chart.min.js"></script> --}}
    <!-- Sparkline -->
    {{-- <script src="{{ asset('backend') }}/plugins/sparklines/sparkline.js"></script> --}}
    <!-- JQVMap -->
    <script src="{{ asset('backend') }}/plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="{{ asset('backend') }}/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    {{-- <script src="{{ asset('backend') }}/plugins/jquery-knob/jquery.knob.min.js"></script> --}}
    <!-- daterangepicker -->
    {{-- <script src="{{ asset('backend') }}/plugins/moment/moment.min.js"></script> --}}
    {{-- <script src="{{ asset('backend') }}/plugins/daterangepicker/daterangepicker.js"></script> --}}
    <!-- Tempusdominus Bootstrap 4 -->
    {{-- <script src="{{ asset('backend') }}/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js">
    </script> --}}
    <!-- bs-custom-file-input -->
    <script src="{{ asset('backend') }}/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
    <!-- Summernote -->
    {{-- <script src="{{ asset('backend') }}/plugins/summernote/summernote-bs4.min.js"></script> --}}
    <!-- overlayScrollbars -->
    <script src="{{ asset('backend') }}/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('backend') }}/dist/js/adminlte.js"></script>
    <!-- AdminLTE for demo purposes -->
    {{-- <script src="{{ asset('backend') }}/dist/js/demo.js"></script> --}}
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="{{ asset('backend') }}/dist/js/pages/dashboard.js"></script>

    {{-- validation with js --}}
    <script src="{{ asset('backend') }}/js/validate.min.js"></script>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    @stack('scripts')

    <script>
        @if(Session::has('message'))
        var type = "{{ Session::get('alert-type','info') }}"
        switch(type){
            case 'info':
            toastr.info(" {{ Session::get('message') }} ");
            break;

            case 'success':
            toastr.success(" {{ Session::get('message') }} ");
            break;

            case 'warning':
            toastr.warning(" {{ Session::get('message') }} ");
            break;

            case 'error':
            toastr.error(" {{ Session::get('message') }} ");
            break; 
        }
        @endif 
    </script>
</body>

</html>