<?php

namespace App\Http\Controllers;

use App\Models\Destinasi;
use App\Models\Setting;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data = [
            "title"     => "Home",
            "destinasi" => Destinasi::count(),
            "kunjungan" => Setting::find(1),
        ];
        return view("user.home", $data);
    }   //
}
