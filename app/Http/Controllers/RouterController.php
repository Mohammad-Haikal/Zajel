<?php

namespace App\Http\Controllers;

use App\Models\Shipment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RouterController extends Controller
{
    public function home()
    {
        return view('home', [
            // 'courses' => Course::orderBy('title', 'asc')->paginate(10),
        ]);
    }

    public function login()
    {
        return view('user.login');
    }

    public function register()
    {
        return view('user.register');
    }

    public function store()
    {
        return view('store', [
            'shipments' => Shipment::all()->where('is_ordered', '=', 0)->sortBy('created_at')
        ]);
    }

    // public function about()
    // {
    //     return view('about');
    // }
}
