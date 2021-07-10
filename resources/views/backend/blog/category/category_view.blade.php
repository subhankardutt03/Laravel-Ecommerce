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
				  <h3 class="box-title">Blog Category List
                    <span class="badge badge-pill badge-danger">{{ count($blogCategory) }}</span>
                  </h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
					  <table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th width="20%">Blog Category Name(Eng)</th>
                                <th width="20%">Blog Category Name(Ben)</th>
                                <th width="20%">Blog Category Name(Hin)</th>
								<th width="25%">Action</th>
							</tr>
						</thead>
						<tbody>
                            @foreach ($blogCategory as $item)
                                <tr>
								<td>{{ $item->blog_category_name_en }}</td>
								<td>{{ $item->blog_category_name_ben }}</td>
								<td>{{ $item->blog_category_name_hin }}</td>
								<td>
                                    <a href="{{ route('edit.blogCategory',$item->id) }}" class="btn btn-md btn-rounded btn-info" title="Edit Data">
                                    <i class="fa fa-pencil"></i></a>
                                    <a href="{{ route('delete.blogCategory',$item->id) }}" class="btn btn-md btn-rounded btn-danger ml-2" id="delete" title="Delete Data">
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
				  <h3 class="box-title">Add Blog Category</h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
                    <form action="{{ route('add.blogCategory') }}" method="POST">
						@csrf
                            
                            <div class="row">
                                <div class="col-md-12">

                                        <div class="form-group">
                                        <h5>Blog Category Name English<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" class="form-control" name="blog_category_name_en"> 
                                        </div>
                                        @error('blog_category_name_en')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
							        </div>

                                    <div class="form-group">
								        <h5>Blog Category Name Bengali<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" class="form-control" name="blog_category_name_ben" >
                                        </div>
                                        @error('blog_category_name_ben')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
							        </div>

                                    <div class="form-group">
                                        <h5>Blog Category Name Hindi<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" class="form-control" name="blog_category_name_hin" > 
                                        </div>
                                        @error('blog_category_name_hin')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
							        </div>

                                </div><!---Col-->
                            
                            </div><!--- row--->
                        <div class="text-xs-right">
							<input type="submit" class="btn btn-rounded btn-success" value="Add Blog Category">
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