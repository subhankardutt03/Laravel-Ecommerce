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
                                            <span class="badge badge-pill" style="background-color:red;color:whitesmoke">
                                                {{ $order->status }}</span>
                                        </td>
                                        <td>
                                            <a href="{{ route('order.details',$order->id) }}" class="btn btn-primary btn-sm">
                                                <i class="fa fa-eye"></i> View</a>
                                            <a target="_blank" href="{{ route('invoice.download',$order->id) }}" class="btn btn-warning btn-sm">
                                                <i class="fa fa-download"></i> Invoice</a>
                                        </td> 
                        
                                    </tr>

                                    @empty
                                    <h2 class="text-danger">Order Not Found</h2>

                                    @endforelse

                                </tbody>

                        </table>
                    </div>
                    
                </div>

            </div>
        </div>
    </div>


@endsection
