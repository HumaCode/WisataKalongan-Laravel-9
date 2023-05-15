<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Budaya;
use Illuminate\Http\Request;

class BudayaController extends Controller
{
    public function index()
    {
        $title      = "Daftar Cagar Budaya";
        $menu       = "destinasi";
        $submenu    = "sub_budaya";
        $budaya     = Budaya::orderBy('id', 'DESC')->get();

        return view('budaya.budaya', compact('submenu', 'menu', 'title', 'budaya'));
    }
}
