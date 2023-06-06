<?php

namespace App\Http\Controllers;

use App\Models\Pertanyaan;
use Carbon\Carbon;
use Illuminate\Http\Request;

class KontakController extends Controller
{
    public function index()
    {
        $data = [
            "title" => "Kontak Kami"
        ];
        return view("user.kontak", $data);
    }   //

    public function pertanyaan(Request $request)
    {
        Pertanyaan::insert([
            'name'       => $request->name,
            'email'      => $request->email,
            'subject'    => $request->subject,
            'message'    => $request->message,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        $notification = array(
            'message'       => 'Pertanyaan berhasil dikirim',
            'alert-type'    => 'success',
        );

        return redirect()->back()->with($notification);
    }
}
