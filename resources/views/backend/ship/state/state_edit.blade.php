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
				  <h3 class="box-title">Edit State</h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
                    <form action="{{ route('update.state',$state->id) }}" method="post">
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
                                                        <option value="{{ $row->id }}"  {{ $state->division_id == $row->id ? 'selected' : '' }}>
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
								    <h5>District Select <span class="text-danger">*</span></h5>
								            <div class="controls">
                                                <select name="district_id" class="form-control">
                                                    <option value="" selected="" disabled="">Select District</option>

                                                    @foreach ($districts as $row)
                                                        <option value="{{ $row->id }}" {{ $state->district_id == $row->id ? 'selected' : '' }}>
                                                            {{ $row->district_name }}
                                                        </option>
                                                    @endforeach
                                                    
                                                </select>
                                            </div>
                                            @error('district_id')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
							    </div>


                            <div class="form-group">
                                        <h5>State Name <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" class="form-control" name="state_name" value="{{ $state->state_name }}"> 
                                        </div>
                                        @error('state_name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
							        </div>


                                </div>
                            
                            </div>
                        <div class="text-xs-right">
							<input type="submit" class="btn btn-rounded btn-success mt-3" value="Update State">
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