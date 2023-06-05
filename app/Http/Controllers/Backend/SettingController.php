<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;


class SettingController extends Controller
{
    public function index()
    {
        $title      = "Setting Website";
        $menu       = "";
        $submenu    = "setting";
        $setting    = Setting::find(1)->first();

        return view('setting.setting', compact('submenu', 'menu', 'title', 'setting'));
    }

    public function settingStore(Request $request)
    {
        // return $request->all();

        $id         = $request->id;

        $setting    = Setting::findOrFail($id)->first();

        // return $setting->logo;

        $validasi = $request->validate(
            [
                'title'             => 'required',
                'tentang'           => 'required',
                'meta_keyword'      => 'required',
                'meta_description'  => 'required',
                'meta_author'       => 'required',
                'alamat'            => 'required',
                'tlp'               => 'required',
                'email'             => 'required',
                'facebook'          => 'required',
                'youtube'           => 'required',
                'twitter'           => 'required',
                'ig'                => 'required',
            ],
            [
                'title.required'            => 'Title Website tidak boleh kosong..!!',
                'tentang.required'          => 'Tentang Website tidak boleh kosong..!!',
                'meta_keyword.required'     => 'Keyword tidak boleh kosong..!!',
                'meta_description.required' => 'Deskripsi tidak boleh kosong..!!',
                'meta_author.required'      => 'Author tidak boleh kosong..!!',
                'alamat.required'           => 'Alamat tidak boleh kosong..!!',
                'tlp.required'              => 'Telepon tidak boleh kosong..!!',
                'email.required'            => 'Email tidak boleh kosong..!!',
                'facebook.required'         => 'Facebook tidak boleh kosong..!!',
                'youtube.required'          => 'Youtube tidak boleh kosong..!!',
                'twitter.required'          => 'Twitter tidak boleh kosong..!!',
                'ig.required'               => 'Instagram tidak boleh kosong..!!',
            ]
        );

        if ($request->file('image')) {

            $img    = $setting->logo;
            unlink($img);

            // logo
            $image      = $request->file('image');
            $name_gen   = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(500, 500)->save('backend/img/' . $name_gen);
            $logo   = 'backend/img/' . $name_gen;

            Setting::findOrFail($id)->update([
                'title'             => $request->title,
                'tentang'           => $request->tentang,
                'meta_keyword'      => $request->meta_keyword,
                'meta_description'  => $request->meta_description,
                'meta_author'       => $request->meta_author,
                'alamat'            => $request->alamat,
                'tlp'               => $request->tlp,
                'email'             => $request->email,
                'facebook'          => $request->facebook,
                'youtube'           => $request->youtube,
                'twitter'           => $request->twitter,
                'ig'                => $request->ig,
                'logo'              => $logo,
                'updated_at'        => Carbon::now(),
            ]);
        } else {
            Setting::findOrFail($id)->update([
                'title'             => $request->title,
                'tentang'           => $request->tentang,
                'meta_keyword'      => $request->meta_keyword,
                'meta_description'  => $request->meta_description,
                'meta_author'       => $request->meta_author,
                'alamat'            => $request->alamat,
                'tlp'               => $request->tlp,
                'email'             => $request->email,
                'facebook'          => $request->facebook,
                'youtube'           => $request->youtube,
                'twitter'           => $request->twitter,
                'ig'                => $request->ig,
                'updated_at'        => Carbon::now(),
            ]);
        }

        $notification = array(
            'message'       => 'Settingan website berhasil diubah',
            'alert-type'    => 'success',
        );

        return redirect()->back()->with($notification);
    }
}
