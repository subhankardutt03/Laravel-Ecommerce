<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Intervention\Image\Facades\Image;

class AdminUserController extends Controller
{
    public function AllAdminRole()
    {
        $adminUser = Admin::where('type',2)->latest()->get();
        return view('backend.role.admin_role_all',compact('adminUser'));
    }

    public function AddAdminRole()
    {
        return view('backend.role.admin_role_add');
    }

    public function StoreAdminRole(Request $request)
    {

        $image = $request->file('profile_photo_path');
        $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
        Image::make($image)->resize(225, 225)->save('upload/admin_images/' . $name_gen);
        $save_url = 'upload/admin_images/' . $name_gen;

        Admin::insert([
            'name' => $request->name,
            'email' => $request->email,
            'password' =>  Hash::make($request->password),
            'phone' => $request->phone,
            'brand' => $request->brand,
            'category' => $request->category,
            'product' => $request->product,
            'slider' => $request->slider,
            'coupons' => $request->coupons,
            'shipping' => $request->shipping,
            'blog' => $request->blog,
            'setting' => $request->setting,
            'return_order' => $request->return_order,
            'review' => $request->review,
            'stock' => $request->stock,
            'orders' => $request->orders,
            'reports' => $request->reports,
            'all_user' => $request->all_user,
            'admin_user_role' => $request->admin_user_role,
            'type' => 2,
            'profile_photo_path' => $save_url,
            'created_at' => Carbon::now(),
        ]);

        $notification = array(
            'message' => 'Admin User Added Successfully',
            'alert-type' => 'success',
        );
        return redirect()->route('all-admin-user')->with($notification);
    }


    public function EditAdminRole($id)
    {
        $adminUser = Admin::findOrFail($id);
        return view('backend.role.admin_role_edit',compact('adminUser'));
    }


    public function UpdateAdminRole(Request $request,$id)
    {

        $old_image = $request->old_image;

        if($request->file('profile_photo_path')){

        unlink($old_image);
        $image = $request->file('profile_photo_path');
        $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
        Image::make($image)->resize(225, 225)->save('upload/admin_images/' . $name_gen);
        $save_url = 'upload/admin_images/' . $name_gen;

        Admin::findOrFail($id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' =>  Hash::make($request->password),
            'phone' => $request->phone,
            'brand' => $request->brand,
            'category' => $request->category,
            'product' => $request->product,
            'slider' => $request->slider,
            'coupons' => $request->coupons,
            'shipping' => $request->shipping,
            'blog' => $request->blog,
            'setting' => $request->setting,
            'return_order' => $request->return_order,
            'review' => $request->review,
            'stock' => $request->stock,
            'orders' => $request->orders,
            'reports' => $request->reports,
            'all_user' => $request->all_user,
            'admin_user_role' => $request->admin_user_role,
            'type' => 2,
            'profile_photo_path' => $save_url,
            'created_at' => Carbon::now(),
        ]);

        $notification = array(
            'message' => 'Admin User Updated With Image Successfully',
            'alert-type' => 'info',
        );
        return redirect()->route('all-admin-user')->with($notification);

        }else{

            Admin::findOrFail($id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' =>  Hash::make($request->password),
            'phone' => $request->phone,
            'brand' => $request->brand,
            'category' => $request->category,
            'product' => $request->product,
            'slider' => $request->slider,
            'coupons' => $request->coupons,
            'shipping' => $request->shipping,
            'blog' => $request->blog,
            'setting' => $request->setting,
            'return_order' => $request->return_order,
            'review' => $request->review,
            'stock' => $request->stock,
            'orders' => $request->orders,
            'reports' => $request->reports,
            'all_user' => $request->all_user,
            'admin_user_role' => $request->admin_user_role,
            'type' => 2,
            'created_at' => Carbon::now(),
        ]);

        $notification = array(
            'message' => 'Admin User Updated Successfully',
            'alert-type' => 'info',
        );
        return redirect()->route('all-admin-user')->with($notification);

        }

    }


    public function DeleteAdminRole($id)
    {
        $adminUser = Admin::findOrFail($id);
        $image = $adminUser->profile_photo_path;

        unlink($image);
        Admin::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Admin User Deleted Successfully',
            'alert-type' => 'info',
        );
        return redirect()->back()->with($notification);

    }
}