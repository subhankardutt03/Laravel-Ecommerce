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

                    <div class="table-responsive" style="margin-top:30px;">
                        <table class="ui inverted table">
                                <thead>
                                    <tr>
                                    <th>Date</th>
                                    <th>Total</th>
                                    <th>Payment</th>
                                    <th>Invoice</th>
                                    <th>Order</th>
                                    <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @forelse ($orders as $order)
                                        
                                    <tr>
                                        <td>{{ $order->order_date }}</td>
                                        <td>{{ $order->amount }}</td>
                                        <td>{{ $order->payment_method }}</td>
                                        <td>{{ $order->invoice_no }}</td>
                                        <td>
                                            @if ($order->status == "Pending")
                                                <span class="badge badge-pill" style="background-color:#800080">
                                                    {{ $order->status }}
                                                </span>
                                            @elseif($order->status == "Confirm")
                                                <span class="badge badge-pill" style="background-color:#0000FF">
                                                    {{ $order->status }}
                                                </span>
                                            @elseif($order->status == "Processing")
                                                <span class="badge badge-pill" style="background-color:#FFA500">
                                                    {{ $order->status }}
                                                </span>
                                            @elseif($order->status == "Picked")
                                                <span class="badge badge-pill" style="background-color:#808000">
                                                    {{ $order->status }}
                                                </span>
                                            @elseif($order->status == "Shipped")
                                                <span class="badge badge-pill" style="background-color:#2B3856">
                                                    {{ $order->status }}
                                                </span>
                                            @elseif($order->status == "Delivered")
                                                <span class="badge badge-pill" style="background-color:#008000">
                                                    {{ $order->status }}
                                                </span>
                                                <br>
                                                @if ($order->return_order == 1)
                                                    <span class="badge badge-pill" style="background-color:red;color:whitesmoke">
                                                Return Requested</span>
                                                @endif

                                            @else
                                                <span class="badge badge-pill" style="background-color:#FF0000">
                                                    {{ $order->status }}
                                                </span>
                                            @endif
                                            
                                        </td>
                                        <td>
                                            <a href="{{ route('order.details',$order->id) }}" class="btn btn-primary btn-sm">
                                                <i class="fa fa-eye"></i> View</a>
                                            <a target="_blank" href="{{ route('invoice.download',$order->id) }}" class="btn btn-warning btn-sm">
                                                <i class="fa fa-download"></i> Invoice</a>
                                        </td> 
                        
                                    </tr>

                                    @empty
                                    <h1 class="text-danger"><span> No Order Found </span></h1>

                                    @endforelse

                                </tbody>

                        </table>
                    </div>
                    
                </div>

            </div>
        </div>
    </div>


@endsection
