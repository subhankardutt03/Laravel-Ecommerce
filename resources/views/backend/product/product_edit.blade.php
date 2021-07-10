@extends('admin.admin_master')
@section('admin_content')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	  <div class="container-full">
		<!-- Content Header (Page header) --> 
		<!-- Main content -->
		<section class="content">

		 <!-- Basic Forms -->
		  <div class="box">
			<div class="box-header with-border">
			  <h4 class="box-title">Edit Product</h4>
			</div>
			<!-- /.box-header -->
			<div class="box-body">
			  <div class="row">
				<div class="col">
					<form method="POST" action="{{ route('update.product',$product->id) }}">
						@csrf
					  <div class="row">
						<div class="col-12">

                            <div class="row"> <!-- 1st row-->
                                    <div class="col-md-4">

                                        <div class="form-group">
                                            <h5>Brand Select <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <select name="brand_id" class="form-control" required="">
                                                        <option value="" selected="" disabled="">Select Brand</option>

                                                        @foreach ($brand as $row)
                                                            <option value="{{ $row->id }}" {{ ($row->id == $product->brand_id)?
                                                            'selected' : ''}}>{{ $row->brand_name_en }}</option>
                                                        @endforeach
                                                        
                                                    </select>
                                                </div>
                                                @error('brand_id')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                    </div>

                                    <div class="col-md-4">

                                        <div class="form-group">
                                            <h5>Category Select <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <select name="category_id" class="form-control"  required="">
                                                        <option value="" selected="" disabled="">Select Category</option>

                                                        @foreach ($category as $row)
                                                            <option value="{{ $row->id }}" {{ ($row->id == $product->category_id)
                                                            ? 'selected' : ''}}>{{ $row->category_name_en }}</option>
                                                        @endforeach
                                                        
                                                    </select>
                                                </div>
                                                @error('category_id')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-4">

                                        <div class="form-group">
                                            <h5>Subcategory Select <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <select name="subcategory_id" class="form-control"  required="">
                                                        <option value="" selected="" disabled="">Select Sucategory</option>

                                                        @foreach ($subcategory as $row)
                                                            <option value="{{ $row->id }}" {{ ($row->id == $product->subcategory_id)
                                                            ? 'selected' : ''}}>{{ $row->subcategory_name_en }}</option>
                                                        @endforeach

                                                    </select>
                                                </div>
                                                @error('subcategory_id')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                    </div>
                            </div> <!--1st row end -->


							<div class="row"><!-- 2nd row-->
								<div class="col-md-4">

									<div class="form-group">
												<h5>Subsubcategory Select <span class="text-danger">*</span></h5>
													<div class="controls">
														<select name="subsubcategory_id" class="form-control"  required="">
															<option value="" selected="" disabled="">Select Subsubcategory</option>

                                                        @foreach ($subsubcategory as $row)
                                                            <option value="{{ $row->id }}" {{ ($row->id == $product->subsubcategory_id)
                                                            ? 'selected' : ''}}>{{ $row->subsubcategory_name_en }}</option>
                                                        @endforeach

														</select>
													</div>
													@error('subsubcategory_id')
													<span class="text-danger">{{ $message }}</span>
												@enderror
										</div>

								</div>

								<div class="col-md-4">

									<div class="form-group">
										<h5>Product Name English <span class="text-danger">*</span></h5>
										<div class="controls">
											<input type="text" name="product_name_en" class="form-control"  required=""
                                            value="{{ $product->product_name_en }}"> 
										</div>
											@error('product_name_en')
													<span class="text-danger">{{ $message }}</span>
											@enderror
									</div>

								</div>

								<div class="col-md-4">

									<div class="form-group">
										<h5>Product Name Bengali <span class="text-danger">*</span></h5>
										<div class="controls">
											<input type="text" name="product_name_ben" class="form-control"  required=""
                                            value="{{ $product->product_name_ben }}"> 
										</div>
											@error('product_name_ben')
													<span class="text-danger">{{ $message }}</span>
											@enderror
									</div>

								</div>
							</div><!-- 2nd row end -->


							<div class="row"><!-- 3rd row-->
								<div class="col-md-4">

									<div class="form-group">
										<h5>Product Name Hindi <span class="text-danger">*</span></h5>
										<div class="controls">
											<input type="text" name="product_name_hin" class="form-control"  required=""
                                            value="{{ $product->product_name_hin }}"> 
										</div>
											@error('product_name_hin')
													<span class="text-danger">{{ $message }}</span>
											@enderror
									</div>

								</div>

								<div class="col-md-4">

									<div class="form-group">
										<h5>Product Code <span class="text-danger">*</span></h5>
										<div class="controls">
											<input type="text" name="product_code" class="form-control"  required=""
                                            value="{{ $product->product_code }}"> 
										</div>
											@error('product_code')
													<span class="text-danger">{{ $message }}</span>
											@enderror
									</div>

								</div>

								<div class="col-md-4">

									<div class="form-group">
										<h5>Product Quantity <span class="text-danger">*</span></h5>
										<div class="controls">
											<input type="text" name="product_quantity" class="form-control"  required=""
                                            value="{{ $product->product_quantity }}"> 
										</div>
											@error('product_quantity')
													<span class="text-danger">{{ $message }}</span>
											@enderror
									</div>

								</div>
							</div><!-- 3rd row end -->


						<div class="row"><!-- 4th row-->
								<div class="col-md-4">

									<div class="form-group">
										<h5>Product tags English <span class="text-danger">*</span></h5>
										<div class="controls">
											<input type="text" name="product_tags_en" class="form-control" data-role="tagsinput"  required=""
                                            value="{{ $product->product_tags_en }}"> 
										</div>
											@error('product_tags_en')
													<span class="text-danger">{{ $message }}</span>
											@enderror
									</div>

								</div>

								<div class="col-md-4">

									<div class="form-group">
										<h5>Product tags Bengali <span class="text-danger">*</span></h5>
										<div class="controls">
											<input type="text" name="product_tags_ben" class="form-control"  data-role="tagsinput"  required=""
                                            value="{{ $product->product_tags_ben }}"> 
										</div>
											@error('product_tags_ben')
													<span class="text-danger">{{ $message }}</span>
											@enderror
									</div>

								</div>

								<div class="col-md-4">

									<div class="form-group">
										<h5>Product tags Hindi <span class="text-danger">*</span></h5>
										<div class="controls">
											<input type="text" name="product_tags_hin" class="form-control"  data-role="tagsinput"  required=""
                                            value="{{ $product->product_tags_hin }}"> 
										</div>
											@error('product_tags_hin')
													<span class="text-danger">{{ $message }}</span>
											@enderror
									</div>

								</div>
							</div><!-- 4th row end -->


							<div class="row"><!-- 5th row-->
								<div class="col-md-4">

									<div class="form-group">
										<h5>Product Size English <span class="text-danger">*</span></h5>
										<div class="controls">
											<input type="text" name="product_size_en" class="form-control"  data-role="tagsinput" 
                                            value="{{ $product->product_size_en }}"> 
										</div>
											@error('product_size_en')
													<span class="text-danger">{{ $message }}</span>
											@enderror
									</div>

								</div>

								<div class="col-md-4">

									<div class="form-group">
										<h5>Product Size Bengali <span class="text-danger">*</span></h5>
										<div class="controls">
											<input type="text" name="product_size_ben" class="form-control"  data-role="tagsinput"
                                            value="{{ $product->product_size_ben }}"> 
										</div>
											@error('product_size_ben')
													<span class="text-danger">{{ $message }}</span>
											@enderror
									</div>

								</div>

								<div class="col-md-4">

									<div class="form-group">
										<h5>Product Size Hindi <span class="text-danger">*</span></h5>
										<div class="controls">
											<input type="text" name="product_size_hin" class="form-control" data-role="tagsinput"
                                            value="{{ $product->product_size_hin }}"> 
										</div>
											@error('product_size_hin')
													<span class="text-danger">{{ $message }}</span>
											@enderror
									</div>

								</div>
							</div><!-- 5th row end -->


							<div class="row"><!-- 6th row-->
								<div class="col-md-4">

									<div class="form-group">
										<h5>Product Color English <span class="text-danger">*</span></h5>
										<div class="controls">
											<input type="text" name="product_color_en" class="form-control"  data-role="tagsinput"  required=""
                                            value="{{ $product->product_color_en }}"> 
										</div>
											@error('product_color_en')
													<span class="text-danger">{{ $message }}</span>
											@enderror
									</div>

								</div>

								<div class="col-md-4">

									<div class="form-group">
										<h5>Product Color Bengali <span class="text-danger">*</span></h5>
										<div class="controls">
											<input type="text" name="product_color_ben" class="form-control"  data-role="tagsinput"  required=""
                                            value="{{ $product->product_color_ben }}"> 
										</div>
											@error('product_color_ben')
													<span class="text-danger">{{ $message }}</span>
											@enderror
									</div>

								</div>

								<div class="col-md-4">

									<div class="form-group">
										<h5>Product Color Hindi <span class="text-danger">*</span></h5>
										<div class="controls">
											<input type="text" name="product_color_hin" class="form-control"  data-role="tagsinput"  required=""
                                            value="{{ $product->product_color_hin }}"> 
										</div>
											@error('product_color_hin')
													<span class="text-danger">{{ $message }}</span>
											@enderror
									</div>

								</div>
							</div><!-- 6th row end -->


							<div class="row"><!-- 7th row-->
								<div class="col-md-4">

									<div class="form-group">
										<h5>Product Selling Price <span class="text-danger">*</span></h5>
										<div class="controls">
											<input type="text" name="selling_price" class="form-control"  required=""
                                            value="{{ $product->selling_price }}"> 
										</div>
											@error('selling_price')
													<span class="text-danger">{{ $message }}</span>
											@enderror
									</div>

								</div>

								<div class="col-md-4">

										<div class="form-group">
										<h5>Product Discount Price <span class="text-danger">*</span></h5>
										<div class="controls">
											<input type="text" name="discount_price" class="form-control"
                                            value="{{ $product->discount_price }}"> 
										</div>
											@error('discount_price')
													<span class="text-danger">{{ $message }}</span>
											@enderror
									</div>

								</div>

								<div class="col-md-4">

                                    <div class="form-group">
										<h5>Short Description English <span class="text-danger">*</span></h5>
										<div class="controls">
<textarea name="short_desc_en" id="textarea" class="form-control"  required="">
{!! $product->short_desc_en !!} 
</textarea>
										</div>
										@error('short_desc_en')
													<span class="text-danger">{{ $message }}</span>
											@enderror
									</div>

								</div>
							</div><!-- 7th row end -->


							<div class="row"><!-- 8th row-->
								<div class="col-md-6">

                                    	<div class="form-group">
											<h5>Short Description Bengali <span class="text-danger">*</span></h5>
											<div class="controls">
<textarea name="short_desc_ben" id="textarea" class="form-control"  required="">
{!! $product->short_desc_ben !!} 
</textarea>
											</div>
											@error('short_desc_ben')
													<span class="text-danger">{{ $message }}</span>
											@enderror
										</div>

								</div>

								<div class="col-md-6">

									<div class="form-group">
										<h5>Short Description Hindi <span class="text-danger">*</span></h5>
										<div class="controls">
<textarea name="short_desc_hin" id="textarea" class="form-control"  required="">
{!! $product->short_desc_hin !!} 
</textarea>
										</div>
										@error('short_desc_hin')
													<span class="text-danger">{{ $message }}</span>
											@enderror
									</div>

								</div>

							</div><!-- 8th row end -->



							<div class="row"><!-- 10th row-->
								<div class="col-md-12">

										<div class="form-group">
											<h5>Long Description English <span class="text-danger">*</span></h5>
											<div class="controls">
<textarea id="editor1" name="long_desc_en" rows="10" cols="80"  required="">
{!! $product->long_desc_en  !!}
</textarea>
											</div>
											@error('long_desc_en')
													<span class="text-danger">{{ $message }}</span>
											@enderror
										</div>

								</div>

							</div><!-- 10th row end -->


							<div class="row"><!-- 11th row -->

								<div class="col-md-12">

									<div class="form-group">
										<h5>Long Description Bengali <span class="text-danger">*</span></h5>
										<div class="controls">
<textarea id="editor2" name="long_desc_ben" rows="10" cols="80"  required="">
{!! $product->long_desc_ben  !!}
</textarea>
										</div>
										@error('long_desc_ben')
													<span class="text-danger">{{ $message }}</span>
											@enderror
									</div>

								</div>

							</div><!-- 11th row end -->



							<div class="row"><!-- 12th row -->

								<div class="col-md-12">

									<div class="form-group">
										<h5>Long Description Hindi <span class="text-danger">*</span></h5>
										<div class="controls">
<textarea id="editor3" name="long_desc_hin" rows="10" cols="80"  required="">
{!! $product->long_desc_hin  !!}
</textarea>
										</div>
										@error('long_desc_hin')
													<span class="text-danger">{{ $message }}</span>
											@enderror
									</div>

								</div>

							</div><!-- 12th row end -->

						<hr><br>

						<div class="row"><!-- row start -->

							<div class="col-md-6">
								<div class="form-group">
									
									<div class="controls">
										<fieldset>
											<input type="checkbox" name="hot_deals" id="checkbox_1" value="1"
                                            {{ ($product->hot_deals == 1)? 'checked' : '' }}>
											<label for="checkbox_1">Hot Deals</label>
										</fieldset>
										<fieldset>
											<input type="checkbox" name="featured" id="checkbox_2" value="1"
                                            {{ ($product->featured == 1)? 'checked' : '' }}>
											<label for="checkbox_2">Featured</label>
										</fieldset>
									</div>
								</div>
							</div>


							<div class="col-md-6">
								<div class="form-group">
									
									<div class="controls">
										<fieldset>
											<input type="checkbox" name="special_deals" id="checkbox_3"  value="1"
                                            {{ ($product->special_deals == 1)? 'checked' : '' }}>
											<label for="checkbox_3">Special Deals</label>
										</fieldset>
										<fieldset>
											<input type="checkbox" name="special_offer" id="checkbox_4" value="1"
                                            {{ ($product->special_offer == 1)? 'checked' : '' }}>
											<label for="checkbox_4">Special Offer</label>
										</fieldset>
									</div>
								</div>
							</div>

						</div><!-- row close-->

						<div class="text-xs-right">
							<input type="submit" class="btn btn-rounded btn-success" value="Update Product">
						</div>
					</form>

				</div>
				<!-- /.col -->
			  </div>
			  <!-- /.row -->
			</div>
			<!-- /.box-body -->
		  </div>
		  <!-- /.box -->

		</section>



		<!-- Multiple Image Update Section -->

		<section class="content">

			<div class="row">

				  <div class="col-md-12">
				<div class="box bt-3 border-info">
				  <div class="box-header">
					<h4 class="box-title">Product Multiple Image <strong>Update</strong></h4>
				  </div>

				  <div class="box-body">

					<form action="{{ route('update.product_image') }}" method="POST" enctype="multipart/form-data">
						@csrf
						<div class="row">

							@foreach ($multi_Image as $mul)

						<div class="col-md-4">

								<div class="ui link cards">
								<div class="card">
								<div class="image">
								<img src="{{ asset($mul->photo_name) }}" style="height:130px;width:100%;">
								</div>
								<div class="content">
								<div class="header">
									<a href="{{ route('delete.multiImage',$mul->id) }}" class="ui red button" id="delete" title="Delete Data"><i class="fa fa-trash"></i></a>
								</div>
								<br>
								<div class="description">
									<div class="form-group">
										<label for="" class="form-control-label">Change Image<span class="text-danger">*</span></label>
										<input type="file" class="form-control" name="multi_img[ {{ $mul->id  }}]" id="multiImg">
									</div>
									
									<div class="row" id="preview_img"> </div>

								</div>
								</div>
								
							</div>
							</div>

						</div><!-- End Column -->

							@endforeach


					</div><!-- End row -->

						<div class="text-center" style="margin-top:20px;">
									<input type="submit"class="ui inverted teal button btn-block" value="Update">
						</div>

					</form><!-- End form-->
					
					

				  </div><!-- End Box-body-->

				</div><!-- End border-info-->
			  </div><!-- End col-12 -->

			</div><!-- End row-->
		</section>

				<!-- End Multiple Image Update Section -->




				<!-- Thumbnail Image Update Section -->

		<section class="content">

			<div class="row">

				  <div class="col-md-12">
				<div class="box bt-3 border-info">
				  <div class="box-header">
					<h4 class="box-title">Product Thumbnail Image <strong>Update</strong></h4>
				  </div>

				  <div class="box-body">

					<form action="{{ route('update.product_thumbnail',$product->id) }}" method="POST" enctype="multipart/form-data">
						@csrf

						<input type="hidden" value="{{ $product->product_thumbnail }}" name="old_image">

						<div class="row">

						<div class="col-md-6">

								<div class="ui link cards">
								<div class="card">
								<div class="image">
								<img src="{{ asset($product->product_thumbnail) }}" style="height:130px;width:100%;">
								</div>
								<div class="content">
								<div class="header">
									<h3> {{ $product->product_name_en }}</h3>
								</div>
								<br><br>
								<div class="description">
									<div class="form-group">
										<label for="" class="form-control-label">Change Image<span class="text-danger">*</span></label>
										<input type="file" class="form-control" name="product_thumbnail" onchange="
											mainThumUrl(this)">
									</div>
									
								</div>
								</div>
								
							</div>
							</div>

						</div><!-- End Column -->


						<div class="col-md-6"><!-- Start Col -->

								<img src="" alt="" id="mainThum" style="margin-top: 30px;border-radius:10px;">

						</div><!--End col-->



					</div><!-- End row -->

						<div class="text-center" style="margin-top:20px;">
									<input type="submit"class="ui inverted teal button btn-block" value="Update">
						</div>

					</form><!-- End form-->
					
					

				  </div><!-- End Box-body-->

				</div><!-- End border-info-->
			  </div><!-- End col-12 -->

			</div><!-- End row-->
		</section>

				<!-- End Thumbnail Image Update Section -->





		<!-- /.content -->
	  </div>

	   <script type="text/javascript">
      $(document).ready(function() {
        $('select[name="category_id"]').on('change', function(){
            var category_id = $(this).val();
            if(category_id) {
                $.ajax({
                    url: "{{  url('/category/subcategory/ajax') }}/"+category_id,
                    type:"GET",
                    dataType:"json",
                    success:function(data) {
						$('select[name="subsubcategory_id"]').html('');
                       var d =$('select[name="subcategory_id"]').empty();
                          $.each(data, function(key, value){
                              $('select[name="subcategory_id"]').append('<option value="'+ value.id +'">' + value.subcategory_name_en + '</option>');
                          });
                    },
                });
            } else {
                alert('danger');
            }
        });


		 $('select[name="subcategory_id"]').on('change', function(){
            var subcategory_id = $(this).val();
            if(subcategory_id) {
                $.ajax({
                    url: "{{  url('/product/sub/subcategory/ajax') }}/"+subcategory_id,
                    type:"GET",
                    dataType:"json",
                    success:function(data) {
                       var d =$('select[name="subsubcategory_id"]').empty();
                          $.each(data, function(key, value){
                              $('select[name="subsubcategory_id"]').append('<option value="'+ value.id +'">' + value.subsubcategory_name_en + '</option>');
                          });
                    },
                });
            } else {
                alert('danger');
            }
        });


    });
    </script>

	<script type="text/javascript">
	function mainThumUrl(input){
		if (input.files && input.files[0]) {
			var reader = new FileReader();
			reader.onload = function(e){
				$('#mainThum').attr('src',e.target.result).width(300).height(200);
			};
			reader.readAsDataURL(input.files[0]);
		}
	}	
</script>

<script>
 
  $(document).ready(function(){
   $('#multiImg').on('change', function(){ //on file input change
      if (window.File && window.FileReader && window.FileList && window.Blob) //check File API supported browser
      {
          var data = $(this)[0].files; //this file data
           
          $.each(data, function(index, file){ //loop though each file
              if(/(\.|\/)(gif|jpe?g|png)$/i.test(file.type)){ //check supported file type
                  var fRead = new FileReader(); //new filereader
                  fRead.onload = (function(file){ //trigger function on successful read
                  return function(e) {
                      var img = $('<img/>').addClass('thumb').attr('src', e.target.result) .width(150)
                  .height(80); //create image element 
                      $('#preview_img').append(img); //append image to output element
                  };
                  })(file);
                  fRead.readAsDataURL(file); //URL representing the file's data.
              }
          });
           
      }else{
          alert("Your browser doesn't support File API!"); //if File API is absent
      }
   });
  });
   
  </script>


@endsection