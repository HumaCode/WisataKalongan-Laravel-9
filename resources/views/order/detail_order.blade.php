@extends('admin_dashboard')


@section('admin')


<div class="invoice p-3 mb-3">
    <!-- title row -->
    <div class="row">
        <div class="col-12 mb-4">
            <h4>
                <img src="{{ url($setting->logo) }}" width="30" class="brand-image img-circle elevation-3" alt=""> Tiket
                {{ $order->destinasi->nama }}
                <small class="float-right">Tanggal, {{ tanggal_indonesia($order->tgl_order) }}</small>
            </h4>
        </div>
        <!-- /.col -->
    </div>


    <!-- Table row -->
    <div class="row">
        <div class="col-12 table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Jumlah Tiket</th>
                        <th>Keterangan</th>
                        <th>Jumlah Tranfer</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ $order->jml_tiket }}</td>
                        <td>{{ $order->ket_lain }}</td>
                        <td>{{ $order->nominal }}</td>
                    </tr>

                </tbody>
            </table>
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->

    <div class="row">
        <!-- accepted payments column -->
        <div class="col-6">
            <p class="lead">Metode Pembayaran:</p>
            <img src="{{ asset('backend') }}/img/bri.png" alt="BRI" width="100">

            <p class="text-muted well well-sm shadow-none" style="margin-top: 10px;">
                <span class="text-success">Dibayar Pada {{ tanggal_indonesia($order->tgl_order) }}</span>
            </p>
        </div>
        <!-- /.col -->
        <div class="col-6">
            <img src="{{ url($order->gambar) }}" width="300" alt="">
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->

    <!-- this row will not appear when printing -->
    {{-- <div class="row no-print">
        <div class="col-12">
            <a href="{{ route('invoice.print', $order->id) }}" rel="noopener" target="_blank" class="btn btn-default"><i
                    class="fas fa-print"></i> Print</a>

        </div>
    </div> --}}
</div>


@endsection