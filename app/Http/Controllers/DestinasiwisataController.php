<?php

namespace App\Http\Controllers;

use App\Models\Destinasi;
use App\Models\Order;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;


class DestinasiwisataController extends Controller
{
    public function index()
    {
        $data = [
            "title"     => "Destinasi Wisata",
            "destinasi" => Destinasi::orderBy('id', 'DESC')->get(),
        ];
        return view("user.destinasi", $data);
    }

    public function detail($slug)
    {

        $data = [
            "title"         => "Destinasi Wisata",
            "destinasi"     => Destinasi::where('slug', $slug)->first(),
        ];

        DB::table('destinasis')->where('slug', $slug)->increment('dilihat');

        return view("user.detailwisata", $data);
    }

    public function order(Request $request)
    {
        // return $request->all();

        $destinasi_id = $request->destinasi_id;

        $image      = $request->file('image');
        $name_gen   = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
        Image::make($image)->resize(500, 800)->save('backend/upload/order/' . $name_gen);
        $gambar    = 'backend/upload/order/' . $name_gen;

        Order::insert([
            'nama'              => $request->nama,
            'destinasi_id'      => $destinasi_id,
            'tlp'               => $request->tlp,
            'email'             => $request->email,
            'tgl_order'         => Carbon::now(),
            'bank'              => $request->bank,
            'jml_tiket'         => $request->jml_tiket,
            'nominal'           => $request->nominal,
            'gambar'            => $gambar,
            'ket_lain'          => $request->ket_lain,
            'created_at'        => Carbon::now(),
        ]);

        $notification = array(
            'message'       => 'Tiket berhasil di pesan, tunjukan bukti tranfer ke petugas tiket',
            'alert-type'    => 'success',
        );

        return redirect()->back()->with($notification);
    }
}
