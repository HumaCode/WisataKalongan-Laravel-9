<?php

namespace App\Http\Controllers;

use App\Models\Destinasi;
use Illuminate\Http\Request;

class TiketController extends Controller
{
    public function tiket()
    {

        $data = [
            "title"         => "Pemesanan Tiket",
            "destinasi"     => Destinasi::where('tiket', 1)->get(),
        ];

        // DB::table('destinasis')->where('slug', $slug)->increment('dilihat');

        return view("user.tiket", $data);
    }
}
