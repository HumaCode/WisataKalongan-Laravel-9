<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Budaya;
use Carbon\Carbon;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Str;

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

    public function tambahBudaya()
    {
        $title      = "Tambah Cagar Budaya";
        $menu       = "destinasi";
        $submenu    = "sub_budaya";

        return view('budaya.tambah_budaya', compact('submenu', 'menu', 'title'));
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Budaya::class, 'slug', $request->nama);

        return response()->json(['slug' => $slug]);
    }

    public function storeBudaya(Request $request)
    {
        $validasi = $request->validate(
            [
                'nama'          => 'required',
                'slug'          => 'required',
                'alamat'        => 'required',
                'lokasi'        => 'required',
                'deskripsi'     => 'required',
                'image'         => 'required',
            ],
            [
                'nama.required'             => 'Nama tidak boleh kosong..!!',
                'slug.required'             => 'Slug tidak boleh kosong..!!',
                'alamat.required'           => 'Alamat tidak boleh kosong..!!',
                'lokasi.required'           => 'Lokasi tidak boleh kosong..!!',
                'deskripsi.required'        => 'Deskripsi tidak boleh kosong..!!',
                'image.required'            => 'Gambar tidak boleh kosong..!!',
            ]
        );

        // gambar
        $image      = $request->file('image');
        $name_gen   = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
        Image::make($image)->resize(1080, 1440)->save('backend/upload/budaya/' . $name_gen);
        $gambar    = 'backend/upload/budaya/' . $name_gen;

        Budaya::insert([
            'nama'              => $request->nama,
            'slug'              => Str::of($request->nama)->slug('-'),
            'deskripsi'         => $request->deskripsi,
            'alamat'            => $request->alamat,
            'dilihat'           => 0,
            'lokasi'            => $request->lokasi,
            'gambar'            => $gambar,
            'created_at'        => Carbon::now(),
        ]);

        $notification = array(
            'message'       => 'Cagar Budaya berhasil ditambahkan',
            'alert-type'    => 'success',
        );

        return redirect()->route('budaya')->with($notification);
    }

    public function ubahBudaya($slug)
    {
        $budaya     = Budaya::where('slug', $slug)->first();

        $title      = "Ubah Data Cagar Budaya";
        $menu       = "destinasi";
        $submenu    = "sub_budaya";
        $budaya     = Budaya::findOrFail($budaya->id);

        return view('budaya.ubah_budaya', compact('submenu', 'menu', 'title', 'budaya'));
    }

    public function updateBudaya(Request $request)
    {
        $id = $request->id;
        $budaya = Budaya::findOrFail($id)->first();
        $slug_lama = $budaya->slug;

        $validasi =
            [
                'nama'          => 'required',
                'slug'          => 'required',
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
            'alamat.required'           => 'Alamat tidak boleh kosong..!!',
            'lokasi.required'           => 'Lokasi tidak boleh kosong..!!',
            'deskripsi.required'        => 'Deskripsi tidak boleh kosong..!!',
        ]);

        if ($request->file('image')) {

            $img    = $budaya->gambar;
            unlink($img);

            // gambar 1
            $image      = $request->file('image');
            $name_gen   = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(1080, 1440)->save('backend/upload/budaya/' . $name_gen);
            $gambar   = 'backend/upload/budaya/' . $name_gen;

            Budaya::findOrFail($id)->update([
                'nama'              => $request->nama,
                'slug'              => Str::of($request->nama)->slug('-'),
                'deskripsi'         => $request->deskripsi,
                'alamat'            => $request->alamat,
                'dilihat'           => 0,
                'lokasi'            => $request->lokasi,
                'gambar'            => $gambar,
                'updated_at'        => Carbon::now(),
            ]);
        } else {
            Budaya::findOrFail($id)->update([
                'nama'              => $request->nama,
                'slug'              => Str::of($request->nama)->slug('-'),
                'deskripsi'         => $request->deskripsi,
                'alamat'            => $request->alamat,
                'dilihat'           => 0,
                'lokasi'            => $request->lokasi,
                'updated_at'        => Carbon::now(),
            ]);
        }

        $notification = array(
            'message'       => 'Cagar budaya berhasil diubah',
            'alert-type'    => 'success',
        );

        return redirect()->route('budaya')->with($notification);
    }

    public function detailBudaya($slug)
    {
        $budaya     = Budaya::where('slug', $slug)->first();
        $title      = "Detail";
        $menu       = "destinasi";
        $submenu    = "sub_budaya";

        return view('budaya.detail_budaya', compact('submenu', 'menu', 'title', 'budaya'));
    }

    public function hapusBudaya($slug)
    {
        $budaya = Budaya::where('slug', $slug)->first();

        $img            = $budaya->gambar;
        unlink($img);
        Budaya::findOrFail($budaya->id)->delete();

        $notification = array(
            'message'       => 'Cagar budaya berhasil dihapus',
            'alert-type'    => 'success',
        );

        return redirect()->back()->with($notification);
    }
}
