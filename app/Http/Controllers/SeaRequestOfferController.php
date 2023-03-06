<?php

namespace App\Http\Controllers;

use App\Models\SeaRequest;
use App\Models\SeaRequestOffer;
use Illuminate\Http\Request;

class SeaRequestOfferController extends Controller
{
    public function index(SeaRequest $request)
    {
        return view('offers.sea.index', [
            'request' => $request,
            'offers' => $request->offers
        ]);
    }

    public function add(SeaRequest $request)
    {
        $request->update([
            'status' => 1
        ]);

        return view('offers.sea.add', [
            'request' => $request
        ]);
    }

    public function store(SeaRequest $request)
    {
        SeaRequestOffer::create([
            'sea_request_id' => $request->id,
            'company' => request('company'),
            'price' => request('price'),
            'total_price' => request('total_price'),
            'date_of_loading' => request('date_of_loading'),
            'date_of_discharge' => request('date_of_discharge'),
        ]);

        return redirect("/sea-offer/$request->id")->with('message', 'Offer added successfully');
    }

    public function choose(SeaRequest $request, SeaRequestOffer $offer)
    {
        SeaRequestOffer::where('sea_request_id' , '=', $request->id)->where('id' , '!=', $offer->id)->delete();

        $request->update([
            'status' => 2
        ]);

        return redirect("/sea")->with('message', 'Offer chosen successfully');
    }
}
