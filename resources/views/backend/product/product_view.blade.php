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
					<h3 class="box-title">Total Products
						<span class="badge badge-pill badge-danger"> {{ count($product) }}</span>
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
								<th width="30%">Action</th>
							</tr>
						</thead>
						<tbody>
                            @foreach ($product as $item)
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
								<td>
                                    <a href="{{ route('edit.product',$item->id) }}" class="btn btn-md btn-rounded btn-info" title="Edit Data">
                                    <i class="fa fa-pencil"></i></a>
                                    <a href="{{ route('delete.product',$item->id) }}" class="btn btn-md btn-rounded btn-danger ml-2" id="delete" title="Delete Data">
                                    <i class="fa fa-trash"></i></a>
									<a href="{{ route('view.productRecords',$item->id) }}" class="btn btn-md btn-rounded btn-primary ml-2" title="View All Products">
                                    <i class="fa fa-eye"></i></a>
									@if ($item->status == 1)
									<a href="{{ route('product.inactive',$item->id) }}" class="btn btn-md btn-rounded btn-danger ml-2" title="To Inactive">
                                    <i class="fa fa-arrow-down"></i></a>
									@else
									<a href="{{ route('product.active',$item->id) }}" class="btn btn-md btn-rounded btn-success ml-2" title="To Active">
                                    <i class="fa fa-arrow-up"></i></a>
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