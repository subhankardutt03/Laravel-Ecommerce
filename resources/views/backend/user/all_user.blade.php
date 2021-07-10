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
				<h3 class="box-title">Total User 
                    <span class="badge badge-pill badge-danger"> {{ count($users) }}</span>
                </h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
					<table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
                                <th width="20%">User Image</th>
								<th width="15%">User Name</th>
                                <th width="15%">User Email</th>
                                <th width="15%">User Phone</th>
								<th width="10%">User Status</th>
								<th width="25%">Action</th>
							</tr>
						</thead>
						<tbody>
                            @foreach ($users as $user)
                                <tr>
                                <td>
                                    <img src="{{ (!empty($user->profile_photo_path)) ? 
                    url('upload/user_images/'.$user->profile_photo_path) : url('upload/avatar-4.png') }}" alt=""
                                style="height:70px;width:100px;">
                                </td>
								<td>{{ $user->name}}</td>
								<td>{{ $user->email }}</td>
								<td>{{ $user->phone }}</td>
                                
								<td>
                                    @if ($user->UserOnline())
                                        <span class="badge badge-pill badge-success">Online Now</span>
                                    @else
                                        <span class="badge badge-pill badge-danger">
                                            {{ Carbon\Carbon::parse($user->last_seen)->diffForHumans() }}
                                        </span>
                                    @endif

                                </td>
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