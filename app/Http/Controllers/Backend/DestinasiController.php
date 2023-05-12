<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Destinasi;
use App\Models\Kategori;
use Illuminate\Http\Request;

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
    }
}
