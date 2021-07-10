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
				  <h3 class="box-title">Coupon List</h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
					  <table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th width="30%">Coupon Name</th>
                                <th width="15%">Coupon Discount</th>
                                <th width="20%">Validity</th>
								<th width="15%">Status</th>
								<th width="20%">Action</th>
							</tr>
						</thead>
						<tbody>
                            @foreach ($coupons as $coupon)
                                <tr>
								<td>{{ $coupon->coupon_name }}</td>
								<td>{{ $coupon->coupon_discount }}%</td>
								<td>{{ Carbon\Carbon::parse($coupon->coupon_validity)->format('D, d F Y') }}</td>
								<td class="text-center">
                                    @if ($coupon->coupon_validity >= Carbon\Carbon::now()->format('Y-m-d'))
										<span class="badge badge-pill badge-success">Valid</span>
									@else
										<span class="badge badge-pill badge-danger">Invalid</span>
									@endif
                                </td>
								<td>
                                    <a href="{{ route('edit.coupon',$coupon->id) }}" class="btn btn-md btn-rounded btn-info" title="Edit Data">
                                    <i class="fa fa-pencil"></i></a>
                                    <a href="{{ route('delete.coupon',$coupon->id) }}" class="btn btn-md btn-rounded btn-danger ml-2" id="delete" title="Delete Data">
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
				  <h3 class="box-title">Add Coupon</h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
                    <form action="{{ route('add.coupon') }}" method="POST">
						@csrf
					    <div class="row">
						<div class="col-12">
                            
                            <div class="row">
                                <div class="col-md-12">
                                        <div class="form-group">
                                        <h5>Coupon Name <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" class="form-control" name="coupon_name"> 
                                        </div>
                                        @error('coupon_name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
							        </div>

                                    <div class="form-group">
								        <h5>Coupon Discount(%)<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" class="form-control" name="coupon_discount" >
                                        </div>
                                        @error('coupon_discount')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
							        </div>

                                    <div class="form-group">
                                        <h5>Coupon Validity Date<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="date" class="form-control" name="coupon_validity" min={{ 
                                                Carbon\Carbon::now()->format('Y-m-d')}}> 
                                        </div>
                                        @error('coupon_validity')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
							        </div>

                                </div>
                            
                            </div>
                        <div class="text-xs-right">
							<input type="submit" class="btn btn-rounded btn-success" value="Add Coupon">
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