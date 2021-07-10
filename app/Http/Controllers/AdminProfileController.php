<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Intervention\Image\Facades\Image;

class AdminProfileController extends Controller
{
    public function adminProfile()
    {
        $profileData = Admin::find(Auth::user()->id);

        return view('admin.admin_profile_view', compact('profileData'));
    }

    public function editProfile()
    {
        $editProfile = Admin::find(Auth::user()->id);
        return view('admin.admin_profile_edit', compact('editProfile'));
    }

    public function updateProfile(Request $request)
    {
        $old_image = Auth::user()->profile_photo_path;
        $data = Admin::find(Auth::user()->id);
        $data->name = $request->name;
        $data->email = $request->email;

         if($request->file('profile_photo_path')){

        unlink($old_image);
        $image = $request->file('profile_photo_path');
        $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
        Image::make($image)->resize(225, 225)->save('upload/admin_images/' . $name_gen);
        $save_url = 'upload/admin_images/' . $name_gen;

        $data->profile_photo_path = $save_url;
        
            }

        $data->save();

        $notification = array(
            'message' => 'Admin Profile updated successfully',
            'alert-type' => 'success',
        );
        return redirect()->route('admin.profile')->with($notification);
    }

    public function changePassword()
    {
        return view('admin.admin_change_password');
    }

    public function updatePassword(Request $request)
    {
        $validation = $request->validate([
            'old_password' => 'required',
            'password' => 'required|confirmed',
        ]);

        $hashed_password = Auth::user()->password;

        if (Hash::check($request->old_password, $hashed_password)) {

            $data = Admin::find(Auth::user()->id);
            $data->password = Hash::make($request->password);
            $data->save();
            Auth::logout();
            return redirect()->route('admin.logout');
        } else {
            return redirect()->back();
        }
    }

    public function ViewUserList()
    {
        $users = User::latest()->get();
        return view('backend.user.all_user',compact('users'));
    }
}