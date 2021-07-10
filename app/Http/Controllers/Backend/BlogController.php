<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Blog\BlogPost;
use App\Models\Blog\BlogPostCategory;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class BlogController extends Controller
{
    public function BlogCategory()
    {
        $blogCategory = BlogPostCategory::latest()->get();
        return view('backend.blog.category.category_view',compact('blogCategory'));
    }

    public function AddBlogCategory(Request $request)
    {
        $request->validate([
            'blog_category_name_en' => 'required',
            'blog_category_name_ben' => 'required',
            'blog_category_name_hin' => 'required',
        ], [
            'blog_category_name_en.required' => 'Enter Blog category name in English',
            'blog_category_name_ben.required' => 'Enter Blog category name in Bengali',
            'blog_category_name_hin.required' => 'Enter Blog category name in Hindi',
        ]);

        BlogPostCategory::insert([
            'blog_category_name_en' => $request->blog_category_name_en,
            'blog_category_name_ben' => $request->blog_category_name_ben,
            'blog_category_name_hin' => $request->blog_category_name_hin,
            'blog_category_slug_en' => strtolower(str_replace(' ', '-', $request->blog_category_name_en)),
            'blog_category_slug_ben' =>  $request->blog_category_name_ben,
            'blog_category_slug_hin' =>   $request->blog_category_name_hin,
            'created_at' => Carbon::now(),
        ]);

        $notification = array(
            'message' => 'Blog Category Inserted successfully',
            'alert-type' => 'success',
        );
        return redirect()->back()->with($notification);
    }


    public function EditBlogCategory($category_id)
    {
        $blogCategory = BlogPostCategory::findOrFail($category_id);
        return view('backend.blog.category.category_edit',compact('blogCategory'));
    }


    public function UpdateBlogCategory(Request $request,$category_id)
    {
        BlogPostCategory::findOrFail($category_id)->update([
            'blog_category_name_en' => $request->blog_category_name_en,
            'blog_category_name_ben' => $request->blog_category_name_ben,
            'blog_category_name_hin' => $request->blog_category_name_hin,
            'blog_category_slug_en' => strtolower(str_replace(' ', '-', $request->blog_category_name_en)),
            'blog_category_slug_ben' =>  $request->blog_category_name_ben,
            'blog_category_slug_hin' =>   $request->blog_category_name_hin,
            'created_at' => Carbon::now(),
        ]);

        $notification = array(
            'message' => 'Blog Category Updated Successfully',
            'alert-type' => 'info',
        );
        return redirect()->route('blog.category')->with($notification);
    }


    public function DeleteBlogCategory($category_id)
    {
        BlogPostCategory::findOrFail($category_id)->delete();
            $notification = array(
            'message' => 'Blog Category Deleted Successfully',
            'alert-type' => 'info',
        );
        return redirect()->back()->with($notification);
    }




    ////////// Blog Post All Method //////////
    
    public function ViewBlogPost()
    {
        $blogPost = BlogPost::with('blogCategory')->latest()->get();
        return view('backend.blog.post.post_view',compact('blogPost'));
    }

    public function AddBlogPost()
    {
        $blogCategory = BlogPostCategory::latest()->get();
        $blogPost = BlogPost::latest()->get();
        return view('backend.blog.post.post_add',compact('blogPost','blogCategory'));
    }

    public function StoreBlogPost(Request $request)
    {
        // $request->validate([
        //     'blog_post_title_en' => 'required',
        //     'blog_post_title_ben' => 'required',
        //     'blog_post_title_hin' => 'required',
        //     'blog_category_id' => 'required',
        //     'blog_post_details_en' => 'required',
        //     'blog_post_details_ben' => 'required',
        //     'blog_post_details_hin' => 'required',
        // ], [
        //     'blog_post_title_en.required' => 'Enter Post Title name in English',
        //     'blog_post_title_ben.required' => 'Enter Post Title name in Bengali',
        //     'blog_post_title_hin.required' => 'Enter Post Title name in Hindi',
        //     'blog_post_details_en.required' => 'Enter Post Details in English',
        //     'blog_post_details_ben.required' => 'Enter Post Details in Bengali',
        //     'blog_post_details_hin.required' => 'Enter Post Details in Hindi',
        // ]);

        try{
            $image = $request->file('blog_post_image');
        $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
        Image::make($image)->resize(780, 433)->save('upload/post/' . $name_gen);
        $save_url = 'upload/post/' . $name_gen;

        BlogPost::insert([
            'blog_category_id' => $request->blog_category_id,
            'blog_post_title_en' => $request->blog_post_title_en,
            'blog_post_title_ben' => $request->blog_post_title_ben,
            'blog_post_title_hin' => $request->blog_post_title_hin,
            'blog_post_slug_en' => strtolower(str_replace(' ', '-', $request->blog_post_title_en)),
            'blog_post_slug_ben' =>  str_replace(' ','-',$request->blog_post_title_ben),
            'blog_post_slug_hin' =>  str_replace(' ', '-', $request->blog_post_title_hin),
            'blog_post_details_en' => $request->blog_post_details_en,
            'blog_post_details_ben' => $request->blog_post_details_ben,
            'blog_post_details_hin' => $request->blog_post_details_hin,
            'blog_post_image' => $save_url,
            'created_at' => Carbon::now(),
        ]);
        }catch (Exception $ex) {
            dd($ex->getMessage());
        }
        

        $notification = array(
            'message' => 'Blog Post Added successfully',
            'alert-type' => 'success',
        );
        return redirect()->route('view.blogPost')->with($notification);
    }
}