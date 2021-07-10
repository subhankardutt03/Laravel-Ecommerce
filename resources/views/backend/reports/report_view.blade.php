@extends('admin.admin_master')
@section('admin_content')

      <!-- Content Wrapper. Contains page content -->
	  <div class="container-full">
		<!-- Main content -->
		<section class="content">
		  <div class="row">


            <!--------- Col-1 Start---------->
            <div class="col-md-4">

			 <div class="box">
				<div class="box-header with-border">
				  <h3 class="box-title">Search By Date</h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
                    <form action="{{ route('search-by-date') }}" method="post">
						@csrf
                            
                        <div class="form-group">
                            <h5>Select Date<span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="date" class="form-control" name="date"> 
                            </div>
                            @error('date')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                            
                        <div class="text-xs-right">
							<input type="submit" class="btn btn-rounded btn-success" value="Search">
						</div>
					</form>

				</div>
				<!-- /.box-body -->
			  </div>
			  <!-- /.box -->  
			</div>

            <!-------- Col1-End-------->




                <!--------- Col-2 Start---------->
                    <div class="col-md-4">

                    <div class="box">
                        <div class="box-header with-border">
                        <h3 class="box-title">Search By Month</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <form action="{{ route('search-by-month') }}" method="post">
                                @csrf

                                    <div class="form-group">
                                    <h5>Select Month<span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <select name="month" id="month" class="form-control">
                                            <option label="Choose one"></option>
                                            <option value="January">January</option>
                                            <option value="February">February</option>
                                            <option value="March">March</option>
                                            <option value="April">April</option>
                                            <option value="May">May</option>
                                            <option value="June">June</option>
                                            <option value="July">July</option>
                                            <option value="August">August</option>
                                            <option value="September">September</option>
                                            <option value="October">October</option>
                                            <option value="Navember">Navember</option>
                                            <option value="December">December</option>
                                        </select>
                                    </div>
                                    @error('month')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                            </div>

                                <div class="form-group">
                                    <h5>Select Year<span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <select name="year_name" id="year_name" class="form-control">
                                            <option label="Choose one"></option>
                                            <option value="2021">2021</option>
                                            <option value="2022">2022</option>
                                            <option value="2023">2023</option>
                                            <option value="2024">2024</option>
                                            <option value="2025">2025</option>
                                            <option value="2026">2026</option>
                                            <option value="2027">2027</option>
                                            <option value="2028">2028</option>
                                            <option value="2029">2029</option>
                                            <option value="2030">2030</option>
                                        </select>
                                    </div>
                                    @error('year_name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                            </div>

                                <div class="text-xs-right">
                                    <input type="submit" class="btn btn-rounded btn-success" value="Search">
                                </div>
                            </form>

                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->  
                    </div>

                    <!-------- Col2-End-------->




                    <!--------- Col-3 Start---------->
                    <div class="col-md-4">

                    <div class="box">
                        <div class="box-header with-border">
                        <h3 class="box-title">Search By Year</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <form action="{{ route('search-by-year') }}" method="post">
                                @csrf

                                    <div class="form-group">
                                    <h5>Select Year<span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <select name="year" id="year" class="form-control">
                                            <option label="Choose one"></option>
                                            <option value="2021">2021</option>
                                            <option value="2022">2022</option>
                                            <option value="2023">2023</option>
                                            <option value="2024">2024</option>
                                            <option value="2025">2025</option>
                                            <option value="2026">2026</option>
                                            <option value="2027">2027</option>
                                            <option value="2028">2028</option>
                                            <option value="2029">2029</option>
                                            <option value="2030">2030</option>
                                        </select>
                                    </div>
                                    @error('year')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                            </div>

                                <div class="text-xs-right">
                                    <input type="submit" class="btn btn-rounded btn-success" value="Search">
                                </div>
                            </form>

                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->  
                    </div>

                    <!-------- Col3-End-------->


		  </div>
		  <!-- /.row -->
		</section>
		<!-- /.content -->
	  
	  </div>
  <!-- /.content-wrapper -->

@endsection