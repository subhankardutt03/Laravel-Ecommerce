@extends('admin.admin_master')
@section('admin_content')

      <!-- Content Wrapper. Contains page content -->
	  <div class="container-full">
		<!-- Main content -->
		<section class="content">
		  <div class="row">

			<div class="col-md-12">

			 <div class="box">
				<div class="box-header with-border">
				    <h3 class="box-title">Blog Post List
                    <span class="badge badge-pill badge-danger">{{ count($blogPost) }}</span>
                    </h3>
                    <a href="{{ route('add.blogPost') }}" class="btn btn-success" style="float: right;">
                        Add Blog Post</a>

				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
					  <table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
                                <th width="17%">Blog Post Image</th>
								<th width="10%">Blog Category Name</th>
                                <th width="20%">Blog Post Title(Eng)</th>
                                <th width="20%">Blog Post Title(Ben)</th>
                                <th width="20%">Blog Post Title(Hin)</th>
								<th width="13%">Action</th>
							</tr>
						</thead>
						<tbody>
                            @foreach ($blogPost as $item)
                                <tr>
                                <td>
                                    <img src="{{ asset($item->blog_post_image) }}" alt="" style="height:80px; width:170px;">
                                </td>
                                <td>{{ $item->blogCategory->blog_category_name_en }}</td>
								<td>{{ $item->blog_post_title_en }}</td>
								<td>{{ $item->blog_post_title_ben }}</td>
								<td>{{ $item->blog_post_title_hin }}</td>
								<td>
                                    <a href="" class="btn btn-md btn-rounded btn-info" title="Edit Data">
                                    <i class="fa fa-pencil"></i></a>
                                    <a href="" class="btn btn-md btn-rounded btn-danger ml-2" id="delete" title="Delete Data">
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


		  </div>
		  <!-- /.row -->
		</section>
		<!-- /.content -->
	  
	  </div>
  <!-- /.content-wrapper -->

@endsection