@extends('frontend.main_master')
@section('content')

@section('title')
    Tag wise Product
@endsection



<div class="breadcrumb">
  <div class="container">
    <div class="breadcrumb-inner">
      <ul class="list-inline list-unstyled">
        <li><a href="#">Home</a></li>
        <li class='active'>Handbags</li>
      </ul>
    </div>
    <!-- /.breadcrumb-inner --> 
  </div>
  <!-- /.container --> 
</div>
<!-- /.breadcrumb -->
<div class="body-content outer-top-xs">
  <div class='container'>
    <div class='row'>
      <div class='col-md-3 sidebar'> 
        <!-- ================================== TOP NAVIGATION ================================== -->
        
        @include('frontend.common.vertical_menu')

        <!-- ================================== TOP NAVIGATION : END ================================== -->
        <div class="sidebar-module-container">
          <div class="sidebar-filter"> 
            <!-- ============================================== SIDEBAR CATEGORY ============================================== -->
            <div class="sidebar-widget wow fadeInUp">
              <h3 class="section-title">shop by</h3>
              <div class="widget-header">
                <h4 class="widget-title">Category</h4>
              </div>
              <div class="sidebar-widget-body">
                <div class="accordion">


                <!-- Category List -->
                @foreach ($categories as $category)
                    
                    <div class="accordion-group">
                    <div class="accordion-heading">
                      <a href="#collapse{{ $category->id }}" data-toggle="collapse" class="accordion-toggle collapsed">
                        
                        @if (session()->get('language') == 'hindi')
                  {{ $category->category_name_hin }}
                                @else
                                    @if (session()->get('language') == 'bengali')
                      {{ $category->category_name_ben }}
                                    @else
                                      {{ $category->category_name_en }}
                                    @endif
                                @endif    

                      </a> </div>
                    <!-- /.accordion-heading -->
                    <div class="accordion-body collapse" id="collapse{{ $category->id }}" style="height: 0px;">
                      <div class="accordion-inner">

                      @php
                            
                            $subcategories = App\Models\Subcategory::where('category_id',$category->id)
                            ->orderBy('subcategory_name_en','ASC')->get();

                        @endphp

                      @foreach ($subcategories as $subcategory)
                          
                        <ul>
                          <li><a href="#">

                                    @if (session()->get('language') == 'hindi')
                                        {{ $subcategory->subcategory_name_hin }}
                                    @else
                                        @if (session()->get('language') == 'bengali')
                                            {{ $subcategory->subcategory_name_ben }}
                                        @else
                                            {{ $subcategory->subcategory_name_en }}
                                        @endif
                                    @endif

                          </a></li>
                        </ul>

                      @endforeach

                      
                      </div>
                      <!-- /.accordion-inner --> 
                    </div>
                    <!-- /.accordion-body --> 
                  </div>
                  <!-- /.accordion-group -->

                @endforeach

                <!-- Category List End -->
                  
                </div>
                <!-- /.accordion --> 
              </div>
              <!-- /.sidebar-widget-body --> 
            </div>
            <!-- /.sidebar-widget --> 
            <!-- ============================================== SIDEBAR CATEGORY : END ============================================== --> 
            
            <!-- ============================================== PRODUCT TAGS ============================================== -->

            @include('frontend.common.product_tags')
            
            <!-- ============================================== PRODUCT TAGS END ============================================== -->

          <!----------- Testimonials------------->

            @include('frontend.common.testimonials')
          
            <!-- ============================================== Testimonials: END ============================================== -->
            
          </div>
          <!-- /.sidebar-filter --> 
        </div>
        <!-- /.sidebar-module-container --> 
      </div>
      <!-- /.sidebar -->
      <div class='col-md-9'> 
        <!-- ========================================== SECTION – HERO ========================================= -->
        
        <div id="category" class="category-carousel hidden-xs">
          <div class="item">
            <div class="image">
              <img src="{{ asset('frontend/assets/images/banners/cat-banner-1.jpg')}}" alt="" class="img-responsive">
            </div>
            <div class="container-fluid">
              <div class="caption vertical-top text-left">
                <div class="big-text"> Big Sale </div>
                <div class="excerpt hidden-sm hidden-md"> Save up to 49% off </div>
                <div class="excerpt-normal hidden-sm hidden-md"> Lorem ipsum dolor sit amet, consectetur adipiscing elit </div>
              </div>
              <!-- /.caption --> 
            </div>
            <!-- /.container-fluid --> 
          </div>
        </div>

        <div class="clearfix filters-container m-t-10">
          <div class="row">
            <div class="col col-sm-6 col-md-2">
              <div class="filter-tabs">
                <ul id="filter-tabs" class="nav nav-tabs nav-tab-box nav-tab-fa-icon">
                  <li class="active"> <a data-toggle="tab" href="#grid-container"><i class="icon fa fa-th-large"></i>Grid</a> </li>
                  <li><a data-toggle="tab" href="#list-container"><i class="icon fa fa-th-list"></i>List</a></li>
                </ul>
              </div>
              <!-- /.filter-tabs --> 
            </div>
            <!-- /.col -->
            <div class="col col-sm-12 col-md-6">
              <div class="col col-sm-3 col-md-6 no-padding">
                <div class="lbl-cnt"> <span class="lbl">Sort by</span>
                  <div class="fld inline">
                    <div class="dropdown dropdown-small dropdown-med dropdown-white inline">
                      <button data-toggle="dropdown" type="button" class="btn dropdown-toggle"> Position <span class="caret"></span> </button>
                      <ul role="menu" class="dropdown-menu">
                        <li role="presentation"><a href="#">position</a></li>
                        <li role="presentation"><a href="#">Price:Lowest first</a></li>
                        <li role="presentation"><a href="#">Price:HIghest first</a></li>
                        <li role="presentation"><a href="#">Product Name:A to Z</a></li>
                      </ul>
                    </div>
                  </div>
                  <!-- /.fld --> 
                </div>
                <!-- /.lbl-cnt --> 
              </div>
              <!-- /.col -->
              <div class="col col-sm-3 col-md-6 no-padding">
                <div class="lbl-cnt"> <span class="lbl">Show</span>
                  <div class="fld inline">
                    <div class="dropdown dropdown-small dropdown-med dropdown-white inline">
                      <button data-toggle="dropdown" type="button" class="btn dropdown-toggle"> 1 <span class="caret"></span> </button>
                      <ul role="menu" class="dropdown-menu">
                        <li role="presentation"><a href="#">1</a></li>
                        <li role="presentation"><a href="#">2</a></li>
                        <li role="presentation"><a href="#">3</a></li>
                        <li role="presentation"><a href="#">4</a></li>
                        <li role="presentation"><a href="#">5</a></li>
                        <li role="presentation"><a href="#">6</a></li>
                        <li role="presentation"><a href="#">7</a></li>
                        <li role="presentation"><a href="#">8</a></li>
                        <li role="presentation"><a href="#">9</a></li>
                        <li role="presentation"><a href="#">10</a></li>
                      </ul>
                    </div>
                  </div>
                  <!-- /.fld --> 
                </div>
                <!-- /.lbl-cnt --> 
              </div>
              <!-- /.col --> 
            </div>
            <!-- /.col -->
            <div class="col col-sm-6 col-md-4 text-right">

              <!-- /.pagination-container --> </div>
            <!-- /.col --> 
          </div>
          <!-- /.row --> 
        </div>


      <!---------------------------------------------- PRODUCT GRID VIEW --------------------------->

        <div class="search-result-container ">
          <div id="myTabContent" class="tab-content category-list">
            <div class="tab-pane active " id="grid-container">
              <div class="category-product">
                <div class="row">


                  @foreach ($product_tag as $product)

                  <div class="col-sm-6 col-md-4 wow fadeInUp">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> <a href="{{ route('product.details',[$product->id,$product->product_slug_en]) }}">
                            <img  src="{{ asset($product->product_thumbnail) }}" alt="">
                          </a>
                        </div>
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
                          <div class="rating rateit-small"></div>
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
                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                              </li>
                              <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                              <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal"></i> </a> </li>
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
                <!-- /.row --> 
              </div>
              <!-- /.category-product --> 
              
            </div>
            <!-- /.tab-pane -->
            

            <!---------------------------------------- END PRODUCT GRID VIEW -------------------------------->


            <!---------------------------------------- PRODUCT LIST VIEW -------------------------------------------------->

            <div class="tab-pane "  id="list-container">
              <div class="category-product">

              @foreach ($product_tag as $product)

                <div class="category-product-inner wow fadeInUp">
                  <div class="products">
                    <div class="product-list product">
                      <div class="row product-list-row">
                        <div class="col col-sm-4 col-lg-4">
                          <div class="product-image">
                            <div class="image"> <img src="{{ asset($product->product_thumbnail) }}" alt=""> </div>
                          </div>
                          <!-- /.product-image --> 
                        </div>
                        <!-- /.col -->
                        <div class="col col-sm-8 col-lg-8">
                          <div class="product-info">
                            <h3 class="name"><a href="detail.html">

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
                            <div class="rating rateit-small"></div>


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


                            <div class="description m-t-10">

                                @if (session()->get('language') == 'hindi')
                    {!! $product->long_desc_hin !!}
                                    @else
                                        @if (session()->get('language') == 'bengali')
                        {!! $product->long_desc_ben !!}
                                        @else
                                        {!! $product->long_desc_en !!}
                                    @endif
                                @endif

                            </div>
                            <div class="cart clearfix animate-effect">
                              <div class="action">
                                <ul class="list-unstyled">
                                  <li class="add-cart-button btn-group">
                                    <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                    <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                                  </li>
                                  <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                                  <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal"></i> </a> </li>
                                </ul>
                              </div>
                              <!-- /.action --> 
                            </div>
                            <!-- /.cart --> 
                            
                          </div>
                          <!-- /.product-info --> 
                        </div>
                        <!-- /.col --> 
                      </div>
                      <!-- /.product-list-row -->

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
                    <!-- /.product-list --> 
                  </div>
                  <!-- /.products --> 
                </div>
                <!-- /.category-product-inner -->


              @endforeach
                
              </div>
              <!-- /.category-product --> 
            </div>
            <!-- /.tab-pane #list-container -->
            
            
            <!--------------------------------------------- END PRODUCT LIST VIEW ---------------------------->


          </div>
          <!-- /.tab-content -->
          <div class="clearfix filters-container">
            <div class="text-right">
              <div class="pagination-container">
                <ul class="list-inline list-unstyled">

                <!--------------- Pegination Link ------------>
                  {{ $product_tag->links() }}

                </ul>

                <!-- /.list-inline --> 
              </div>
              <!-- /.pagination-container --> </div>
            <!-- /.text-right --> 
            
          </div>
          <!-- /.filters-container --> 
          
        </div>
        <!-- /.search-result-container --> 
        
      </div>
      <!-- /.col --> 
    </div>
    <!-- /.row --> 
    <!-- ============================================== BRANDS CAROUSEL ============================================== -->

    @include('frontend.body.brands')

    <!-- ============================================== BRANDS CAROUSEL : END ============================================== --> </div>
  <!-- /.container --> 
  
</div>
<!-- /.body-content -->


@endsection