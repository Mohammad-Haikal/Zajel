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
        return view('profile.order', [
            'orders' => Auth::user()->orders
        ]);
    }

    public function finish(Order $order)
    {
        $order->update([
            'state' => 'Finished'
        ]);

        return back()->with('message', 'Order finished successfully');
    }

    public function destroy(Shipment $shipment, Order $order)
    {
        $shipment->update([
            'is_ordered' => 0
        ]);

        $order->delete();

        return back()->with('message', 'Order deleted successfully');
    }
}
