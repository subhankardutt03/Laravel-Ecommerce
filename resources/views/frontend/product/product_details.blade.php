@extends('frontend.main_master')
@section('content')

@section('title')
    {{ $products->product_name_en }} Product Details
@endsection


<style>
	.checked {
  color: orange;
}
</style>

<div class="breadcrumb">
	<div class="container">
		<div class="breadcrumb-inner">
			<ul class="list-inline list-unstyled">
				<li><a href="#">Home</a></li>
				<li><a href="#">Clothing</a></li>
				<li class='active'>Floral Print Buttoned</li>
			</ul>
		</div><!-- /.breadcrumb-inner -->
	</div><!-- /.container -->
</div><!-- /.breadcrumb -->
<div class="body-content outer-top-xs">
	<div class='container'>
		<div class='row single-product'>
			<div class='col-md-3 sidebar'>
				<div class="sidebar-module-container">
				<div class="home-banner outer-top-n">
<img src="{{ asset('frontend/assets/images/banners/LHS-banner.jpg') }}" alt="Image">
</div>		
  
    
    
    	<!-- ============================================== HOT DEALS ============================================== -->

	@include('frontend.common.hot_deals');

<!-- ============================================== HOT DEALS: END ============================================== -->					

<!-- ============================================== NEWSLETTER ============================================== -->
<div class="sidebar-widget newsletter wow fadeInUp outer-bottom-small outer-top-vs">
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
	</div><!-- /.sidebar-widget-body -->
</div><!-- /.sidebar-widget -->
<!-- ============================================== NEWSLETTER: END ============================================== -->

<!-- ============================================== Testimonials============================================== -->
<div class="sidebar-widget  wow fadeInUp outer-top-vs ">
	<div id="advertisement" class="advertisement">
        <div class="item">
            <div class="avatar"><img src="{{ asset('frontend/assets/images/testimonials/member1.png')}}" alt="Image"></div>
		<div class="testimonials"><em>"</em> Vtae sodales aliq uam morbi non sem lacus port mollis. Nunc condime tum metus eud molest sed consectetuer.<em>"</em></div>
		<div class="clients_author">John Doe	<span>Abc Company</span>	</div><!-- /.container-fluid -->
        </div><!-- /.item -->

         <div class="item">
         	<div class="avatar"><img src="{{ asset('frontend/assets/images/testimonials/member3.png') }}" alt="Image"></div>
		<div class="testimonials"><em>"</em>Vtae sodales aliq uam morbi non sem lacus port mollis. Nunc condime tum metus eud molest sed consectetuer.<em>"</em></div>
		<div class="clients_author">Stephen Doe	<span>Xperia Designs</span>	</div>    
        </div><!-- /.item -->

        <div class="item">
            <div class="avatar"><img src="{{ asset('frontend/assets/images/testimonials/member2.png')}}" alt="Image"></div>
		<div class="testimonials"><em>"</em> Vtae sodales aliq uam morbi non sem lacus port mollis. Nunc condime tum metus eud molest sed consectetuer.<em>"</em></div>
		<div class="clients_author">Saraha Smith	<span>Datsun &amp; Co</span>	</div><!-- /.container-fluid -->
        </div><!-- /.item -->

    </div><!-- /.owl-carousel -->
</div>
    
<!-- ============================================== Testimonials: END ============================================== -->

 

				</div>
			</div><!-- /.sidebar -->
			<div class='col-md-9'>
            <div class="detail-block">
				<div class="row  wow fadeInUp">
                
					     <div class="col-xs-12 col-sm-6 col-md-5 gallery-holder">
    <div class="product-item-holder size-big single-product-gallery small-gallery">

        <div id="owl-single-product">

            @foreach ($multiImage as $image)
                
            <div class="single-product-gallery-item" id="slide{{ $image->id }}">
                <a data-lightbox="image-1" data-title="Gallery" href="">
                    <img class="img-responsive" alt="" src="{{ asset($image->photo_name)}}" data-echo="{{ asset($image->photo_name)}}" />
                </a>
            </div><!-- /.single-product-gallery-item -->

            @endforeach


        </div><!-- /.single-product-slider -->


        <div class="single-product-gallery-thumbs gallery-thumbs">

            <div id="owl-single-product-thumbnails">


                @foreach ($multiImage as $image)
                    
                <div class="item">
                    <a class="horizontal-thumb active" data-target="#owl-single-product" data-slide="1" href="#slide{{ $image->id }}">
                        <img class="img-responsive" width="85" alt="" src="{{ asset($image->photo_name)}}" data-echo="{{ asset($image->photo_name)}}" />
                    </a>
                </div>

                @endforeach



            </div><!-- /#owl-single-product-thumbnails -->

            

        </div><!-- /.gallery-thumbs -->

    </div><!-- /.single-product-gallery -->
</div><!-- /.gallery-holder -->


		@php
			
			$reviewCount = App\Models\Review::where('product_id',$products->id)->where('status',1)->latest()->get();
			$ratingAverage = App\Models\Review::where('product_id',$products->id)->where('status',1)->avg('rating');

		@endphp



					<div class='col-sm-6 col-md-7 product-info-block'>
						<div class="product-info">
							<h1 class="name" id="p_name">

                                @if (session()->get('language') == 'hindi')
                    {{ $products->product_name_hin }}
                                    @else
                                        @if (session()->get('language') == 'bengali')
                        {{ $products->product_name_ben }}
                                        @else
                                        {{ $products->product_name_en }}
                                    @endif
                                @endif

                            </h1>
							
							<div class="rating-reviews m-t-20">
								<div class="row">
									<div class="col-sm-3">
										
										@if ($ratingAverage == 0)
											No Rating Yet
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

									</div>
									<div class="col-sm-8">
										<div class="reviews">
											<a href="#" class="lnk">({{ count($reviewCount) }})</a>
										</div>
									</div>
								</div><!-- /.row -->		
							</div><!-- /.rating-reviews -->

							<div class="stock-container info-container m-t-10">
								<div class="row">
									<div class="col-sm-2">
										<div class="stock-box">
											<span class="label">Availability :</span>
										</div>	
									</div>
									<div class="col-sm-9">
										<div class="stock-box">
											<span class="value">In Stock</span>
										</div>	
									</div>
								</div><!-- /.row -->	
							</div><!-- /.stock-container -->

							<div class="description-container m-t-20">

                                    @if (session()->get('language') == 'hindi')
                    {{ $products->short_desc_hin }}
                                    @else
                                        @if (session()->get('language') == 'bengali')
                        {{ $products->short_desc_ben }}
                                        @else
                                        {{ $products->short_desc_en }}
                                    @endif
                                @endif
								
							</div><!-- /.description-container -->

							<div class="price-container info-container m-t-20">
								<div class="row">
									

									<div class="col-sm-6">
										<div class="price-box">

                                            @if ($products->discount_price == NULL)
                                                <span class="price">{{ $products->selling_price }}</span>
                                            @else
                                            <span class="price">{{ $products->discount_price }}</span>
											<span class="price-strike">{{ $products->selling_price }}</span>
                                            @endif
									
										</div>
									</div>

									<div class="col-sm-6">
										<div class="favorite-button m-t-10">

											<button class="btn btn-primary icon" 
										type="button" title="Add Cart" data-toggle="modal" data-target="#exampleModal"
										id="{{ $products->id }}" onclick="productView(this.id)">
										<i class="fa fa-shopping-cart"></i>
										</button>

											<button class="btn btn-primary icon" type="button"  id="{{ $products->id }}" 
									onclick="addToWishList(this.id)" title="Wishlist">
									<i class="fa fa-heart"></i> </button>

										</div>
									</div>

								</div><!-- /.row -->

							<hr>

							<!----------------------------- Display Product Color and  Product Size ---------------->
							
							<div class="row">
									

									<div class="col-sm-6">
										
										<div class="form-group">
											<label class="info-title control-label"> Choose Color <span></span></label>
											<select class="form-control unicase-form-control selectpicker" style="display: none;" id="color">
												<option selected=" " disabled=" ">--Choose Color--</option>

												@foreach ($product_color_en as $color)
														<option value="{{ $color }}">{{ ucwords($color) }}</option>
												@endforeach
											
											</select>
											</div>
									</div>

									<div class="col-sm-6">
										
										<div class="form-group">
											@if ($products->product_size_en == NULL)

											@else
												
											<label class="info-title control-label">Choose Size<span></span></label>
											<select class="form-control unicase-form-control selectpicker" style="display: none;" id="size">
												<option selected=" " disabled=" ">--Choose Size--</option>

												@foreach ($product_size_en as $size)
														<option value="{{ $size }}">{{ ucwords($size) }}</option>
												@endforeach

											</select>

											@endif
										
									</div>

									</div>

								</div><!-- /.row -->

								<!----------------------------- Display Product Color and  Product Size End  ---------------->
								</div><!-- /.price-container -->

							<div class="quantity-container info-container">
								<div class="row">
									
									<div class="col-sm-2">
										<span class="label">Qty :</span>
									</div>
									
									<div class="col-sm-2">
										<div class="cart-quantity">
											<div class="quant-input">
											<div class="arrows">
												<div class="arrow plus gradient"><span class="ir">
													<i class="icon fa fa-sort-asc"></i></span></div>
												<div class="arrow minus gradient">
													<span class="ir"><i class="icon fa fa-sort-desc"></i></span></div>
													</div>
													<input type="number" id="quantity" value="1" min="1">
											</div>
											</div>
									</div>

									<input type="hidden" id="product_id" value="{{ $products->id }}" min="1">

									<div class="col-sm-7">
										<button type="submit" class="btn btn-primary" onclick="addToCart()">
											<i class="fa fa-shopping-cart inner-right-vs"></i> ADD TO CART</button>
									</div>

									
								</div><!-- /.row -->
							</div><!-- /.quantity-container -->

							
							<!-------------- Addthis Share Option------------------->

							<!-- Go to www.addthis.com/dashboard to customize your tools --> <div class="addthis_inline_share_toolbox"></div>
							
							<!-------------Addthis Share Option End---------------->

							
						</div><!-- /.product-info -->
					</div><!-- /.col-sm-7 -->
				</div><!-- /.row -->
                </div>
				
				<div class="product-tabs inner-bottom-xs  wow fadeInUp">
					<div class="row">
						<div class="col-sm-3">
							<ul id="product-tabs" class="nav nav-tabs nav-tab-cell">
								<li class="active"><a data-toggle="tab" href="#description">DESCRIPTION</a></li>
								<li><a data-toggle="tab" href="#review">REVIEW</a></li>
								<li><a data-toggle="tab" href="#tags">TAGS</a></li>
							</ul><!-- /.nav-tabs #product-tabs -->
						</div>
						<div class="col-sm-9">

							<div class="tab-content">
								
								<div id="description" class="tab-pane in active">
									<div class="product-tab">
										<p class="text">
                                
                                            @if (session()->get('language') == 'hindi')
                    {!! $products->long_desc_hin !!}
                                    @else
                                        @if (session()->get('language') == 'bengali')
                        {!! $products->long_desc_ben !!}
                                        @else
                                        {!! $products->long_desc_en !!}
                                    @endif
                                @endif

                                        </p>
									</div>	
								</div><!-- /.tab-pane -->



<!----------------------------------- Total User Review Section Start --------------------------->


								<div id="review" class="tab-pane">
									<div class="product-tab">
																				
										<div class="product-reviews">
											<h4 class="title">Customer Reviews</h4>

											@php
												$reviews = App\Models\Review::where('product_id',$products->id)
												->latest()->limit(5)->get();
											@endphp

											<div class="reviews">

												@foreach ($reviews as $review)
												
												@if ($review->status == 0)
													
												@else
													
												<div class="review">

														<div class="row">
													<div class="col-md-6">
														<img src="{{ (!empty($review->user->profile_photo_path)) ? 
                    url('upload/user_images/'.$review->user->profile_photo_path) : url('upload/avatar-4.png') }}" alt=""
					style="width:60px;height:60px;"><span><b> {{ $review->user->name }}</b>
						<small>

				@if ($review->rating == NULL)
				
				@elseif ($review->rating == 1)
					<span class="fa fa-star checked"></span>
					<span class="fa fa-star"></span>
					<span class="fa fa-star"></span>
					<span class="fa fa-star"></span>
					<span class="fa fa-star"></span>
				@elseif ($review->rating == 2)
					<span class="fa fa-star checked"></span>
					<span class="fa fa-star checked"></span>
					<span class="fa fa-star"></span>
					<span class="fa fa-star"></span>
					<span class="fa fa-star"></span>
				@elseif ($review->rating == 3)
					<span class="fa fa-star checked"></span>
					<span class="fa fa-star checked"></span>
					<span class="fa fa-star checked"></span>
					<span class="fa fa-star"></span>
					<span class="fa fa-star"></span>
				@elseif ($review->rating == 4)
					<span class="fa fa-star checked"></span>
					<span class="fa fa-star checked"></span>
					<span class="fa fa-star checked"></span>
					<span class="fa fa-star checked"></span>
					<span class="fa fa-star"></span>
				@elseif ($review->rating == 5)
					<span class="fa fa-star checked"></span>
					<span class="fa fa-star checked"></span>
					<span class="fa fa-star checked"></span>
					<span class="fa fa-star checked"></span>
					<span class="fa fa-star checked"></span>
				
				@endif
				
						</small>
					</span>
													</div>
													<div class="col-md-4">
													</div>
													<div class="col-md-2">
														<span class="badge badge-success" style="background-color :#33FF57; color: #fff">
														Approved</span>
													</div>

												</div>

													<div class="review-title">
														<span class="summary">{{ $review->summery }}</span>
														<span class="date"><i class="fa fa-calendar"></i>
															<span>
																{{ Carbon\Carbon::parse($review->created_at)->diffForHumans() }}
															</span></span></div>
													<div class="text">
														{!! $review->comment !!}
													</div>
												</div>

												@endif
												
										@endforeach

											</div><!-- /.reviews -->

										</div><!-- /.product-reviews -->
										

										
										<div class="product-add-review">
											<h4 class="title">Write your own review</h4>
											<div class="review-table">
											</div><!-- /.review-table -->
											
											<div class="review-form">

												@guest
												<p> <b class="text-danger">For Adding Review, You have to Login First!! </b>
													<a href="{{ route('login') }}" class="text-primary" style="font-size:15px;margin-left: 5px;">
														Login here!</a></p>
												@else

												<div class="form-container">

											<form role="form" class="cnt-form" method="post" action="{{ route('add.review')}}">
														@csrf

														<input type="hidden" name="product_id" value="{{ $products->id }}">


													<table class="table">	
														<thead>
															<tr>
																<th class="cell-label">&nbsp;</th>
																<th>1 star</th>
																<th>2 stars</th>
																<th>3 stars</th>
																<th>4 stars</th>
																<th>5 stars</th>
															</tr>
														</thead>	
														<tbody>

															<tr>
																<td class="cell-label">Quality</td>
																<td><input type="radio" name="rating" class="radio" value="1"></td>
																<td><input type="radio" name="rating" class="radio" value="2"></td>
																<td><input type="radio" name="rating" class="radio" value="3"></td>
																<td><input type="radio" name="rating" class="radio" value="4"></td>
																<td><input type="radio" name="rating" class="radio" value="5"></td>
															</tr>
														
														</tbody>
													</table>


														<div class="row">
															<div class="col-sm-6">
																<div class="form-group">
																	<label for="exampleInputSummary">Summary <span class="astk">*</span></label>
																	<input type="text" class="form-control txt" id="exampleInputSummary" name="summery">
																</div><!-- /.form-group -->
															</div>

															<div class="col-md-6">
																<div class="form-group">
																	<label for="exampleInputReview">Review <span class="astk">*</span></label>
<textarea class="form-control txt txt-review" id="exampleInputReview" rows="4" name="comment">
</textarea>
																</div><!-- /.form-group -->
															</div>
														</div><!-- /.row -->
														
														<div class="action text-right">
															<button type="submit" class="btn btn-primary btn-upper">SUBMIT REVIEW</button>
														</div><!-- /.action -->

													</form><!-- /.cnt-form -->
												</div><!-- /.form-container -->

												@endguest

											</div><!-- /.review-form -->

										</div><!-- /.product-add-review -->										
										
							        </div><!-- /.product-tab -->
								</div><!-- /.tab-pane -->


<!----------------------------------- Total User Review Section End --------------------------->


								<div id="tags" class="tab-pane">
									<div class="product-tag">
										
										<h4 class="title">Product Tags</h4>
										<form role="form" class="form-inline form-cnt">
											<div class="form-container">
									
												<div class="form-group">
													<label for="exampleInputTag">Add Your Tags: </label>
													<input type="email" id="exampleInputTag" class="form-control txt">
													

												</div>

												<button class="btn btn-upper btn-primary" type="submit">ADD TAGS</button>
											</div><!-- /.form-container -->
										</form><!-- /.form-cnt -->

										<form role="form" class="form-inline form-cnt">
											<div class="form-group">
												<label>&nbsp;</label>
												<span class="text col-md-offset-3">Use spaces to separate tags. Use single quotes (') for phrases.</span>
											</div>
										</form><!-- /.form-cnt -->

									</div><!-- /.product-tab -->
								</div><!-- /.tab-pane -->

							</div><!-- /.tab-content -->
						</div><!-- /.col -->
					</div><!-- /.row -->
				</div><!-- /.product-tabs -->

				<!-- ============================================== UPSELL PRODUCTS ============================================== -->
<section class="section featured-product wow fadeInUp">
	<h3 class="section-title">Related products</h3>
	<div class="owl-carousel home-owl-carousel upsell-product custom-carousel owl-theme outer-top-xs">
	    	


		@foreach ($related_product as $product)
			
			<div class="item item-carousel">
			<div class="products">
				
	<div class="product">		
		<div class="product-image">
			<div class="image">
				<a href="{{ route('product.details',[$product->id,$product->product_slug_en]) }}">
					<img  src="{{ asset($product->product_thumbnail) }}" alt="">
				</a>
			</div><!-- /.image -->			

			            <div class="tag sale"><span>sale</span></div>            		   
		</div><!-- /.product-image -->
			
		
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
			
		</div><!-- /.product-info -->
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
							<a class="add-to-cart" href="detail.html" title="Compare">
							    <i class="fa fa-signal"></i>
							</a>
						</li>
					</ul>
				</div><!-- /.action -->
			</div><!-- /.cart -->
			</div><!-- /.product -->
      
			</div><!-- /.products -->
		</div>
		<!-- /.item -->

		@endforeach
		
	
		
			</div><!-- /.home-owl-carousel -->
</section><!-- /.section -->
<!-- ============================================== UPSELL PRODUCTS : END ============================================== -->
			
			</div><!-- /.col -->
			<div class="clearfix"></div>
		</div><!-- /.row -->


		<!-- ==== ================== BRANDS CAROUSEL ============================================== -->

        @include('frontend.body.brands')

<!-- ============================ = BRANDS CAROUSEL : END =============================== -->	
</div><!-- /.container -->
</div><!-- /.body-content -->


<!-- Go to www.addthis.com/dashboard to customize your tools --> <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-60c1057ff186de98"></script>


@endsection