<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CagarbudayaController extends Controller
{
    public function index()
    {
        $data = [
            "title" => "Cagar Budaya"
        ];
        return view("user.cagarbudaya", $data);
    }   //
}
