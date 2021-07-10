<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Order;
use DateTime;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function ViewReports()
    {
        return view('backend.reports.report_view');
    }

    public function ReportByDate(Request $request)
    {
        // return $request->all();

        $date = new DateTime($request->date);
        $dateFormat = $date->format('d F Y');
        // return $dateFormat;
        $orders = Order::where('order_date',$dateFormat)->latest()->get();
        return view('backend.reports.report_show',compact('orders'));
    }


    public function ReportByMonth(Request $request)
    {
        $month = $request->month;
        $year = $request->year_name;

        $orders = Order::where('order_month',$month)->where('order_year',$year)->latest()->get();
        return view('backend.reports.report_show',compact('orders'));
    }


    public function ReportByYear(Request $request)
    {
        $year = $request->year;

        $orders = Order::where('order_year',$year)->latest()->get();
        return view('backend.reports.report_show',compact('orders'));
    }
}