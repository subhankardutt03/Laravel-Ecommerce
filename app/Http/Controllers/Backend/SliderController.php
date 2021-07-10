<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class SliderController extends Controller
{
    public function sliderView()
    {
        $sliders = Slider::latest()->get();
        return view('backend.slider.slider_view', compact('sliders'));
    }

    public function addSlider(Request $request)
    {
        $request->validate([
            'slider_image' => 'required',
        ], [
            'slider_image.required' => 'Please add Slider Image',
        ]);

        $image = $request->file('slider_image');
        $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
        Image::make($image)->resize(870, 370)->save('upload/slider/' . $name_gen);
        $save_url = 'upload/slider/' . $name_gen;

        Slider::insert([
            'title_en' => $request->title_en,
            'title_ben' => $request->title_ben,
            'title_hin' => $request->title_hin,
            'description_en' => $request->description_en,
            'description_ben' => $request->description_ben,
            'description_hin' => $request->description_hin,
            'slider_image' => $save_url,
        ]);

        $notification = array(
            'message' => 'Slider added successfully',
            'alert-type' => 'success',
        );
        return redirect()->back()->with($notification);
    }


    public function editSlider($id)
    {
        $slider = Slider::findOrFail($id);
        return view('backend.slider.slider_edit', compact('slider')); 
    }

    public function updateSlider(Request $request, $id)
    {
        $old_image = $request->old_image;

        if ($request->file('slider_image')) {

            unlink($old_image);
            $image = $request->file('slider_image');
            $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(870, 370)->save('upload/slider/' . $name_gen);
            $save_url = 'upload/slider/' . $name_gen;

            Slider::findOrFail($id)->update([

                'title_en' => $request->title_en,
                'title_ben' => $request->title_ben,
                'title_hin' => $request->title_hin,
                'description_en' => $request->description_en,
                'description_ben' => $request->description_ben,
                'description_hin' => $request->description_hin,
                'slider_image' => $save_url,
            ]);

            $notification = array(
                'message' => 'Slider updated successfully',
                'alert-type' => 'info',
            );
            return redirect()->route('manage.slider')->with($notification);
        } else {

            Slider::findOrFail($id)->update([

                'title_en' => $request->title_en,
                'title_ben' => $request->title_ben,
                'title_hin' => $request->title_hin,
                'description_en' => $request->description_en,
                'description_ben' => $request->description_ben,
                'description_hin' => $request->description_hin,
            ]);

            $notification = array(
                'message' => 'Slider updated successfully',
                'alert-type' => 'info',
            );
            return redirect()->route('manage.slider')->with($notification);
        }
    }

    public function deleteSlider($id)
    {
        $image = Slider::findOrFail($id)->slider_image;
        unlink($image);
        Slider::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Slider Deleted Successfully',
            'alert-type' => 'info',
        );
        return redirect()->back()->with($notification);
    }


    public function activeStatus($id)
    {
        Slider::findOrFail($id)->update([
            'status' => 1,
        ]);

        $notification = array(
            'message' => 'Slider Status Active',
            'alert-type' => 'success',
        );
        return redirect()->back()->with($notification);
    }


    public function inactiveStatus($id)
    {
        Slider::findOrFail($id)->update([
            'status' => 0,
        ]);

        $notification = array(
            'message' => 'Slider Status Inactive',
            'alert-type' => 'info',
        );
        return redirect()->back()->with($notification);
    }
}