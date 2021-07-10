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
				  <h3 class="box-title">Total Admin User</h3>
                  <a href="{{ route('add-admin-user') }}" class="btn btn-danger" style="float: right;">Add Admin User</a>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
					  <table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th width="15%">Image</th>
                                <th width="15%">Name</th>
                                <th width="10%">Email</th>
								<th width="15%">Access</th>
                                <th width="20%">Action</th> 
							</tr>
						</thead>
						<tbody>
                            @foreach ($adminUser as $item)
                                <tr>
								<td>
                                    <img src="{{ asset($item->profile_photo_path) }}" alt="" style="width:100px;height:100px;">
                                </td>
								<td>{{ $item->name }}</td>
								<td>{{ $item->email }}</td>
								<td>

                                    @if ($item->brand == 1)
                                        <span class="badge badge-primary">Brand</span>
                                    @else
                                        
                                    @endif

                                    @if ($item->category == 1)
                                        <span class="badge badge-light">category</span>
                                    @else
                                        
                                    @endif


                                    @if ($item->product == 1)
                                        <span class="badge badge-secondary">product</span>
                                    @else
                                        
                                    @endif


                                    @if ($item->slider == 1)
                                        <span class="badge badge-info">slider</span>
                                    @else
                                        
                                    @endif


                                    @if ($item->coupons == 1)
                                        <span class="badge badge-warning">coupons</span>
                                    @else
                                        
                                    @endif


                                    @if ($item->shipping == 1)
                                        <span class="badge badge-danger">shipping</span>
                                    @else
                                        
                                    @endif


                                    @if ($item->blog == 1)
                                        <span class="badge badge-success">blog</span>
                                    @else
                                        
                                    @endif


                                    @if ($item->setting == 1)
                                        <span class="badge badge-info">setting</span>
                                    @else
                                        
                                    @endif


                                    @if ($item->return_order == 1)
                                        <span class="badge badge-light">return_order</span>
                                    @else
                                        
                                    @endif


                                    @if ($item->review == 1)
                                        <span class="badge badge-success">review</span>
                                    @else
                                        
                                    @endif


                                    @if ($item->stock == 1)
                                        <span class="badge badge-info">stock</span>
                                    @else
                                        
                                    @endif


                                    @if ($item->orders == 1)
                                        <span class="badge bagde-danger">orders</span>
                                    @else
                                        
                                    @endif


                                    @if ($item->reports == 1)
                                        <span class="badge badge-secondary">reports</span>
                                    @else
                                        
                                    @endif


                                    @if ($item->all_user == 1)
                                        <span class="badge badge-warning">all_user</span>
                                    @else
                                        
                                    @endif


                                    @if ($item->admin_user_role == 1)
                                        <span class="badge badge-light">admin_user_role</span>
                                    @else
                                        
                                    @endif


                                </td>

								<td>
                                    <a href="{{ route('edit-admin-user',$item->id) }}" class="btn btn-md btn-rounded btn-info" title="Edit Data">
                                    <i class="fa fa-pencil"></i></a>
                                    <a target="_blank" href="{{ route('delete-admin-user',$item->id) }}" class="btn btn-md btn-rounded btn-danger ml-2" id="delete" title="Delete Data">
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