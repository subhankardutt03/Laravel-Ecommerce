<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Blog\BlogPost;
use App\Models\Blog\BlogPostCategory;
use Illuminate\Http\Request;

class HomeBlogController extends Controller
{
    public function ShowBlogPost()
    {
        $blogPost = BlogPost::latest()->get();
        $blogCategory = BlogPostCategory::latest()->get();
        return view('frontend.blog.blog_view',compact('blogPost', 'blogCategory'));
    }

    public function DetailsBlogPost($post_id)
    {
        $blogCategory = BlogPostCategory::latest()->get();
        $blogPost = BlogPost::findOrFail($post_id);
        return view('frontend.blog.blog_details',compact('blogPost','blogCategory'));
    }


    public function CategoryWisePost($category_id)
    {
        $blogCategory = BlogPostCategory::latest()->get();
        $blogPost = BlogPost::where('blog_category_id',$category_id)->latest()->get();
        return view('frontend.blog.blog_view',compact('blogPost', 'blogCategory'));
    }
}