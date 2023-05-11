<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
}
