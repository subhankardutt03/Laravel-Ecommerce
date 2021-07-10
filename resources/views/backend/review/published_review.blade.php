@extends('admin.admin_master')
@section('admin_content')

      <!-- Content Wrapper. Contains page content -->
	  <div class="container-full">
		<!-- Main content -->
		<section class="content">
		  <div class="row">

			<div class="col-12">

			 <div class="box">
				<div class="box-header with-border">
				  <h3 class="box-title">Published Reviews List</h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
					  <table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
                                <th width="15%">User Name</th>
								<th width="15%">Product Name</th>
                                <th width="15%">Product Summery</th>
                                <th width="10%">Product Comment</th>
								<th width="10%">Status</th>
                                <th width="20%">Action</th>
							</tr>
						</thead>
						<tbody>
                            @foreach ($reviews as $review)
                                <tr>
                                <td>{{ $review->user->name }}</td>
								<td>{{ $review->product->product_name_en }}</td>
								<td>{{ $review->summery }}</td>
								<td>{!! $review->comment !!}</td>
                                <td>

                                    @if ($review->status == 0)
                                        <span class="badge badge-pill" style="background-color:#800080;color:whitesmoke;">
                                        Pending</span>
                                    @elseif($review->status == 1)
                                        <span class="badge badge-pill" style="background-color:#008000;color:whitesmoke;">
                                        Published</span>
                                    @endif

                                </td>
								<td>
                                    <a href="{{ route('delete-review',$review->id) }}" class="btn btn-danger">Delete</a>
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