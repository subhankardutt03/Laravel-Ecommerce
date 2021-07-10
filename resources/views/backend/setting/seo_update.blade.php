@extends('admin.admin_master')
@section('admin_content')
    <div class="container-full">

		<!-- Main content -->
		<section class="content">

		 <!-- Basic Forms -->
		  <div class="box">
			<div class="box-header with-border">
			  <h4 class="box-title">SEO Setting Page</h4>
			</div>
			<!-- /.box-header -->
			<div class="box-body">
                <div class="row">
                    <div class="col">

                        <form action="{{ route('update.seoSetting',$seoSetting->id) }}" method="POST">
						@csrf
                        <div class="row">
                            <div class="col-md-12">

                            <div class="row"><!-- 1st row-->
                            <div class="col-md-6"><!--- col-1--->
                            
                                    <div class="form-group">
                                        <h5>Meta Title<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" class="form-control" name="meta_title"
                                            value="{{ $seoSetting->meta_title }}"> 
                                        </div>
							        </div>

                                </div><!--- col-1 end--->

                                <div class="col-md-6"><!-- col-2-->
                                    <div class="form-group">
								        <h5>Meta Author<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" class="form-control" name="meta_author"
                                            value="{{ $seoSetting->meta_author }}">
                                        </div>
							        </div>
                                </div><!-- col-2 end-->

                            </div>
			                <!-- /.1st row -->


                            <div class="row"><!---2nd row-->

                                <div class="col-md-6"><!--- col-3--->
                            
                                    <div class="form-group">
                                        <h5>Meta Keyword<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" class="form-control" name="meta_keyword"
                                            value="{{ $seoSetting->meta_keyword }}"> 
                                        </div>
							        </div>
                                    
                                </div><!--- col-3 end--->

                                    <div class="col-md-6"><!--col-4-->

                                        <div class="form-group">
								        <h5>Meta Description<span class="text-danger">*</span></h5>
                                        <div class="controls">
<textarea type="text" class="form-control" name="meta_description">
    {{ $seoSetting->meta_description }}
</textarea>
                    
                                        </div>
							        </div>

                                    </div><!--col-4-end-->

                            </div><!-- 2ndrow-end-->


                            <div class="row"><!--3rd row-->

                                <div class="col-md-8">

                                    <div class="form-group">
                                        <h5>Google Analytics<span class="text-danger">*</span></h5>
                                        <div class="controls">
<textarea type="text" class="form-control" name="google_analytics">
    {{ $seoSetting->google_analytics }}
</textarea>
                                        </div>
							        </div>

                                </div>

                            </div><!--3rd row end-->

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