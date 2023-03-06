<?php

namespace App\Http\Controllers;

use App\Models\AirRequest;
use App\Models\AirRequestOffer;
use Illuminate\Http\Request;

class AirRequestOfferController extends Controller
{
    public function index(AirRequest $request)
    {
        return view('offers.air.index', [
            'request' => $request,
            'offers' => $request->offers
        ]);
    }

    public function add(AirRequest $request)
    {
        $request->update([
            'status' => 1
        ]);

        return view('offers.air.add', [
            'request' => $request
        ]);
    }

    public function store(AirRequest $request)
    {
        AirRequestOffer::create([
            'air_request_id' => $request->id,
            'company' => request('company'),
            'price' => request('price'),
            'total_price' => request('total_price'),
            'date_of_departure' => request('date_of_departure'),
            'date_of_destination' => request('date_of_destination'),
        ]);

        return redirect("/air-offer/$request->id")->with('message', 'Offer added successfully');
    }

    public function choose(AirRequest $request, AirRequestOffer $offer)
    {
        AirRequestOffer::where('air_request_id' , '=', $request->id)->where('id' , '!=', $offer->id)->delete();

        $request->update([
            'status' => 2
        ]);

        return redirect("/air")->with('message', 'Offer chosen successfully');
    }
}
