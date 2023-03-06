<?php

namespace App\Http\Controllers;

use App\Models\GroundRequestOffer;
use Illuminate\Http\Request;

class GroundRequestOfferController extends Controller
{
    public function index()
    {
        return view('offers.ground.index', [
            'offers' => GroundRequestOffer::all()
        ]);
    }


}
