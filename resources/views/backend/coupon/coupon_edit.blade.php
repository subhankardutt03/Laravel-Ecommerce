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
				  <h3 class="box-title">Edit Coupon</h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
                    <form action="{{ route('update.coupon',$coupon->id) }}" method="post">
						@csrf
					<div class="row">
						<div class="col-8">
                            
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <h5>Coupon Name <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" class="form-control" name="coupon_name" value="{{ $coupon->coupon_name }}"> 
                                        </div>
                                        @error('coupon_name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
							        </div>

                                <div class="form-group">
								        <h5>Coupon Discount(%)<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" class="form-control" name="coupon_discount" value="{{ $coupon->coupon_discount }}">
                                        </div>
                                        @error('coupon_discount')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
							        </div>


                                <div class="form-group">
                                        <h5>Coupon Validity Date<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="date" class="form-control" name="coupon_validity" min={{ 
                                                Carbon\Carbon::now()->format('Y-m-d')}} value="{{ $coupon->coupon_validity }}"> 
                                        </div>
                                        @error('coupon_validity')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
							        </div>

                                </div>
                            
                            </div>
                        <div class="text-xs-right">
							<input type="submit" class="btn btn-rounded btn-success mt-3" value="Update Coupon">
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