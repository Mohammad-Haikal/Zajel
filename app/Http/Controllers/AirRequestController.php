<?php

namespace App\Http\Controllers;

use App\Models\AirRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AirRequestController extends Controller
{
    public function index()
    {
        return view('request.air.index', [
            'requests' => AirRequest::paginate(8)
        ]);
    }

    public function add()
    {
        return view('request.air.add');
    }

    public function store(Request $request)
    {
        AirRequest::create([
            'user_id' => Auth::id(),
            'shipper_name' => request('shipper_name'),
            'shipper_address' => request('shipper_address'),
            'consignee_name' => request('consignee_name'),
            'consignee_address' => request('consignee_address'),
            'agent_name' => request('agent_name'),
            'agent_city' => request('agent_city'),
            'airport_of_departure' => request('airport_of_departure'),
            'airport_of_destination' => request('airport_of_destination'),
            'number_of_pieces' => request('number_of_pieces'),
            'number_of_package' => request('number_of_package'),
            'gross_weight' => request('gross_weight'),
            'date_of_shipment' => request('date_of_shipment'),
        ]);

        return redirect('/air')->with('message', 'Shipment requested successfully');
    }


    public function show(AirRequest $request)
    {
        return view('request.air.edit', [
            'request' => $request,
        ]);
    }

    public function update(AirRequest $request)
    {
        $request->update([
            'shipper_name' => request('shipper_name'),
            'shipper_address' => request('shipper_address'),
            'consignee_name' => request('consignee_name'),
            'consignee_address' => request('consignee_address'),
            'agent_name' => request('agent_name'),
            'agent_city' => request('agent_city'),
            'airport_of_departure' => request('airport_of_departure'),
            'airport_of_destination' => request('airport_of_destination'),
            'number_of_pieces' => request('number_of_pieces'),
            'number_of_package' => request('number_of_package'),
            'gross_weight' => request('gross_weight'),
            'date_of_shipment' => request('date_of_shipment'),
        ]);

        return redirect('/air')->with('message', 'Request updated successfully');
    }

    public function destroy(AirRequest $request)
    {
        $request->delete();

        return redirect('/air')->with('message', 'Request deleted successfully');
    }

    public function view(AirRequest $request)
    {
        return view('request.air.view', [
            'request' => $request,
        ]);
    }

    public function arrived(AirRequest $request)
    {
        $request->update([
            'status' => 3
        ]);

        return back()->with('message', 'Shipment arrived successfully');
    }
}
