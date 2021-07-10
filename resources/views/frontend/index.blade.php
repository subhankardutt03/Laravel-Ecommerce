@extends('frontend.main_master')
@section('content')

@section('title')
    Home Easy Shopping
@endsection

<style>
	.checked {
  color: orange;
}
</style>


    <div class="body-content outer-top-xs" id="top-banner-and-menu">
  <div class="container">
    <div class="row"> 
      <!-- ============================================== SIDEBAR ============================================== -->
      <div class="col-xs-12 col-sm-12 col-md-3 sidebar"> 
        
        <!-- ================================== TOP NAVIGATION ================================== -->
        
        @include('frontend.common.vertical_menu')


        <!-- ================================== TOP NAVIGATION : END ================================== --> 
        
        <!-- ============================================== HOT DEALS ============================================== -->
        

        @include('frontend.common.hot_deals');

        <!-- ============================================== HOT DEALS: END ============================================== --> 
        
        <!-- ============================================== SPECIAL OFFER ============================================== -->
        
        <div class="sidebar-widget outer-bottom-small wow fadeInUp">
          <h3 class="section-title">Special Offer</h3>
          <div class="sidebar-widget-body outer-top-xs">
            <div class="owl-carousel sidebar-carousel special-offer custom-carousel owl-theme outer-top-xs">

                
              <div class="item">
                <div class="products special-product">


              <!-- Special Offer List-->
            @foreach ($special_offer as $product)

                  <div class="product">
                    <div class="product-micro">
                      <div class="row product-micro-row">
                        <div class="col col-xs-5">
                          <div class="product-image">
                            <div class="image"> <a href="{{ route('product.details',[$product->id,$product->product_slug_en]) }}">
                              <img src="{{ asset($product->product_thumbnail) }}" alt="">
                            </a>
                          </div>
                            <!-- /.image --> 
                            
                          </div>
                          <!-- /.product-image --> 
                        </div>
                        <!-- /.col -->
                        <div class="col col-xs-7">
                          <div class="product-info">
                            <h3 class="name"><a href="{{ route('product.details',[$product->id,$product->product_slug_en]) }}">
                              
                              @if (session()->get('language') == 'hindi')
                  {{ $product->product_name_hin }}
                                @else
                                    @if (session()->get('language') == 'bengali')
                      {{ $product->product_name_ben }}
                                    @else
                                      {{ $product->product_name_en }}
                                    @endif
                                @endif
                            
                            </a></h3>


                            <!------------- Rating System Start----------------->

                          @php
                              $ratingAverage = App\Models\Review::where('product_id',$product->id)->where('status',1)
                              ->avg('rating');
                          @endphp

                          {{-- <div class="rating rateit-small"></div> --}}
                    @if ($ratingAverage == 0)
											<span class="fa fa-star" id="star"></span>
											<span class="fa fa-star" id="star"></span>
											<span class="fa fa-star" id="star"></span>
											<span class="fa fa-star" id="star"></span>
											<span class="fa fa-star" id="star"></span>
										@elseif($ratingAverage == 1 || $ratingAverage <2)
											<span class="fa fa-star checked"></>
											<span class="fa fa-star"></span>
											<span class="fa fa-star"></span>
											<span class="fa fa-star"></span>
											<span class="fa fa-star"></span>
										@elseif($ratingAverage == 2 || $ratingAverage <3)
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star"></span>
											<span class="fa fa-star"></span>
											<span class="fa fa-star"></span>
										@elseif($ratingAverage == 3 || $ratingAverage <4)
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star"></span>
											<span class="fa fa-star"></span>
										@elseif($ratingAverage == 4 || $ratingAverage <5)
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star"></span>
										@elseif($ratingAverage == 5)
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
										@endif

                        <!-------------- Rating  System End ----------------->


                                @if ($product->discount_price == NULL)
                              <div class="product-price"> <span class="price">
                                {{ $product->selling_price }}
                                  </span>
                              </div>
                          <!-- /.product-price --> 
                            @else
                              <div class="product-price"> <span class="price">
                                  {{ $product->discount_price }}
                                </span>
                          </div>
                          <!-- /.product-price -->

                        @endif
                            
                          </div>
                        </div>
                        <!-- /.col --> 
                      </div>
                      <!-- /.product-micro-row --> 
                    </div>
                    <!-- /.product-micro --> 
                    
                  </div>

              @endforeach
            <!-- Special offer List end -->


                </div>
              </div>



            
            </div>
          </div>
          <!-- /.sidebar-widget-body --> 
        </div>
        <!-- /.sidebar-widget --> 
        <!-- ============================================== SPECIAL OFFER : END ============================================== --> 
        <!-- ============================================== PRODUCT TAGS ============================================== -->

        @include('frontend.common.product_tags')

        <!-- ============================================== PRODUCT TAGS : END ============================================== --> 
        <!-- ============================================== SPECIAL DEALS ============================================== -->
        
        <div class="sidebar-widget outer-bottom-small wow fadeInUp">
          <h3 class="section-title">Special Deals</h3>
          <div class="sidebar-widget-body outer-top-xs">
            <div class="owl-carousel sidebar-carousel special-offer custom-carousel owl-theme outer-top-xs">


            
              <div class="item">
                <div class="products special-product">


                <!-- Special Deals List -->
                @foreach ($special_deals as $product)
                    

                    <div class="product">
                    <div class="product-micro">
                      <div class="row product-micro-row">
                        <div class="col col-xs-5">
                          <div class="product-image">
                            <div class="image"> <a href="{{ route('product.details',[$product->id,$product->product_slug_en]) }}">
                              <img src="{{ asset($product->product_thumbnail) }}"  alt="">
                            </a> </div>
                            <!-- /.image --> 
                            
                          </div>
                          <!-- /.product-image --> 
                        </div>
                        <!-- /.col -->
                        <div class="col col-xs-7">
                          <div class="product-info">
                            <h3 class="name"><a href="{{ route('product.details',[$product->id,$product->product_slug_en]) }}">

                            @if (session()->get('language') == 'hindi')
                  {{ $product->product_name_hin }}
                                @else
                                    @if (session()->get('language') == 'bengali')
                      {{ $product->product_name_ben }}
                                    @else
                                      {{ $product->product_name_en }}
                                    @endif
                                @endif
                            
                            </a></h3>


                          <!------------- Rating System Start----------------->

                          @php
                              $ratingAverage = App\Models\Review::where('product_id',$product->id)->where('status',1)
                              ->avg('rating');
                          @endphp

                          {{-- <div class="rating rateit-small"></div> --}}
                    @if ($ratingAverage == 0)
											<span class="fa fa-star" id="star"></span>
											<span class="fa fa-star" id="star"></span>
											<span class="fa fa-star" id="star"></span>
											<span class="fa fa-star" id="star"></span>
											<span class="fa fa-star" id="star"></span>
										@elseif($ratingAverage == 1 || $ratingAverage <2)
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star"></span>
											<span class="fa fa-star"></span>
											<span class="fa fa-star"></span>
											<span class="fa fa-star"></span>
										@elseif($ratingAverage == 2 || $ratingAverage <3)
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star"></span>
											<span class="fa fa-star"></span>
											<span class="fa fa-star"></span>
										@elseif($ratingAverage == 3 || $ratingAverage <4)
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star"></span>
											<span class="fa fa-star"></span>
										@elseif($ratingAverage == 4 || $ratingAverage <5)
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star"></span>
										@elseif($ratingAverage == 5)
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
										@endif

                        <!-------------- Rating  System End ----------------->

                          
                              @if ($product->discount_price == NULL)
                              <div class="product-price"> <span class="price">
                                {{ $product->selling_price }}
                                  </span>
                              </div>
                          <!-- /.product-price --> 
                            @else
                              <div class="product-price"> <span class="price">
                                  {{ $product->discount_price }}
                                </span>
                          </div>
                          <!-- /.product-price -->

                        @endif

                            
                          </div>
                        </div>
                        <!-- /.col --> 
                      </div>
                      <!-- /.product-micro-row --> 
                    </div>
                    <!-- /.product-micro --> 
                    
                  </div>


                @endforeach

                  
                </div>
              </div>


            </div>
          </div>
          <!-- /.sidebar-widget-body --> 
        </div>
        <!-- /.sidebar-widget --> 
        <!-- ============================================== SPECIAL DEALS : END ============================================== --> 
        <!-- ============================================== NEWSLETTER ============================================== -->
        <div class="sidebar-widget newsletter wow fadeInUp outer-bottom-small">
          <h3 class="section-title">Newsletters</h3>
          <div class="sidebar-widget-body outer-top-xs">
            <p>Sign Up for Our Newsletter!</p>
            <form>
              <div class="form-group">
                <label class="sr-only" for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Subscribe to our newsletter">
              </div>
              <button class="btn btn-primary">Subscribe</button>
            </form>
          </div>
          <!-- /.sidebar-widget-body --> 
        </div>
        <!-- /.sidebar-widget --> 
        <!-- ============================================== NEWSLETTER: END ============================================== --> 
        
        <!-- ============================== Testimonials============= -->

        @include('frontend.common.testimonials')
        
        <!-- ============================================== Testimonials: END ============================================== -->
        
        <div class="home-banner"> <img src="{{ asset('frontend/assets/images/banners/LHS-banner.jpg') }}" alt="Image"> </div>
      </div>
      <!-- /.sidemenu-holder --> 
      <!-- ============================================== SIDEBAR : END ============================================== --> 
      
      <!-- ============================================== CONTENT ============================================== -->
      <div class="col-xs-12 col-sm-12 col-md-9 homebanner-holder"> 
        <!-- ========================================== SECTION – HERO ========================================= -->
        
        <div id="hero">
          <div id="owl-main" class="owl-carousel owl-inner-nav owl-ui-sm">


            <!-- Slider List -->
            @foreach ($sliders as $slider)
                
              <div class="item" style="background-image: url({{ asset($slider->slider_image) }});">
              <div class="container-fluid">
                <div class="caption bg-color vertical-center text-left">
                  <div class="big-text fadeInDown-1">
                    
                    @if (session()->get('language') == 'hindi')
                                  {{ $slider->title_hin }}
                                @else
                                    @if (session()->get('language') == 'bengali')
                                      {{ $slider->title_ben }}
                                    @else
                                        {{ $slider->title_en }}
                                    @endif
                                @endif

                  </div>
                  <div class="slider-header fadeInDown-1 excerpt hidden-xs">

                    <span>

                        @if (session()->get('language') == 'hindi')
                                    {{ $slider->description_hin }}
                                @else
                                    @if (session()->get('language') == 'bengali')
                                        {{ $slider->description_ben }}
                                    @else
                                      {{ $slider->description_en }}
                                    @endif
                                @endif

                    </span> 
                    </div>
                  <div class="button-holder fadeInDown-3"> 
                    <a href="index.php?page=single-product" class="btn-lg btn btn-uppercase btn-primary shop-now-button">

                      @if (session()->get('language') == 'hindi')
                                अभी खरीदो
                                @else
                                    @if (session()->get('language') == 'bengali')
                                    এখনই কিনুন
                                    @else
                                      Shop Now
                                    @endif
                                @endif

                    </a>
                  </div>
                </div>
                <!-- /.caption --> 
              </div>
              <!-- /.container-fluid --> 
            </div>
            <!-- /.item -->

            @endforeach

            <!-- End Slider List -->
            
          </div>
          <!-- /.owl-carousel --> 
        </div>
        
        <!-- ========================================= SECTION – HERO : END ========================================= --> 
        
        <!-- ============================================== INFO BOXES ============================================== -->
        <div class="info-boxes wow fadeInUp">
          <div class="info-boxes-inner">
            <div class="row">
              <div class="col-md-6 col-sm-4 col-lg-4">
                <div class="info-box">
                  <div class="row">
                    <div class="col-xs-12">
                      <h4 class="info-box-heading green">

                        @if (session()->get('language') == 'hindi')
                              पैसे वापस
                                @else
                                    @if (session()->get('language') == 'bengali')
                                  টাকা ফেরত
                                    @else
                                      money back
                                    @endif
                                @endif
                      

                      </h4>
                    </div>
                  </div>
                  <h6 class="text">
                    @if (session()->get('language') == 'hindi')
                            30 दिन मनी बैक गारंटी
                                @else
                                    @if (session()->get('language') == 'bengali')
                                30 দিনের অর্থ ফেরতের গ্যারান্টি
                                    @else
                                      30 Days Money Back Guarantee
                                    @endif
                                @endif
                        
                  
                  </h6>
                </div>
              </div>
              <!-- .col -->
              
              <div class="hidden-md col-sm-4 col-lg-4">
                <div class="info-box">
                  <div class="row">
                    <div class="col-xs-12">
                      <h4 class="info-box-heading green">

                        @if (session()->get('language') == 'hindi')
                          मुफ़्त शिपिंग
                                @else
                                    @if (session()->get('language') == 'bengali')
                              বিনামূল্যে পরিবহন
                                    @else
                                      free shipping
                                    @endif
                                @endif
                      
                      
                      </h4>
                    </div>
                  </div>
                  <h6 class="text">

                      @if (session()->get('language') == 'hindi')
                        $99 . से अधिक के ऑर्डर पर शिपिंग
                                @else
                                    @if (session()->get('language') == 'bengali')
                            Orders 99 ডলার অর্ডারে শিপিং
                                    @else
                                      Shipping on orders over $99
                                    @endif
                                @endif
                      
                  </h6>
                </div>
              </div>
              <!-- .col -->
              
              <div class="col-md-6 col-sm-4 col-lg-4">
                <div class="info-box">
                  <div class="row">
                    <div class="col-xs-12">
                      <h4 class="info-box-heading green">

                        @if (session()->get('language') == 'hindi')
                      विशेष बिक्री
                                @else
                                    @if (session()->get('language') == 'bengali')
                          বিশেষ বিক্রয়
                                    @else
                                      Special Sale
                                    @endif
                                @endif  
                      
                      </h4>
                    </div>
                  </div>
                  <h6 class="text">

                    @if (session()->get('language') == 'hindi')
                    सभी मदों पर अतिरिक्त $5 की छूट
                                @else
                                    @if (session()->get('language') == 'bengali')
                        সমস্ত আইটেম অতিরিক্ত $ 5 বন্ধ
                                    @else
                                      Extra $5 off on all items 
                                    @endif
                                @endif    
                  
                  </h6>
                </div>
              </div>
              <!-- .col --> 
            </div>
            <!-- /.row --> 
          </div>
          <!-- /.info-boxes-inner --> 
          
        </div>
        <!-- /.info-boxes --> 
        <!-- ============================================== INFO BOXES : END ============================================== --> 
        <!-- ============================================== SCROLL TABS ============================================== -->
        <div id="product-tabs-slider" class="scroll-tabs outer-top-vs wow fadeInUp">
          <div class="more-info-tab clearfix ">
            <h3 class="new-product-title pull-left">

              @if (session()->get('language') == 'hindi')
                  नये उत्पाद
                                @else
                                    @if (session()->get('language') == 'bengali')
                      নতুন পণ্য
                                    @else
                                      New Products
                                    @endif
                                @endif      
            
            
            </h3>
            <ul class="nav nav-tabs nav-tab-line pull-right" id="new-products-1">
              <li class="active"><a data-transition-type="backSlide" href="#all" data-toggle="tab">

                @if (session()->get('language') == 'hindi')
                सब
                                @else
                                    @if (session()->get('language') == 'bengali')
                    সব
                                    @else
                                      All
                                    @endif
                                @endif        
              
              </a></li>

            <!-- Category List -->
            @foreach ($categories as $category)
                
                <li><a data-transition-type="backSlide" href="#category{{ $category->id }}" data-toggle="tab">

                  @if (session()->get('language') == 'hindi')
                  {{ $category->category_name_hin }}
                                @else
                                    @if (session()->get('language') == 'bengali')
                      {{ $category->category_name_ben }}
                                    @else
                                      {{ $category->category_name_en }}
                                    @endif
                                @endif    
              

                </a></li>


            @endforeach

            <!-- End Category List -->

            </ul>
            <!-- /.nav-tabs --> 
          </div>
          <div class="tab-content outer-top-xs">




            <div class="tab-pane in active" id="all">
              <div class="product-slider">
                <div class="owl-carousel home-owl-carousel custom-carousel owl-theme" data-item="4">


                <!-- Products List-->
                @foreach ($products as $product)
                    
                  <div class="item item-carousel">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> <a href="{{ route('product.details',[$product->id,$product->product_slug_en]) }}">
                            <img  src="{{ asset($product->product_thumbnail) }}" alt="">
                          </a> </div>
                          <!-- /.image -->
                          
                            @if ($product->discount_price == NULL)
                            <div class="tag new">
                                <span>new</span>
                              </div>
                            @else
                              @php
                                  $discount = floor(((($product->selling_price - $product->discount_price) / $product->selling_price) * 100));
                              @endphp
                              <div class="tag new" style="background-color : #FF7878;">
                                <span>{{ $discount }}%</span>
                              </div>
                            @endif
                            
                        </div>
                        <!-- /.product-image -->
                        
                        <div class="product-info text-left">
                          <h3 class="name"><a href="{{ route('product.details',[$product->id,$product->product_slug_en]) }}">

                          @if (session()->get('language') == 'hindi')
                  {{ $product->product_name_hin }}
                                @else
                                    @if (session()->get('language') == 'bengali')
                      {{ $product->product_name_ben }}
                                    @else
                                      {{ $product->product_name_en }}
                                    @endif
                                @endif

                          </a></h3>

                          <!------------- Rating System Start----------------->

                          @php
                              $ratingAverage = App\Models\Review::where('product_id',$product->id)->where('status',1)
                              ->avg('rating');
                          @endphp

                          {{-- <div class="rating rateit-small"></div> --}}
                    @if ($ratingAverage == 0)
											<span class="fa fa-star" id="star"></span>
											<span class="fa fa-star" id="star"></span>
											<span class="fa fa-star" id="star"></span>
											<span class="fa fa-star" id="star"></span>
											<span class="fa fa-star" id="star"></span>
										@elseif($ratingAverage == 1 || $ratingAverage <2)
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star"></span>
											<span class="fa fa-star"></span>
											<span class="fa fa-star"></span>
											<span class="fa fa-star"></span>
										@elseif($ratingAverage == 2 || $ratingAverage <3)
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star"></span>
											<span class="fa fa-star"></span>
											<span class="fa fa-star"></span>
										@elseif($ratingAverage == 3 || $ratingAverage <4)
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star"></span>
											<span class="fa fa-star"></span>
										@elseif($ratingAverage == 4 || $ratingAverage <5)
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star"></span>
										@elseif($ratingAverage == 5)
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
										@endif

                        <!-------------- Rating  System End ----------------->


                          <div class="description"></div>


                            @if ($product->discount_price == NULL)
                              <div class="product-price"> <span class="price">
                                {{ $product->selling_price }}
                                  </span>
                              </div>
                          <!-- /.product-price --> 
                            @else
                              <div class="product-price"> <span class="price">
                                  {{ $product->discount_price }}
                                </span>
                                    <span class="price-before-discount">{{ $product->selling_price }}</span>
                          </div>
                          <!-- /.product-price --> 
                            @endif
                          
                        
                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">

                              <button class="btn btn-primary icon" 
                                type="button" title="Add Cart" data-toggle="modal" data-target="#exampleModal"
                                id="{{ $product->id }}" onclick="productView(this.id)">
                                  <i class="fa fa-shopping-cart"></i>
                                </button>

                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                              </li>

                                <button class="btn btn-primary icon" type="button"  id="{{ $product->id }}" 
                                onclick="addToWishList(this.id)" title="Wishlist">
                                  <i class="fa fa-heart"></i> </button>

                                  <li class="lnk"> <a data-toggle="tooltip" class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>

                            </ul>
                          </div>
                          <!-- /.action --> 
                        </div>
                        <!-- /.cart --> 
                      </div>
                      <!-- /.product --> 
                      
                    </div>
                    <!-- /.products --> 
                  </div>
                  <!-- /.item -->

                @endforeach



                  
                </div>
                <!-- /.home-owl-carousel --> 
              </div>
              <!-- /.product-slider --> 
            </div>
            <!-- /.tab-pane -->



          <!-- Category List For Categorise Data-->
          @foreach ($categories as $category)
              

              <div class="tab-pane" id="category{{ $category->id }}">
              <div class="product-slider">
                <div class="owl-carousel home-owl-carousel custom-carousel owl-theme" data-item="4">

                  @php
                      $categoryWiseProducts = App\Models\Product::where('category_id',$category->id)
                      ->orderBy('id','DESC')->get();
                  @endphp

                <!-- Products List-->
                @forelse ($categoryWiseProducts as $product)
                    
                  <div class="item item-carousel">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> <a href="{{ route('product.details',[$product->id,$product->product_slug_en]) }}">
                            <img  src="{{ asset($product->product_thumbnail) }}" alt="">
                          </a> </div>
                          <!-- /.image -->
                          

                          @if ($product->discount_price == NULL)
                            <div class="tag new">
                                <span>new</span>
                              </div>
                            @else
                              @php
                                  $discount = floor(((($product->selling_price - $product->discount_price) / $product->selling_price) * 100));
                              @endphp
                              <div class="tag new" style="background-color : #FF7878;">
                                <span>{{ $discount }}%</span>
                              </div>
                          @endif


                        </div>
                        <!-- /.product-image -->
                        
                        <div class="product-info text-left">
                          <h3 class="name"><a href="{{ route('product.details',[$product->id,$product->product_slug_en]) }}">

                          @if (session()->get('language') == 'hindi')
                  {{ $product->product_name_hin }}
                                @else
                                    @if (session()->get('language') == 'bengali')
                      {{ $product->product_name_ben }}
                                    @else
                                      {{ $product->product_name_en }}
                                    @endif
                                @endif
                                
                          </a></h3>

                        <!------------- Rating System Start----------------->

                          @php
                              $ratingAverage = App\Models\Review::where('product_id',$product->id)->where('status',1)
                              ->avg('rating');
                          @endphp

                          {{-- <div class="rating rateit-small"></div> --}}
                    @if ($ratingAverage == 0)
											<span class="fa fa-star" id="star"></span>
											<span class="fa fa-star" id="star"></span>
											<span class="fa fa-star" id="star"></span>
											<span class="fa fa-star" id="star"></span>
											<span class="fa fa-star" id="star"></span>
										@elseif($ratingAverage == 1 || $ratingAverage <2)
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star"></span>
											<span class="fa fa-star"></span>
											<span class="fa fa-star"></span>
											<span class="fa fa-star"></span>
										@elseif($ratingAverage == 2 || $ratingAverage <3)
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star"></span>
											<span class="fa fa-star"></span>
											<span class="fa fa-star"></span>
										@elseif($ratingAverage == 3 || $ratingAverage <4)
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star"></span>
											<span class="fa fa-star"></span>
										@elseif($ratingAverage == 4 || $ratingAverage <5)
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star"></span>
										@elseif($ratingAverage == 5)
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
										@endif

                        <!-------------- Rating  System End ----------------->


                          <div class="description"></div>



                          @if ($product->discount_price == NULL)
                              <div class="product-price"> <span class="price">
                                {{ $product->selling_price }}
                                  </span>
                              </div>
                          <!-- /.product-price --> 
                            @else
                              <div class="product-price"> <span class="price">
                                  {{ $product->discount_price }}
                                </span>
                                    <span class="price-before-discount">{{ $product->selling_price }}</span>
                          </div>
                          <!-- /.product-price -->

                        @endif


                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                
                                <button class="btn btn-primary icon" 
                                type="button" title="Add Cart" data-toggle="modal" data-target="#exampleModal"
                                id="{{ $product->id }}" onclick="productView(this.id)">
                                  <i class="fa fa-shopping-cart"></i>
                                </button>

                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                              </li>

                                <button class="btn btn-primary icon" type="button"  id="{{ $product->id }}" 
                                onclick="addToWishList(this.id)" title="Wishlist">
                                  <i class="fa fa-heart"></i> </button>

                              <li class="lnk"> <a data-toggle="tooltip" class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                            </ul>
                          </div>
                          <!-- /.action --> 
                        </div>
                        <!-- /.cart --> 
                      </div>
                      <!-- /.product --> 
                      
                    </div>
                    <!-- /.products --> 
                  </div>
                  <!-- /.item -->

                  @empty
                  <h5 class="text-danger"> No Product Found </h5>


                @endforelse

                  
                </div>
                <!-- /.home-owl-carousel --> 
              </div>
              <!-- /.product-slider --> 
            </div>
            <!-- /.tab-pane -->

          @endforeach
          

          <!--Category List For Categorise Data End -->

            
          
          </div>
          <!-- /.tab-content --> 
        </div>
        <!-- /.scroll-tabs --> 
        <!-- ============================================== SCROLL TABS : END ============================================== --> 
        <!-- ============================================== WIDE PRODUCTS ============================================== -->
        <div class="wide-banners wow fadeInUp outer-bottom-xs">
          <div class="row">
            <div class="col-md-7 col-sm-7">
              <div class="wide-banner cnt-strip">
                <div class="image"> <img class="img-responsive" src="{{ asset('frontend/assets/images/banners/home-banner5.jpg') }}" alt="" style="height:180px;width:520px"> </div>
              </div>
              <!-- /.wide-banner --> 
            </div>
            <!-- /.col -->
            <div class="col-md-5 col-sm-5">
              <div class="wide-banner cnt-strip">
                <div class="image"> <img class="img-responsive" src="{{ asset('frontend/assets/images/banners/home-banner2.jpg') }}" alt=""> </div>
              </div>
              <!-- /.wide-banner --> 
            </div>
            <!-- /.col --> 
          </div>
          <!-- /.row --> 
        </div>
        <!-- /.wide-banners --> 
        
        <!-- ============================================== WIDE PRODUCTS : END ============================================== --> 
        <!-- ============================================== FEATURED PRODUCTS ============================================== -->
        <section class="section featured-product wow fadeInUp">
          <h3 class="section-title">

            @if (session()->get('language') == 'hindi')
                विशेष रुप से प्रदर्शित प्रोडक्टस
                                @else
                                    @if (session()->get('language') == 'bengali')
                    বৈশিষ্ট্যযুক্ত পণ্য
                                    @else
                                      Featured products
                                    @endif
                                @endif
          
          
          </h3>
          <div class="owl-carousel home-owl-carousel custom-carousel owl-theme outer-top-xs">


            <!-- Featured Product List-->
            @foreach ($featured as $product)
                
          
            <div class="item item-carousel">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> <a href="{{ route('product.details',[$product->id,$product->product_slug_en]) }}">
                            <img  src="{{ asset($product->product_thumbnail) }}" alt="">
                          </a> </div>
                          <!-- /.image -->
                          

                          @if ($product->discount_price == NULL)
                            <div class="tag new">
                                <span>new</span>
                              </div>
                            @else
                              @php
                                  $discount = floor(((($product->selling_price - $product->discount_price) / $product->selling_price) * 100));
                              @endphp
                              <div class="tag new" style="background-color : #FF7878;">
                                <span>{{ $discount }}%</span>
                              </div>
                          @endif


                        </div>
                        <!-- /.product-image -->
                        
                        <div class="product-info text-left">
                          <h3 class="name"><a href="{{ route('product.details',[$product->id,$product->product_slug_en]) }}">

                          @if (session()->get('language') == 'hindi')
                  {{ $product->product_name_hin }}
                                @else
                                    @if (session()->get('language') == 'bengali')
                      {{ $product->product_name_ben }}
                                    @else
                                      {{ $product->product_name_en }}
                                    @endif
                                @endif
                                
                          </a></h3>

                        <!------------- Rating System Start----------------->

                          @php
                              $ratingAverage = App\Models\Review::where('product_id',$product->id)->where('status',1)
                              ->avg('rating');
                          @endphp

                          {{-- <div class="rating rateit-small"></div> --}}
                    @if ($ratingAverage == 0)
											<span class="fa fa-star" id="star"></span>
											<span class="fa fa-star" id="star"></span>
											<span class="fa fa-star" id="star"></span>
											<span class="fa fa-star" id="star"></span>
											<span class="fa fa-star" id="star"></span>
										@elseif($ratingAverage == 1 || $ratingAverage <2)
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star"></span>
											<span class="fa fa-star"></span>
											<span class="fa fa-star"></span>
											<span class="fa fa-star"></span>
										@elseif($ratingAverage == 2 || $ratingAverage <3)
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star"></span>
											<span class="fa fa-star"></span>
											<span class="fa fa-star"></span>
										@elseif($ratingAverage == 3 || $ratingAverage <4)
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star"></span>
											<span class="fa fa-star"></span>
										@elseif($ratingAverage == 4 || $ratingAverage <5)
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star"></span>
										@elseif($ratingAverage == 5)
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
										@endif

                        <!-------------- Rating  System End ----------------->

                          <div class="description"></div>



                          @if ($product->discount_price == NULL)
                              <div class="product-price"> <span class="price">
                                {{ $product->selling_price }}
                                  </span>
                              </div>
                          <!-- /.product-price --> 
                            @else
                              <div class="product-price"> <span class="price">
                                  {{ $product->discount_price }}
                                </span>
                                    <span class="price-before-discount">{{ $product->selling_price }}</span>
                          </div>
                          <!-- /.product-price -->

                        @endif


                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">

                                <button class="btn btn-primary icon" 
                                type="button" title="Add Cart" data-toggle="modal" data-target="#exampleModal"
                                id="{{ $product->id }}" onclick="productView(this.id)">
                                  <i class="fa fa-shopping-cart"></i>
                                </button>

                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                              </li>

                                <button class="btn btn-primary icon" type="button"  id="{{ $product->id }}" 
                                onclick="addToWishList(this.id)" title="Wishlist">
                                  <i class="fa fa-heart"></i> </button>
                                
                                
                              <li class="lnk">
                                <a data-toggle="tooltip" class="add-to-cart" href="detail.html" title="Compare">
                                  <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                            </ul>
                          </div>
                          <!-- /.action --> 
                        </div>
                        <!-- /.cart --> 
                      </div>
                      <!-- /.product --> 
                      
                    </div>
                    <!-- /.products --> 
                  </div>
            <!-- /.item -->

  @endforeach

    <!-- Featured Product List End -->


          </div>
          <!-- /.home-owl-carousel --> 
        </section>
        <!-- /.section --> 
        <!-- ============================================== FEATURED PRODUCTS : END ============================================== -->
        
        



      <!-- ============================================== Skip Category Products_0 PRODUCTS ============================================== -->
        <section class="section featured-product wow fadeInUp">
          <h3 class="section-title">

            @if (session()->get('language') == 'hindi')
                  {{ $skip_category_0->category_name_hin }}
                                @else
                                    @if (session()->get('language') == 'bengali')
                      {{ $skip_category_0->category_name_ben }}
                                    @else
                                      {{ $skip_category_0->category_name_en }}
                                    @endif
                                @endif

          </h3>
          <div class="owl-carousel home-owl-carousel custom-carousel owl-theme outer-top-xs">


            <!-- Featured Product List-->
            @foreach ($skip_category_product_0 as $product)
                
          
            <div class="item item-carousel">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> <a href="{{ route('product.details',[$product->id,$product->product_slug_en]) }}">
                            <img  src="{{ asset($product->product_thumbnail) }}" alt="">
                          </a> </div>
                          <!-- /.image -->
                          

                          @if ($product->discount_price == NULL)
                            <div class="tag new">
                                <span>new</span>
                              </div>
                            @else
                              @php
                                  $discount = floor(((($product->selling_price - $product->discount_price) / $product->selling_price) * 100));
                              @endphp
                              <div class="tag new" style="background-color : #FF7878;">
                                <span>{{ $discount }}%</span>
                              </div>
                          @endif


                        </div>
                        <!-- /.product-image -->
                        
                        <div class="product-info text-left">
                          <h3 class="name"><a href="{{ route('product.details',[$product->id,$product->product_slug_en]) }}">

                          @if (session()->get('language') == 'hindi')
                  {{ $product->product_name_hin }}
                                @else
                                    @if (session()->get('language') == 'bengali')
                      {{ $product->product_name_ben }}
                                    @else
                                      {{ $product->product_name_en }}
                                    @endif
                                @endif
                                
                          </a></h3>

                        <!------------- Rating System Start----------------->

                          @php
                              $ratingAverage = App\Models\Review::where('product_id',$product->id)->where('status',1)
                              ->avg('rating');
                          @endphp

                          {{-- <div class="rating rateit-small"></div> --}}
                    @if ($ratingAverage == 0)
											<span class="fa fa-star" id="star"></span>
											<span class="fa fa-star" id="star"></span>
											<span class="fa fa-star" id="star"></span>
											<span class="fa fa-star" id="star"></span>
											<span class="fa fa-star" id="star"></span>
										@elseif($ratingAverage == 1 || $ratingAverage <2)
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star"></span>
											<span class="fa fa-star"></span>
											<span class="fa fa-star"></span>
											<span class="fa fa-star"></span>
										@elseif($ratingAverage == 2 || $ratingAverage <3)
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star"></span>
											<span class="fa fa-star"></span>
											<span class="fa fa-star"></span>
										@elseif($ratingAverage == 3 || $ratingAverage <4)
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star"></span>
											<span class="fa fa-star"></span>
										@elseif($ratingAverage == 4 || $ratingAverage <5)
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star"></span>
										@elseif($ratingAverage == 5)
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
										@endif

                        <!-------------- Rating  System End ----------------->

                          <div class="description"></div>

                          @if ($product->discount_price == NULL)
                              <div class="product-price"> <span class="price">
                                {{ $product->selling_price }}
                                  </span>
                              </div>
                          <!-- /.product-price --> 
                            @else
                              <div class="product-price"> <span class="price">
                                  {{ $product->discount_price }}
                                </span>
                                    <span class="price-before-discount">{{ $product->selling_price }}</span>
                          </div>
                          <!-- /.product-price -->

                        @endif


                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">


                              <button class="btn btn-primary icon" 
                                type="button" title="Add Cart" data-toggle="modal" data-target="#exampleModal"
                                id="{{ $product->id }}" onclick="productView(this.id)">
                                  <i class="fa fa-shopping-cart"></i>
                                </button>

                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                              </li>

                                <button class="btn btn-primary icon" type="button"  id="{{ $product->id }}" 
                                onclick="addToWishList(this.id)" title="Wishlist">
                                  <i class="fa fa-heart"></i> </button>


                              <li class="lnk"> <a data-toggle="tooltip" class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                            </ul>
                          </div>
                          <!-- /.action --> 
                        </div>
                        <!-- /.cart --> 
                      </div>
                      <!-- /.product --> 
                      
                    </div>
                    <!-- /.products --> 
                  </div>
            <!-- /.item -->

  @endforeach

    <!-- Featured Product List End -->


          </div>
          <!-- /.home-owl-carousel --> 
        </section>
        <!-- /.section --> 
        <!-- ============================================== Skip Category Products_0 PRODUCTS : END ============================================== -->





        <!-- ============================================== Skip Catgeory Products_2 PRODUCTS ============================================== -->
        <section class="section featured-product wow fadeInUp">
          <h3 class="section-title">

            @if (session()->get('language') == 'hindi')
                  {{ $skip_category_2->category_name_hin }}
                                @else
                                    @if (session()->get('language') == 'bengali')
                      {{ $skip_category_2->category_name_ben }}
                                    @else
                                      {{ $skip_category_2->category_name_en }}
                                    @endif
                                @endif

          </h3>
          <div class="owl-carousel home-owl-carousel custom-carousel owl-theme outer-top-xs">


            <!-- Featured Product List-->
            @foreach ($skip_category_product_2 as $product)
                
          
            <div class="item item-carousel">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> <a href="{{ route('product.details',[$product->id,$product->product_slug_en]) }}">
                            <img  src="{{ asset($product->product_thumbnail) }}" alt="">
                          </a> </div>
                          <!-- /.image -->
                          

                          @if ($product->discount_price == NULL)
                            <div class="tag new">
                                <span>new</span>
                              </div>
                            @else
                              @php
                                  $discount = floor(((($product->selling_price - $product->discount_price) / $product->selling_price) * 100));
                              @endphp
                              <div class="tag new" style="background-color : #FF7878;">
                                <span>{{ $discount }}%</span>
                              </div>
                          @endif


                        </div>
                        <!-- /.product-image -->
                        
                        <div class="product-info text-left">
                          <h3 class="name"><a href="{{ route('product.details',[$product->id,$product->product_slug_en]) }}">

                          @if (session()->get('language') == 'hindi')
                  {{ $product->product_name_hin }}
                                @else
                                    @if (session()->get('language') == 'bengali')
                      {{ $product->product_name_ben }}
                                    @else
                                      {{ $product->product_name_en }}
                                    @endif
                                @endif
                                
                          </a></h3>


                      <!------------- Rating System Start----------------->

                          @php
                              $ratingAverage = App\Models\Review::where('product_id',$product->id)->where('status',1)
                              ->avg('rating');
                          @endphp

                          {{-- <div class="rating rateit-small"></div> --}}
                    @if ($ratingAverage == 0)
											<span class="fa fa-star" id="star"></span>
											<span class="fa fa-star" id="star"></span>
											<span class="fa fa-star" id="star"></span>
											<span class="fa fa-star" id="star"></span>
											<span class="fa fa-star" id="star"></span>
										@elseif($ratingAverage == 1 || $ratingAverage <2)
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star"></span>
											<span class="fa fa-star"></span>
											<span class="fa fa-star"></span>
											<span class="fa fa-star"></span>
										@elseif($ratingAverage == 2 || $ratingAverage <3)
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star"></span>
											<span class="fa fa-star"></span>
											<span class="fa fa-star"></span>
										@elseif($ratingAverage == 3 || $ratingAverage <4)
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star"></span>
											<span class="fa fa-star"></span>
										@elseif($ratingAverage == 4 || $ratingAverage <5)
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star"></span>
										@elseif($ratingAverage == 5)
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
										@endif

                        <!-------------- Rating  System End ----------------->


                          <div class="description"></div>

                          @if ($product->discount_price == NULL)
                              <div class="product-price"> <span class="price">
                                {{ $product->selling_price }}
                                  </span>
                              </div>
                          <!-- /.product-price --> 
                            @else
                              <div class="product-price"> <span class="price">
                                  {{ $product->discount_price }}
                                </span>
                                    <span class="price-before-discount">{{ $product->selling_price }}</span>
                          </div>
                          <!-- /.product-price -->

                        @endif


                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">


                                <button class="btn btn-primary icon" 
                                type="button" title="Add Cart" data-toggle="modal" data-target="#exampleModal"
                                id="{{ $product->id }}" onclick="productView(this.id)">
                                  <i class="fa fa-shopping-cart"></i>
                                </button>

                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                              </li>

                                <button class="btn btn-primary icon" type="button"  id="{{ $product->id }}" 
                                onclick="addToWishList(this.id)" title="Wishlist">
                                  <i class="fa fa-heart"></i> </button>


                              <li class="lnk"> <a data-toggle="tooltip" class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                            </ul>
                          </div>
                          <!-- /.action --> 
                        </div>
                        <!-- /.cart --> 
                      </div>
                      <!-- /.product --> 
                      
                    </div>
                    <!-- /.products --> 
                  </div>
            <!-- /.item -->

  @endforeach

    <!-- Featured Product List End -->


          </div>
          <!-- /.home-owl-carousel --> 
        </section>
        <!-- /.section --> 
        <!-- ============================================== Skip Category Products_2 PRODUCTS : END ============================================== -->



        <!-- ============================================== WIDE PRODUCTS ============================================== -->
        <div class="wide-banners wow fadeInUp outer-bottom-xs">
          <div class="row">
            <div class="col-md-12">
              <div class="wide-banner cnt-strip">
                <div class="image"> <img class="img-responsive" src="{{ asset('frontend/assets/images/banners/home-banner.jpg') }}" alt=""> </div>
                <div class="strip strip-text">
                  <div class="strip-inner">
                    <h2 class="text-right">New Mens Fashion<br>
                      <span class="shopping-needs">Save up to 40% off</span></h2>
                  </div>
                </div>
                <div class="new-label">
                  <div class="text">NEW</div>
                </div>
                <!-- /.new-label --> 
              </div>
              <!-- /.wide-banner --> 
            </div>
            <!-- /.col --> 
            
          </div>
          <!-- /.row --> 
        </div>
        <!-- /.wide-banners --> 
        <!-- ============================================== WIDE PRODUCTS : END ============================================== -->
        
        

        <!-- ============================================== Skip Brand Products_11 PRODUCTS ============================================== -->
        <section class="section featured-product wow fadeInUp">
          <h3 class="section-title">

            @if (session()->get('language') == 'hindi')
                  {{ $skip_brand_11->brand_name_hin }}
                                @else
                                    @if (session()->get('language') == 'bengali')
                      {{ $skip_brand_11->brand_name_ben }}
                                    @else
                                      {{ $skip_brand_11->brand_name_en }}
                                    @endif
                                @endif

          </h3>
          <div class="owl-carousel home-owl-carousel custom-carousel owl-theme outer-top-xs">


            <!-- Featured Product List-->
            @foreach ($skip_brand_product_11 as $product)
                
          
            <div class="item item-carousel">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> <a href="{{ route('product.details',[$product->id,$product->product_slug_en]) }}">
                            <img  src="{{ asset($product->product_thumbnail) }}" alt="">
                          </a> </div>
                          <!-- /.image -->
                          

                          @if ($product->discount_price == NULL)
                            <div class="tag new">
                                <span>new</span>
                              </div>
                            @else
                              @php
                                  $discount = floor(((($product->selling_price - $product->discount_price) / $product->selling_price) * 100));
                              @endphp
                              <div class="tag new" style="background-color : #FF7878;">
                                <span>{{ $discount }}%</span>
                              </div>
                          @endif


                        </div>
                        <!-- /.product-image -->
                        
                        <div class="product-info text-left">
                          <h3 class="name"><a href="{{ route('product.details',[$product->id,$product->product_slug_en]) }}">

                          @if (session()->get('language') == 'hindi')
                  {{ $product->product_name_hin }}
                                @else
                                    @if (session()->get('language') == 'bengali')
                      {{ $product->product_name_ben }}
                                    @else
                                      {{ $product->product_name_en }}
                                    @endif
                                @endif
                                
                          </a></h3>


            <!------------- Rating System Start----------------->

                          @php
                              $ratingAverage = App\Models\Review::where('product_id',$product->id)->where('status',1)
                              ->avg('rating');
                          @endphp

                          {{-- <div class="rating rateit-small"></div> --}}
                    @if ($ratingAverage == 0)
											<span class="fa fa-star" id="star"></span>
											<span class="fa fa-star" id="star"></span>
											<span class="fa fa-star" id="star"></span>
											<span class="fa fa-star" id="star"></span>
											<span class="fa fa-star" id="star"></span>
										@elseif($ratingAverage == 1 || $ratingAverage <2)
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star"></span>
											<span class="fa fa-star"></span>
											<span class="fa fa-star"></span>
											<span class="fa fa-star"></span>
										@elseif($ratingAverage == 2 || $ratingAverage <3)
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star"></span>
											<span class="fa fa-star"></span>
											<span class="fa fa-star"></span>
										@elseif($ratingAverage == 3 || $ratingAverage <4)
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star"></span>
											<span class="fa fa-star"></span>
										@elseif($ratingAverage == 4 || $ratingAverage <5)
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star"></span>
										@elseif($ratingAverage == 5)
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
										@endif

                        <!-------------- Rating  System End ----------------->


                          <div class="description"></div>


                          @if ($product->discount_price == NULL)
                              <div class="product-price"> <span class="price">
                                {{ $product->selling_price }}
                                  </span>
                              </div>
                          <!-- /.product-price --> 
                            @else
                              <div class="product-price"> <span class="price">
                                  {{ $product->discount_price }}
                                </span>
                                    <span class="price-before-discount">{{ $product->selling_price }}</span>
                          </div>
                          <!-- /.product-price -->

                        @endif


                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">


                              <button class="btn btn-primary icon" 
                                type="button" title="Add Cart" data-toggle="modal" data-target="#exampleModal"
                                id="{{ $product->id }}" onclick="productView(this.id)">
                                  <i class="fa fa-shopping-cart"></i>
                                </button>

                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                              </li>

                                <button class="btn btn-primary icon" type="button"  id="{{ $product->id }}" 
                                onclick="addToWishList(this.id)" title="Wishlist">
                                  <i class="fa fa-heart"></i> </button>


                              <li class="lnk"> <a data-toggle="tooltip" class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                            </ul>
                          </div>
                          <!-- /.action --> 
                        </div>
                        <!-- /.cart --> 
                      </div>
                      <!-- /.product --> 
                      
                    </div>
                    <!-- /.products --> 
                  </div>
            <!-- /.item -->

  @endforeach

    <!-- Featured Product List End -->


          </div>
          <!-- /.home-owl-carousel --> 
        </section>
        <!-- /.section --> 
        <!-- ============================================== Skip Brand Products_11 PRODUCTS : END ============================================== -->



        
        <!-- ============================================== BLOG SLIDER ============================================== -->
        <section class="section latest-blog outer-bottom-vs wow fadeInUp">
          <h3 class="section-title">latest form blog</h3>
          <div class="blog-slider-container outer-top-xs">
            <div class="owl-carousel blog-slider custom-carousel">

              @foreach ($blogPost as $post)
                  
                <div class="item">
                  <div class="blog-post">
                    <div class="blog-post-image">
                      <div class="image"> <a href="blog.html">
                        <img src="{{ asset($post->blog_post_image) }}" alt="">
                      </a></div>
                    </div>
                    <!-- /.blog-post-image -->
                    
                    <div class="blog-post-info text-left">
                      <h3 class="name"><a href="#">

                        @if (session()->get('language') == 'hindi')
                                    {{ $post->blog_post_title_hin }}
                                @else
                                    @if (session()->get('language') == 'bengali')
                                        {{ $post->blog_post_title_ben }}
                                    @else
                                        {{ $post->blog_post_title_en }}
                                    @endif
                                @endif

                      </a></h3>
                      <span class="info">
                      {{ Carbon\Carbon::parse($post->created_at)->diffForHumans() }}
                      </span>
                      <p class="text">

                        @if (session()->get('language') == 'hindi')
                                    {!! Str::limit($post->blog_post_details_hin,100) !!}
                                @else
                                    @if (session()->get('language') == 'bengali')
                                        {!! Str::limit($post->blog_post_details_ben,100) !!}
                                    @else
                                        {!! Str::limit($post->blog_post_details_en,100) !!}
                                    @endif
                                @endif

                      </p>
                      <a href="{{ route('details.blogPost',$post->id) }}" class="lnk btn btn-primary">
                        Read more</a> </div>
                    <!-- /.blog-post-info --> 
                    
                  </div>
                  <!-- /.blog-post --> 
                </div>
                <!-- /.item -->

              @endforeach
              

            </div>
            <!-- /.owl-carousel --> 
          </div>
          <!-- /.blog-slider-container --> 
        </section>
        <!-- /.section --> 
        <!-- ============================================== BLOG SLIDER : END ============================================== --> 
        
        
      </div>
      <!-- /.homebanner-holder --> 
      <!-- ============================================== CONTENT : END ============================================== --> 
    </div>
    <!-- /.row --> 
    <!-- ============================================== BRANDS CAROUSEL ============================================== -->

    @include('frontend.body.brands')
    <!-- /.logo-slider --> 
    <!-- ============================================== BRANDS CAROUSEL : END ============================================== --> 
  </div>
  <!-- /.container --> 
</div>
@endsection

