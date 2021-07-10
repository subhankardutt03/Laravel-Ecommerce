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
				  <h3 class="box-title">Edit District</h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
                    <form action="{{ route('update.district',$district->id) }}" method="post">
						@csrf
					<div class="row">
						<div class="col-8">
                            
                            <div class="row">
                                <div class="col-md-12">

                                <div class="form-group">
								    <h5>Division Select <span class="text-danger">*</span></h5>
								            <div class="controls">
                                                <select name="division_id" class="form-control">
                                                    <option value="" selected="" disabled="">Select Division</option>

                                                    @foreach ($divisions as $row)
                                                        <option value="{{ $row->id }}"  {{ $district->division_id == $row->id ? 'selected' : '' }}>
                                                            {{ $row->division_name }}
                                                        </option>
                                                    @endforeach
                                                    
                                                </select>
                                            </div>
                                            @error('division_id')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
							    </div>

                                <div class="form-group">
                                        <h5>District Name <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" class="form-control" name="district_name" value="{{ $district->district_name }}"> 
                                        </div>
                                        @error('district_name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
							        </div>

                                </div>
                            
                            </div>
                        <div class="text-xs-right">
							<input type="submit" class="btn btn-rounded btn-success mt-3" value="Update District">
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