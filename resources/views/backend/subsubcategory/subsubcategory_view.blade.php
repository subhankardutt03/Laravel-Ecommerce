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
				  <h3 class="box-title">Sub-Subcategory List</h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
					  <table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th width="20%">Category </th>
                                <th width="10%">Subcategory </th>
                                <th width="10%">Sub-Subcategory Name(Eng)</th>
                                <th width="10%">Sub-Subcategory Name(Ben)</th>
                                <th width="10%">Sub-Subcategory Name(Hin)</th>
								<th width="40%">Action</th>
							</tr>
						</thead>
						<tbody>
                            @foreach ($subsubCategory as $item)
                                <tr>
                                <td>{{ $item['category']['category_name_en'] }}</td>
                                <td>{{ $item['subcategory']['subcategory_name_en'] }}</td>
								<td>{{ $item->subsubcategory_name_en }}</td>
								<td>{{ $item->subsubcategory_name_ben }}</td>
								<td>{{ $item->subsubcategory_name_hin }}</td>
								<td>
                                    <a href="{{ route('edit.subsubcategory',$item->id) }}" class="btn btn-md btn-rounded btn-info" title="Edit Data">
                                    <i class="fa fa-pencil"></i></a>
                                    <a href="{{ route('delete.subsubcategory',$item->id) }}" class="btn btn-md btn-rounded btn-danger mt-2" id="delete" title="Delete Data">
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
				  <h3 class="box-title">Add Sub-Subcategory</h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
                    <form action="{{ route('add.subsubcategory') }}" method="POST">
						@csrf
					    <div class="row">
						<div class="col-12">
                            
                            <div class="row">
                                <div class="col-md-12">
                                <div class="form-group">
								    <h5>Category Select <span class="text-danger">*</span></h5>
								            <div class="controls">
                                                <select name="category_id" class="form-control">
                                                    <option value="" selected="" disabled="">Select Category</option>

                                                    @foreach ($category as $row)
                                                        <option value="{{ $row->id }}">{{ $row->category_name_en }}</option>
                                                    @endforeach
                                                    
                                                </select>
                                            </div>
                                            @error('category_id')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
							    </div>


                                <div class="form-group">
								    <h5>Subcategory Select <span class="text-danger">*</span></h5>
								            <div class="controls">
                                                <select name="subcategory_id" class="form-control">
                                                    <option value="" selected="" disabled="">Select Subcategory</option>
                                                    
                                                </select>
                                            </div>
                                            @error('subcategory_id')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
							    </div>


                                    <div class="form-group">
								        <h5>Sub-Subcategory Name English<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" class="form-control" name="subsubcategory_name_en" >
                                        </div>
                                        @error('subsubcategory_name_en')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
							        </div>

                                    <div class="form-group">
                                        <h5>Sub-Subcategory Name Bengali<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" class="form-control" name="subsubcategory_name_ben" > 
                                        </div>
                                        @error('subsubcategory_name_ben')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
							        </div>

                                    <div class="form-group">
                                        <h5>Sub-Subcategory Name Hindi<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" class="form-control" name="subsubcategory_name_hin" > 
                                        </div>
                                        @error('subsubcategory_name_hin')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
							        </div>

                                </div>
                            
                            </div>
                        <div class="text-xs-right">
							<input type="submit" class="btn btn-rounded btn-success" value="Add Sub-Subcategory">
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
        $('select[name="category_id"]').on('change', function(){
            var category_id = $(this).val();
            if(category_id) {
                $.ajax({
                    url: "{{  url('/category/subcategory/ajax') }}/"+category_id,
                    type:"GET",
                    dataType:"json",
                    success:function(data) {
                       var d =$('select[name="subcategory_id"]').empty();
                          $.each(data, function(key, value){
                              $('select[name="subcategory_id"]').append('<option value="'+ value.id +'">' + value.subcategory_name_en + '</option>');
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