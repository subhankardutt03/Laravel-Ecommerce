<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminProfileController;
use App\Http\Controllers\Backend\AdminUserController;
use App\Http\Controllers\Backend\BlogController;
use App\Http\Controllers\Backend\BrandController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\CouponController;
use App\Http\Controllers\Backend\OrderController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\ReportController;
use App\Http\Controllers\Backend\ReturnController;
use App\Http\Controllers\Backend\SeoSettingController;
use App\Http\Controllers\Backend\ShippingController;
use App\Http\Controllers\Backend\SiteSettingController;
use App\Http\Controllers\Backend\SliderController;
use App\Http\Controllers\Backend\SubCategoryController;
use App\Http\Controllers\Backend\SubsubcategoryController;
use App\Http\Controllers\frontend\CartController;
use App\Http\Controllers\frontend\HomeBlogController;
use App\Http\Controllers\frontend\IndexController;
use App\Http\Controllers\Frontend\LanguageController;
use App\Http\Controllers\frontend\OrderTrackingController;
use App\Http\Controllers\User\AllUserController;
use App\Http\Controllers\User\CartPageController;
use App\Http\Controllers\User\CashController;
use App\Http\Controllers\User\CheckoutController;
use App\Http\Controllers\User\ReviewController;
use App\Http\Controllers\User\StripeController;
use App\Http\Controllers\User\WishlistController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


/////////////////////////////////All Admin Routes//////////////////////////////

Route::group(['prefix' => 'admin', 'middleware' => ['admin:admin']], function () {
    Route::get('/login', [AdminController::class, 'loginForm']);
    Route::post('/login', [AdminController::class, 'store'])->name('admin.login');
});


// using group middleware on all admin Routes
Route::middleware(['auth:admin'])->group(function () {


    Route::middleware(['auth:sanctum,admin', 'verified'])->get('/admin/dashboard', function () {
        return view('admin.index');
    })->name('dashboard')->middleware('auth:admin');

    Route::get('/admin/logout', [AdminController::class, 'destroy'])->name('admin.logout');


    // Admin Profile
    Route::get('/admin/profile', [AdminProfileController::class, 'adminProfile'])->name('admin.profile');
    Route::get('/admin/profile/edit', [AdminProfileController::class, 'editProfile'])->name('edit.profile');
    Route::post('/admin/profile/update', [AdminProfileController::class, 'updateProfile'])->name('update.profile');
    Route::get('/admin/change/password', [AdminProfileController::class, 'changePassword'])->name('change.password');
    Route::post('/admin/update/password', [AdminProfileController::class, 'updatePassword'])->name('admin-update-password');


    // Admin Brand Section
    Route::prefix('brand')->group(function () {
        Route::get('/view', [BrandController::class, 'brandView'])->name('all.brand');
        Route::post('/add', [BrandController::class, 'addBrand'])->name('add.brand');
        Route::get('/edit/{id}', [BrandController::class, 'editBrand'])->name('edit.brand');
        Route::post('/update/{id}', [BrandController::class, 'updateBrand'])->name('update.brand');
        Route::get('/delete/{id}', [BrandController::class, 'deleteBrand'])->name('delete.brand');
    });


    // Admin Category Section
    Route::prefix('category')->group(function () {
        Route::get('/view', [CategoryController::class, 'CategoryView'])->name('all.category');
        Route::post('/add', [CategoryController::class, 'AddCategory'])->name('add.category');
        Route::get('/edit/{id}', [CategoryController::class, 'editCategory'])->name('edit.category');
        Route::post('/update/{id}', [CategoryController::class, 'updateCategory'])->name('update.category');
        Route::get('/delete/{id}', [CategoryController::class, 'deleteCategory'])->name('delete.category');


        // Admin Subcategory Section
        Route::get('/sub/view', [SubCategoryController::class, 'subcategoryView'])->name('all.subcategory');
        Route::post('/sub/add', [SubCategoryController::class, 'addSubcategory'])->name('add.subcategory');
        Route::get('/sub/edit/{id}', [SubCategoryController::class, 'editSubcategory'])->name('edit.subcategory');
        Route::post('/sub/update/{id}', [SubCategoryController::class, 'updateSubcategory'])->name('update.subcategory');
        Route::get('/sub/delete/{id}', [SubCategoryController::class, 'deleteSubcategory'])->name('delete.subcategory');


        // Admin Sub->Subcategory Section
        Route::get('/sub/sub/view', [SubsubcategoryController::class, 'subsubCategoryView'])->name('all.subsubcategory');

        // Ajax Route
        Route::get('/subcategory/ajax/{category_id}', [SubsubcategoryController::class, 'GetSubCategory']);

        Route::post('/sub/sub/add', [SubsubcategoryController::class, 'addSubsubCategory'])->name('add.subsubcategory');
        Route::get('/sub/sub/edit/{id}', [SubsubcategoryController::class, 'editSubsubCategory'])->name('edit.subsubcategory');
        Route::post('/sub/sub/update/{id}', [SubsubcategoryController::class, 'updateSubsubCategory'])->name('update.subsubcategory');
        Route::get('/sub/sub/delete/{id}', [SubsubcategoryController::class, 'deleteSubsubCategory'])->name('delete.subsubcategory');
    });


    // Admin Product Section
    Route::prefix('product')->group(function () {
        Route::get('/add', [ProductController::class, 'addProduct'])->name('add.product');

        // Ajax Route
        Route::get('/sub/subcategory/ajax/{subcategory_id}', [ProductController::class, 'GetSubsubCategory']);

        Route::post('/store', [ProductController::class, 'storeProduct'])->name('store.product');
        Route::get('/view', [ProductController::class, 'allProduct'])->name('all.product');
        Route::get('/edit/{id}', [ProductController::class, 'editProduct'])->name('edit.product');
        Route::post('/update/{id}', [ProductController::class, 'updateProductData'])->name('update.product');
        Route::post('/image/update', [ProductController::class, 'updateProductImage'])->name('update.product_image');
        Route::post('/thumbnail/update/{id}', [ProductController::class, 'updateProductThumbnail'])->name('update.product_thumbnail');
        Route::get('/image/delete/{id}', [ProductController::class, 'deleteMultiImage'])->name('delete.multiImage');
        Route::get('/status/active/{id}', [ProductController::class, 'activeStatus'])->name('product.active');
        Route::get('/status/inactive/{id}', [ProductController::class, 'inactiveStatus'])->name('product.inactive');
        Route::get('/delete/{id}', [ProductController::class, 'deleteProduct'])->name('delete.product');
        Route::get('/allRecords/view/{id}', [ProductController::class, 'allRecordsView'])->name('view.productRecords');
    });


    // Admin Slider Section
    Route::prefix('slider')->group(function () {
        Route::get('/view', [SliderController::class, 'sliderView'])->name('manage.slider');
        Route::post('/add', [SliderController::class, 'addSlider'])->name('add.slider');
        Route::get('/edit/{id}', [SliderController::class, 'editSlider'])->name('edit.slider');
        Route::post('/update/{id}', [SliderController::class, 'updateSlider'])->name('update.slider');
        Route::get('/delete/{id}', [SliderController::class, 'deleteSlider'])->name('delete.slider');
        Route::get('/status/active/{id}', [SliderController::class, 'activeStatus'])->name('slider.active');
        Route::get('/status/inactive/{id}', [SliderController::class, 'inactiveStatus'])->name('slider.inactive');
    });
});



// Admin Coupons Section
Route::prefix('coupons')->group(function () {

    Route::get('/view', [CouponController::class, 'CouponView'])->name('manage.coupons');
    Route::post('/add', [CouponController::class, 'AddCoupon'])->name('add.coupon');
    Route::get('/edit/{id}', [CouponController::class, 'EditCoupon'])->name('edit.coupon');
    Route::post('/update/{id}', [CouponController::class, 'UpdateCoupon'])->name('update.coupon');
    Route::get('/delete/{id}', [CouponController::class, 'DeleteCoupon'])->name('delete.coupon');
});


// Admin Shipping Section
Route::prefix('shipping')->group(function () {

    // Ship-Division route
    Route::get('/division/view', [ShippingController::class, 'DivisionView'])->name('manage.division');
    Route::post('/division/add', [ShippingController::class, 'AddDivision'])->name('add.division');
    Route::get('/division/edit/{id}', [ShippingController::class, 'EditDivision'])->name('edit.division');
    Route::post('/division/update/{id}', [ShippingController::class, 'UpdateDivision'])->name('update.division');
    Route::get('/division/delete/{id}', [ShippingController::class, 'DeleteDivision'])->name('delete.division');

    // Ship-District Route
    Route::get('/district/view', [ShippingController::class, 'DistrictView'])->name('manage.district');
    Route::post('/district/add', [ShippingController::class, 'AddDistrict'])->name('add.district');
    Route::get('/district/edit/{id}', [ShippingController::class, 'EditDistrict'])->name('edit.district');
    Route::post('/district/update/{id}', [ShippingController::class, 'UpdateDistrict'])->name('update.district');
    Route::get('/district/delete/{id}', [ShippingController::class, 'DeleteDistrict'])->name('delete.district');


    // Ship-State route
    Route::get('/state/view', [ShippingController::class, 'StateView'])->name('manage.state');

    ////// Get district Data With Ajax////////
    Route::get('/division/district/ajax/{division_id}', [ShippingController::class, 'GetDistrictData']);

    Route::post('/state/add', [ShippingController::class, 'AddState'])->name('add.state');
    Route::get('/state/edit/{id}', [ShippingController::class, 'EditState'])->name('edit.state');
    Route::post('/state/update/{id}', [ShippingController::class, 'UpdateState'])->name('update.state');
    Route::get('/state/delete/{id}', [ShippingController::class, 'DeleteState'])->name('delete.state');
});


// Admin Orders Section
Route::prefix('orders')->group(function () {

    Route::get('/pending/orders', [OrderController::class, 'PendingOrders'])->name('pending.orders');
    Route::get('/pending/order/details/{order_id}', [OrderController::class, 'PendingOrderDetails'])->name('pendingOrder.details');
    Route::get('/confirmed/orders', [OrderController::class, 'ConfirmedOrders'])->name('confirmed.orders');
    Route::get('/processing/orders', [OrderController::class, 'ProcessingOrders'])->name('processing.orders');
    Route::get('/picked/orders', [OrderController::class, 'PickedOrders'])->name('picked.orders');
    Route::get('/shipped/orders', [OrderController::class, 'ShippedOrders'])->name('shipped.orders');
    Route::get('/delivered/orders', [OrderController::class, 'DeliveredOrders'])->name('delivered.orders');
    Route::get('/cancel/orders', [OrderController::class, 'CancelOrders'])->name('cancel.order'); 


    ///// update Status ////////
    Route::get('/pending/confirm/{order_id}', [OrderController::class, 'PendingToConfirm'])->name('pending-confirm');
    Route::get('/confirm/processing/{order_id}', [OrderController::class, 'ConfirmToProcessing'])->name('confirm-processing');
    Route::get('/processing/picked/{order_id}', [OrderController::class, 'ProcessingToPicked'])->name('processing-picked');
    Route::get('/picked/shipped/{order_id}', [OrderController::class, 'PickedToShipped'])->name('picked-shipped');
    Route::get('/shipped/delivered/{order_id}', [OrderController::class, 'ShippedToDelivered'])->name('shipped-delivered');
    Route::get('/delivered/cancel/{order_id}', [OrderController::class, 'DeliveredToCancel'])->name('delivered-cancel');
    Route::get('/invoice/download/{order_id}', [OrderController::class, 'AdminInvoiceDownload'])->name('admin-invoice-download');
});


///// Admin Reports Section ///////
Route::prefix('reports')->group(function(){

    Route::get('/view',[ReportController::class,'ViewReports'])->name('all.reports');
    Route::post('/search/by/date',[ReportController::class, 'ReportByDate'])->name('search-by-date');
    Route::post('/search/by/month',[ReportController::class, 'ReportByMonth'])->name('search-by-month');
    Route::post('/search/by/year',[ReportController::class, 'ReportByYear'])->name('search-by-year');
});

////// Admin All Users Section ////////
Route::prefix('allUser')->group(function(){

    Route::get('/view',[AdminProfileController::class,'ViewUserList'])->name('all.users');
    
});


////// Admin Blog Section ////////
Route::prefix('blog')->group(function(){

    //// blog Category Section ////
    Route::get('/category',[BlogController::class,'BlogCategory'])->name('blog.category');
    Route::post('/category/add',[BlogController::class,'AddBlogCategory'])->name('add.blogCategory');
    Route::get('/category/edit/{category_id}',[BlogController::class,'EditBlogCategory'])->name('edit.blogCategory');
    Route::post('/category/update/{category_id}',[BlogController::class,'UpdateBlogCategory'])->name('update.blogCategory');
    Route::get('/category/delete/{category_id}',[BlogController::class,'DeleteBlogCategory'])->name('delete.blogCategory');
    

    //// blog Post Section ///
    Route::get('/post/view',[BlogController::class,'ViewBlogPost'])->name('view.blogPost');
    Route::get('/post/add',[BlogController::class,'AddBlogPost'])->name('add.blogPost');
    Route::post('/post/store',[BlogController::class,'StoreBlogPost'])->name('store.blogPost');

});


////// Admin Site Setting Section ////////
Route::prefix('setting')->group(function(){

    Route::get('/site',[SiteSettingController::class,'SiteSetting'])->name('site-setting');
    Route::post('/site/update/{setting_id}',[SiteSettingController::class,'SiteSettingUpdate'])->name('update.siteSetting');
    Route::get('/seo',[SeoSettingController::class,'SeoSetting'])->name('seo-setting');
    Route::post('/seo/update/{setting_id}',[SeoSettingController::class,'SeoSettingUpdate'])->name('update.seoSetting');


});


////// Admin Return Order Section ////////
Route::prefix('return')->group(function(){

    Route::get('/admin/request',[ReturnController::class,'ReturnRequest'])->name('return-request');
    Route::get('/admin/request/approved/{order_id}',[ReturnController::class,'RequestApproved'])
    ->name('request.approve');
    Route::get('/admin/approved/request',[ReturnController::class,'AllApprovedRequest'])
    ->name('all-approved-request');


});


////// Admin Manage Review Section ////////
Route::prefix('review')->group(function(){

    Route::get('/pending',[ReviewController::class,'PendingReview'])->name('pending-review');
    Route::get('/approve/{review_id}',[ReviewController::class,'ApproveReview'])->name('review-approve');
    Route::get('/all/published',[ReviewController::class,'AllPublishedReview'])->name('published-review');
    Route::get('/delete/{review_id}',[ReviewController::class,'DeleteReview'])->name('delete-review');

});


////// Admin Manage Stock Section ////////
Route::prefix('stock')->group(function(){

    Route::get('/stock',[ProductController::class,'ProductStock'])->name('product-stock');

});


////// Admin User Role Section ////////
Route::prefix('adminUserRole')->group(function(){

    Route::get('/all',[AdminUserController::class,'AllAdminRole'])->name('all-admin-user');
    Route::get('/add',[AdminUserController::class,'AddAdminRole'])->name('add-admin-user');
    Route::post('/store',[AdminUserController::class,'StoreAdminRole'])->name('store-admin-user');
    Route::get('/edit/{id}',[AdminUserController::class,'EditAdminRole'])->name('edit-admin-user');
    Route::post('/update/{id}',[AdminUserController::class,'UpdateAdminRole'])->name('update-admin-user');
    Route::get('/delete/{id}',[AdminUserController::class,'DeleteAdminRole'])->name('delete-admin-user');


});









/////////////////////////////////// Frontend All Routes////////////////////////////

// Multi Language Routes
Route::get('/language/english', [LanguageController::class, 'englishLanguage'])->name('english.language');
Route::get('/language/bengali', [LanguageController::class, 'bengaliLanguage'])->name('bengali.language');
Route::get('/language/hindi', [LanguageController::class, 'hindiLanguage'])->name('hindi.language');

// Product Details Route
Route::get('/product/details/{id}/{slug}', [IndexController::class, 'productDetails'])->name('product.details');

// Product tags Route
Route::get('/product/tags/{tag}', [IndexController::class, 'productTag'])->name('product.tags');

// Subcategory data Route
Route::get('/subcategory/data/{id}/{slug}', [IndexController::class, 'subcategoryData'])->name('subcategory.data');

// Subsubcategory Data Route
Route::get('/subsubcategory/data/{id}/{slug}', [IndexController::class, 'subsubcategoryData'])->name('subsubcategory.data');

// Product View Modal With Ajax
Route::get('/product/view/modal/{id}', [IndexController::class, 'productViewAjax']);

// Add to cart data store
Route::post('/cart/data/store/{id}', [CartController::class, 'AddToCart']);

// Get Data from mini cart
Route::get('/product/mini/cart/', [CartController::class, 'AddMiniCart']);

// Remove Mini Cart
Route::get('/minicart/product-remove/{rowId}', [CartController::class, 'RemoveMiniCart']);

// Add to Wishlist
Route::post('/add-to-wishlist/{product_id}', [WishlistController::class, 'AddToWishlist']);



Route::group(['prefix' => 'user', 'middleware' => ['user', 'auth'], 'namespace' => 'User'], function () {

    // Wishlist Page
    Route::get('/wishlist', [WishlistController::class, 'ViewWishlist'])->name('wishlist');

    // Get Wishlist Data
    Route::get('/get-wishlist-product', [WishlistController::class, 'GetWishlistProduct']);

    //remove wishlist
    Route::get('/wishlist-remove/{id}', [WishlistController::class, 'RemoveWishlist']);
});

// My Cart Page All Routes

// my cart
Route::get('/myCart', [CartPageController::class, 'MyCart'])->name('mycart');

// Get Cart Data
Route::get('/user/get-cart-product', [CartPageController::class, 'GetCartProduct']);

//Cart Remove
Route::get('/user/cart-remove/{id}', [CartPageController::class, 'RemoveCart']);

// Cart Increment
Route::get('/cart-increment/{rowId}', [CartPageController::class, 'CartIncrement']);

// Cart Decrement
Route::get('/cart-decrement/{rowId}', [CartPageController::class, 'CartDecrement']);


// Frontend Apply coupon

Route::post('/coupon-apply', [CartController::class, 'couponApply']);

// Frontend Coupon calculation

Route::get('/coupon-calculation', [CartController::class, 'couponCalculation']);

// Frontend Coupon Remove
Route::get('/coupon-remove', [CartController::class, 'couponRemove']);


// Checkout Route
Route::get('/checkout', [CartController::class, 'CheckoutCreate'])->name('checkout');

// Get District Data With Ajax
Route::get('/checkout/district/ajax/{division_id}', [CheckoutController::class, 'GetDistrictData']);

// Get State Data With Ajax
Route::get('/checkout/state/ajax/{district_id}', [CheckoutController::class, 'GetStateData']);


// store Checkout Data
Route::post('/checkout/store', [CheckoutController::class, 'CheckoutStore'])->name('checkout.store');


//  payment Order (Stripe/Cash)
Route::group(['prefix' => 'user', 'middleware' => ['user', 'auth'], 'namespace' => 'User'], function () {

    Route::post('/stripe/order', [StripeController::class, 'StripeOrder'])->name('stripe.order');
    Route::post('/cash/order', [CashController::class, 'CashOrder'])->name('cash.order');
});

////// Frontend Blog Route/////
Route::get('/blog/post',[HomeBlogController::class, 'ShowBlogPost'])->name('home.blog');
Route::get('/blog/post/details/{post_id}',[HomeBlogController::class, 'DetailsBlogPost'])
->name('details.blogPost');
Route::get('/blog/post/categoryWise/{category_id}',[HomeBlogController::class, 'CategoryWisePost'])
->name('category-wise-post');


//////////// Product Review Section /////////////////
Route::post('/add/review',[ReviewController::class,'AddReview'])->name('add.review');


/////////////////// Order Tracking Route//////////////
Route::group(['prefix' => 'user', 'middleware' => ['user', 'auth'], 'namespace' => 'User'], function () {

Route::post('/order/Tracking',[OrderTrackingController::class,'OrderTracking'])->name('order-tracking');

});


////////////////////// Product Search Route///////////////
Route::post('/product/search',[IndexController::class,'ProductSearch'])->name('product-search');

////////////////////// Advance Search  Route ////////////////
Route::post('/product/advance-search',[IndexController::class,'AdvancedProductSearch']);












///////////////////////////////////All User Route //////////////////////////////

Route::middleware(['auth:sanctum,web', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/', [IndexController::class, 'index']);
Route::get('/user/logout', [IndexController::class, 'userLogout'])->name('user.logout');
Route::get('/user/profile', [IndexController::class, 'userProfile'])->name('user.profile');
Route::post('/user/profile/update', [IndexController::class, 'userProfileUpdate'])->name('userProfile.update');
Route::get('/user/change/password', [IndexController::class, 'userChangePassword'])->name('user.changePassword');
Route::post('/user/update/password', [IndexController::class, 'userUpdatePassword'])->name('update.password');


// user Profile Page View Orders
Route::group(['prefix' => 'user', 'middleware' => ['user', 'auth'], 'namespace' => 'User'], function () {

    Route::get('/my/orders', [AllUserController::class, 'MyOrders'])->name('user.orders');
    Route::get('/return/order/list', [AllUserController::class, 'ReturnOrderList'])->name('return.orders');
    Route::get('/cancel/order/list',[AllUserController::class, 'CancelOrderList'])->name('cancel.orders');
    Route::get('/order/details/{order_id}', [AllUserController::class, 'OrderDetails'])->name('order.details');
    Route::get('/invoice/download/{order_id}', [AllUserController::class, 'InvoiceDownload'])->name('invoice.download');
    Route::post('/return/order/{order_id}',[AllUserController::class, 'ReturnOrder'])->name('return.order');
});