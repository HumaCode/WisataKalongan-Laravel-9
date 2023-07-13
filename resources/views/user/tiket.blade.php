@extends('layout.main')

@section('content')



<!-- Page Header Start -->

<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">

    <div class="container text-center py-5">
        <h1 class="display-3 text-white mb-4 animated slideInDown">Tiket Wisata</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                <li class="breadcrumb-item active" aria-current="page">Detail Wisata</li>

            </ol>

        </nav>

    </div>

</div>

<!-- Page Header End -->



<div class="untree_co-section">
    <div class="container">
        <div class="row justify-content-between align-items-center">

            <!-- Quote Start -->

            <div class="container-fluid quote my-5 py-5" data-parallax="scroll"
                data-image-src="{{ url('assets/img/hutan.jpg') }}">
                <div class="container py-5">
                    <div class="row justify-content-center">

                        <div class="col-lg-7">
                            <div class="bg-white rounded p-4 p-sm-5 wow fadeIn" data-wow-delay="0.5s">
                                <h1 class="display-5 text-center mb-5">Dapatkan Tiket</h1>

                                <form action="{{ route('order') }}" method="post" enctype="multipart/form-data">

                                    @csrf



                                    {{-- <input type="hidden" name="destinasi_id" value="{{ $destinasi->id }}"> --}}



                                    <div class="row g-3">
                                        <div class="col-sm-6">
                                            <div class="form-floating">
                                                <input type="text" name="nama" class="form-control bg-light border-0"
                                                    id="gname" placeholder="Gurdian Name" required>
                                                <label for="gname">Nama Lengkap</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-floating">
                                                <input type="email" name="email" class="form-control bg-light border-0"
                                                    id="gmail" placeholder="Gurdian Email" required>
                                                <label for="gmail">Email</label>
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="form-floating">
                                                <input type="text" name="tlp" class="form-control bg-light border-0"
                                                    id="cname" placeholder="Child Name" required>
                                                <label for="cname">Nomor HP/WA</label>
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="form-floating">
                                                <input type="text" name="bank" class="form-control bg-light border-0"
                                                    id="cage" placeholder="Child Age" value="Bank BRI" readonly>
                                                <label for="cage">Bank</label>
                                            </div>
                                        </div>

                                        <div class="col-sm-12">
                                            <div class="form-floating">
                                                <select name="destinasi_id" id="destinasi_id"
                                                    class="form-control bg-light border-0">
                                                    <option selected disabled>-- Pilih --</option>

                                                    @foreach ($destinasi as $item)
                                                    <option value="{{ $item->id }}">{{ $item->nama }} | {{
                                                        $item->harga_tiket }}</option>
                                                    @endforeach
                                                </select>

                                                <label for="cage">Pilih Destinasi</label>
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="form-floating">
                                                <input type="number" name="jml_tiket" min="0"
                                                    class="form-control bg-light border-0" id="cname"
                                                    placeholder="Child Name" required>
                                                <label for="cname">Jumlah Tiket</label>
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <p>Rekening Bank BRI : <b>09220012129283283</b></p>
                                        </div>

                                        <div class="col-12">
                                            <div class="form-floating">
                                                <input type="number" min="0" name="nominal" min="0"
                                                    class="form-control bg-light border-0" id="cname"
                                                    placeholder="Child Name" required>
                                                <label for="cname">Nominal</label>
                                            </div>
                                        </div>

                                        <small class="text-danger">* Silahkan bayar tiket dengan metode tranfer ke

                                            no

                                            rekening diatas, dan kemudian upload bukti tranfer</small>

                                        <div class="col-12">

                                            <div class="form-floating">

                                                <input type="file" name="image" min="0"
                                                    class="form-control bg-light border-0" id="cname"
                                                    placeholder="Child Name" accept=".jpg,.jpeg" required>

                                                <label for="cname">Bukti Tranfer</label>

                                            </div>

                                        </div>

                                        <div class="col-12">

                                            <div class="form-floating">

                                                <textarea class="form-control bg-light border-0"
                                                    placeholder="Leave a message here" name="ket_lain" id="message"
                                                    style="height: 100px" required></textarea>

                                                <label for="message">Keterangan</label>

                                            </div>

                                        </div>

                                        <div class="col-12 text-center">

                                            <button class="btn btn-primary py-3 px-4" type="submit">Pesan

                                                Sekarang</button>

                                        </div>

                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Quote End -->

            {{-- @endif --}}
        </div>
    </div>
</div>





@endsection