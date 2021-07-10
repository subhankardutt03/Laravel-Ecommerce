<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Barryvdh\DomPDF\Facade as PDF;
use Carbon\Carbon;

class AllUserController extends Controller
{
    public function MyOrders()
    {
        $orders = Order::where('user_id', Auth::id())->orderBy('id', 'DESC')->get();
        return view('frontend.user.order.order_view', compact('orders'));
    }

    public function ReturnOrderList()
    {
        $orders = Order::where('user_id', Auth::id())->where('return_reason', '!=', NULL)
        ->orderBy('id', 'DESC')->get();
        return view('frontend.user.order.return_order_view', compact('orders'));
    }

    public function CancelOrderList()
    {
        $orders = Order::where('user_id', Auth::id())->where('status','Cancel')
        ->orderBy('id', 'DESC')->get();
        return view('frontend.user.order.cancel_order_view', compact('orders'));
    }


    public function OrderDetails($order_id)
    {
        $order = Order::with('division', 'district', 'state', 'user')->where('id', $order_id)->where('user_id', Auth::id())->first();
        $order_item = OrderItem::with('product')->where('order_id', $order_id)->orderBy('id', 'DESC')->get();

        return view('frontend.user.order.order_details', compact('order', 'order_item'));
    }


    // Invoice Download PDF
    public function InvoiceDownload($order_id)
    {

        $order = Order::with('division', 'district', 'state', 'user')->where('id', $order_id)
            ->where('user_id', Auth::id())->first();
        $order_item = OrderItem::with('product')->where('order_id', $order_id)
            ->orderBy('id', 'DESC')->get();

        $pdf = PDF::loadView('frontend.user.invoice.invoice_view', compact('order', 'order_item'))
            ->setPaper('a4')->setOptions([
                'tempDir' => public_path(),
                'chroot' => public_path()
            ]);
        return $pdf->download('invoice.pdf');
    }

    public function ReturnOrder(Request $request,$order_id)
    {
        Order::findOrFail($order_id)->update([
            'return_date' => Carbon::now()->format('d F Y'),
            'return_reason' => $request->return_reason,
            'return_order' => 1,
        ]);

        $notification = array(
            'message' => 'Return Request Send successfully',
            'alert-type' => 'success',
        );
        return redirect()->route('user.orders')->with($notification);
    }
}