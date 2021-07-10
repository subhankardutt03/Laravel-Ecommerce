@extends('admin.admin_master')
@section('admin_content')

      <!-- Content Wrapper. Contains page content -->
	  <div class="container-full">
		<!-- Main content -->
		<section class="content">
		  <div class="row">

			<div class="col-8">

			 <div class="box">
				<div class="box-header with-border">
				  <h3 class="box-title">Slider Manage</h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
					  <table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th width="15%">Title</th>
                                <th width="20%">Description</th>
                                <th width="25%">Slider Image</th>
								<th width="10%">Status</th>
								<th width="30%">Action</th>
							</tr>
						</thead>
						<tbody>
                            @foreach ($sliders as $item)
                                <tr>
								<td class="text-center">
                                    @if ($item->title_en == NULL)
                                        <span class="badge badge-pill badge-dark">NONE</span>
                                    @else
                                        {{ $item->title_en }}
                                    @endif
                                </td>
								<td class="text-center">
                                    @if ($item->description_en == NULL)
                                        <span class="badge badge-pill badge-dark">NONE</span>
                                    @else
                                        {{ $item->description_en }}
                                    @endif
                                </td>
								<td>
                                    <img src="{{ asset($item->slider_image) }}" alt="" style="width:120px;height:70px;">
                                </td>
                                <td>
									@if ($item->status == 1)
										<span class="badge badge-pill badge-success">Active</span>
									@else
										<span class="badge badge-pill badge-danger">Inactive</span>
									@endif
								</td>
								<td>
                                    <a href="{{ route('edit.slider',$item->id) }}" class="btn btn-md btn-rounded btn-info" title="Edit Data">
                                    <i class="fa fa-pencil"></i></a>
                                    <a href="{{ route('delete.slider',$item->id) }}" class="btn btn-md btn-rounded btn-danger ml-2" id="delete" title="Delete Data">
                                    <i class="fa fa-trash"></i></a>
                                    @if ($item->status == 1)
									<a href="{{ route('slider.inactive',$item->id) }}" class="btn btn-md btn-rounded btn-danger ml-2" title="To Inactive">
                                    <i class="fa fa-arrow-down"></i></a>
									@else
									<a href="{{ route('slider.active',$item->id) }}" class="btn btn-md btn-rounded btn-success ml-2" title="To Active">
                                    <i class="fa fa-arrow-up"></i></a>
									@endif
                                </td>
							</tr>
                            @endforeach
							
						</tbody>
					</table>
					</div>
				</div>
				<!-- /.box-body -->
			  </div>
			  <!-- /.box -->  
			</div>
			<!-- /.col -->

            {{-- Add brand  --}}

            <div class="col-4">

			 <div class="box">
				<div class="box-header with-border">
				  <h3 class="box-title">Add Slider</h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
                    <form action="{{ route('add.slider') }}" method="post" enctype="multipart/form-data">
						@csrf
					  <div class="row">
						<div class="col-12">
                            
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <h5>Slider Title English <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" class="form-control" name="title_en"> 
                                        </div>
							        </div>

									<div class="form-group">
                                        <h5>Slider Title Bengali <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" class="form-control" name="title_ben"> 
                                        </div>
							        </div>

									<div class="form-group">
                                        <h5>Slider Title Hindi <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" class="form-control" name="title_hin"> 
                                        </div>
							        </div>

                                    <div class="form-group">
								        <h5>Slider Description English<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" class="form-control" name="description_en">
                                        </div>
							        </div>

									<div class="form-group">
								        <h5>Slider Description Bengali<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" class="form-control" name="description_ben">
                                        </div>
							        </div>

									<div class="form-group">
								        <h5>Slider Description Hindi<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" class="form-control" name="description_hin">
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
							<input type="submit" class="btn btn-rounded btn-success" value="Add Slider">
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