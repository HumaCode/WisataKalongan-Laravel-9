<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DestinasiwisataController extends Controller
{
    public function index()
    {
        $data = [
            "title" => "Destinasi Wisata"
        ];
        return view("user.destinasi", $data);
    }   //
}
