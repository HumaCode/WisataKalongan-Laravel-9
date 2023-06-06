@extends('admin_dashboard')

@push('css')
<!-- DataTables -->
<link rel="stylesheet" href="{{ asset('backend') }}/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="{{ asset('backend') }}/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
<link rel="stylesheet" href="{{ asset('backend') }}/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

{{-- ekko lightbox --}}
<link rel="stylesheet" href="{{ asset('backend') }}/plugins/ekko-lightbox/ekko-lightbox.css">
@endpush

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



        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Daftar Pertanyaan Pengunjung</h3>


            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="tabel" class="table table-bordered table-striped projects">
                    <thead class="text-center">
                        <tr>
                            <th width="2%">No</th>
                            <th>Nama</th>
                            <th>Email </th>
                            <th>Subject</th>
                            <th with="300">Message</th>
                            <th width="15%"><i class="fa fa-certificate"></i></th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($pertanyaan as $key => $item)

                        <tr>
                            <td class="text-center">{{ $key+1 }}. </td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->email }}</td>
                            <td>{{ $item->subject }}</td>
                            <td>{{ $item->message }}</td>


                            <td class=" text-center">
                                <a href="{{ route('hapus.pertanyaan', $item->id) }}"
                                    class="btn btn-danger btn-sm btn-flat" id="delete" data-toggle="tooltip"
                                    data-placement="bottom" title="Hapus Pertanyaan"><i class=" fa fa-trash"></i></a>
                            </td>
                        </tr>

                        @endforeach

                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->

    </div><!-- /.container-fluid -->
</section>


@endsection

@push('scripts')
<!-- DataTables  & Plugins -->
<script src="{{ asset('backend') }}/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="{{ asset('backend') }}/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="{{ asset('backend') }}/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="{{ asset('backend') }}/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="{{ asset('backend') }}/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="{{ asset('backend') }}/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
{{-- <script src="{{ asset('backend') }}/plugins/jszip/jszip.min.js"></script> --}}
{{-- <script src="{{ asset('backend') }}/plugins/pdfmake/pdfmake.min.js"></script> --}}
{{-- <script src="{{ asset('backend') }}/plugins/pdfmake/vfs_fonts.js"></script> --}}
<script src="{{ asset('backend') }}/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="{{ asset('backend') }}/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="{{ asset('backend') }}/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script src="{{ asset('backend/js/code.js') }}"></script>

{{-- ekko-lightbox --}}
<script src="{{ asset('backend') }}/plugins/ekko-lightbox/ekko-lightbox.min.js"></script>

<script>
    $(function () {
       $('#tabel').DataTable({
        "paging": true,
        "lengthChange": true,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });
    });


    $(function () {
        $(document).on('click', '[data-toggle="lightbox"]', function(event) {
            event.preventDefault();
            $(this).ekkoLightbox({
                alwaysShowClose: true
            });
        });

        $('.filter-container').filterizr({gutterPixels: 3});
            $('.btn[data-filter]').on('click', function() {
            $('.btn[data-filter]').removeClass('active');
            $(this).addClass('active');
        });
    })


    // tooltips
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })

</script>



@endpush