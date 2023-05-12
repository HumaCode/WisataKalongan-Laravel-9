<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Destinasi;
use App\Models\Kategori;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Str;
use \Cviebrock\EloquentSluggable\Services\SlugService;

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
        $title      = "Tambah Data Destinasi";
        $menu       = "destinasi";
        $submenu    = "sub_destinasi";
        $kategori   = Kategori::latest()->get();

        return view('destinasi.tambah_destinasi', compact('submenu', 'menu', 'title', 'kategori'));
    }

    public function storeDestinasi(Request $request)
    {
        $validasi = $request->validate(
            [
                'nama'          => 'required',
                'slug'          => 'required',
                'kategori_id'   => 'required',
                'buka'          => 'required',
                'alamat'        => 'required',
                'lokasi'        => 'required',
                'deskripsi'     => 'required',
                'image'         => 'required',
            ],
            [
                'nama.required'         => 'Nama tidak boleh kosong..!!',
                'slug.required'         => 'Slug tidak boleh kosong..!!',
                'kategori_id.required'  => 'Kategori harus dipilih..!!',
                'buka.required'         => 'Jam Buka tidak boleh kosong..!!',
                'alamat.required'       => 'Alamat tidak boleh kosong..!!',
                'lokasi.required'       => 'Lokasi tidak boleh kosong..!!',
                'deskripsi.required'    => 'Deskripsi tidak boleh kosong..!!',
                'image.required'        => 'Gambar tidak boleh kosong..!!',
            ]
        );



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
            'nama'              => $request->nama,
            'slug'              => Str::of($request->nama)->slug('-'),
            'kategori_id'       => $request->kategori_id,
            'tiket'             => $tkt,
            'harga_tiket'       => $hrg_tkt,
            'buka'              => $request->buka,
            'alamat'            => $request->alamat,
            'lokasi'            => $request->lokasi,
            'deskripsi'         => $request->deskripsi,
            'deskripsi_singkat' => Str::of($request->deskripsi)->limit(100, '...'),
            'gambar'            => $save_url,
            'created_at'        => Carbon::now(),
        ]);

        $notification = array(
            'message'       => 'Destinasi berhasil ditambahkan',
            'alert-type'    => 'success',
        );

        return redirect()->route('destinasi')->with($notification);
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Destinasi::class, 'slug', $request->nama);

        return response()->json(['slug' => $slug]);
    }

    public function ubahDestinasi($slug)
    {
        $destinasi  = Destinasi::where('slug', $slug)->first();

        $title      = "Ubah Data Destinasi";
        $menu       = "destinasi";
        $submenu    = "sub_destinasi";
        $kategori   = Kategori::latest()->get();
        $destinasi  = Destinasi::findOrFail($destinasi->id);

        return view('destinasi.ubah_destinasi', compact('submenu', 'menu', 'title', 'kategori', 'destinasi'));
    }

    public function updateDestinasi(Request $request)
    {
        $slug_lama = $request->slug_lama;
        $destinasi = Destinasi::where('slug', $slug_lama)->first();

        $validasi =
            [
                'nama'          => 'required',
                'kategori_id'   => 'required',
                'buka'          => 'required',
                'alamat'        => 'required',
                'lokasi'        => 'required',
                'deskripsi'     => 'required',
            ];

        if ($request->slug != $slug_lama) {
            $validasi['slug'] = 'required';
        }

        $validateData = $request->validate($validasi, [
            'nama.required'         => 'Nama tidak boleh kosong..!!',
            'slug.required'         => 'Slug tidak boleh kosong..!!',
            'kategori_id.required'  => 'Kategori harus dipilih..!!',
            'buka.required'         => 'Jam Buka tidak boleh kosong..!!',
            'alamat.required'       => 'Alamat tidak boleh kosong..!!',
            'lokasi.required'       => 'Lokasi tidak boleh kosong..!!',
            'deskripsi.required'    => 'Deskripsi tidak boleh kosong..!!',
        ]);

        if ($request->harga_tiket == null) {
            $tkt        = 0;
            $hrg_tkt    = 0;
        } else {
            $tkt        = 1;
            $hrg_tkt    = $request->harga_tiket;
        }


        if ($request->file('image')) {
            $img   = $destinasi->gambar;
            unlink($img);

            $image      = $request->file('image');
            $name_gen   = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(800, 500)->save('backend/upload/destinasi/' . $name_gen);
            $save_url   = 'backend/upload/destinasi/' . $name_gen;



            Destinasi::findOrFail($destinasi->id)->update([
                'nama'              => $request->nama,
                'slug'              => Str::of($request->nama)->slug('-'),
                'kategori_id'       => $request->kategori_id,
                'tiket'             => $tkt,
                'harga_tiket'       => $hrg_tkt,
                'buka'              => $request->buka,
                'alamat'            => $request->alamat,
                'lokasi'            => $request->lokasi,
                'deskripsi'         => $request->deskripsi,
                'deskripsi_singkat' => Str::of($request->deskripsi)->limit(100, '...'),
                'gambar'            => $save_url,
                'updated_at'        => Carbon::now(),
            ]);
        } else {
            Destinasi::findOrFail($destinasi->id)->update([
                'nama'              => $request->nama,
                'slug'              => Str::of($request->nama)->slug('-'),
                'kategori_id'       => $request->kategori_id,
                'tiket'             => $tkt,
                'harga_tiket'       => $hrg_tkt,
                'buka'              => $request->buka,
                'alamat'            => $request->alamat,
                'lokasi'            => $request->lokasi,
                'deskripsi'         => $request->deskripsi,
                'deskripsi_singkat' => Str::of($request->deskripsi)->limit(100, '...'),
                'updated_at'        => Carbon::now(),
            ]);
        }

        $notification = array(
            'message'       => 'Destinasi berhasil diubah',
            'alert-type'    => 'success',
        );

        return redirect()->route('destinasi')->with($notification);
    }

    public function hapusDestinasi($slug)
    {
        $destinasi = Destinasi::where('slug', $slug)->first();

        // return $destinasi->gambar;

        $img            = $destinasi->gambar;
        unlink($img);

        Destinasi::findOrFail($destinasi->id)->delete();

        $notification = array(
            'message'       => 'Destinasi berhasil dihapus',
            'alert-type'    => 'success',
        );

        return redirect()->back()->with($notification);
    }
}
