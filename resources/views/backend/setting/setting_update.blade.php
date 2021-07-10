@extends('admin.admin_master')
@section('admin_content')
    <div class="container-full">

		<!-- Main content -->
		<section class="content">

		 <!-- Basic Forms -->
		  <div class="box">
			<div class="box-header with-border">
			  <h4 class="box-title">Site Setting Page</h4>
			</div>
			<!-- /.box-header -->
			<div class="box-body">
                <div class="row">
                    <div class="col">

                        <form action="{{ route('update.siteSetting',$setting->id) }}" method="POST" enctype="multipart/form-data">
						@csrf
                        <div class="row">
                            <div class="col-md-12">

                            <div class="row"><!-- 1st row-->
                            <div class="col-md-6"><!--- col-1--->
                            
                                    <div class="form-group">
                                        <h5>Company Logo<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="file" class="form-control" name="logo"> 
                                        </div>
							        </div>

                                </div><!--- col-1 end--->

                                <div class="col-md-6"><!-- col-2-->
                                    <div class="form-group">
								        <h5>Phone Number 1<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" class="form-control" name="phone_one"
                                            value="{{ $setting->phone_one }}">
                                        </div>
							        </div>
                                </div><!-- col-2 end-->

                            </div>
			                <!-- /.1st row -->


                            <div class="row"><!---2nd row-->

                                <div class="col-md-6"><!--- col-3--->
                            
                                    <div class="form-group">
                                        <h5>Phone Number 2<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" class="form-control" name="phone_two"
                                            value="{{ $setting->phone_two }}"> 
                                        </div>
							        </div>
                                    
                                </div><!--- col-3 end--->

                                    <div class="col-md-6"><!--col-4-->

                                        <div class="form-group">
								        <h5>Email<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="email" class="form-control" name="email"
                                            value={{ $setting->email }}>
                                        </div>
							        </div>

                                    </div><!--col-4-end-->

                            </div><!-- 2ndrow-end-->


                            <div class="row"><!--3rd row-->

                                <div class="col-md-6">

                                    <div class="form-group">
                                        <h5>Company Name<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" class="form-control" name="company_name"
                                            value="{{ $setting->company_name }}"> 
                                        </div>
							        </div>

                                </div>

                                <div class="col-md-6">

                                    <div class="form-group">
								        <h5>Company Address<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" class="form-control" name="company_address"
                                            value="{{ $setting->company_address }}">
                                        </div>
							        </div>


                                </div>

                            </div><!--3rd row end-->


                            <div class="row"><!--4th row-->

                            <div class="col-md-6">

                                <div class="form-group">
                                        <h5>Facebook<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" class="form-control" name="facebook"
                                            value="{{ $setting->facebook }}"> 
                                        </div>
							        </div>

                            </div>

                            <div class="col-md-6">

                                <div class="form-group">
								        <h5>Twitter<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" class="form-control" name="twitter"
                                            value="{{ $setting->twitter }}">
                                        </div>
							        </div>


                            </div>

                            </div><!--4th row end-->


                            <div class="row"><!--5th row-->

                            <div class="col-md-6">

                                <div class="form-group">
                                        <h5>LinkedIn<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" class="form-control" name="linkedIn"
                                            value="{{ $setting->linkedIn }}"> 
                                        </div>
							        </div>

                            </div>

                            <div class="col-md-6">

                                <div class="form-group">
								        <h5>YouTube<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" class="form-control" name="youTube" 
                                            value="{{ $setting->youTube }}">
                                        </div>
							        </div>

                            </div>

                            </div><!--5th row end-->

                            </div><!--col-md-12-->
                        </div><!--row--->

                        <div class="text-xs-right">
							<input type="submit" class="btn btn-rounded btn-info" value="update">
						</div>
					</form>

                    </div><!--col--->
                </div><!--row--->


			</div>
			<!-- /.box-body -->
		  </div>
		  <!-- /.box -->

		</section>
		<!-- /.content -->
   </div>
  @endsection