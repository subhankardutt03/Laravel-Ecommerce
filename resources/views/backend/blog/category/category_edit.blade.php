@extends('admin.admin_master')
@section('admin_content')

      <!-- Content Wrapper. Contains page content -->
	  <div class="container-full">
		<!-- Main content -->
		<section class="content">
		  <div class="row">

            {{-- Add brand  --}}

            <div class="col-12">

			 <div class="box">
				<div class="box-header with-border">
				  <h3 class="box-title">Edit Blog Category</h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
                    <form action="{{ route('update.blogCategory',$blogCategory->id) }}" method="post">
						@csrf
                            
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <h5>Blog Category Name English<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" class="form-control" name="blog_category_name_en" 
                                            value="{{ $blogCategory->blog_category_name_en }}"> 
                                        </div>
                                        @error('blog_category_name_en')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
							        </div>

                                    <div class="form-group">
								        <h5>Blog Category Name Bengali<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" class="form-control" name="blog_category_name_ben" 
                                            value="{{ $blogCategory->blog_category_name_ben }}">
                                        </div>
                                        @error('blog_category_name_ben')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
							        </div>


                                <div class="form-group">
                                        <h5>Blog Category Name Hindi<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" class="form-control" name="blog_category_name_hin" 
                                            value="{{ $blogCategory->blog_category_name_hin }}"> 
                                        </div>
                                        @error('blog_category_name_hin')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
							        </div>

                                </div><!---col--->
                            
                            </div><!---row-->
                        <div class="text-xs-right">
							<input type="submit" class="btn btn-rounded btn-success mt-3" value="Update Blog Category">
						</div>
					</form>

				</div>
				<!-- /.box-body -->
			  </div>
			  <!-- /.box -->  
			</div>


		  </div>
		  <!-- /.row -->
		</section>
		<!-- /.content -->
	  
	  </div>
  <!-- /.content-wrapper -->

@endsection