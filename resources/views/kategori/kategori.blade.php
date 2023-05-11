@extends('admin_dashboard')

@push('css')
<!-- DataTables -->
<link rel="stylesheet" href="{{ asset('backend') }}/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="{{ asset('backend') }}/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
<link rel="stylesheet" href="{{ asset('backend') }}/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

@endpush

@section('admin')
{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script> --}}



<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0"> <i class="nav-icon fa fa-th"></i> &nbsp;{{ $title }}</h1>
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
                <h3 class="card-title">Daftar Kategori</h3>

                <div class="card-tools">
                    <a href="" class="btn bg-cyan btn-flat btn-sm" data-toggle="modal" data-target="#kategori">
                        <i class="fas fa-plus"></i> &nbsp; Tambah
                    </a>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="tabel" class="table table-bordered table-striped">
                    <thead class="text-center">
                        <tr>
                            <th width="2%">No</th>
                            <th>Kategori</th>
                            <th width="20%"><i class="fa fa-certificate"></i></th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($kategori as $key => $item)

                        <tr>
                            <td class="text-center">{{ $key+1 }}. </td>
                            <td>{{ $item->nama }}</td>
                            <td class="text-center">
                                <a href="" data-toggle="modal" data-target="#kategori_{{ $item->id }}"
                                    class="btn btn-success btn-sm btn-flat"><i class=" fa fa-edit"></i>&nbsp;
                                    Ubah</a>
                                &nbsp;
                                <a href="{{ route('hapus.kategori', $item->id) }}"
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

<!-- Modal -->
<div class="modal fade" id="kategori" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-plus"></i> &nbsp; Tambah Kategori</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>


            <form method="post" action="{{ route('insert.kategori') }}">
                @csrf

                <div class="modal-body">
                    <div class="form-group">
                        <label for="nama">Kategori</label>
                        <input type="text" name="nama" class="form-control form-control-sm" style="border-radius: 0px;"
                            id="nama" required>
                    </div>

                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-danger btn-flat btn-sm" data-dismiss="modal"><i
                            class="fa fa-ban"></i> &nbsp; Batal</button>
                    <button type="submit" class="btn bg-cyan btn-flat btn-sm"><i class="fa fa-save"></i> &nbsp;
                        Simpan</button>
                </div>

            </form>

        </div>
    </div>
</div>


@foreach ($kategori as $item2)

<!-- Modal -->
<div class="modal fade" id="kategori_{{ $item2->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-plus"></i> &nbsp; Tambah Kategori</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>


            <form method="post" action="{{ route('update.kategori') }}">
                @csrf

                <input type="hidden" name="id" value="{{ $item2->id }}">

                <div class="modal-body">
                    <div class="form-group">
                        <label for="nama">Kategori</label>
                        <input type="text" name="nama" class="form-control form-control-sm" value="{{ $item2->nama }}"
                            style="border-radius: 0px;" id="nama" required>
                    </div>

                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-danger btn-flat btn-sm" data-dismiss="modal"><i
                            class="fa fa-ban"></i> &nbsp; Batal</button>
                    <button type="submit" class="btn bg-cyan btn-flat btn-sm"><i class="fa fa-edit"></i> &nbsp;
                        Ubah</button>
                </div>

            </form>

        </div>
    </div>
</div>

@endforeach



@endsection

@push('scripts')
<!-- DataTables  & Plugins -->
<script src="{{ asset('backend') }}/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="{{ asset('backend') }}/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="{{ asset('backend') }}/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="{{ asset('backend') }}/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="{{ asset('backend') }}/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="{{ asset('backend') }}/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="{{ asset('backend') }}/plugins/jszip/jszip.min.js"></script>
<script src="{{ asset('backend') }}/plugins/pdfmake/pdfmake.min.js"></script>
<script src="{{ asset('backend') }}/plugins/pdfmake/vfs_fonts.js"></script>
<script src="{{ asset('backend') }}/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="{{ asset('backend') }}/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="{{ asset('backend') }}/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script src="{{ asset('backend/js/code.js') }}"></script>

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
    

</script>


@endpush