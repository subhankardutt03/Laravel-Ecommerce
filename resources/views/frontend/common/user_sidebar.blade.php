
@php
//   use Illuminate\Support\Facades\Auth;
    $id = Auth::user()->id;
    $user = App\Models\User::find($id);
@endphp


<div class="col-md-2 mt-3 mb-3 card-img-top" style="border-radius:50%;">
                    <img src="{{ (!empty($user->profile_photo_path)) ? 
                    url('upload/user_images/'.$user->profile_photo_path) : url('upload/no_image.jpg') }}" 
                    height="100%" width="100%" alt="" style="border-radius:50%;">
                    <br><br>

                    <ul class="list-group list-group-flush">
                        <a href="{{ route('dashboard') }}" class="btn btn-primary btn-sm btn-block">Home</a>
                        <a href="{{ route('user.profile') }}" class="btn btn-primary btn-sm btn-block">Profile Update</a>
                        <a href="{{ route('user.changePassword') }}" class="btn btn-primary btn-sm btn-block">Change Password</a>
                        <a href="{{ route('user.orders') }}" class="btn btn-primary btn-sm btn-block">My Orders</a>
                        <a href="{{ route('return.orders') }}" class="btn btn-primary btn-sm btn-block">Return Orders</a>
                        <a href="{{ route('cancel.orders') }}" class="btn btn-primary btn-sm btn-block">Cancel Orders</a>
                        <a href="{{ route('user.logout') }}" class="btn btn-danger btn-sm btn-block">Logout</a>

                    </ul>
    </div>