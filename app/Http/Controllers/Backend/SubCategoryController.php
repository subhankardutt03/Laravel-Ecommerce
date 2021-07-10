<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    public function subcategoryView()
    {
        $category = Category::orderBy('category_name_en', 'ASC')->get();
        $subcategory = Subcategory::latest()->get();
        return view('backend.subcategory.subcategory_view', compact('subcategory', 'category'));
    }

    public function addSubcategory(Request $request)
    {
        $request->validate([
            'category_id' => 'required',
            'subcategory_name_en' => 'required',
            'subcategory_name_ben' => 'required',
            'subcategory_name_hin' => 'required',
        ], [
            'category_id.required' => 'Select category name',
            'subcategory_name_en.required' => 'Enter subcategory name in English',
            'subcategory_name_ben.required' => 'Enter subcategory name in Bengali',
            'subcategory_name_hin.required' => 'Enter subcategory name in Hindi',
        ]);

        Subcategory::insert([
            'category_id' => $request->category_id,
            'subcategory_name_en' => $request->subcategory_name_en,
            'subcategory_name_ben' => $request->subcategory_name_ben,
            'subcategory_name_hin' => $request->subcategory_name_hin,
            'subcategory_slug_en' => strtolower(str_replace(' ', '-', $request->subcategory_name_en)),
            'subcategory_slug_ben' =>  strtolower(str_replace(' ', '-', $request->subcategory_name_ben)),
            'subcategory_slug_hin' =>  strtolower(str_replace(' ', '-', $request->subcategory_name_hin)),
        ]);

        $notification = array(
            'message' => 'Subcategory Inserted successfully',
            'alert-type' => 'success',
        );
        return redirect()->back()->with($notification);
    }

    public function editSubcategory($id)
    {
        $category = Category::orderBy('category_name_en', 'ASC')->get();
        $subcategory = Subcategory::findOrFail($id);
        return view('backend.subcategory.subcategory_edit', compact('subcategory', 'category'));
    }

    public function updateSubcategory(Request $request, $id)
    {
        Subcategory::findOrFail($id)->update([
            'category_id' => $request->category_id,
            'subcategory_name_en' => $request->subcategory_name_en,
            'subcategory_name_ben' => $request->subcategory_name_ben,
            'subcategory_name_hin' => $request->subcategory_name_hin,
            'subcategory_slug_en' => strtolower(str_replace(' ', '-', $request->subcategory_name_en)),
            'subcategory_slug_ben' => $request->subcategory_name_ben,
            'subcategory_slug_hin' => $request->subcategory_name_hin,
        ]);

        $notification = array(
            'message' => 'Subcategory Updated successfully',
            'alert-type' => 'info',
        );
        return redirect()->route('all.subcategory')->with($notification);
    }

    public function deleteSubcategory($id)
    {
        Subcategory::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Subcategory Deleted successfully',
            'alert-type' => 'info',
        );
        return redirect()->back()->with($notification);
    }
}