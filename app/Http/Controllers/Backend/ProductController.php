<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\MultiImage;
use App\Models\Product;
use App\Models\Subcategory;
use App\Models\Subsubcategory;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class ProductController extends Controller
{
    public function addProduct()
    {
        $category = Category::latest()->get();
        $subcategory = Subcategory::latest()->get();
        $brand = Brand::latest()->get();
        return view('backend.product.product_add', compact('category', 'brand'));
    }


    // Ajax code method
    public function GetSubsubCategory($subcategory_id)
    {
        $subsubcategory = Subsubcategory::where('subcategory_id', $subcategory_id)->orderBy('subsubcategory_name_en', 'ASC')
            ->get();
        return json_encode($subsubcategory);
    }

    public function storeProduct(Request $request)
    {

        try {

            $image = $request->file('product_thumbnail');
            $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(917, 1000)->save('upload/products/thumbnail/' . $name_gen);
            $save_url = 'upload/products/thumbnail/' . $name_gen;

            $product_id = Product::insertGetId([

                'brand_id' => $request->brand_id,
                'category_id' => $request->category_id,
                'subcategory_id' => $request->subcategory_id,
                'subsubcategory_id' => $request->subsubcategory_id,
                'product_name_en' => $request->product_name_en,
                'product_name_ben' => $request->product_name_ben,
                'product_name_hin' => $request->product_name_hin,
                'product_slug_en' =>  strtolower(str_replace(' ', '-', $request->product_name_en)),
                'product_slug_ben' =>  $request->product_name_ben,
                'product_slug_hin' =>  $request->product_name_hin,
                'product_code' => $request->product_code,

                'product_quantity' => $request->product_quantity,
                'product_tags_en' => $request->product_tags_en,
                'product_tags_ben' => $request->product_tags_ben,
                'product_tags_hin' => $request->product_tags_hin,
                'product_size_en' => $request->product_size_en,
                'product_size_ben' => $request->product_size_ben,
                'product_size_hin' => $request->product_size_hin,
                'product_color_en' => $request->product_color_en,
                'product_color_ben' => $request->product_color_ben,
                'product_color_hin' => $request->product_color_hin,

                'selling_price' => $request->selling_price,
                'discount_price' => $request->discount_price,
                'short_desc_en' => $request->short_desc_en,
                'short_desc_ben' => $request->short_desc_ben,
                'short_desc_hin' => $request->short_desc_hin,
                'long_desc_en' => $request->long_desc_en,
                'long_desc_ben' => $request->long_desc_ben,
                'long_desc_hin' => $request->long_desc_hin,

                'hot_deals' => $request->hot_deals,
                'featured' => $request->featured,
                'special_offer' => $request->special_offer,
                'special_deals' => $request->special_deals,

                'product_thumbnail' => $save_url,
                'status' => 1,
                'created_at' => Carbon::now(),

            ]);


            //  Multi Image upload 

            $images = $request->file('multi_img');

            foreach ($images as $img) {
                $make_name = hexdec(uniqid()) . '.' . $img->getClientOriginalExtension();
                Image::make($img)->resize(917, 1000)->save('upload/products/multi_Image/' . $make_name);
                $uploadPath = 'upload/products/multi_Image/' . $make_name;

                MultiImage::insert([

                    'product_id' => $product_id,
                    'photo_name' => $uploadPath,
                    'created_at' => Carbon::now(),
                ]);
            }
        } catch (Exception $ex) {
            dd($ex->getMessage());
        }


        // End Multi Image 

        $notification = array(
            'message' => 'Product Inserted successfully',
            'alert-type' => 'success',
        );
        return redirect()->route('all.product')->with($notification);
    }


    public function allProduct()
    {
        $product = Product::latest()->get();
        return view('backend.product.product_view', compact('product'));
    }

    public function editProduct($id)
    {
        $multi_Image = MultiImage::where('product_id', $id)->get();
        $brand = Brand::latest()->get();
        $category = Category::latest()->get();
        $subcategory = Subcategory::latest()->get();
        $subsubcategory = Subsubcategory::latest()->get();

        $product = Product::findOrFail($id);
        return view('backend.product.product_edit', compact(
            'brand',
            'category',
            'subcategory',
            'subsubcategory',
            'product',
            'multi_Image',
        ));
    }

    public function updateProductData(Request $request, $id)
    {
        try {

            Product::findOrFail($id)->update([

                'brand_id' => $request->brand_id,
                'category_id' => $request->category_id,
                'subcategory_id' => $request->subcategory_id,
                'subsubcategory_id' => $request->subsubcategory_id,
                'product_name_en' => $request->product_name_en,
                'product_name_ben' => $request->product_name_ben,
                'product_name_hin' => $request->product_name_hin,
                'product_slug_en' =>  strtolower(str_replace(' ', '-', $request->product_name_en)),
                'product_slug_ben' =>  $request->product_name_ben,
                'product_slug_hin' =>  $request->product_name_hin,
                'product_code' => $request->product_code,

                'product_quantity' => $request->product_quantity,
                'product_tags_en' => $request->product_tags_en,
                'product_tags_ben' => $request->product_tags_ben,
                'product_tags_hin' => $request->product_tags_hin,
                'product_size_en' => $request->product_size_en,
                'product_size_ben' => $request->product_size_ben,
                'product_size_hin' => $request->product_size_hin,
                'product_color_en' => $request->product_color_en,
                'product_color_ben' => $request->product_color_ben,
                'product_color_hin' => $request->product_color_hin,

                'selling_price' => $request->selling_price,
                'discount_price' => $request->discount_price,
                'short_desc_en' => $request->short_desc_en,
                'short_desc_ben' => $request->short_desc_ben,
                'short_desc_hin' => $request->short_desc_hin,
                'long_desc_en' => $request->long_desc_en,
                'long_desc_ben' => $request->long_desc_ben,
                'long_desc_hin' => $request->long_desc_hin,

                'hot_deals' => $request->hot_deals,
                'featured' => $request->featured,
                'special_offer' => $request->special_offer,
                'special_deals' => $request->special_deals,
                'status' => 1,
                'created_at' => Carbon::now(),

            ]);
        } catch (Exception $ex) {
            dd($ex->getMessage());
        }

        $notification = array(
            'message' => 'Product Updated successfully',
            'alert-type' => 'info',
        );
        return redirect()->route('all.product')->with($notification);
    }


    // Product Multi Image Update

    public function updateProductImage(Request $request)
    {
        try {
            $imgs = $request->multi_img;

            foreach ($imgs as $id => $img) {
                $imgDelete = MultiImage::findOrFail($id);
                unlink($imgDelete->photo_name);

                $make_name = hexdec(uniqid()) . '.' . $img->getClientOriginalExtension();
                Image::make($img)->resize(917, 1000)->save('upload/products/multi_Image/' . $make_name);
                $uploadPath = 'upload/products/multi_Image/' . $make_name;

                MultiImage::where('id', $id)->update([
                    'photo_name' => $uploadPath,
                    'updated_at' => Carbon::now(),
                ]);
            } // End foreach
        } catch (Exception $ex) {
            dd($ex->getMessage());
        }

        $notification = array(
            'message' => 'Product Multi Images Updated successfully',
            'alert-type' => 'info',
        );
        return redirect()->back()->with($notification);
    }

    // Product Multi Image Update End


    // Product Thumbnail Update

    public function updateProductThumbnail(Request $request, $id)
    {
        try {

            $old_image = $request->old_image;
            unlink($old_image);

            $image = $request->file('product_thumbnail');
            $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(917, 1000)->save('upload/products/thumbnail/' . $name_gen);
            $save_url = 'upload/products/thumbnail/' . $name_gen;

            Product::findOrFail($id)->update([

                'product_thumbnail' => $save_url,
                'updated_at' => Carbon::now(),
            ]);
        } catch (Exception $ex) {
            dd($ex->getMessage());
        }

        $notification = array(
            'message' => 'Product Thumbnail Updated successfully',
            'alert-type' => 'info',
        );
        return redirect()->route('all.product')->with($notification);
    }

    // Product Thumbnail Update End 


    // Product MultiImage Delete

    public function deleteMultiImage($id)
    {
        $old_image = MultiImage::findOrFail($id);

        unlink($old_image->photo_name);
        MultiImage::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Product Image Deleted successfully',
            'alert-type' => 'info',
        );
        return redirect()->back()->with($notification);
    }

    // Product MultiImage Delete End

    public function activeStatus($id)
    {
        Product::findOrFail($id)->update([
            'status' => 1,
        ]);

        $notification = array(
            'message' => 'Product Status Active',
            'alert-type' => 'success',
        );
        return redirect()->back()->with($notification);
    }


    public function inactiveStatus($id)
    {
        Product::findOrFail($id)->update([
            'status' => 0,
        ]);

        $notification = array(
            'message' => 'Product Status Inactive',
            'alert-type' => 'info',
        );
        return redirect()->back()->with($notification);
    }


    public function deleteProduct($id)
    {
        try {

            $product = Product::findOrFail($id);
            unlink($product->product_thumbnail);
            Product::findOrFail($id)->delete();

            $images = MultiImage::where('product_id', $id)->get();

            foreach ($images as $image) {
                unlink($image->photo_name);
                MultiImage::where('product_id', $id)->delete();
            }
        } catch (Exception $ex) {
            dd($ex->getMessage());
        }

        $notification = array(
            'message' => 'Product Deleted Successfully',
            'alert-type' => 'info',
        );
        return redirect()->back()->with($notification);
    }


    public function allRecordsView($id)
    {
        $multi_Image = MultiImage::where('product_id', $id)->get();
        $brand = Brand::latest()->get();
        $category = Category::latest()->get();
        $subcategory = Subcategory::latest()->get();
        $subsubcategory = Subsubcategory::latest()->get();

        $product = Product::findOrFail($id);
        return view('backend.product.product_allRecords_view', compact(
            'brand',
            'category',
            'subcategory',
            'subsubcategory',
            'product',
            'multi_Image',
        ));
    }


    ///////// Product Stock /////////
    public function ProductStock()
    {
        $products = Product::latest()->get();
        return view('backend.product.product_stock',compact('products'));
    }
}