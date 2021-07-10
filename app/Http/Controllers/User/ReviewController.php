<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Review;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{
    public function AddReview(Request $request)
    {
        $product= $request->product_id;

        $request->validate([
            'summery' => 'required',
            'comment' => 'required',
        ]);

        Review::insert([
            'product_id' => $product,
            'user_id' => Auth::id(),
            'comment' => $request->comment,
            'summery' => $request->summery,
            'rating' => $request->rating,
            'created_at' => Carbon::now(),

        ]);

        $notification = array(
            'message' => 'Review will approved by Admin',
            'alert-type' => 'success',
        );
        return redirect()->back()->with($notification);
    }

    public function PendingReview()
    {
        $reviews = Review::where('status',0)->orderBy('id','DESC')->get();
        return view('backend.review.pending_review',compact('reviews'));
    }

    public function ApproveReview($review_id)
    {
        Review::where('id',$review_id)->update([
            'status' => 1,
        ]);

        $notification = array(
            'message' => 'Review Approved Successfully',
            'alert-type' => 'success',
        );
        return redirect()->back()->with($notification);
    }


    public function AllPublishedReview()
    {
        $reviews = Review::where('status',1)->orderBy('id','DESC')->get();
        return view('backend.review.published_review',compact('reviews'));
    }

    public function DeleteReview($review_id)
    {
        Review::findOrFail($review_id)->delete();

        $notification = array(
            'message' => 'Review Deleted Successfully',
            'alert-type' => 'info',
        );
        return redirect()->back()->with($notification);
    }
}