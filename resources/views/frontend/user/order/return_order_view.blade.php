@extends('frontend.main_master')
@section('content')

    <div class="body-content">
        <div class="container">
            <div class="row">

                <!-------------User Sidebar----------->

                @include('frontend.common.user_sidebar')

                <!------------ User Sidebar End--------->


                <div class="col-md-1"></div>

                <div class="col-md-9">

                    <div class="table-responsive" style="margin-top:20px">
                        <table class="ui inverted table">
                                <thead>
                                    <tr>
                                    <th>Date</th>
                                    <th>Total</th>
                                    <th>Payment</th>
                                    <th>Invoice</th>
                                    <th>Order Number</th>
                                    <th>Return Status</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($orders as $order)
                                        
                                    <tr>
                                        <td>{{ $order->order_date }}</td>
                                        <td>{{ $order->amount }}</td>
                                        <td>{{ $order->payment_method }}</td>
                                        <td>{{ $order->invoice_no }}</td>
                                        <td>{{ $order->order_number }}</td>
                                        <td>

                                            @if ($order->return_order == 0)
                                                <h3 class="text-danger"><span>No Return Request</span></h3>

                                            @elseif($order->return_order == 1)
                                            <span class="badge badge-pill" style="background-color:#800080">Pending</span>
                                            <span class="badge badge-pill" style="background-color:red;color:whitesmoke">
                                                Return Requested</span>

                                            @elseif($order->return_order == 2)
                                            <span class="badge badge-pill" style="background-color:#008000">Success</span>
                                            @endif

                                            
                                            
                                        </td>
                        
                                    </tr>

                                    @endforeach

                                </tbody>

                        </table>
                    </div>
                    
                </div>

            </div>
        </div>
    </div>


@endsection
