@extends('admin.admin_master')
@section('admin_content')

        <!-- Content Wrapper. Contains page content -->
        <div class="container-full">

        <!------------- Content Header Start------------->
			<div class="content-header">
			<div class="d-flex align-items-center">
				<div class="mr-auto">
					<h2 style="font-weight:bold;">Pending Order Details</h2>
				</div>
			</div>
		</div>

        <!------------- Content Header End------------->


		<!-- Main content -->
		<section class="content">

		<div class="row">

        <!---------- Col-1 Start ----------->

        <div class="col-md-6 col-12">
            <div class="box box-bordered border-primary">
                    <div class="box-header with-border">
                        <h4 class="box-title text-primary"><strong>Shipping</strong> Details</h4>
                    </div>
                    
                        <table class="table">
                                    <tr>
                                        <th> Shipping Name : </th>
                                        <th> {{ $order->name }} </th>
                                    </tr>

                                    <tr>
                                        <th> Shipping Phone : </th>
                                        <th> {{ $order->phone }} </th>
                                    </tr>

                                    <tr>
                                        <th> Shipping Email : </th>
                                        <th> {{ $order->email }} </th>
                                    </tr>

                                    <tr>
                                        <th> Division : </th>
                                        <th> {{ $order->division->division_name }} </th>
                                    </tr>

                                    <tr>
                                        <th> District : </th>
                                        <th> {{ $order->district->district_name }} </th>
                                    </tr>

                                    <tr>
                                        <th> State : </th>
                                        <th>{{ $order->state->state_name }} </th>
                                    </tr>

                                    <tr>
                                        <th> Post Code : </th>
                                        <th> {{ $order->post_code }} </th>
                                    </tr>

                                    <tr>
                                        <th> Order Date : </th>
                                        <th> {{ $order->order_date }} </th>
                                    </tr>

                                </table>

            </div>
        </div>

        <!----------- Col-1 End ------------->


        <!---------- Col-2 Start ----------->

        <div class="col-md-6 col-12">
            <div class="box box-bordered border-primary">
                    <div class="box-header with-border">
                        <h4 class="box-title text-primary"><strong>Order</strong>Details</h4>
                    </div>

                            <table class="table">
                                <tr>
                                    <th>  Name : </th>
                                    <th> {{ $order->user->name }} </th>
                                </tr>

                                <tr>
                                    <th>  Phone : </th>
                                    <th> {{ $order->user->phone }} </th>
                                </tr>

                                <tr>
                                    <th> Payment Type : </th>
                                    <th> {{ $order->payment_method }} </th>
                                </tr>

                                <tr>
                                    <th> Tranx ID : </th>
                                    <th> {{ $order->transaction_id }} </th>
                                </tr>

                                <tr>
                                    <th> Invoice  : </th>
                                    <th class="text-danger"> {{ $order->invoice_no }} </th>
                                </tr>

                                <tr>
                                    <th> Order Total : </th>
                                    <th>{{ $order->amount }} </th>
                                </tr>

                                <tr>
                                <th> Order : </th>   
                                <th>   
                                    <span class="badge badge-pill badge-warning" style="background: #418DB9;">
                                        {{ $order->status }}</span>
                                    </th>
                                </tr>

                            <tr>
                                <th> </th>   
                                <th>   
                                    @if ($order->status == 'Pending')
                                        <a href="{{ route('pending-confirm',$order->id) }}" class="btn btn-success btn-block btn-rounded" 
                                            id="confirm">Confirm Order</a>

                                    @elseif ($order->status == 'Confirm')
                                            <a href="{{ route('confirm-processing',$order->id) }}" class="btn btn-success btn-block btn-rounded" 
                                            id="processing">Processing Order</a>

                                    @elseif ($order->status == 'Processing')
                                            <a href="{{ route('processing-picked',$order->id) }}" class="btn btn-success btn-block btn-rounded" 
                                            id="picked">Picked Order</a>

                                    @elseif ($order->status == 'Picked')
                                            <a href="{{ route('picked-shipped',$order->id) }}" class="btn btn-success btn-block btn-rounded" 
                                            id="shipped">Shipped Order</a>

                                    @elseif ($order->status == 'Shipped')
                                            <a href="{{ route('shipped-delivered',$order->id) }}" class="btn btn-success btn-block btn-rounded" 
                                            id="delivered">Delivered Order</a>

                                    @elseif ($order->status == 'Delivered')
                                            <a href="{{ route('delivered-cancel',$order->id) }}" class="btn btn-success btn-block btn-rounded" 
                                            id="cancel"> Cancel Order</a>


                                    @endif
                                </th>
                                </tr>

                            </table>
            </div>
        </div>

        <!----------- Col-2 End ------------->


        <!---------- Col-3 Start ----------->

        <div class="col-md-12 col-12">
            <div class="box box-bordered border-primary">

                        <table class="table">
                            <tbody>

                            <tr>
                                <td class="col-md-1" width="15%">
                                <label for=""> Image</label>
                                </td>

                                <td class="col-md-3" width="15%">
                                <label for=""> Product Name </label>
                                </td>

                                <td class="col-md-3" width="10%">
                                <label for=""> Product Code</label>
                                </td>


                                <td class="col-md-2" width="10%">
                                <label for=""> Color </label>
                                </td>

                                <td class="col-md-2" width="10%">
                                <label for=""> Size </label>
                                </td>

                                <td class="col-md-1" width="10%">
                                <label for=""> Quantity </label>
                                </td>

                                <td class="col-md-1" width="50px">
                                <label for=""> Price </label>
                                </td>

                            </tr>


                            @foreach($order_item as $item)
                    <tr>
                                <td class="col-md-1">
                                <label for="">
                                    <img src="{{ asset($item->product->product_thumbnail) }}" height="50px;" width="50px;">
                                </label>
                                </td>

                                <td class="col-md-3">
                                <label for=""> {{ $item->product->product_name_en }}</label>
                                </td>


                                <td class="col-md-3">
                                <label for=""> {{ $item->product->product_code }}</label>
                                </td>

                                <td class="col-md-2">
                                <label for=""> {{ $item->color }}</label>
                                </td>

                                <td class="col-md-2">
                                <label for=""> {{ $item->size }}</label>
                                </td>

                                <td class="col-md-2">
                                <label for=""> {{ $item->qty }}</label>
                                </td>

                        <td class="col-md-2">
                                <label for="">
                                    <i class="fa fa-inr"></i>{{ $item->price }}(<i class="fa fa-inr"></i>{{ $item->price * $item->qty}} )
                                </label>
                                </td>

                            </tr>
                            @endforeach


                            </tbody>

                        </table>


            </div>
        </div>

        <!----------- Col-3 End ------------->


		  </div>
		  <!-- /.row -->
		</section>
		<!-- /.content -->
	  
	  </div>
  <!-- /.content-wrapper -->

@endsection