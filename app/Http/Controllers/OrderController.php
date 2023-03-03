<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Shipment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function index()
    {
        return view('order.index', [
            'orders' => Auth::user()->orders
        ]);
    }

    public function destroy(Shipment $shipment, Order $order)
    {
        $shipment->update([
            'is_ordered' => 0
        ]);

        $order->delete();
        return redirect('/order')->with('message', 'Order deleted successfully');
    }
}
