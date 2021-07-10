<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function PendingOrders()
    {
        $orders = Order::where('status', 'Pending')->orderBy('id', 'DESC')->get();
        return view('backend.orders.pending_orders', compact('orders'));
    }

    public function PendingOrderDetails($order_id)
    {
        $order = Order::with('division', 'district', 'state', 'user')->where('id', $order_id)->first();
        $order_item = OrderItem::with('product')->where('order_id', $order_id)->orderBy('id', 'DESC')->get();

        return view('backend.orders.pendingOrder_details', compact('order', 'order_item'));
    }


    public function ConfirmedOrders()
    {
        $orders = Order::where('status', 'Confirm')->orderBy('id', 'DESC')->get();
        return view('backend.orders.confirmed_orders', compact('orders'));
    }

    public function ProcessingOrders()
    {
        $orders = Order::where('status', 'Processing')->orderBy('id', 'DESC')->get();
        return view('backend.orders.processing_orders', compact('orders'));
    }

    public function PickedOrders()
    {
        $orders = Order::where('status', 'Picked')->orderBy('id', 'DESC')->get();
        return view('backend.orders.picked_orders', compact('orders'));
    }


    public function ShippedOrders()
    {
        $orders = Order::where('status', 'Shipped')->orderBy('id', 'DESC')->get();
        return view('backend.orders.shipped_orders', compact('orders'));
    }


    public function DeliveredOrders()
    {
        $orders = Order::where('status', 'Delivered')->orderBy('id', 'DESC')->get();
        return view('backend.orders.delivered_orders', compact('orders'));
    }


    public function CancelOrders()
    {
        $orders = Order::where('status', 'Cancel')->orderBy('id', 'DESC')->get();
        return view('backend.orders.cancel_orders', compact('orders'));
    }

    public function PendingToConfirm($order_id)
    {
        Order::findOrFail($order_id)->update([
            'status' => 'Confirm'
        ]);

    $notification = array(
            'message' => 'Order Confirmed successfully',
            'alert-type' => 'success',
        );
        return redirect()->route('pending.orders')->with($notification);
    }


    public function ConfirmToProcessing($order_id)
    {
        Order::findOrFail($order_id)->update([
            'status' => 'Processing'
        ]);

    $notification = array(
            'message' => 'Order Processing successfully',
            'alert-type' => 'success',
        );
        return redirect()->route('confirmed.orders')->with($notification);
    }


    public function ProcessingToPicked($order_id)
    {
        Order::findOrFail($order_id)->update([
            'status' => 'Picked'
        ]);

    $notification = array(
            'message' => 'Order Picked successfully',
            'alert-type' => 'success',
        );
        return redirect()->route('processing.orders')->with($notification);
    }


    public function PickedToShipped($order_id)
    {
        Order::findOrFail($order_id)->update([
            'status' => 'Shipped'
        ]);

    $notification = array(
            'message' => 'Order Shipped successfully',
            'alert-type' => 'success',
        );
        return redirect()->route('picked.orders')->with($notification);
    }


    public function ShippedToDelivered($order_id)
    {

        $product = OrderItem::where('order_id',$order_id)->get();
        foreach($product as $item){
            Product::where('id',$item->product_id)->update([
                'product_quantity' => DB::raw('product_quantity-'.$item->qty),
            ]);
        }

        Order::findOrFail($order_id)->update([
            'status' => 'Delivered'
        ]);

    $notification = array(
            'message' => 'Order Delivered successfully',
            'alert-type' => 'success',
        );
        return redirect()->route('shipped.orders')->with($notification);
    }


    public function DeliveredToCancel($order_id)
    {
        Order::findOrFail($order_id)->update([
            'status' => 'Cancel'
        ]);

    $notification = array(
            'message' => 'Order Canceled successfully',
            'alert-type' => 'success',
        );
        return redirect()->route('delivered.orders')->with($notification);
    }



    public function AdminInvoiceDownload($order_id)
    {

    $order = Order::with('division', 'district', 'state', 'user')->where('id', $order_id)
            ->first();
        $order_item = OrderItem::with('product')->where('order_id', $order_id)
            ->orderBy('id', 'DESC')->get();

        $pdf = PDF::loadView('backend.orders.order_invoice', compact('order', 'order_item'))
            ->setPaper('a4')->setOptions([
                'tempDir' => public_path(),
                'chroot' => public_path()
            ]);
        return $pdf->download('invoice.pdf');

    }
}