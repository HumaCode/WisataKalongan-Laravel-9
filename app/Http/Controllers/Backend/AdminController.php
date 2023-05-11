<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function index()
    {
        return view('login.login');
    }

    public function profile()
    {
        $id         = Auth::user()->id;
        $adminData  = User::find($id);
        $title      = "Profile";
        $menu       = "profile";
        $submenu    = "sub_profile";

        return view('admin.profile', compact('adminData', 'submenu', 'menu', 'title'));
    }

    public function profileStore(Request $request)
    {
        $id             = Auth::user()->id;
        $data           = User::find($id);
        $data->name     = $request->name;
        $data->username = $request->username;
        $data->email    = $request->email;
        $data->phone    = $request->phone;
        $old_image      = $data->photo;

        if ($request->file('photo')) {
            if ($old_image != null) {
                unlink('backend/img/' . $old_image);
            }

            $file           = $request->file('photo');
            $filename       = date('YmdHi') . '-' . $file->getClientOriginalName();
            $file->move(public_path('backend/img/'), $filename);
            $data['photo']  = $filename;
        }

        $data->save();

        $notification = array(
            'message'       => 'Profil berhasil diubah',
            'alert-type'    => 'success',
        );

        return redirect()->back()->with($notification);
    }

    public function ubahPassword()
    {
        $title      = "Ubah Password";
        $menu       = "profile";
        $submenu    = "sub_ubah_password";

        return view('admin.ubah_password', compact('title', 'menu', 'submenu'));
    }

    public function updatePassword(Request $request)
    {
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|confirmed',
        ]);

        if (!Hash::check($request->old_password, auth::user()->password)) {


            $notification = array(
                'message'       => 'Password tidak cocok..!!',
                'alert-type'    => 'error',
            );

            return back()->with($notification);
        }

        // update new Password
        User::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->new_password)
        ]);

        $notification = array(
            'message'       => 'Password berhasil diubah',
            'alert-type'    => 'success',
        );

        return back()->with($notification);
    }
}
