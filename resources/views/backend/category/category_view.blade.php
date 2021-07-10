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
				  <h3 class="box-title">Category List</h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
					  <table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th width="10%">Category Name(Eng)</th>
                                <th width="10%">Category Name(Ben)</th>
                                <th width="10%">Category Name(Hin)</th>
								<th width="35%">Category Icon</th>
								<th width="35%">Action</th>
							</tr>
						</thead>
						<tbody>
                            @foreach ($category as $item)
                                <tr>
								<td>{{ $item->category_name_en }}</td>
								<td>{{ $item->category_name_ben }}</td>
								<td>{{ $item->category_name_hin }}</td>
								<td class="text-center">
                                    <span style="font-size:30px;"><i class="{{ $item->category_icon }}"></i></span>
                                </td>
								<td>
                                    <a href="{{ route('edit.category',$item->id) }}" class="btn btn-md btn-rounded btn-info" title="Edit Data">
                                    <i class="fa fa-pencil"></i></a>
                                    <a href="{{ route('delete.category',$item->id) }}" class="btn btn-md btn-rounded btn-danger ml-2" id="delete" title="Delete Data">
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
				  <h3 class="box-title">Add Category</h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
                    <form action="{{ route('add.category') }}" method="POST">
						@csrf
					    <div class="row">
						<div class="col-12">
                            
                            <div class="row">
                                <div class="col-md-12">
                                        <div class="form-group">
                                        <h5>Category Name English<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" class="form-control" name="category_name_en"> 
                                        </div>
                                        @error('category_name_en')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
							        </div>

                                    <div class="form-group">
								        <h5>Category Name Bengali<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" class="form-control" name="category_name_ben" >
                                        </div>
                                        @error('category_name_ben')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
							        </div>

                                    <div class="form-group">
                                        <h5>Category Name Hindi<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" class="form-control" name="category_name_hin" > 
                                        </div>
                                        @error('category_name_hin')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
							        </div>

                                    <div class="form-group">
                                        <h5>Category Icon<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" class="form-control" name="category_icon" > 
                                        </div>
                                        @error('category_icon')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
							        </div>

                                </div>
                            
                            </div>
                        <div class="text-xs-right">
							<input type="submit" class="btn btn-rounded btn-success" value="Add Category">
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