<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Pertanyaan;
use Illuminate\Http\Request;

class PertanyaanController extends Controller
{
    public function index()
    {
        $title      = "Daftar Pertanyaan Pengunjung";
        $menu       = "";
        $submenu    = "sub_tanya";
        $pertanyaan = Pertanyaan::orderBy('id', 'DESC')->get();

        return view('kontak.tanya', compact('submenu', 'menu', 'title', 'pertanyaan'));
    }

    public function hapusPertanyaan($id)
    {
        Pertanyaan::findOrFail($id)->delete();

        $notification = array(
            'message'       => 'Pertanyaaan berhasil dihapus',
            'alert-type'    => 'success',
        );

        return redirect()->back()->with($notification);
    }
}
