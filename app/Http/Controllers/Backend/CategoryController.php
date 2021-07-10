<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function CategoryView()
    {
        $category = Category::latest()->get();
        return view('backend.category.category_view', compact('category'));
    }

    public function AddCategory(Request $request)
    {
        $request->validate([
            'category_name_en' => 'required',
            'category_name_ben' => 'required',
            'category_name_hin' => 'required',
            'category_icon' => 'required',
        ], [
            'category_name_en.required' => 'Enter category name in English',
            'category_name_ben.required' => 'Enter category name in Bengali',
            'category_name_hin.required' => 'Enter category name in Hindi',
        ]);

        Category::insert([
            'category_name_en' => $request->category_name_en,
            'category_name_ben' => $request->category_name_ben,
            'category_name_hin' => $request->category_name_hin,
            'category_slug_en' => strtolower(str_replace(' ', '-', $request->category_name_en)),
            'category_slug_ben' =>  $request->category_name_ben,
            'category_slug_hin' =>   $request->category_name_hin,
            'category_icon' => $request->category_icon,
        ]);

        $notification = array(
            'message' => 'Category Inserted successfully',
            'alert-type' => 'success',
        );
        return redirect()->back()->with($notification);
    }

    public function editCategory($id)
    {
        $category = Category::findOrFail($id);
        return view('backend.category.category_edit', compact('category'));
    }

    public function updateCategory(Request $request, $id)
    {
        Category::findOrFail($id)->update([
            'category_name_en' => $request->category_name_en,
            'category_name_ben' => $request->category_name_ben,
            'category_name_hin' => $request->category_name_hin,
            'category_slug_en' => strtolower(str_replace(' ', '-', $request->category_name_en)),
            'category_slug_ben' =>  strtolower(str_replace(' ', '-', $request->category_name_ben)),
            'category_slug_hin' =>  strtolower(str_replace(' ', '-', $request->category_name_hin)),
            'category_icon' => $request->category_icon,
        ]);

        $notification = array(
            'message' => 'Category Updated successfully',
            'alert-type' => 'info',
        );
        return redirect()->route('all.category')->with($notification);
    }

    public function deleteCategory($id)
    {
        Category::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Category Deleted successfully',
            'alert-type' => 'info',
        );
        return redirect()->back()->with($notification);
    }
}