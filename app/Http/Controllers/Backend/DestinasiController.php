<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Destinasi;
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
}
