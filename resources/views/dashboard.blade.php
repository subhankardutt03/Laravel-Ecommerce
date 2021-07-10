{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
           Hi..{{ Auth::user()->name }}
        </h2>
    </x-slot>

    <div class="py-12">
        This is just home page 
    </div>
</x-app-layout> --}}

@extends('frontend.main_master')
@section('content')


<style>
    .video-main {
        margin-top:30px;
}

.video-sub {
	position: relative;
}

video {
	width: 100%;
	height: 100%;
    border-radius:50% 10% 50% 10%;
}

.video-overlay {
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	background-color: rgb(134, 122, 211);
	z-index: 1;
	opacity: 0.3;
    border-radius:35% 10% 10% 10%;

}
</style>

@php
        use Illuminate\Support\Facades\Auth;

        $user = DB::table('users')->find(Auth::user()->id);
    @endphp 

    <div class="body-content">
        <div class="container">
            <div class="row">

                <!-------------User Sidebar----------->

                @include('frontend.common.user_sidebar')

                <!------------ User Sidebar End--------->

                <div class="col-md-2">

                </div>

                <div class="col-md-6">

                    <div class="card" style="margin-top: 20px;">
                        <h2 class="text-center"><span class="text-danger">Hi..</span>
                        <strong>{{ Auth::user()->name }}</strong> Welcome to Online Shopping</h2>
                    </div>

                <!-----------------video content-------------->

    <div class="container-fluid video-main">
        <div class="video-sub">
            <video playsinline autoplay muted loop>
                <source src="video/banner-video3.mp4" type="">
            </video>

            <div class="video-overlay"></div>
        </div>

    </div>

                    <!-----------------End video content-------------->
                    <div>

                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
