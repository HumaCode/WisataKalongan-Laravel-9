<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Carbon\Carbon;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Str;



class EventController extends Controller
{
    public function index()
    {
        $title      = "Event";
        $menu       = "destinasi";
        $submenu    = "sub_event";
        $event      = Event::orderBy('id', 'DESC')->get();

        return view('event.event', compact('submenu', 'menu', 'title', 'event'));
    }

    public function tambahEvent()
    {
        $title      = "Tambah Data Event";
        $menu       = "destinasi";
        $submenu    = "sub_event";

        return view('event.tambah_event', compact('submenu', 'menu', 'title'));
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Event::class, 'slug', $request->nama);

        return response()->json(['slug' => $slug]);
    }

    public function storeEvent(Request $request)
    {
        // return $request->tgl_mulai;
        $validasi = $request->validate(
            [
                'nama'          => 'required',
                'slug'          => 'required',
                'tgl_mulai'     => 'required',
                'tgl_selesai'   => 'required',
                'penyelenggara' => 'required',
                'waktu'         => 'required',
                'alamat'        => 'required',
                'lokasi'        => 'required',
                'deskripsi'     => 'required',
                'image'         => 'required',
            ],
            [
                'nama.required'             => 'Nama tidak boleh kosong..!!',
                'slug.required'             => 'Slug tidak boleh kosong..!!',
                'tgl_mulai.required'        => 'Tanggal Mulai tidak boleh kosong..!!',
                'tgl_selesai.required'      => 'Tanggal Selesai tidak boleh kosong..!!',
                'waktu.required'            => 'Waktu tidak boleh kosong..!!',
                'penyelenggara.required'    => 'Waktu tidak boleh kosong..!!',
                'alamat.required'           => 'Alamat tidak boleh kosong..!!',
                'lokasi.required'           => 'Lokasi tidak boleh kosong..!!',
                'deskripsi.required'        => 'Deskripsi tidak boleh kosong..!!',
                'image.required'            => 'Gambar tidak boleh kosong..!!',
            ]
        );

        // gambar
        $image      = $request->file('image');
        $name_gen   = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
        Image::make($image)->resize(800, 800)->save('backend/upload/event/' . $name_gen);
        $gambar    = 'backend/upload/event/' . $name_gen;

        Event::insert([
            'nama'              => $request->nama,
            'slug'              => Str::of($request->nama)->slug('-'),
            'tgl_mulai'         => $request->tgl_mulai,
            'tgl_selesai'       => $request->tgl_selesai,
            'waktu'             => $request->waktu,
            'penyelenggara'     => $request->penyelenggara,
            'deskripsi'         => $request->deskripsi,
            'alamat'            => $request->alamat,
            'lokasi'            => $request->lokasi,
            'gambar'            => $gambar,
            'created_at'        => Carbon::now(),
        ]);

        $notification = array(
            'message'       => 'Event berhasil ditambahkan',
            'alert-type'    => 'success',
        );

        return redirect()->route('event')->with($notification);
    }

    public function ubahEvent(Request $request, $slug)
    {
        $event      = Event::where('slug', $slug)->first();

        $title      = "Ubah Data Event";
        $menu       = "destinasi";
        $submenu    = "sub_event";
        $event      = Event::findOrFail($event->id);

        return view('event.ubah_event', compact('submenu', 'menu', 'title', 'event'));
    }

    public function updateEvent(Request $request)
    {
        $id = $request->id;
        $event = Event::findOrFail($id)->first();
        $slug_lama = $event->slug;
        // return $event->slug;


        $validasi =
            [
                'nama'          => 'required',
                'slug'          => 'required',
                'tgl_mulai'     => 'required',
                'tgl_selesai'   => 'required',
                'penyelenggara' => 'required',
                'waktu'         => 'required',
                'alamat'        => 'required',
                'lokasi'        => 'required',
                'deskripsi'     => 'required',
            ];

        if ($request->slug != $slug_lama) {
            $validasi['slug'] = 'required';
        }

        $validateData = $request->validate($validasi, [
            'nama.required'             => 'Nama tidak boleh kosong..!!',
            'slug.required'             => 'Slug tidak boleh kosong..!!',
            'tgl_mulai.required'        => 'Tanggal Mulai tidak boleh kosong..!!',
            'tgl_selesai.required'      => 'Tanggal Selesai tidak boleh kosong..!!',
            'waktu.required'            => 'Waktu tidak boleh kosong..!!',
            'penyelenggara.required'    => 'Waktu tidak boleh kosong..!!',
            'alamat.required'           => 'Alamat tidak boleh kosong..!!',
            'lokasi.required'           => 'Lokasi tidak boleh kosong..!!',
            'deskripsi.required'        => 'Deskripsi tidak boleh kosong..!!',
        ]);

        if ($request->file('image')) {

            $img    = $event->gambar;
            unlink($img);

            // gambar 1
            $image      = $request->file('image');
            $name_gen   = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(800, 800)->save('backend/upload/event/' . $name_gen);
            $gambar   = 'backend/upload/event/' . $name_gen;

            Event::findOrFail($id)->update([
                'nama'              => $request->nama,
                'slug'              => Str::of($request->nama)->slug('-'),
                'tgl_mulai'         => $request->tgl_mulai,
                'tgl_selesai'       => $request->tgl_selesai,
                'waktu'             => $request->waktu,
                'penyelenggara'     => $request->penyelenggara,
                'deskripsi'         => $request->deskripsi,
                'alamat'            => $request->alamat,
                'lokasi'            => $request->lokasi,
                'gambar'            => $gambar,
                'updated_at'        => Carbon::now(),
            ]);
        } else {
            Event::findOrFail($id)->update([
                'nama'              => $request->nama,
                'slug'              => Str::of($request->nama)->slug('-'),
                'tgl_mulai'         => $request->tgl_mulai,
                'tgl_selesai'       => $request->tgl_selesai,
                'waktu'             => $request->waktu,
                'penyelenggara'     => $request->penyelenggara,
                'deskripsi'         => $request->deskripsi,
                'alamat'            => $request->alamat,
                'lokasi'            => $request->lokasi,
                'updated_at'        => Carbon::now(),
            ]);
        }

        $notification = array(
            'message'       => 'Event berhasil diubah',
            'alert-type'    => 'success',
        );

        return redirect()->route('event')->with($notification);
    }

    public function hapusEvent($slug)
    {
        $event = Event::where('slug', $slug)->first();

        $img            = $event->gambar;
        unlink($img);
        Event::findOrFail($event->id)->delete();

        $notification = array(
            'message'       => 'Event berhasil dihapus',
            'alert-type'    => 'success',
        );

        return redirect()->back()->with($notification);
    }
}
