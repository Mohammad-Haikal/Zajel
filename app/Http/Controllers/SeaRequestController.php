<?php

namespace App\Http\Controllers;

use App\Models\SeaRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SeaRequestController extends Controller
{
    public function index()
    {
        return view('request.sea.index', [
            'requests' => SeaRequest::paginate(8)
        ]);
    }

    public function add()
    {
        return view('request.sea.add');
    }

    public function store(Request $request)
    {
        SeaRequest::create([
            'user_id'  => Auth::id(),
            'shipper' => request('shipper'),
            'consignee' => request('consignee'),
            'notify_address' => request('notify_address'),
            'carrier_reference' => request('carrier_reference'),
            'swb_no' => request('swb_no'),
            'vessel' => request('vessel'),
            'voyage_no' => request('voyage_no'),
            'port_of_loading' => request('port_of_loading'),
            'port_of_discharge' => request('port_of_discharge'),
            'nos' => request('nos'),
            'number_of_package' => request('number_of_package'),
            'gross_weight' => request('gross_weight'),
            'measurement' => request('measurement'),
            'date_of_shipment' => request('date_of_shipment'),
        ]);

        return redirect('/sea')->with('message', 'Shipment requested successfully');
    }

    public function show(SeaRequest $request)
    {
        return view('request.sea.edit', [
            'request' => $request,
        ]);
    }

    public function update(SeaRequest $request)
    {
        $request->update([
            'shipper' => request('shipper'),
            'consignee' => request('consignee'),
            'notify_address' => request('notify_address'),
            'carrier_reference' => request('carrier_reference'),
            'swb_no' => request('swb_no'),
            'vessel' => request('vessel'),
            'voyage_no' => request('voyage_no'),
            'port_of_loading' => request('port_of_loading'),
            'port_of_discharge' => request('port_of_discharge'),
            'nos' => request('nos'),
            'number_of_package' => request('number_of_package'),
            'gross_weight' => request('gross_weight'),
            'measurement' => request('measurement'),
            'date_of_shipment' => request('date_of_shipment'),
        ]);

        return redirect('/sea')->with('message', 'Request updated successfully');
    }

    public function destroy(SeaRequest $request)
    {
        $request->delete();

        return redirect('/sea')->with('message', 'Request deleted successfully');
    }

    public function view(SeaRequest $request)
    {
        return view('request.sea.view', [
            'request' => $request,
        ]);
    }

    public function arrived(SeaRequest $request)
    {
        $request->update([
            'status' => 3
        ]);

        return back()->with('message', 'Shipment arrived successfully');
    }
}
