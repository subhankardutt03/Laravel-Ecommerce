    @extends('frontend.main_master')
    @section('content')

    @section('title')
        order tracking page
    @endsection

    <style type="text/css">

@import url('https://fonts.googleapis.com/css?family=Open+Sans&display=swap');

body {
    background-color: #eeeeee;
    font-family: 'Open Sans', serif
}

.card {
    position: relative;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -ms-flex-direction: column;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 1px solid rgba(0, 0, 0, 0.1);
    border-radius: 0.10rem
}

.card-header:first-child {
    border-radius: calc(0.37rem - 1px) calc(0.37rem - 1px) 0 0
}

.card-header {
    padding: 0.75rem 1.25rem;
    margin-bottom: 0;
    background-color: #fff;
    border-bottom: 1px solid rgba(0, 0, 0, 0.1)
}

.track {
    position: relative;
    background-color: #ddd;
    height: 7px;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    margin-bottom: 60px;
    margin-top: 50px
}

.track .step {
    -webkit-box-flex: 1;
    -ms-flex-positive: 1;
    flex-grow: 1;
    width: 25%;
    margin-top: -18px;
    text-align: center;
    position: relative
}

.track .step.active:before {
    background: #33FF57
}

.track .step::before {
    height: 7px;
    position: absolute;
    content: "";
    width: 100%;
    left: 0;
    top: 18px
}

.track .step.active .icon {
    background: #33FF57;
    color: #fff
}

.track .icon {
    display: inline-block;
    width: 40px;
    height: 40px;
    line-height: 40px;
    position: relative;
    border-radius: 100%;
    background: #ddd
}

.track .step.active .text {
    font-weight: 400;
    color: #000
}

.track .text {
    display: block;
    margin-top: 7px
}

.itemside {
    position: relative;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    width: 100%
}

.itemside .aside {
    position: relative;
    -ms-flex-negative: 0;
    flex-shrink: 0
}

.img-sm {
    width: 80px;
    height: 80px;
    padding: 7px
}

ul.row,
ul.row-sm {
    list-style: none;
    padding: 0
}

.itemside .info {
    padding-left: 15px;
    padding-right: 7px
}

.itemside .title {
    display: block;
    margin-bottom: 5px;
    color: #212529
}

p {
    margin-top: 0;
    margin-bottom: 1rem
}

.btn-warning {
    color: #ffffff;
    background-color: #33FF57;
    border-color: #33FF57;
    border-radius: 1px
}

.btn-warning:hover {
    color: #ffffff;
    background-color: #33FF57;
    border-color: #33FF57;
    border-radius: 1px
}

    </style>

    <div class="container">
    <article class="card">
        <header class="card-header"> My Orders / Tracking   
            <b style="margin-left: 70%">Invoice No : <span class="text-danger">{{ $track->invoice_no }}</span></b></header>
            <br>
        <div class="card-body">
            
            <div class="row" style="margin-left:40px;">

                <div class="col-md-2">
                    <b>Shipping Address</b><br>
                    {{ $track->division->division_name }} - {{ $track->district->district_name }}
                </div>

                <div class="col-md-2">
                    <b>Order Date</b><br>
                    {{ $track->order_date }}
                </div>

                <div class="col-md-2">
                    <b>Shipping By </b><br>
                    {{ $track->name }}
                </div>

                <div class="col-md-2">
                    <b>User Mobile No </b><br>
                    {{ $track->phone }}
                </div>
                
                <div class="col-md-2">
                    <b>Payment Method </b><br>
                    {{ $track->payment_method }}
                </div>

                <div class="col-md-2">
                    <b>Total Amount </b><br>
                    <i class="fa fa-inr"></i> {{ $track->amount }}
                </div>

            </div>
        
            <div class="track">


                @if ($track->status == 'Pending')

                    <!------------------active status------------------>
                    <div class="step active"> <span class="icon"> <i class="fa fa-check"></i> </span>
                    <span class="text">Order Pending</span>
                </div>

                <!-----------------------Inactive status----------------->
                <div class="step"> <span class="icon"> <i class="fa fa-check"></i>
                    </span> <span class="text">Order Confirmed</span>
                </div>
                <div class="step"> <span class="icon"> <i class="fa fa-check"></i> </span> 
                    <span class="text">Order Processing </span>
                </div>
                <div class="step"> <span class="icon"> <i class="fa fa-check"></i> </span>
                    <span class="text">Order Picked</span>
                </div>
                <div class="step"> <span class="icon"> <i class="fa fa-check"></i> </span>
                    <span class="text">Order Shipped</span>
                </div>
                <div class="step"> <span class="icon"> <i class="fa fa-check"></i> </span>
                    <span class="text">Order Delivered</span>
                </div>

                @elseif($track->status == 'Confirm')

                <!-----------------active status---------------->
                <div class="step active"> <span class="icon"> <i class="fa fa-check"></i> </span>
                    <span class="text">Order Pending</span>
                </div>
                <div class="step active"> <span class="icon"> <i class="fa fa-check"></i>
                    </span> <span class="text">Order Confirmed</span>
                </div>

                <!---------------------Inactive status ----------------->
                <div class="step"> <span class="icon"> <i class="fa fa-check"></i> </span> 
                    <span class="text">Order Processing </span>
                </div>
                <div class="step"> <span class="icon"> <i class="fa fa-check"></i> </span>
                    <span class="text">Order Picked</span>
                </div>
                <div class="step"> <span class="icon"> <i class="fa fa-check"></i> </span>
                    <span class="text">Order Shipped</span>
                </div>
                <div class="step"> <span class="icon"> <i class="fa fa-check"></i> </span>
                    <span class="text">Order Delivered</span>
                </div>

                @elseif($track->status == 'Processing')

                <!------------------active status------------------>
                <div class="step active"> <span class="icon"> <i class="fa fa-check"></i> </span>
                    <span class="text">Order Pending</span>
                </div>
                <div class="step active"> <span class="icon"> <i class="fa fa-check"></i>
                    </span> <span class="text">Order Confirmed</span>
                </div>
                <div class="step active"> <span class="icon"> <i class="fa fa-check"></i> </span> 
                    <span class="text">Order Processing </span>
                </div>

                <!-----------------------Inactive status----------------->
                <div class="step"> <span class="icon"> <i class="fa fa-check"></i> </span>
                    <span class="text">Order Picked</span>
                </div>
                <div class="step"> <span class="icon"> <i class="fa fa-check"></i> </span>
                    <span class="text">Order Shipped</span>
                </div>
                <div class="step"> <span class="icon"> <i class="fa fa-check"></i> </span>
                    <span class="text">Order Delivered</span>
                </div>

                @elseif($track->status == 'Picked')

                <!------------------active status------------------>
                <div class="step active"> <span class="icon"> <i class="fa fa-check"></i> </span>
                    <span class="text">Order Pending</span>
                </div>
                <div class="step active"> <span class="icon"> <i class="fa fa-check"></i>
                    </span> <span class="text">Order Confirmed</span>
                </div>
                <div class="step active"> <span class="icon"> <i class="fa fa-check"></i> </span> 
                    <span class="text">Order Processing </span>
                </div>
                <div class="step active"> <span class="icon"> <i class="fa fa-check"></i> </span>
                    <span class="text">Order Picked</span>
                </div>

                <!-----------------------Inactive status----------------->
                <div class="step"> <span class="icon"> <i class="fa fa-check"></i> </span>
                    <span class="text">Order Shipped</span>
                </div>
                <div class="step"> <span class="icon"> <i class="fa fa-check"></i> </span>
                    <span class="text">Order Delivered</span>
                </div>

                @elseif($track->status == 'Shipped')

                <!------------------active status------------------>
                <div class="step active"> <span class="icon"> <i class="fa fa-check"></i> </span>
                    <span class="text">Order Pending</span>
                </div>
                <div class="step active"> <span class="icon"> <i class="fa fa-check"></i>
                    </span> <span class="text">Order Confirmed</span>
                </div>
                <div class="step active"> <span class="icon"> <i class="fa fa-check"></i> </span> 
                    <span class="text">Order Processing </span>
                </div>
                <div class="step active"> <span class="icon"> <i class="fa fa-check"></i> </span>
                    <span class="text">Order Picked</span>
                </div>
                <div class="step active"> <span class="icon"> <i class="fa fa-check"></i> </span>
                    <span class="text">Order Shipped</span>
                </div>

                <!-----------------------Inactive status----------------->
                <div class="step"> <span class="icon"> <i class="fa fa-check"></i> </span>
                    <span class="text">Order Delivered</span>
                </div>


                @elseif($track->status == 'Delivered')

                <!------------------active status------------------>
                <div class="step active"> <span class="icon"> <i class="fa fa-check"></i> </span>
                    <span class="text">Order Pending</span>
                </div>
                <div class="step active"> <span class="icon"> <i class="fa fa-check"></i>
                    </span> <span class="text">Order Confirmed</span>
                </div>
                <div class="step active"> <span class="icon"> <i class="fa fa-check"></i> </span> 
                    <span class="text">Order Processing </span>
                </div>
                <div class="step active"> <span class="icon"> <i class="fa fa-check"></i> </span>
                    <span class="text">Order Picked</span>
                </div>
                <div class="step active"> <span class="icon"> <i class="fa fa-check"></i> </span>
                    <span class="text">Order Shipped</span>
                </div>
                <div class="step active"> <span class="icon"> <i class="fa fa-check"></i> </span>
                    <span class="text">Order Delivered</span>
                </div>

                @endif



            </div> <!--- End Track ---->
            <hr>
            <br><br><br>
        </div>
    </article>
</div>

    @endsection