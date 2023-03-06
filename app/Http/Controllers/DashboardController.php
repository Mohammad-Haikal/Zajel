<?php

namespace App\Http\Controllers;

use App\Models\AirRequest;
use App\Models\GroundRequest;
use App\Models\Order;
use App\Models\SeaRequest;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function seaRequests()
    {
        return view('dashboard.requests.sea', [
            'requests' => SeaRequest::paginate(8),
        ]);
    }

    public function airRequests()
    {
        return view('dashboard.requests.air', [
            'requests' => AirRequest::paginate(8),

        ]);
    }

    public function groundRequests()
    {
        return view('dashboard.requests.ground', [
            'requests' => GroundRequest::paginate(8),

        ]);
    }

    public function orders()
    {
        return view('dashboard.orders', [
            'orders' => Order::paginate(8),
        ]);
    }
}
