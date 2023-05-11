<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Kategori;
use Carbon\Carbon;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function index()
    {
        $title      = "Kategori";
        $menu       = "";
        $submenu    = "sub_kategori";
        $kategori   = Kategori::orderBy('id', 'DESC')->get();

        return view('kategori.kategori', compact('submenu', 'menu', 'title', 'kategori'));
    }

    public function insertKategori(Request $request)
    {
        Kategori::insert([
            'nama'          => $request->nama,
            'created_at'    => Carbon::now(),
        ]);

        $notification = array(
            'message'       => 'Kategori berhasil ditambahkan',
            'alert-type'    => 'success',
        );

        return redirect()->back()->with($notification);
    }

    public function updateKategori(Request $request)
    {

        // return $request->nama;
        $kategori_id = $request->id;

        Kategori::findOrFail($kategori_id)->update([
            'nama'          => $request->nama,
            'updated_at'    => Carbon::now(),
        ]);

        $notification = array(
            'message'       => 'Kategori berhasil diubah',
            'alert-type'    => 'success',
        );

        return redirect()->back()->with($notification);
    }

    public function hapusKategori($id)
    {
        Kategori::findOrFail($id)->delete();

        $notification = array(
            'message'       => 'Kategori berhasil dihapus',
            'alert-type'    => 'success',
        );

        return redirect()->back()->with($notification);
    }
}
