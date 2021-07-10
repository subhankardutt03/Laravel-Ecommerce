@extends('admin.admin_master')
@section('admin_content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <div class="container-full">


		<!-- Content Header (Page header) -->
		<div class="content-header">
			<div class="d-flex align-items-center">
				<div class="mr-auto">
					<h3 class="page-title">Create Admin User</h3>
				</div>
			</div>
		</div>	  

		<!-- Main content -->
		<section class="content">

		 <!-- Basic Forms -->
		  <div class="box">
			<div class="box-header with-border">
			  <h4 class="box-title">Create Admin</h4>
			</div>
			<!-- /.box-header -->
			<div class="box-body">
			  <div class="row">
				<div class="col">
					<form action="{{ route('store-admin-user') }}" method="POST" enctype="multipart/form-data" novalidate>
						@csrf
					  <div class="row">
						<div class="col-12">
                            
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <h5>Admin Username<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" name="name" class="form-control" > 
                                        </div>
							        </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
								        <h5>Admin Email Field <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="email" name="email" class="form-control">
                                        </div>
							        </div>
                                </div>

                                </div><!------end row-->


                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <h5>Admin Phone<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" name="phone" class="form-control" > 
                                        </div>
							        </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
								        <h5>Admin Password <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="password" name="password" class="form-control">
                                        </div>
							        </div>
                                </div>

                                </div><!------end row-->


                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
								        <h5>Admin User Image <span class="text-danger">*</span></h5>
								        <div class="controls">
									    <input type="file" name="profile_photo_path" id="image" class="form-control">
                                        </div>
                                    </div>
							    </div>

                                <div class="col-md-6">
                                    <div class="form-group">
								        <img src="{{ url('upload/no_image.jpg') }}" 
                                        alt="" style="width: 100px;height:100px;margin-top:10px;border-radius:50%;" id="showImage">
                                    </div>
							    </div>

                            </div><!---end row-->




                            <hr><br>

						<div class="row"><!-- row start -->

							<div class="col-md-4">
								<div class="form-group">
									
									<div class="controls">
										<fieldset>
											<input type="checkbox" name="brand" id="checkbox_1" value="1">
											<label for="checkbox_1">Brand</label>
										</fieldset>
										<fieldset>
											<input type="checkbox" name="category" id="checkbox_2" value="1">
											<label for="checkbox_2">Category</label>
										</fieldset>
                                        <fieldset>
											<input type="checkbox" name="product" id="checkbox_3" value="1">
											<label for="checkbox_3">Product</label>
										</fieldset>
                                        <fieldset>
											<input type="checkbox" name="slider" id="checkbox_4" value="1">
											<label for="checkbox_4">Slider</label>
										</fieldset>
                                        <fieldset>
											<input type="checkbox" name="coupons" id="checkbox_5" value="1">
											<label for="checkbox_5">Coupons</label>
										</fieldset>
									</div>
								</div>
							</div>


                            <div class="col-md-4">
								<div class="form-group">
									
									<div class="controls">
										<fieldset>
											<input type="checkbox" name="shipping" id="checkbox_6" value="1">
											<label for="checkbox_6">Shipping</label>
										</fieldset>
										<fieldset>
											<input type="checkbox" name="blog" id="checkbox_7" value="1">
											<label for="checkbox_7">Blog</label>
										</fieldset>
                                        <fieldset>
											<input type="checkbox" name="setting" id="checkbox_8" value="1">
											<label for="checkbox_8">Setting</label>
										</fieldset>
                                        <fieldset>
											<input type="checkbox" name="return_order" id="checkbox_9" value="1">
											<label for="checkbox_9">Return Order</label>
										</fieldset>
                                        <fieldset>
											<input type="checkbox" name="review" id="checkbox_10" value="1">
											<label for="checkbox_10">Review</label>
										</fieldset>
									</div>
								</div>
							</div>



							<div class="col-md-4">
								<div class="form-group">
									
									<div class="controls">
										<fieldset>
											<input type="checkbox" name="stock" id="checkbox_11"  value="1">
											<label for="checkbox_11">Stock</label>
										</fieldset>
										<fieldset>
											<input type="checkbox" name="orders" id="checkbox_12" value="1">
											<label for="checkbox_12">Orders</label>
										</fieldset>
                                        <fieldset>
											<input type="checkbox" name="reports" id="checkbox_13" value="1">
											<label for="checkbox_13">Reports</label>
										</fieldset>
                                        <fieldset>
											<input type="checkbox" name="all_user" id="checkbox_14" value="1">
											<label for="checkbox_14">All User</label>
										</fieldset>
                                        <fieldset>
											<input type="checkbox" name="admin_user_role" id="checkbox_15" value="1">
											<label for="checkbox_15">Admin User Role</label>
										</fieldset>
									</div>
								</div>
							</div>

						</div><!-- row close-->
					
					
						<div class="text-xs-right">
							<input type="submit" class="btn btn-rounded btn-info" value="Add Admin User">
						</div>
					</form>

				</div>
				<!-- /.col -->
			  </div>
			  <!-- /.row -->
			</div>
			<!-- /.box-body -->
		  </div>
		  <!-- /.box -->

		</section>
		<!-- /.content -->
   </div>

    <script type="text/javascript">
        $(document).ready(function(){
            $('#image').change(function(e){
                var reader = new FileReader();
                reader.onload = function(e){
                    $('#showImage').attr('src',e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });

    </script>
  @endsection