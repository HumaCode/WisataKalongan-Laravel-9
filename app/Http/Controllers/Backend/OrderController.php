<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $title      = "Pemesanan Tiket Masuk";
        $menu       = "";
        $submenu    = "sub_order";
        $order      = Order::orderBy('id', 'DESC')->get();

        return view('order.order', compact('submenu', 'menu', 'title', 'order'));
    }

    public function detailOrder($id)
    {
        $title      = "Detail Pemesanan Tiket Masuk";
        $menu       = "";
        $submenu    = "sub_order";
        $order      = Order::findOrFail($id)->first();

        return view('order.detail_order', compact('submenu', 'menu', 'title', 'order'));
    }
}
