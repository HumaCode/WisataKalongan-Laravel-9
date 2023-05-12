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
{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script> --}}



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
                <h3 class="card-title">Daftar Destinasi Wisata</h3>

                <div class="card-tools">
                    <a href="{{ route('tambah.destinasi') }}" class="btn bg-cyan btn-flat btn-sm">
                        <i class="fas fa-plus"></i> &nbsp; Tambah
                    </a>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="tabel" class="table table-bordered table-striped projects">
                    <thead class="text-center">
                        <tr>
                            <th width="2%">No</th>
                            <th width="200">Destinasi</th>
                            <th>Gambar</th>
                            <th>Kategori</th>
                            <th>Lokasi</th>
                            <th width="30%"><i class="fa fa-certificate"></i></th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($destinasi as $key => $item)

                        <tr>
                            <td class="text-center">{{ $key+1 }}. </td>
                            <td>{{ $item->nama }}</td>
                            <td class="text-center">

                                <a href="{{ $item->gambar .'?' . $item->id }}" data-toggle="lightbox"
                                    data-title="Preview Gambar">
                                    <div class="zoom-effect">
                                        <div class="kotak">
                                            <img src="{{ $item->gambar .'?' . $item->id }}" class="img-fluid mb-2"
                                                width="100" alt="white sample" />
                                        </div>
                                    </div>
                                </a>

                            </td>
                            <td>{{ $item->kategori->nama }}</td>
                            <td>{{ $item->lokasi }}</td>


                            <td class=" text-center">
                                <a href="" data-toggle="modal" class="btn bg-cyan btn-sm btn-flat"><i
                                        class="fa fa-eye"></i>&nbsp;
                                    Detail</a>
                                &nbsp;

                                <a href="{{ route('ubah.destinasi', $item->slug) }}"
                                    class="btn btn-success btn-sm btn-flat"><i class=" fa fa-edit"></i>&nbsp;
                                    Ubah</a>
                                &nbsp;
                                <a href="{{ route('hapus.destinasi', $item->slug) }}"
                                    class="btn btn-danger btn-sm btn-flat" id="delete"><i
                                        class=" fa fa-trash"></i>&nbsp;
                                    Hapus</a>
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

</script>



@endpush