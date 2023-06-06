@extends('layout.main')
@section('content')

<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center py-5">
        <h1 class="display-3 text-white mb-4 animated slideInDown">Detail Wisata</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                <li class="breadcrumb-item active" aria-current="page">Projects</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->

<div class="untree_co-section">
    <div class="container">
        <div class="row justify-content-between align-items-center">

            <div class="row">
                <div class="col-lg-5">
                    <figure class="img-play-video">

                        {{-- <h2 class="section-title text-left mb-4">PANTAI WONOKERTO</h2> --}}
                        <img src="{{ url($destinasi->gambar) }}" alt="Image" class="img-fluid rounded-20">
                    </figure>
                </div>

                <div class="col-lg-6 offset-1">
                    <h2 class="section-title text-left mb-4">{{ $destinasi->nama }}</h2>


                    <table class="table">

                        <tbody>
                            <tr>
                                <th scope="row" width="250">Nama Wisata</th>
                                <td>{{ $destinasi->nama }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Alamat</th>
                                <td>{{ $destinasi->alamat }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Harga Tiket</th>
                                <td>{{ $destinasi->harga_tiket }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Jam Operasional</th>
                                <td>{{ $destinasi->buka }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Lokasi</th>
                                <td><a href="{{ $destinasi->lokasi }}" class="btn btn-success btn-sm"
                                        target="_blank">Klik</a></td>
                            </tr>
                            <tr>
                                <th scope="row">Dilihat</th>
                                <td>{{ $destinasi->dilihat }} Kali</td>
                            </tr>

                        </tbody>
                    </table>

                </div>

            </div>
            <p>{!! $destinasi->deskripsi !!}</p>


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

                                    <input type="hidden" name="destinasi_id" value="{{ $destinasi->id }}">

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

        </div>
    </div>
</div>


@endsection