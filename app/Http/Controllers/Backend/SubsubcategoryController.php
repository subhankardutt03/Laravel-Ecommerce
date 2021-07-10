<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Subcategory;
use App\Models\Subsubcategory;
use Illuminate\Http\Request;

class SubsubcategoryController extends Controller
{
    public function subsubCategoryView()
    {
        $category = Category::orderBy('category_name_en', 'ASC')->get();
        $subcategory = Subcategory::orderBy('subcategory_name_en', 'ASC')->get();
        $subsubCategory = Subsubcategory::latest()->get();
        return view('backend.subsubcategory.subsubcategory_view', compact('subsubCategory', 'category', 'subcategory'));
    }

    public function GetSubCategory($category_id)
    {
        $subcategory = Subcategory::where('category_id', $category_id)->orderBy('subcategory_name_en', 'ASC')
            ->get();
        return json_encode($subcategory);
    }

    public function addSubsubCategory(Request $request)
    {
        $request->validate([
            'category_id' => 'required',
            'subcategory_id' => 'required',
            'subsubcategory_name_en' => 'required',
            'subsubcategory_name_ben' => 'required',
            'subsubcategory_name_hin' => 'required',
        ], [
            'category_id.required' => 'Select category name',
            'subcategory_id.required' => 'Select subcategory name',
            'subsubcategory_name_en.required' => 'Enter Sub-subcategory name in English',
            'subsubcategory_name_ben.required' => 'Enter Sub-subcategory name in Bengali',
            'subsubcategory_name_hin.required' => 'Enter Sub-subcategory name in Hindi',
        ]);

        Subsubcategory::insert([
            'category_id' => $request->category_id,
            'subcategory_id' => $request->subcategory_id,
            'subsubcategory_name_en' => $request->subsubcategory_name_en,
            'subsubcategory_name_ben' => $request->subsubcategory_name_ben,
            'subsubcategory_name_hin' => $request->subsubcategory_name_hin,
            'subsubcategory_slug_en' => strtolower(str_replace(' ', '-', $request->subsubcategory_name_en)),
            'subsubcategory_slug_ben' =>  $request->subsubcategory_name_ben,
            'subsubcategory_slug_hin' =>  $request->subsubcategory_name_hin,
        ]);

        $notification = array(
            'message' => 'Sub-Subcategory Inserted successfully',
            'alert-type' => 'success',
        );
        return redirect()->back()->with($notification);
    }

    public  function editSubsubCategory($id)
    {
        $category = Category::orderBy('category_name_en', 'ASC')->get();
        $subcategory = Subcategory::orderBy('subcategory_name_en', 'ASC')->get();
        $subsubCategory = Subsubcategory::findOrFail($id);
        return view('backend.subsubcategory.subsubcategory_edit', compact('subsubCategory', 'category', 'subcategory'));
    }

    public function updateSubsubCategory(Request $request, $id)
    {
        Subsubcategory::findOrFail($id)->update([
            'category_id' => $request->category_id,
            'subcategory_id' => $request->subcategory_id,
            'subsubcategory_name_en' => $request->subsubcategory_name_en,
            'subsubcategory_name_ben' => $request->subsubcategory_name_ben,
            'subsubcategory_name_hin' => $request->subsubcategory_name_hin,
            'subsubcategory_slug_en' => strtolower(str_replace(' ', '-', $request->subsubcategory_name_en)),
            'subsubcategory_slug_ben' =>  strtolower(str_replace(' ', '-', $request->subsubcategory_name_ben)),
            'subsubcategory_slug_hin' =>  strtolower(str_replace(' ', '-', $request->subsubcategory_name_hin)),
        ]);

        $notification = array(
            'message' => 'Sub-Subcategory Updated successfully',
            'alert-type' => 'info',
        );
        return redirect()->route('all.subsubcategory')->with($notification);
    }

    public function deleteSubsubCategory($id)
    {
        Subsubcategory::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Sub-Subcategory Deleted successfully',
            'alert-type' => 'info',
        );
        return redirect()->back()->with($notification);
    }
}