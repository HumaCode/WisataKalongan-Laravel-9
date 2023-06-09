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
        ];
        return view("user.home", $data);
    }   //
}
