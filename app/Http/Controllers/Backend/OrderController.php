<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Setting;
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
        $order      = Order::findOrFail($id);
        $setting    = Setting::find(1);

        return view('order.detail_order', compact('submenu', 'menu', 'title', 'order', 'setting'));
    }

    public function invoicePrint($id)
    {
        $order      = Order::findOrFail($id);
        $setting    = Setting::find(1);


        return view('order.invoice', compact('order', 'setting'));
    }

    public function hapusOrder($id)
    {
        $order = Order::findOrFail($id);

        $img            = $order->gambar;
        unlink($img);
        Order::findOrFail($id)->delete();

        $notification = array(
            'message'       => 'Orderan berhasil dihapus',
            'alert-type'    => 'success',
        );

        return redirect()->back()->with($notification);
    }
}
