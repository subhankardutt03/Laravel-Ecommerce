<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;


class BrandController extends Controller
{
    public function brandView()
    {
        $brand = Brand::latest()->get();
        return view('Backend.brand.brand_view', compact('brand'));
    }

    public function addBrand(Request $request)
    {
        $request->validate([
            'brand_name_en' => 'required',
            'brand_name_ben' => 'required',
            'brand_name_hin' => 'required',
            'brand_image' => 'required',
        ], [
            'brand_name_en.required' => 'Enter brand name in English',
            'brand_name_ben.required' => 'Enter brand name in Bengali',
            'brand_name_hin.required' => 'Enter brand name in Hindi',
        ]);

        $image = $request->file('brand_image');
        $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
        Image::make($image)->resize(300, 300)->save('upload/brand/' . $name_gen);
        $save_url = 'upload/brand/' . $name_gen;

        Brand::insert([
            'brand_name_en' => $request->brand_name_en,
            'brand_name_ben' => $request->brand_name_ben,
            'brand_name_hin' => $request->brand_name_hin,
            'brand_slug_en' => strtolower(str_replace(' ', '-', $request->brand_name_en)),
            'brand_slug_ben' =>  strtolower(str_replace(' ', '-', $request->brand_name_ben)),
            'brand_slug_hin' =>  strtolower(str_replace(' ', '-', $request->brand_name_hin)),
            'brand_image' => $save_url,
        ]);

        $notification = array(
            'message' => 'Brand added successfully',
            'alert-type' => 'success',
        );
        return redirect()->back()->with($notification);
    }

    public function editBrand($id)
    {
        $brand = Brand::findOrFail($id);
        return view('backend.brand.brand_edit', compact('brand'));
    }

    public function updateBrand(Request $request)
    {
        $brand_id = $request->id;
        $old_image = $request->old_image;

        if ($request->file('brand_image')) {

            unlink($old_image);
            $image = $request->file('brand_image');
            $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(300, 300)->save('upload/brand/' . $name_gen);
            $save_url = 'upload/brand/' . $name_gen;

            Brand::findOrFail($brand_id)->update([
                'brand_name_en' => $request->brand_name_en,
                'brand_name_ben' => $request->brand_name_ben,
                'brand_name_hin' => $request->brand_name_hin,
                'brand_slug_en' => strtolower(str_replace(' ', '-', $request->brand_name_en)),
                'brand_slug_ben' =>  $request->brand_name_ben,
                'brand_slug_hin' =>  $request->brand_name_hin,
                'brand_image' => $save_url,
            ]);

            $notification = array(
                'message' => 'Brand Updated Successfully',
                'alert-type' => 'info',
            );
            return redirect()->route('all.brand')->with($notification);
        } else {

            Brand::findOrFail($brand_id)->update([
                'brand_name_en' => $request->brand_name_en,
                'brand_name_ben' => $request->brand_name_ben,
                'brand_name_hin' => $request->brand_name_hin,
                'brand_slug_en' => strtolower(str_replace(' ', '-', $request->brand_name_en)),
                'brand_slug_ben' =>  strtolower(str_replace(' ', '-', $request->brand_name_ben)),
                'brand_slug_hin' =>  strtolower(str_replace(' ', '-', $request->brand_name_hin)),
            ]);

            $notification = array(
                'message' => 'Brand Updated Successfully',
                'alert-type' => 'info',
            );
            return redirect()->route('all.brand')->with($notification);
        }
    }

    public function deleteBrand($id)
    {
        $brand = Brand::findOrFail($id);
        $image = $brand->brand_image;
        unlink($image);

        Brand::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Brand Deleted Successfully',
            'alert-type' => 'info',
        );
        return redirect()->back()->with($notification);
    }
}