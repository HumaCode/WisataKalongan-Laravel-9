<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AcaraController extends Controller
{
    public function index()
    {
        $data = [
            "title" => "Event Acara"
        ];
        return view("user.acara", $data);
    }   //
}
