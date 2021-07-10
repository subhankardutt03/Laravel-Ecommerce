<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderTrackingController extends Controller
{
    public function OrderTracking(Request $request)
    {
        $invoice = $request->code;
        $track = Order::where('invoice_no',$invoice)->first();
        
        if($track){

            return view('frontend.tracking.track_order',compact('track'));

        }else{
            $notification = array(
            'message' => 'Invoice Code is Invalid',
            'alert-type' => 'error',
        );
        return redirect()->back()->with($notification);
        }
    }
}