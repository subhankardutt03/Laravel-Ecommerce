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
				  <h3 class="box-title">Edit Slider</h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
                    <form action="{{ route('update.slider',$slider->id) }}" method="post" enctype="multipart/form-data">
						@csrf
					<div class="row">
						<div class="col-8">

                            <input type="hidden" name="old_image" value="{{ $slider->slider_image }}">
                            
                            <div class="row">
                                <div class="col-md-12">

                                    <div class="form-group"> 
                                        <h5>Slider Title English<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" class="form-control" name="title_en" value="{{ $slider->title_en }}"> 
                                        </div>
							        </div>

									<div class="form-group"> 
                                        <h5>Slider Title Bengali<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" class="form-control" name="title_ben" value="{{ $slider->title_ben }}"> 
                                        </div>
							        </div>

									<div class="form-group"> 
                                        <h5>Slider Title Hindi<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" class="form-control" name="title_hin" value="{{ $slider->title_hin }}"> 
                                        </div>
							        </div>
                                    
                                    <div class="form-group">
								        <h5>Slider Description English<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" class="form-control" name="description_en" value="{{ $slider->description_en }}">
                                        </div>
							        </div>

									<div class="form-group">
								        <h5>Slider Description Bengali<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" class="form-control" name="description_ben" value="{{ $slider->description_ben }}">
                                        </div>
							        </div>

									<div class="form-group">
								        <h5>Slider Description Hindi<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" class="form-control" name="description_hin" value="{{ $slider->description_hin }}">
                                        </div>
							        </div>

                                    <div class="form-group">
                                        <h5>Slider Image<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="file" class="form-control" name="slider_image"> 
                                        </div>
                                        @error('slider_image')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
							        </div>

                                </div>
                            
                            </div>
                        <div class="text-xs-right">
							<input type="submit" class="btn btn-rounded btn-success mt-3" value="Update Slider">
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