@extends('frontend.main_master')
@section('content')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

@section('title')
    Checkout Page
@endsection


<div class="breadcrumb">
	<div class="container">
		<div class="breadcrumb-inner">
			<ul class="list-inline list-unstyled">
				<li><a href="home.html">Home</a></li>
				<li class='active'>Checkout</li>
			</ul>
		</div><!-- /.breadcrumb-inner -->
	</div><!-- /.container -->
</div><!-- /.breadcrumb -->

<div class="body-content">
	<div class="container">
		<div class="checkout-box ">
			<div class="row">
				<div class="col-md-8">
					<div class="panel-group checkout-steps" id="accordion">
						<!-- checkout-step-01  -->
<div class="panel panel-default checkout-step-01">

	<div id="collapseOne" class="panel-collapse collapse in">

		<!-- panel-body  -->
	    <div class="panel-body">
			<div class="row">		

				<!-- guest-login -->			
			<div class="col-md-6 col-sm-6 already-registered-login">
					<h4 class="checkout-subtitle"><b>Already registered?</b></h4>

				<form class="register-form" action="{{ route('checkout.store') }}" method="POST">
                    @csrf

						<div class="form-group">
                            <label class="info-title" for="shipping_name">Shipping Name <span>*</span></label>
                            <input type="text" class="form-control unicase-form-control text-input" name="shipping_name" 
                            id="shipping_name" placeholder="Full Name" value="{{ Auth::user()->name }}"  required="">
                        </div>

                        <div class="form-group">
                            <label class="info-title" for="shipping_email">Shipping Email <span>*</span></label>
                            <input type="email" class="form-control unicase-form-control text-input" name="shipping_email" 
                            id="shipping_email" placeholder="Enter Email" value="{{ Auth::user()->email }}"  required="">
                        </div>

                        <div class="form-group">
                            <label class="info-title" for="shipping_phone">Shipping Phone <span>*</span></label>
                            <input type="number" class="form-control unicase-form-control text-input" name="shipping_phone" 
                            id="shipping_phone" placeholder="Enter Phone Number" value="{{ Auth::user()->phone }}" required="">
                        </div>

                        <div class="form-group">
                            <label class="info-title" for="post_code">Post Code <span>*</span></label>
                            <input type="text" class="form-control unicase-form-control text-input" name="post_code" 
                            id="post_code" placeholder="Post Code"  required="">
                        </div>

				</div>	
				<!-- guest-login -->


				<!-- already-registered-login -->
				<div class="col-md-6 col-sm-6 already-registered-login">
					
                    <div class="form-group">
                        <h5>Division Select <span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <select name="division_id" class="form-control">
                                        <option value="" selected="" disabled="">Select Division</option>

                                        @foreach ($divisions as $row)
                                            <option value="{{ $row->id }}">{{ $row->division_name }}</option>
                                        @endforeach
                                        
                                    </select>
                                </div>
                                @error('division_id')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                    </div>


                    <div class="form-group">
                        <h5>District Select <span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <select name="district_id" class="form-control">
                                        <option value="" selected="" disabled="">Select District</option>
                                        

                                    </select>
                                </div>
                                @error('district_id')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                    </div>


                <div class="form-group">
                    <h5>State Select <span class="text-danger">*</span></h5>
                            <div class="controls">
                                <select name="state_id" class="form-control">
                                    <option value="" selected="" disabled="">Select State</option>
                                    
                                </select>
                            </div>
                            @error('state_id')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                </div>


                    <div class="form-group">
                            <h5>Address Details <span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <textarea name="notes" id="notes" class="form-control"  cols="30" rows="5" required="">
                                    </textarea>
                                </div>
                            @error('notes')
                                        <span class="text-danger">{{ $message }}</span>
                                @enderror
                    </div>

				</div>	
				<!-- already-registered-login -->		

			</div>			
		</div>
		<!-- panel-body  -->

	</div><!-- row -->
</div>
<!-- End checkout-step-01  -->


					</div><!-- /.checkout-steps -->
				</div>
				<div class="col-md-4">
					<!-- checkout-progress-sidebar -->
<div class="checkout-progress-sidebar ">
	<div class="panel-group">
		<div class="panel panel-default">
			<div class="panel-heading">
		    	<h4 class="unicase-checkout-title">Your Checkout Progress</h4>
		    </div>
		    <div class="">
				<ul class="nav nav-checkout-progress list-unstyled">

                    @foreach ($carts as $item)
                        
                    <div class="row">
                        <div class="col-md-5">
                            <li>
                                <img src="{{ asset($item->options->image) }}" alt="" style="height:60px;width:70px;">
                            </li>
                        </div>

                        <div class="col-md-7">
                            <li> <strong>Qty : </strong>
                                <span class="badge badge-pill badge-info-light" style="background-color:#4585f5;color:#fff">
                                    ({{ $cartQty }})</span>
                            </li>
                            <br>
                            <li> <strong>Color : </strong>
                                <span class="badge badge-pill badge-info-light" style="background-color:#4585f5;color:#fff">
                                    {{ $item->options->color }}</span>
                            </li>
                            <br>
                            <li> <strong>Size : </strong>
                                <span class="badge badge-pill badge-info-light" style="background-color:#4585f5;color:#fff">
                                    {{ $item->options->size }}</span>
                            </li>
                        </div>
                    </div>

                    <hr>

                        @if (Session::has('coupon'))
                        
                        <strong>Subtotal : </strong> <i class="fa fa-inr"></i> {{$cartTotal}}
                        <hr>
                        <strong>Coupon Name : </strong> {{ session()->get('coupon')['coupon_name'] }}
                        <span class="badge badge-pill" style="background-color:red;color:#fff">
                            ({{ session()->get('coupon')['coupon_discount'] }}%)</span>
                        <hr>
                        <strong>Coupon Discount : </strong><i class="fa fa-minus-circle text-danger"></i> <i class="fa fa-inr"></i> 
                        {{ session()->get('coupon')['discount_amount'] }}
                        <hr>
                        <strong>Grand Total : </strong><i class="fa fa-inr"></i> 
                        <span class="badge badge-pill" style="background-color:rgb(23, 248, 90);color:#fff;">
                            {{ session()->get('coupon')['total_amount'] }}
                        </span>
                        <hr>
                    @else
                        
                        <strong> SubTotal : </strong><i class="fa fa-inr"></i> {{ $cartTotal }}
                        <hr>
                        <strong>Grand Total : </strong><i class="fa fa-inr"></i> 
                        <span class="badge badge-pill" style="background-color:rgb(23, 248, 90);color:#fff;">
                            {{ $cartTotal }}</span>
                        <hr>
                    @endif
                    </li>


                    @endforeach
                    
				</ul>		
			</div>
		</div>
	</div>
</div> 
<!-- checkout-progress-sidebar -->
            </div>


            <div class="col-md-4">
					<!-- Payment Method -->
<div class="checkout-progress-sidebar ">
	<div class="panel-group">
		<div class="panel panel-default">
			<div class="panel-heading">
		    	<h4 class="unicase-checkout-title">Select Payment Method</h4>
		    </div>

		    <div class="row">
                
                <div class="col-md-4">
                    <label for="">Stripe</label>
                    <input type="radio" name="payment_method" value="Stripe">
                    <img src="{{ asset('frontend/assets/images/payments/4.png') }}" alt="">
                </div>
                
                <div class="col-md-4">
                    <label for="">Card</label>
                    <input type="radio" name="payment_method" value="Card">
                    <img src="{{ asset('frontend/assets/images/payments/1.png') }}" alt="">
                </div>

                <div class="col-md-4">
                    <label for="">Cash</label>
                    <input type="radio" name="payment_method" value="Cash">
                    <img src="{{ asset('frontend/assets/images/payments/6.png') }}" alt="">
                </div>

			</div><!---End Row--->

            <hr>
            <button type="submit" class="btn-upper btn btn-warning checkout-page-button">Payment Step</button>
				
		</div>
	</div>
</div> 
<!-- Paymeny Method End  -->
            </div>

	</form>
			</div><!-- /.row -->
		</div><!-- /.checkout-box -->
		<!-- ============================================== BRANDS CAROUSEL ============================================== -->

        @include('frontend.body.brands')

<!-- ============================================== BRANDS CAROUSEL : END ============================================== -->	</div><!-- /.container -->
</div><!-- /.body-content -->



 <script type="text/javascript">

    $(document).ready(function() {
    
        $('select[name="division_id"]').on('change', function(){
            var division_id = $(this).val();
            if(division_id) {
                $.ajax({
                    url: "{{  url('/checkout/district/ajax') }}/"+division_id,
                    type:"GET",
                    dataType:"json",
                    success:function(data) {
                        // $('select[name="state_id"]').empty();
                        // var d =$('select[name="district_id"]').empty();
                            $.each(data, function(key, value){
                                $('select[name="district_id"]').append('<option value="'+ value.id +'">' + value.district_name + '</option>');
                            });
                    },
                });
            } else {
                alert('danger');
            }
        });



        $('select[name="district_id"]').on('change', function(){
            var district_id = $(this).val();
            if(district_id) {
                $.ajax({
                    url: "{{  url('/checkout/state/ajax') }}/"+district_id,
                    type:"GET",
                    dataType:"json",
                    success:function(data) {
                        var d =$('select[name="state_id"]').empty();
                            $.each(data, function(key, value){
                                $('select[name="state_id"]').append('<option value="'+ value.id +'">' + value.state_name + '</option>');
                            });
                    },
                });
            } else {
                alert('danger');
            }
        });


    });

</script>



@endsection