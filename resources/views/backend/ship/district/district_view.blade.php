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
				  <h3 class="box-title">District List</h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
					  <table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th width="30%">Division Name</th>
                                <th width="30%">District Name</th>
								<th width="20%">Action</th>
							</tr>
						</thead>
						<tbody>
                            @foreach ($districts as $district)
                                <tr>
								<td>{{ $district['shipDivision']['division_name'] }}</td>
                                <td>{{ $district->district_name }}</td>
								<td>
                                    <a href="{{ route('edit.district',$district->id) }}" class="btn btn-md btn-rounded btn-info" title="Edit Data">
                                    <i class="fa fa-pencil"></i></a>
                                    <a href="{{ route('delete.district',$district->id) }}" class="btn btn-md btn-rounded btn-danger ml-2" id="delete" title="Delete Data">
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
				  <h3 class="box-title">Add District</h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
                    <form action="{{ route('add.district') }}" method="POST">
						@csrf
					    <div class="row">
						<div class="col-12">
                            
                            <div class="row">
                                <div class="col-md-12">

                                <div class="form-group">
								    <h5>Division Select <span class="text-danger">*</span></h5>
								            <div class="controls">
                                                <select name="division_id" class="form-control">
                                                    <option value="" selected="" disabled="">Select Division</option>

                                                    @foreach ($divisions as $row)
                                                        <option value="{{ $row->id }}">{{ $row->division_name }}</option>
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
                                            <input type="text" class="form-control" name="district_name"> 
                                        </div>
                                        @error('district_name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
							        </div>

                                </div>
                            
                            </div>
                        <div class="text-xs-right">
							<input type="submit" class="btn btn-rounded btn-success" value="Add District">
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