<?php

namespace App\Http\Controllers;

use App\Models\Destinasi;
use Illuminate\Http\Request;

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

        return view("user.detailwisata", $data);
    }
}
