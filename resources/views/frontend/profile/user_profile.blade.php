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
                        <strong>{{ $user->name }}</strong> Update your Profile</h3>

                        <div class="card-body">
                            <form action="{{ route('userProfile.update') }}" method="POST" enctype="multipart/form-data" novalidate>
					        @csrf
                                <div class="form-group">
                                        <h5>Name<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" name="name" class="form-control" required data-validation-required-message="This field is required"
                                            value="{{ $user->name }}"> 
                                        </div>
							    </div>

                                    <div class="form-group">
                                        <h5>Email<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="email" name="email" class="form-control" required data-validation-required-message="This field is required"
                                            value="{{ $user->email }}"> 
                                        </div>
							        </div>

                                    <div class="form-group">
                                        <h5>Phone Number<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" name="phone" class="form-control" required data-validation-required-message="This field is required"
                                            value="{{ $user->phone }}"> 
                                        </div>
							        </div>

                                    <div class="form-group">
								        <h5>Profile Photo <span class="text-danger">*</span></h5>
								        <div class="controls">
									    <input type="file" name="profile_photo_path" id="image" class="form-control" required>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="text-xs-right">
							            <button type="submit" class="btn btn-rounded btn-info">Update</button>
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
