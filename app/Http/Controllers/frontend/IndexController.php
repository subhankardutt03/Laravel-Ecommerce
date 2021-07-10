<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Blog\BlogPost;
use App\Models\Brand;
use App\Models\Category;
use App\Models\MultiImage;
use App\Models\Product;
use App\Models\Slider;
use App\Models\Subcategory;
use App\Models\Subsubcategory;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class IndexController extends Controller
{
    public function index()
    {
        $categories = Category::orderBy('category_name_en', 'ASC')->get();
        $sliders = Slider::where('status', 1)->orderBy('id', 'DESC')->limit(3)->get();
        $products = Product::where('status', 1)->orderBy('id', 'DESC')->get();
        $featured = Product::where('featured', 1)->orderBy('id', 'DESC')->limit(8)->get();
        $hot_deals = Product::where('hot_deals', 1)->where('discount_price', '!=', NULL)->orderBy('id', 'DESC')->limit(3)->get();
        $special_offer = Product::where('special_offer', 1)->orderBy('id', 'DESC')->limit(3)->get();
        $special_deals = Product::where('special_deals', 1)->orderBy('id', 'DESC')->limit(3)->get();

        // Skip category and matching Products
        $skip_category_0 = Category::skip(0)->first();
        $skip_category_2 = Category::skip(2)->first();
        $skip_category_product_0 = Product::where('category_id', $skip_category_0->id)->orderBy('id', 'DESC')->get();
        $skip_category_product_2 = Product::where('category_id', $skip_category_2->id)->orderBy('id', 'DESC')->get();

        // Skip Brand and Matching Products
        $skip_brand_11 = Brand::skip(11)->first();
        $skip_brand_product_11 = Product::where('brand_id', $skip_brand_11->id)->orderBy('id', 'DESC')->get();
        // return $skip_category->id;
        // die();

        ///// All Blog Post ///////
        $blogPost = BlogPost::orderBy('id','DESC')->get();
        return view('frontend.index', compact(
            'categories',
            'sliders',
            'products',
            'featured',
            'hot_deals',
            'special_offer',
            'special_deals',
            'skip_category_0',
            'skip_category_product_0',
            'skip_category_2',
            'skip_category_product_2',
            'skip_brand_11',
            'skip_brand_product_11',
            'blogPost',
        ));
    }

    public function userLogout()
    {
        Auth::logout();
        return redirect()->route('login');
    }

    public function userProfile()
    {
        $id = Auth::user()->id;
        $user = User::find($id);
        return view('frontend.profile.user_profile', compact('user'));
    }

    public function userProfileUpdate(Request $request)
    {
        $data = User::find(Auth::user()->id);
        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;

        if ($request->file('profile_photo_path')) {
            $file = $request->file('profile_photo_path');
            @unlink(public_path('upload/user_images/' . $data->profile_photo_path));
            $fileName = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('upload/user_images'), $fileName);
            $data['profile_photo_path'] = $fileName;
        }

        $data->save();

        $notification = array(
            'message' => 'Your Profile updated successfully',
            'alert-type' => 'success',
        );
        return redirect()->route('dashboard')->with($notification);
    }

    public function userChangePassword()
    {
        $user = User::find(Auth::user()->id);
        return view('frontend.profile.change_password', compact('user'));
    }

    public function userUpdatePassword(Request $request)
    {
        $validation = $request->validate([
            'old_password' => 'required',
            'password' => 'required|confirmed',
        ]);

        $hashed_password = User::find(Auth::user()->id)->password;

        if (Hash::check($request->old_password, $hashed_password)) {

            $data = User::find(Auth::user()->id);
            $data->password = Hash::make($request->password);
            $data->save();
            Auth::logout();
            return redirect()->route('user.logout');
        } else {
            return redirect()->back();
        }
    }


    // product Details part
    public function productDetails($id, $slug)
    {
        $products = Product::findOrFail($id);

        $color_en = $products->product_color_en;
        $product_color_en = explode(',', $color_en);

        $color_hin = $products->product_color_hin;
        $product_color_hin = explode(',', $color_hin);

        $color_ben = $products->product_color_ben;
        $product_color_ben = explode(',', $color_ben);

        $size_en = $products->product_size_en;
        $product_size_en = explode(',', $size_en);

        $size_hin = $products->product_size_hin;
        $product_size_hin = explode(',', $size_hin);

        $size_ben = $products->product_size_ben;
        $product_size_ben = explode(',', $size_ben);

        $multiImage = MultiImage::where('product_id', $id)->get();

        $cat_id = $products->category_id;
        $related_product = Product::where('category_id', $cat_id)->where('id', '!=', $id)
            ->orderBy('id', 'DESC')->get();

        return view('frontend.product.product_details', compact(
            'products',
            'multiImage',
            'product_color_en',
            'product_color_hin',
            'product_color_ben',
            'product_size_en',
            'product_size_hin',
            'product_size_ben',
            'related_product',
        ));
    }


    // Product Tags 
    public function productTag($tag)
    {
        $categories = Category::orderBy('category_name_en', 'ASC')->get();
        $product_tag = Product::where('status', 1)
            ->where('product_tags_en', $tag)
            ->where('product_tags_ben', $tag)
            ->where('product_tags_hin', $tag)
            ->orderBy('id', 'DESC')->paginate(3);

        return view('frontend.tags.tags_view', compact('product_tag', 'categories'));
    }

    public function subcategoryData($id, $slug)
    {
        $categories = Category::orderBy('category_name_en', 'ASC')->get();
        $products = Product::where('status', 1)->where('subcategory_id', $id)->orderBy('id', 'DESC')->paginate(3);
        $breadSubCat = Subcategory::with(['category'])->where('id',$id)->get();
        return view('frontend.product.subcategory_view', compact('categories', 'products','breadSubCat'));
    }

    public function subsubcategoryData($id, $slug)
    {
        $categories = Category::orderBy('category_name_en', 'ASC')->get();
        $products = Product::where('status', 1)->where('subsubcategory_id', $id)->orderBy('id', 'DESC')->paginate(3);
        $breadSubsubCat = Subsubcategory::with(['category','subcategory'])->where('id',$id)->get();
        return view('frontend.product.subsubcategory_view', compact('categories', 'products','breadSubsubCat'));
    }

    public function categoryData($id, $slug)
    {
        $categories = Category::orderBy('category_name_en', 'ASC')->get();
        $products = Product::where('status', 1)->where('category_id', $id)->orderBy('id', 'DESC')->paginate(3);
        return view('frontend.product.category_view', compact('categories', 'products'));
    }


    // Product View with Ajax
    public function productViewAjax($id)
    {
        $products = Product::with('category', 'brand')->findOrFail($id);

        $color_en = $products->product_color_en;
        $product_color_en = explode(',', $color_en);

        $color_hin = $products->product_color_hin;
        $product_color_hin = explode(',', $color_hin);

        $color_ben = $products->product_color_ben;
        $product_color_ben = explode(',', $color_ben);

        $size_en = $products->product_size_en;
        $product_size_en = explode(',', $size_en);

        $size_hin = $products->product_size_hin;
        $product_size_hin = explode(',', $size_hin);

        $size_ben = $products->product_size_ben;
        $product_size_ben = explode(',', $size_ben);

        return response()->json(array(
            'product' => $products,
            'color_en' => $product_color_en,
            'color_ben' => $product_color_ben,
            'color_hin' => $product_color_hin,
            'size_en' => $product_size_en,
            'size_ben' => $product_size_ben,
            'size_hin' => $product_size_hin,
        ));
    }


    ///// product Search ///////
    public function ProductSearch(Request $request) 
    {
        $request->validate([
            'search' => 'required',
        ]);
        $item = $request->search;

        $categories = Category::orderBy('category_name_en', 'ASC')->get();
        $products = Product::where('product_name_en','LIKE',"%$item%")->get();
        return view('frontend.product.product_search',compact('products','categories'));
    }

    //// Advanced Search ///////
    public function AdvancedProductSearch(Request $request)
    {
        $request->validate([
            'search' => 'required',
        ]);
        $item = $request->search;

        $products = Product::where('product_name_en','LIKE',"%$item%")
        ->select('product_name_en','product_thumbnail','discount_price','id','product_slug_en')->limit(5)->get();
        return view('frontend.product.product_advanced_search',compact('products'));
    }
}