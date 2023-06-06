<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Invoice Print</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('backend') }}/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('backend') }}/dist/css/adminlte.min.css">
</head>

<body>
    <div class="wrapper mt-4">
        <!-- Main content -->


        <div class="row">
            <div class="col-lg-7 offset-1">
                <div class="invoice p-3 mb-3" style="background-color: #e3e3e3; border-radius: 10px;">
                    <!-- title row -->
                    <div class="row">
                        <div class="col-12 mb-4">
                            <h4>
                                <img src="{{ url($setting->logo) }}" width="30"
                                    class="brand-image img-circle elevation-3" alt=""> Tiket
                                {{ $order->destinasi->nama }}
                                <small class="float-right">Tanggal, {{ tanggal_indonesia($order->tgl_order)
                                    }}</small>
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
                                <span class="text-success">Dibayar Pada {{ tanggal_indonesia($order->tgl_order)
                                    }}</span>
                            </p>
                        </div>
                        <!-- /.col -->
                        <div class="col-6">

                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->


                </div>
            </div>
        </div>


        <!-- /.content -->
    </div>
    <!-- ./wrapper -->
    <!-- Page specific script -->
    <script>
        window.addEventListener("load", window.print());
    </script>
</body>

</html>