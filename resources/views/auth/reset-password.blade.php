{{-- <x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('password.update') }}">
            @csrf

            <input type="hidden" name="token" value="{{ $request->route('token') }}">

            <div class="block">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email', $request->email)" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-jet-button>
                    {{ __('Reset Password') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout> --}}

@extends('frontend.main_master')
@section('content')

    <div class="breadcrumb">
	<div class="container">
		<div class="breadcrumb-inner">
			<ul class="list-inline list-unstyled">
				<li><a href="home.html">Home</a></li>
				<li class='active'>Reset Password</li>
			</ul>
		</div><!-- /.breadcrumb-inner -->
	</div><!-- /.container -->
</div><!-- /.breadcrumb -->

<div class="body-content">
	<div class="container">
		<div class="sign-in-page">
			<div class="row">
				<!-- Sign-in -->			
<div class="col-md-6 col-sm-6 sign-in">
	<h4 class="">Reset Password</h4>
	<p class="" style="color:rgb(238, 75, 75)">Reset your password </p>


	 <form method="POST" action="{{ route('password.update') }}">
            @csrf
        
            <input type="hidden" name="token" value="{{ $request->route('token') }}">
		<div class="form-group">
		    <label class="info-title" for="email">Email Address <span>*</span></label>
		    <input type="email" class="form-control unicase-form-control text-input" id="email" name="email" >
		</div>

        <div class="form-group">
		    <label class="info-title" for="password">Password <span>*</span></label>
		    <input type="password" class="form-control unicase-form-control text-input" id="password" name="password" >
		</div>

        <div class="form-group">
		    <label class="info-title" for="password_confirmation">Confirm Password <span>*</span></label>
		    <input type="password" class="form-control unicase-form-control text-input" id="password_confirmation" name="password_confirmation" >
		</div>

	  	<button type="submit" class="btn-upper btn btn-primary checkout-page-button"> Reset Password </button>
	</form>		
    
    
</div>
<!-- Sign-in -->
</div><!-- /.row -->
		</div><!-- /.sigin-in-->
		<!-- ============================================== BRANDS CAROUSEL ============================================== -->

        @include('frontend.body.brands')
<!-- ============================================== BRANDS CAROUSEL : END ============================================== -->	</div><!-- /.container -->
</div><!-- /.body-content -->

@endsection


