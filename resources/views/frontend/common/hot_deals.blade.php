    
    
    @php
        
            $hot_deals = App\Models\Product::where('hot_deals', 1)
            ->where('discount_price', '!=', NULL)->orderBy('id', 'DESC')->limit(3)->get();

    @endphp
    
    
    <div class="sidebar-widget hot-deals wow fadeInUp outer-bottom-xs">
            <h3 class="section-title">hot deals</h3>
            <div class="owl-carousel sidebar-carousel custom-carousel owl-theme outer-top-ss">



            <!-- Hot Deals List-->
            @foreach ($hot_deals as $product)
                
                <div class="item">
                <div class="products">
                    <div class="hot-deal-wrapper">
                    <div class="image"> <img src="{{ asset($product->product_thumbnail) }}" alt=""> </div>


                        @if ($product->discount_price == NULL)
                        <div class="tag new">
                        <span>new</span>
                        </div>
                                @else
                                @php
                                    $discount = floor(((($product->selling_price - $product->discount_price) / $product->selling_price) * 100));
                                @endphp
                                <div class="sale-offer-tag"><span>{{ $discount }}%<br>
                                off</span></div>
                            @endif
                    
                    <div class="timing-wrapper">
                        <div class="box-wrapper">
                        <div class="date box"> <span class="key">120</span> <span class="value">DAYS</span> </div>
                        </div>
                        <div class="box-wrapper">
                        <div class="hour box"> <span class="key">20</span> <span class="value">HRS</span> </div>
                        </div>
                        <div class="box-wrapper">
                        <div class="minutes box"> <span class="key">36</span> <span class="value">MINS</span> </div>
                        </div>
                        <div class="box-wrapper hidden-md">
                        <div class="seconds box"> <span class="key">60</span> <span class="value">SEC</span> </div>
                        </div>
                    </div>
                    </div>
                    <!-- /.hot-deal-wrapper -->
                    
                    <div class="product-info text-left m-t-20">
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
                                        <span class="price-before-discount">{{ $product->selling_price }}</span>
                            </div>
                            <!-- /.product-price -->

                            @endif

                    
                    </div>
                    <!-- /.product-info -->
                    
                    <div class="cart clearfix animate-effect">
                    <div class="action">
                        <div class="add-cart-button btn-group">
                        <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                        <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                        </div>
                    </div>
                    <!-- /.action --> 
                    </div>
                    <!-- /.cart --> 
                </div>
                </div>

            @endforeach

            <!-- Hot Deals List End -->



            </div>
            <!-- /.sidebar-widget --> 
            </div>