@extends('admin.admin_master')
@section('admin_content')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

      <!-- Content Wrapper. Contains page content --> 
	  <div class="container-full">
		<!-- Main content -->
		<section class="content">
		  <div class="row">

			<div class="col-8">

			 <div class="box">
				<div class="box-header with-border">
				  <h3 class="box-title">State List</h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
					  <table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th width="25%">Division Name</th>
                                <th width="25%">District Name</th>
                                <th width="25%">State Name</th>
								<th width="25%">Action</th>
							</tr>
						</thead>
						<tbody>
                            @foreach ($states as $state)
                                <tr>
								<td>{{ $state['shipDivision']['division_name'] }}</td>
                                <td>{{ $state['shipDistrict']['district_name'] }}</td>
                                <td>{{ $state->state_name }}</td>
								<td>
                                    <a href="{{ route('edit.state',$state->id) }}" class="btn btn-md btn-rounded btn-info" title="Edit Data">
                                    <i class="fa fa-pencil"></i></a>
                                    <a href="{{ route('delete.state',$state->id) }}" class="btn btn-md btn-rounded btn-danger ml-2" id="delete" title="Delete Data">
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
				  <h3 class="box-title">Add State</h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
                    <form action="{{ route('add.state') }}" method="POST">
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
								    <h5>District Select <span class="text-danger">*</span></h5>
								            <div class="controls">
                                                <select name="district_id" class="form-control">
                                                    <option value="" selected="" disabled="">Select District</option>
                                                    

                                                </select>
                                            </div>
                                            @error('district_id')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
							    </div>


                                <div class="form-group">
                                        <h5>State Name <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" class="form-control" name="state_name"> 
                                        </div>
                                        @error('state_name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
							        </div>

                                </div>
                            
                            </div>
                        <div class="text-xs-right">
							<input type="submit" class="btn btn-rounded btn-success" value="Add State">
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


   <script type="text/javascript">

    $(document).ready(function() {
    
        $('select[name="division_id"]').on('change', function(){
            var division_id = $(this).val();
            if(division_id) {
                $.ajax({
                    url: "{{  url('/shipping/division/district/ajax') }}/"+division_id,
                    type:"GET",
                    dataType:"json",
                    success:function(data) {
                        var d =$('select[name="district_id"]').empty();
                            $.each(data, function(key, value){
                                $('select[name="district_id"]').append('<option value="'+ value.id +'">' + value.district_name + '</option>');
                            });
                    },
                });
            } else {
                alert('danger');
            }
        });

    });

</script>




@endsection