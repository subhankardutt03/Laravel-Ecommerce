@extends('frontend.main_master')
@section('content')

    <div class="body-content">
        <div class="container">
            <div class="row">

                <!-------------User Sidebar----------->

                @include('frontend.common.user_sidebar')

                <!------------ User Sidebar End--------->


                    <div class="col-md-5">
                        <div class="card" style="margin-top:10px;">
                            <div class="card-header">
                                <h3 style="color:rgb(213, 53, 245);font-weight:bold;">Shipping Details</h3>
                            </div>
                            <br>
                                <div class="card-body" style="background: #E9EBEC;">
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

                    </div> <!-- // end col md -5 -->


                    <div class="col-md-5">
                        <div class="card" style="margin-top:10px;">
                            <div class="card-header">
                                <h4 style="color:rgb(213, 53, 245);font-weight:bold;">Order Details
                                <span class="text-danger"> Invoice : {{ $order->invoice_no }}</span></h4>
                            </div>
                            <br>
                            <div class="card-body" style="background: #E9EBEC;">
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
                                    <span class="badge badge-pill badge-warning" style="background: #418DB9;">{{ $order->status }} </span> </th>
                                </tr>



                            </table>


                            </div> 

                        </div>

                    </div> <!-- // 2ND end col md -5 -->


            </div><!-- End Row -->


            <div class="row"><!--- Start Row-->

                <div class="col-md-12">

                        <div class="table-responsive">
                        <table class="table">
                            <tbody>

                            <tr style="background: #e2e2e2;">
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

                    </div> <!-- / end col md 12 -->

            </div><!--- End Row-->


            <!----------- Order Return Reason -------------->
            @if ($order->status !== 'Delivered')
                
            @else

            @php
                $orders = App\Models\Order::where('id',$order->id)->where('return_reason', '!=',NULL)
                ->first();
            @endphp

                @if ($orders)
                    <h4 class="badge badge-pill" style="background-color:red;font-size:15px;">
                        you have send return request for this order</h4>
                @else
                    <form action="{{ route('return.order',$order->id) }}" method="POST">
                    @csrf
                <div class="form-group">
                <label for="return_reason"> <h3 class="text-danger">Order return Reason :</h3> </label>
<textarea name="return_reason" id="return_reason" class="form-control" cols="25" rows="06">

</textarea>
            </div>

            <button type="submit" class="btn btn-danger">Return Order</button>
                </form>
                @endif
            @endif

            <br><br>

        </div>
    </div>


@endsection
