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
				  <h3 class="box-title">Edit Category</h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
                    <form action="{{ route('update.category',$category->id) }}" method="post">
						@csrf
					<div class="row">
						<div class="col-8">
                            
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <h5>Category Name English<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" class="form-control" name="category_name_en" value="{{ $category->category_name_en }}"> 
                                        </div>
                                        @error('category_name_en')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
							        </div>

                                    <div class="form-group">
								        <h5>Category Name Bengali<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" class="form-control" name="category_name_ben" value="{{ $category->category_name_ben }}">
                                        </div>
                                        @error('category_name_ben')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
							        </div>


                                <div class="form-group">
                                        <h5>Category Name Hindi<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" class="form-control" name="category_name_hin" value="{{ $category->category_name_hin }}"> 
                                        </div>
                                        @error('category_name_hin')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
							        </div>

                                    <div class="form-group">
                                        <h5>Category Icon<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" class="form-control" name="category_icon" value="{{ $category->category_icon }}"> 
                                        </div>
                                        @error('category_icon')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
							        </div>

                                </div>
                            
                            </div>
                        <div class="text-xs-right">
							<input type="submit" class="btn btn-rounded btn-success mt-3" value="Update Category">
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