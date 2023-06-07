<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AcaraController extends Controller
{
    public function index()
    {
        $data = [
            "title" => "Event Acara",
            "event" => Event::orderBy('id', 'DESC')->get(),
        ];
        return view("user.acara", $data);
    }   //

    public function detailAcara($slug)
    {
        $data = [
            "title" => "Event Acara",
            "event" => Event::where('slug', $slug)->first(),
        ];

        DB::table('events')->where('slug', $slug)->increment('hint_event');


        return view("user.detailacara", $data);
    }
}
