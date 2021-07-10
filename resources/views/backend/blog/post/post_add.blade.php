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
			  <h4 class="box-title">Add Blog Post</h4>
			</div>
			<!-- /.box-header -->
			<div class="box-body">
			  <div class="row">
				<div class="col">
					<form method="POST" action="{{ route('store.blogPost') }}" enctype="multipart/form-data">
						@csrf
					  <div class="row">
						<div class="col-12">

                            <div class="row"> <!-- 1st row-->
                                    <div class="col-md-6">

                                    <div class="form-group">
                                    <h5>Post Title English <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="text" name="blog_post_title_en" class="form-control"  required=""> 
                                    </div>
                                        @error('blog_post_title_en')
                                                <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                </div>

                                    </div>

                                    <div class="col-md-6">

                                    <div class="form-group">
										<h5>Post Title Bengali <span class="text-danger">*</span></h5>
										<div class="controls">
											<input type="text" name="blog_post_title_ben" class="form-control"  required=""> 
										</div>
											@error('blog_post_title_ben')
													<span class="text-danger">{{ $message }}</span>
											@enderror
									</div>

                                    </div>

                            </div> <!--1st row end -->


							<div class="row"><!-- 2nd row-->
							

								<div class="col-md-6">

									<div class="form-group">
										<h5>Post Title Hindi <span class="text-danger">*</span></h5>
										<div class="controls">
											<input type="text" name="blog_post_title_hin" class="form-control"  required=""> 
										</div>
											@error('blog_post_title_hin')
													<span class="text-danger">{{ $message }}</span>
											@enderror
									</div>

								</div>

								<div class="col-md-6">

								<div class="form-group">
                                            <h5>Blog Category Select <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <select name="blog_category_id" class="form-control"  required="">
                                                        <option value="" selected="" disabled="">Select Category</option>

                                                        @foreach ($blogCategory as $row)
                                                            <option value="{{ $row->id }}">{{ $row->blog_category_name_en }}</option>
                                                        @endforeach
                                                        
                                                    </select>
                                                </div>
                                                @error('blog_category_id')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

								</div>
							</div><!-- 2nd row end -->


							<div class="row"><!-- 3rd row-->
                                <div class="col-md-6">

									<div class="form-group">
										<h5>Post Image <span class="text-danger">*</span></h5>
										<div class="controls">
											<input type="file" name="blog_post_image" class="form-control" onchange="
											mainThumUrl(this)"  required=""> 
										</div>
											@error('blog_post_image')
													<span class="text-danger">{{ $message }}</span>
											@enderror
											<img src="" alt="" id="mainThum">
									</div>

								</div>

							
							</div><!-- 3rd row end -->


                            <div class="row"><!--4th row---->
                                <div class="col-md-12">
                                    
										<div class="form-group">
											<h5>Post Details English <span class="text-danger">*</span></h5>
											<div class="controls">
												<textarea id="editor1" name="blog_post_details_en" rows="10" cols="80"  required="">
												</textarea>
											</div>
											@error('blog_post_details_en')
													<span class="text-danger">{{ $message }}</span>
											@enderror
										</div>

                                </div>
                            </div><!--4th row end--->

							<div class="row"><!-- 5th row-->
								<div class="col-md-12">

										<div class="form-group">
										<h5>Post Details Bengali <span class="text-danger">*</span></h5>
										<div class="controls">
											<textarea id="editor2" name="blog_post_details_ben" rows="10" cols="80"  required="">
												</textarea>
										</div>
										@error('blog_post_details_ben')
													<span class="text-danger">{{ $message }}</span>
											@enderror
									</div>

								</div>

							</div><!-- 5th row end -->


                            <div class="row"><!--6th row-->
                                <div class="col-md-12">

										<div class="form-group">
										<h5>Post Details Hindi <span class="text-danger">*</span></h5>
										<div class="controls">
											<textarea id="editor3" name="blog_post_details_hin" rows="10" cols="80"  required="">
												</textarea>
										</div>
										@error('blog_post_details_hin')
													<span class="text-danger">{{ $message }}</span>
											@enderror
									</div>

                                </div>
                            </div><!--6th row end-->


						<div class="text-xs-right">
							<input type="submit" class="btn btn-rounded btn-success" value="Add Product">
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
		<!-- /.content -->
	  </div>


	<script type="text/javascript">
	function mainThumUrl(input){
		if (input.files && input.files[0]) {
			var reader = new FileReader();
			reader.onload = function(e){
				$('#mainThum').attr('src',e.target.result).width(120).height(80);
			};
			reader.readAsDataURL(input.files[0]);
		}
	}	
</script>




@endsection