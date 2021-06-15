<?php

namespace App\Http\Controllers\Admin;

use Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Order;

class OrderController extends Controller
{
    public function orderList(){
        $order = Order::all();
        return view('admin.order.index', compact('order'));
    }

    public function OrderCreate(Request $request)
    {

    }

    public function pendingOrder($orderNumber)
    {
        $order = Order::where('order_number', $orderNumber)->update(['status'=>'awaiting payment', 'payment_method'=>'Transfer','employee_id'=>Auth::id()]);
        return $this->findOrderByNumber($orderNumber);
    }
}
