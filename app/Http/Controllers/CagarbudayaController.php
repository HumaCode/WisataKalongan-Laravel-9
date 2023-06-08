<?php

namespace App\Http\Controllers;

use App\Models\Budaya;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CagarbudayaController extends Controller
{
    public function index()
    {
        $data = [
            "title"     => "Cagar Budaya",
            "budaya"    => Budaya::orderBy('id', 'DESC')->get(),
        ];
        return view("user.cagarbudaya", $data);
    }   //

    public function detailBudaya($slug)
    {

        $data = [
            "title"         => "Destinasi Wisata",
            "budaya"        => Budaya::where('slug', $slug)->first(),
        ];

        DB::table('budayas')->where('slug', $slug)->increment('dilihat');

        return view("user.detailbudaya", $data);
    }
}
