<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DetailwisataController extends Controller
{
    public function index()
    {
        $data = [
            "title" => "Detail Wisata"
        ];
        return view("user.detailwisata", $data);
    }   //
}
