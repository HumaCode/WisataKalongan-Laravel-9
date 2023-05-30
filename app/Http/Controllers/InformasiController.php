<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InformasiController extends Controller
{
    public function index()
    {
        $data = [
            "title" => "Layanan Informasi"
        ];
        return view("user.informasi", $data);
    }   //
}
