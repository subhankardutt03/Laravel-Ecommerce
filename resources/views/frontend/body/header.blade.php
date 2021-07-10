<header class="header-style-1"> 
  
  <!-- ============================================== TOP MENU ============================================== -->
  <div class="top-bar animate-dropdown">
    <div class="container">
      <div class="header-top-inner">
        <div class="cnt-account">
          <ul class="list-unstyled">
            <li><a href="{{ route('dashboard') }}"><i class="fa fa-user"></i>
                  @if (session()->get('language') == 'hindi')
                    मेरी प्रोफाइल
                @else
                    @if (session()->get('language') == 'bengali')
                        আমার প্রোফাইল
                    @else
                    My Profile
                    @endif
                @endif
              
            </a></li>
            <li><a href="{{ route('wishlist') }}"><i class="fa fa-heart"></i>
                  @if (session()->get('language') == 'hindi')
                    इच्छा-सूची
                @else
                    @if (session()->get('language') == 'bengali')
                        ইচ্ছেতালিকা
                    @else
                  Wishlist
                    @endif
                @endif
              
            </a></li>
            <li><a href="{{ route('mycart') }}"><i class="fa fa-shopping-cart"></i> 
                @if (session()->get('language') == 'hindi')
                    मेरी गाड़ी
                @else
                    @if (session()->get('language') == 'bengali')
                        আমার কার্ট
                    @else
                  My Cart
                    @endif
                @endif
              
            </a></li>
            <li><a href="{{ route('checkout') }}"><i class="fa fa-check"></i>
                @if (session()->get('language') == 'hindi')
                    चेक आउट
                @else
                    @if (session()->get('language') == 'bengali')
                        চেকআউট
                    @else
                  Checkout
                    @endif
                @endif
              
            </a></li>


              <li><a href="" type="button" class="btn btn-primary" data-toggle="modal" data-target="#orderTracking">
                <i class="fa fa-check"></i>
                @if (session()->get('language') == 'hindi')
                  आदेश ट्रैकिंग
                @else
                    @if (session()->get('language') == 'bengali')
                      শৃঙ্খলা ট্র্যাকিং
                    @else
                  Order Tracking
                    @endif
                @endif
              
            </a></li>


            <li>
              @auth
                  <a href="{{ route('dashboard') }}"><i class="icon fa fa-user"></i>

                    @if (session()->get('language') == 'hindi')
                    उपयोगकर्ता प्रोफ़ाइल
                @else
                    @if (session()->get('language') == 'bengali')
                        ব্যবহারকারীর প্রোফাইল
                    @else
                  User Profile
                    @endif
                @endif
                    
                  </a>
              @else
                    <a href="{{ route('login') }}"><i class="icon fa fa-lock"></i>

                    @if (session()->get('language') == 'hindi')
                    लॉग इन करें|रजिस्टर करें
                @else
                    @if (session()->get('language') == 'bengali')
                        প্রবেশ করুন|নিবন্ধন
                    @else
                  Login|Register
                    @endif
                @endif
                
                    </a>

              @endauth
            
            
            </li>
          </ul>
        </div>
        <!-- /.cnt-account -->
        
        <div class="cnt-block">
          <ul class="list-unstyled list-inline">
            <li class="dropdown dropdown-small"> <a href="#" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown"><span class="value">USD </span><b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#">USD</a></li>
                <li><a href="#">INR</a></li>
                <li><a href="#">GBP</a></li>
              </ul>
            </li>
            <li class="dropdown dropdown-small"> <a href="#" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown">
              <span class="value">

                @if (session()->get('language') == 'hindi')
                    भाषा: हिन्दी
                @else
                    @if (session()->get('language') == 'bengali')
                        ভাষা
                    @else
                      Language 
                    @endif
                @endif

              </span><b class="caret"></b></a>
              <ul class="dropdown-menu">

                @if (session()->get('language') == 'hindi')
                      <li><a href="{{ route('english.language') }}">English</a></li>
                      <li><a href="{{ route('bengali.language') }}">বাংলা</a></li>

                @else
                          @if (session()->get('language') == 'english')
                              <li><a href="{{ route('bengali.language') }}">বাংলা</a></li>
                              <li><a href="{{  route('hindi.language')  }}">हिंदी</a></li>
                            @else
                          <li><a href="{{ route('english.language') }}">English</a></li>
                        <li><a href="{{  route('hindi.language')  }}">हिंदी</a></li>
                          @endif
                          
                @endif
              

              </ul>
            </li>
          </ul>
          <!-- /.list-unstyled --> 
        </div>
        <!-- /.cnt-cart -->
        <div class="clearfix"></div>
      </div>
      <!-- /.header-top-inner --> 
    </div>
    <!-- /.container --> 
  </div>
  <!-- /.header-top --> 
  <!-- ============================================== TOP MENU : END ============================================== -->
  <div class="main-header">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-3 logo-holder">
          
          
          @php
              $siteSetting = App\Models\SiteSetting::find(1);
          @endphp


          <!-- ============================================================= LOGO ============================================================= -->
          <div class="logo"> <a href="{{ url('/') }}">
            <img src="{{ asset($siteSetting->logo) }}" alt="logo"> 
          </a> </div>
          <!-- /.logo --> 
          <!-- ============================================================= LOGO : END ============================================================= --> </div>
        <!-- /.logo-holder -->
        
        <div class="col-xs-12 col-sm-12 col-md-7 top-search-holder"> 
          <!-- /.contact-row --> 
          <!-- ============================================================= SEARCH AREA ============================================================= -->
          <div class="search-area">


            <form action="{{ route('product-search') }}" method="POST">
              @csrf
              <div class="control-group">
                <ul class="categories-filter animate-dropdown">
                  <li class="dropdown"> <a class="dropdown-toggle"  data-toggle="dropdown" href="category.html">Categories <b class="caret"></b></a>
                    <ul class="dropdown-menu" role="menu" >
                      <li class="menu-header">Computer</li>
                      <li role="presentation"><a role="menuitem" tabindex="-1" href="category.html">- Clothing</a></li>
                      <li role="presentation"><a role="menuitem" tabindex="-1" href="category.html">- Electronics</a></li>
                      <li role="presentation"><a role="menuitem" tabindex="-1" href="category.html">- Shoes</a></li>
                      <li role="presentation"><a role="menuitem" tabindex="-1" href="category.html">- Watches</a></li>
                    </ul>
                  </li>
                </ul>

                <input class="search-field" id="search" name="search" onfocus="search_result_show()" 
                onblur="search_result_hide()" placeholder="Search here..." /> 
                <button class="search-button" type="submit"></button> </div>

            </form>

            <div id="searchProduct">

            </div>


          </div>
          <!-- /.search-area --> 
          <!-- ============================================================= SEARCH AREA : END ============================================================= --> </div>
        <!-- /.top-search-holder -->
        
        <div class="col-xs-12 col-sm-12 col-md-2 animate-dropdown top-cart-row">
      
          <!-- ====================== SHOPPING CART DROPDOWN ============================== -->
          
          <div class="dropdown dropdown-cart" style="width:200px;left:40px;">
            <a href="#" class="dropdown-toggle lnk-cart" data-toggle="dropdown">
            <div class="items-cart-inner">
              <div class="basket"> <i class="glyphicon glyphicon-shopping-cart"></i> </div>
              <div class="basket-item-count"><span class="count" id="cartQty"> </span></div>
              <div class="total-price-basket"> <span class="lbl">cart -</span>
                <span class="total-price"> <span class="sign"><i class="fa fa-inr"></i></span>
                <span class="value" id="cartSubTotal"> </span> </span> </div>
            </div>
            </a>
            <ul class="dropdown-menu">
              <li>

                <!------------------ Mini Cart Start --------------------->

              <div id="miniCart">

              </div>

              <!---------------------- Mini Cart End ------------------------->

                <div class="clearfix cart-total">
                  <div class="pull-right"> <span class="text">Sub Total :</span>
                    <i class="fa fa-inr text-primary"></i><span class='price' id="cartSubTotal"> </span> </div>
                  <div class="clearfix"></div>
                  <a href="checkout.html" class="btn btn-upper btn-primary btn-block m-t-20">Checkout</a> </div>
                <!-- /.cart-total--> 
                
              </li>
            </ul>
            <!-- /.dropdown-menu--> 
          </div>
          <!-- /.dropdown-cart --> 
          
          <!-- ================= SHOPPING CART DROPDOWN : END================ --> </div>
        <!-- /.top-cart-row --> 
      </div>
      <!-- /.row --> 
      
    </div>
    <!-- /.container --> 
    
  </div>
  <!-- /.main-header --> 
  
  <!-- ============================================== NAVBAR ============================================== -->
  <div class="header-nav animate-dropdown">
    <div class="container">
      <div class="yamm navbar navbar-default" role="navigation">
        <div class="navbar-header">
       <button data-target="#mc-horizontal-menu-collapse" data-toggle="collapse" class="navbar-toggle collapsed" type="button"> 
       <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        </div>
        <div class="nav-bg-class">
          <div class="navbar-collapse collapse" id="mc-horizontal-menu-collapse">
            <div class="nav-outer">
              <ul class="nav navbar-nav">
                <li class="active dropdown yamm-fw"> 
                  <a href="{{ url('/') }}">

                @if (session()->get('language') == 'hindi')
                    घर
                @else
                    @if (session()->get('language') == 'bengali')
                        বাড়ি
                    @else
                      Home
                    @endif
                @endif
                    
                  </a>
                  </li>

                  <!--Get Category Data--> 
                  @php

                      $categories = App\Models\Category::orderBy('category_name_en','ASC')->get()
                  @endphp

                
                @foreach ($categories as $category)
                    
                    <li class="dropdown yamm mega-menu">
                  <a href="home.html" data-hover="dropdown" class="dropdown-toggle" data-toggle="dropdown">
                    @if (session()->get('language') == 'hindi')
                        {{ $category->category_name_hin }}
                    @else
                        @if (session()->get('language') == 'bengali')
                            {{ $category->category_name_ben }}
                        @else
                            {{ $category->category_name_en }}
                        @endif
                    @endif
                    </a>
                  <ul class="dropdown-menu container">
                    <li>
                      <div class="yamm-content ">
                        <div class="row">
                          
                          <!-- Get Subcategory Data -->

                          @php
                              $subcategories = App\Models\Subcategory::where('category_id',$category->id)
                              ->orderBy('subcategory_name_en','ASC')->get();
                          @endphp

                          @foreach ($subcategories as $subcategory)

                            <div class="col-xs-12 col-sm-6 col-md-2 col-menu">

                          <a href="{{ route('subcategory.data',[$subcategory->id,$subcategory->subcategory_slug_en]) }}">
                            <h2 class="title">
                                @if (session()->get('language') == 'hindi')
                                    {{ $subcategory->subcategory_name_hin }}
                                @else
                                    @if (session()->get('language') == 'bengali')
                                        {{ $subcategory->subcategory_name_ben }}
                                    @else
                                        {{ $subcategory->subcategory_name_en }}
                                    @endif
                                @endif
                            </h2>
                          </a>

                            @php
                                $subsubcategories = App\Models\Subsubcategory::where('subcategory_id',$subcategory->id)
                                ->orderBy('subsubcategory_name_en','ASC')->get();
                            @endphp


                              @foreach ($subsubcategories as $subsubcategory)
                                <ul class="links">

                              <li><a href="{{ route('subsubcategory.data',[$subsubcategory->id,$subsubcategory->subsubcategory_slug_en]) }}">
                                @if (session()->get('language') == 'hindi')
                                      {{ $subsubcategory->subsubcategory_name_hin }}
                                @else
                                    @if (session()->get('language') == 'bengali')
                                        {{ $subsubcategory->subsubcategory_name_ben }}
                                    @else
                                        {{ $subsubcategory->subsubcategory_name_en }}
                                    @endif
                                @endif
                              </a></li>
                            
                            </ul>
                              @endforeach

                          </div>
                          <!-- /.col -->

                          @endforeach
                      
                          
                          
                          
                          <div class="col-xs-12 col-sm-6 col-md-4 col-menu banner-image">
                            <img class="img-responsive" src="{{ asset('frontend/assets/images/banners/top-menu-banner.jpg') }}" alt=""> 
                          </div>
                          <!-- /.yamm-content --> 
                        </div>
                      </div>
                    </li>
                  </ul>
                </li>
                @endforeach

                    <!--Get Category Data End--> 

                <li class="dropdown  navbar-right special-menu"> <a href="{{ route('home.blog') }}">Blog</a> </li>
              </ul>
              <!-- /.navbar-nav -->
              <div class="clearfix"></div>
            </div>
            <!-- /.nav-outer --> 
          </div>
          <!-- /.navbar-collapse --> 
          
        </div>
        <!-- /.nav-bg-class --> 
      </div>
      <!-- /.navbar-default --> 
    </div>
    <!-- /.container-class --> 
    
  </div>
  <!-- /.header-nav --> 
  <!-- ============================================== NAVBAR : END ============================================== --> 
  

<!------------------------------------------------- Order Tracking Modal Start----------------------------------------->


<!-- Modal -->
<div class="modal fade" id="orderTracking" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel">Track Your Order</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">

        <form action="{{ route('order-tracking') }}" method="POST">
          @csrf
          <div class="form-group">
            <label for="" class="text-danger">Invoice Code</label>
            <input type="text" name="code" class="form-control" placeholder="Enter your Order Invoice Number">
          </div>

          <button type="submit" class="btn btn-success">Order Tracking</button>
        </form>

      </div>

    </div>
  </div>
</div>


<!------------------------------------------------- Order Tracking Modal End----------------------------------------->



</header>


<style type="text/css">

    .search-area{
      position : relative;
    }

    #searchProduct{
      top: 100%;
      left: 0%;
      width: 100%;
      z-index: 999;
      position: absolute;
      margin-top : 5px;
      border-radius: 10px;
      background-color : #ffffff;
    }

</style>

<script type="text/javascript">
    
    function search_result_show() {
      $('#searchProduct').slideDown();
    }

    function search_result_hide(){
      $('#searchProduct').slideUp();
    }
</script>