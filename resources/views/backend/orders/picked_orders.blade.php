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
				  <h3 class="box-title">Picked Orders List</h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
					  <table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th width="15%">Order Date</th>
                                <th width="15%">Invoice No</th>
                                <th width="10%">Amount (<i class="fa fa-inr"></i>)</th>
								<th width="15%">Payment Method</th>
								<th width="10%">Status</th>
                                <th width="20%">Action</th>
							</tr>
						</thead>
						<tbody>
                            @foreach ($orders as $order)
                                <tr>
								<td>{{ $order->order_date }}</td>
								<td>{{ $order->invoice_no }}</td>
								<td>{{ $order->amount }}</td>
								<td>{{ $order->payment_method }}</td>
                                <td>
                                    <span class="badge badge-pill" style="background-color:#3f42de;color:whitesmoke;">
                                        {{ $order->status }}</span>
                                </td>
								<td>
                                    <a href="{{ route('pendingOrder.details',$order->id) }}" class="btn btn-md btn-rounded btn-info" title="Edit Data">
                                    <i class="fa fa-eye"></i></a>
                                    <a href="" class="btn btn-md btn-rounded btn-danger ml-2" id="delete" title="Delete Data">
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


		  </div>
		  <!-- /.row -->
		</section>
		<!-- /.content -->
	  
	  </div>
  <!-- /.content-wrapper -->

@endsection