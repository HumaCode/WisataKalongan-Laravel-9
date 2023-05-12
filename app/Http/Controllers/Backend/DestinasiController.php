<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Destinasi;
use App\Models\Kategori;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class DestinasiController extends Controller
{
    public function index()
    {
        $title      = "Destinasi Wisata";
        $menu       = "destinasi";
        $submenu    = "sub_destinasi";
        $destinasi  = Destinasi::orderBy('id', 'DESC')->get();

        return view('destinasi.destinasi', compact('submenu', 'menu', 'title', 'destinasi'));
    }

    public function tambahDestinasi()
    {
        $title      = "Tambah Destinasi";
        $menu       = "destinasi";
        $submenu    = "sub_destinasi";
        $kategori   = Kategori::latest()->get();

        return view('destinasi.tambah_destinasi', compact('submenu', 'menu', 'title', 'kategori'));
    }

    public function storeDestinasi(Request $request)
    {


        $image      = $request->file('image');
        $name_gen   = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
        Image::make($image)->resize(800, 500)->save('backend/upload/destinasi/' . $name_gen);
        $save_url   = 'backend/upload/destinasi/' . $name_gen;

        if ($request->harga_tiket == null) {
            $tkt        = 0;
            $hrg_tkt    = 0;
        } else {
            $tkt        = 1;
            $hrg_tkt    = $request->harga_tiket;
        }

        Destinasi::insert([
            'nama'          => $request->nama,
            'kategori_id'   => $request->kategori_id,
            'tiket'         => $tkt,
            'harga_tiket'   => $hrg_tkt,
            'buka'          => $request->buka,
            'alamat'        => $request->alamat,
            'lokasi'        => $request->lokasi,
            'deskripsi'     => $request->deskripsi,
            'gambar'        => $save_url,
            'created_at'    => Carbon::now(),
        ]);

        $notification = array(
            'message'       => 'Destinasi berhasil ditambahkan',
            'alert-type'    => 'success',
        );

        return redirect()->route('destinasi')->with($notification);
    }
}
