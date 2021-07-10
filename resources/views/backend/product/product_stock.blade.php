@extends('admin.admin_master')
@section('admin_content')

      <!-- Content Wrapper. Contains page content -->
	  <div class="container-full">
		<!-- Main content -->
		<section class="content">
		  <div class="row">

			<div class="col-12">

			 <div class="box">
				<div class="box-header with-border">
					<h3 class="box-title">Product Stock List
						<span class="badge badge-pill badge-danger"> {{ count($products) }}</span>
					</h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
					  <table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th width="20%">Product Name(Eng)</th>
								<th width="10%">Product Price</th>
								<th width="10%">Discount(%)</th>
                                <th width="10%">Product Quantity</th>
								<th width="15%">Product Thumbnail</th>
								<th width="5%">Status</th>
							</tr>
						</thead>
						<tbody>
                            @foreach ($products as $item)
                                <tr>
								<td>{{ $item->product_name_en }}</td>
								<td>{{ $item->selling_price }}</td>
								<td>
									@if ($item->discount_price == NULL)
										<span class="badge badge-pill badge-danger">No Discount</span>
									@else
										@php
											$result = floor((($item->selling_price - $item->discount_price) / $item->selling_price) * 100);
										@endphp
											<span class="badge badge-pill badge-info">{{ $result}} %</span>
									@endif
									
								</td>
                                <td>{{ $item->product_quantity }} pic</td>
								<td >
                                    <img src="{{ asset($item->product_thumbnail) }}" alt="" style="width:150px;height:70px;border-radius:10px;">
                                </td>
								<td>
									@if ($item->status == 1)
										<span class="badge badge-pill badge-success">Active</span>
									@else
										<span class="badge badge-pill badge-danger">Inactive</span>
									@endif
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


		  </div>
		  <!-- /.row -->
		</section>
		<!-- /.content -->
	  
	  </div>
  <!-- /.content-wrapper -->

@endsection