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
				  <h3 class="box-title">Edit Subcategory</h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
                    <form action="{{ route('update.subcategory',$subcategory->id) }}" method="post">
						@csrf
					<div class="row">
						<div class="col-8">
                            
                            <div class="row">
                                <div class="col-md-12">
                                
                                    <div class="form-group">
								    <h5>Category Select <span class="text-danger">*</span></h5>
								            <div class="controls">
                                                <select name="category_id" class="form-control">
                                                    <option value="" selected="" disabled="">Select Category</option>

                                                    @foreach ($category as $row)
                                                        <option value="{{ $row->id }}" {{ ($row->id == $subcategory->category_id) ? 'selected' : '' }}>
                                                            {{ $row->category_name_en }}</option>
                                                    @endforeach
                                                    
                                                </select>
                                            </div>
                                            @error('category_id')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
							    </div>

                                    <div class="form-group">
								        <h5>Subcategory Name English<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" class="form-control" name="subcategory_name_en" value="{{ $subcategory->subcategory_name_en }}">
                                        </div>
                                        @error('subcategory_name_en')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
							        </div>


                                <div class="form-group">
                                        <h5>Subcategory Name Bengali<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" class="form-control" name="subcategory_name_ben" value="{{ $subcategory->subcategory_name_ben }}"> 
                                        </div>
                                        @error('subcategory_name_ben')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
							        </div>

                                    <div class="form-group">
                                        <h5>Subcategory Name Hindi<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" class="form-control" name="subcategory_name_hin" value="{{ $subcategory->subcategory_name_hin }}"> 
                                        </div>
                                        @error('subcategory_name_hin')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
							        </div>

                                </div>
                            
                            </div>
                        <div class="text-xs-right">
							<input type="submit" class="btn btn-rounded btn-success mt-3" value="Update Subcategory">
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