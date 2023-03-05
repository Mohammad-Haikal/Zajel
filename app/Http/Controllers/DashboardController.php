<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function requests()
    {
        return view('dashboard.requests', [
            // 'orders' => Order::where(['confirmed' => 0])->paginate(5),
            // 'confirmedOrders' => Order::where(['confirmed' => 1])->get()->sortByDesc('created_at'),
        ]);
    }

    public function orders()
    {
        // if (request('search') ?? false) {
        //     return view('dashboard.items', [
        //         'items' => Item::where('title', 'like', '%' . request('search') . '%')->orWhere('description', 'like', '%' . request('search') . '%')->paginate(8),
        //         'categories' => Category::all()
        //     ]);
        // }

        // if (request('category') ?? false) {
        //     return view('dashboard.items', [
        //         'items' => Item::where('category_id', '=', request('category'))->paginate(8),
        //         'categories' => Category::all()
        //     ]);
        // }

        return view('dashboard.orders', [
            'orders' => Order::paginate(8),
        ]);
    }
}
