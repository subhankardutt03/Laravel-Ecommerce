@extends('frontend.main_master')
@section('content')

    <div class="body-content">
        <div class="container">
            <div class="row">

                <!-------------User Sidebar----------->

                @include('frontend.common.user_sidebar')

                <!------------ User Sidebar End--------->

                <div class="col-md-2">

                </div>

                <div class="col-md-6">

                    <div class="card">
                        <h3 class="text-center"><span class="text-danger">Hi..</span>
                        <strong>{{ $user->name }}</strong> Change your Password</h3>
                            <br>
                        <div class="card-body">
                            <form action="{{ route('update.password') }}" method="POST" novalidate>
					        @csrf
                                <div class="form-group">
                                        <h5>Current Password<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="password" name="old_password" class="form-control" required data-validation-required-message="This field is required"
                                            id="current_password"> 
                                        </div>
							    </div>

                                    <div class="form-group">
                                        <h5>New Password<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="password" name="password" class="form-control" required data-validation-required-message="This field is required"
                                            id="password"> 
                                        </div>
							        </div>

                                    <div class="form-group">
                                        <h5>Confirm Password<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="password" name="password_confirmation" class="form-control" required data-validation-required-message="This field is required"
                                            id="password_confirmation"> 
                                        </div>
							        </div>

                                    <br>
                                    <div class="text-xs-right">
							            <input type="submit" class="btn btn-rounded btn-info" value="Change Password">
						            </div>
                            	</form>
                        </div>
                    </div>
                    <br><br>
                </div>
            </div>
        </div>
    </div>


@endsection
