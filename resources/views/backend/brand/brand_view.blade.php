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
				  <h3 class="box-title">Brand List</h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
					  <table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th width="10%">Brand Name(Eng)</th>
                                <th width="10%">Brand Name(Ben)</th>
                                <th width="10%">Brand Name(Hin)</th>
								<th width="35%">Brand Image</th>
								<th width="35%">Action</th>
							</tr>
						</thead>
						<tbody>
                            @foreach ($brand as $item)
                                <tr>
								<td>{{ $item->brand_name_en }}</td>
								<td>{{ $item->brand_name_ben }}</td>
								<td>{{ $item->brand_name_hin }}</td>
								<td>
                                    <img src="{{ asset($item->brand_image) }}" alt="" style="width:100px;height:50px;">
                                </td>
								<td>
                                    <a href="{{ route('edit.brand',$item->id) }}" class="btn btn-md btn-rounded btn-info" title="Edit Data">
                                    <i class="fa fa-pencil"></i></a>
                                    <a href="{{ route('delete.brand',$item->id) }}" class="btn btn-md btn-rounded btn-danger ml-2" id="delete" title="Delete Data">
                                    <i class="fa fa-trash"></i></a>
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
				  <h3 class="box-title">Add Brand</h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
                    <form action="{{ route('add.brand') }}" method="post" enctype="multipart/form-data">
						@csrf
					  <div class="row">
						<div class="col-12">
                            
                            <div class="row">
                                <div class="col-md-12">
                                        <div class="form-group">
                                        <h5>Brand Name English<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" class="form-control" name="brand_name_en"> 
                                        </div>
                                        @error('brand_name_en')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
							        </div>

                                    <div class="form-group">
								        <h5>Brand Name Bengali<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" class="form-control" name="brand_name_ben" >
                                        </div>
                                        @error('brand_name_ben')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
							        </div>

                                    <div class="form-group">
                                        <h5>Brand Name Hindi<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" class="form-control" name="brand_name_hin" > 
                                        </div>
                                        @error('brand_name_hin')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
							        </div>

                                    <div class="form-group">
                                        <h5>Brand Image<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="file" class="form-control" name="brand_image"> 
                                        </div>
                                        @error('brand_image')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
							        </div>

                                </div>
                            
                            </div>
                        <div class="text-xs-right">
							<input type="submit" class="btn btn-rounded btn-success" value="Add Brand">
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