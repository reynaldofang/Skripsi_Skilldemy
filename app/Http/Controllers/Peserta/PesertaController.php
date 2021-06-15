<?php

namespace App\Http\Controllers\Peserta;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;

class PesertaController extends Controller
{
    public function OrderList(){
        $orders = Order::all();

        return view('peserta.pages.order', compact('orders'));
    }
}
