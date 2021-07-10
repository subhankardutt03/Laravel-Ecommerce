@extends('frontend.main_master')
@section('content')

@section('title')
    {{ $blogPost->blog_post_title_en }}
@endsection


<div class="breadcrumb">
	<div class="container">
		<div class="breadcrumb-inner">
			<ul class="list-inline list-unstyled">
				<li><a href="#">Home</a></li>
				<li class='active'>Blog Details</li>
			</ul>
		</div><!-- /.breadcrumb-inner -->
	</div><!-- /.container -->
</div><!-- /.breadcrumb -->

<div class="body-content">
	<div class="container">
		<div class="row">
			<div class="blog-page">
				<div class="col-md-9">

            <div class="blog-post wow fadeInUp">
                <img class="img-responsive" src="{{ asset($blogPost->blog_post_image) }}" alt="">
                <h1>
                    @if (session()->get('language') == 'hindi')
                                    {{ $blogPost->blog_post_title_hin }}
                                @else
                                    @if (session()->get('language') == 'bengali')
                                        {{ $blogPost->blog_post_title_ben }}
                                    @else
                                        {{ $blogPost->blog_post_title_en }}
                                    @endif
                                @endif
                </h1>
                <span class="date-time">
                    {{ Carbon\Carbon::parse($blogPost->created_at)->diffForHumans() }}
                </span>
                <p>
                    @if (session()->get('language') == 'hindi')
                                    {!! $blogPost->blog_post_details_hin !!}
                                @else
                                    @if (session()->get('language') == 'bengali')
                                        {!! $blogPost->blog_post_details_ben !!}
                                    @else
                                        {!! $blogPost->blog_post_details_en !!}
                                    @endif
                                @endif
                </p>

            <!-------------- Addthis Share Option------------------->

                <!-- Go to www.addthis.com/dashboard to customize your tools -->
                <div class="addthis_inline_share_toolbox"></div>

                <!-------------- Addthis Share Option End------------------->
            
    </div>




<div class="blog-write-comment outer-bottom-xs outer-top-xs">
	<div class="row">
		<div class="col-md-12">
			<h4>Leave A Comment</h4>
		</div>
		<div class="col-md-4">
			<form class="register-form" role="form">
				<div class="form-group">
                    <label class="info-title" for="exampleInputName">Your Name <span>*</span></label>
                    <input type="email" class="form-control unicase-form-control text-input" id="exampleInputName" placeholder="">
                </div>
			</form>
		</div>
		<div class="col-md-4">
			<form class="register-form" role="form">
				<div class="form-group">
                    <label class="info-title" for="exampleInputEmail1">Email Address <span>*</span></label>
                    <input type="email" class="form-control unicase-form-control text-input" id="exampleInputEmail1" placeholder="">
                </div>
			</form>
		</div>
		<div class="col-md-4">
			<form class="register-form" role="form">
				<div class="form-group">
                    <label class="info-title" for="exampleInputTitle">Title <span>*</span></label>
                    <input type="email" class="form-control unicase-form-control text-input" id="exampleInputTitle" placeholder="">
                </div>
			</form>
		</div>
		<div class="col-md-12">
			<form class="register-form" role="form">
				<div class="form-group">
                    <label class="info-title" for="exampleInputComments">Your Comments <span>*</span></label>
                    <textarea class="form-control unicase-form-control" id="exampleInputComments" ></textarea>
                </div>
			</form>
		</div>
		<div class="col-md-12 outer-bottom-small m-t-20">
			<button type="submit" class="btn-upper btn btn-primary checkout-page-button">Submit Comment</button>
		</div>
	</div>
</div>
				</div>
				<div class="col-md-3 sidebar">
                
                
                
					<div class="sidebar-module-container">
						<div class="search-area outer-bottom-small">
    <form>
        <div class="control-group">
            <input placeholder="Type to search" class="search-field">
            <a href="#" class="search-button"></a>   
        </div>
    </form>
</div>		

<div class="home-banner outer-top-n outer-bottom-xs">
<img src="{{ asset('frontend/assets/images/banners/LHS-banner.jpg') }}" alt="Image">
</div>

<!-- ================CATEGORY==================== -->

<div class="sidebar-widget outer-bottom-xs wow fadeInUp">
	<h3 class="section-title">Blog Category</h3>
	<div class="sidebar-widget-body m-t-10">
		<div class="accordion">
        
            @foreach ($blogCategory as $category)
        <div class="ui middle aligned selection list">
        <div class="item">
            <div class="content">
            <div class="header">
                <a href="{{ route('category-wise-post',$category->id) }}"><span class="text-primary">
                @if (session()->get('language') == 'hindi')
                                    {{ $category->blog_category_name_hin }}
                        @else
                                @if (session()->get('language') == 'bengali')
                                        {{ $category->blog_category_name_ben }}
                                @else
                                        {{ $category->blog_category_name_en}}
                                @endif
                    @endif
                    </span></a>
            </div>
            </div>
        </div>
        
        </div>
            @endforeach
   

            </div><!-- /.accordion -->
	</div><!-- /.sidebar-widget-body -->
</div><!-- /.sidebar-widget -->
	<!-- ========================= CATEGORY : END ========================== -->
    
	<!-- ====================== PRODUCT TAGS ========================= -->
<div class="sidebar-widget product-tag wow fadeInUp">
	<h3 class="section-title">Product tags</h3>
	<div class="sidebar-widget-body outer-top-xs">
		<div class="tag-list">					
			<a class="item" title="Phone" href="category.html">Phone</a>
			<a class="item active" title="Vest" href="category.html">Vest</a>
			<a class="item" title="Smartphone" href="category.html">Smartphone</a>
			<a class="item" title="Furniture" href="category.html">Furniture</a>
			<a class="item" title="T-shirt" href="category.html">T-shirt</a>
			<a class="item" title="Sweatpants" href="category.html">Sweatpants</a>
			<a class="item" title="Sneaker" href="category.html">Sneaker</a>
			<a class="item" title="Toys" href="category.html">Toys</a>
			<a class="item" title="Rose" href="category.html">Rose</a>
		</div><!-- /.tag-list -->
	</div><!-- /.sidebar-widget-body -->
</div><!-- /.sidebar-widget -->
<!-- =================== PRODUCT TAGS : END ======================== -->
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<!-- Go to www.addthis.com/dashboard to customize your tools --> <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-60c1057ff186de98"></script>


@endsection