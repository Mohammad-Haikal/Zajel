<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Shipment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ShipmentController extends Controller
{
    public function index()
    {
        return view('shipment.index', [
            'shipments' => Auth::user()->shipments
        ]);
    }

    public function add()
    {
        return view('shipment.add');
    }

    public function store(Request $request)
    {
        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images/shipments', 'public');
        }

        Shipment::create([
            'user_id' => Auth::id(),
            'contact_number' => request('contact_number'),
            'user_name' => request('user_name'),
            'company_name' => request('company_name'),
            'company_email' => request('company_email'),
            'company_address' => request('company_address'),
            'from' => request('from'),
            'to' => request('to'),
            'receive_address' => request('receive_address'),
            'city' => request('city'),
            'material' => request('material'),
            'weight' => request('weight'),
            'size' => request('size'),
            'takingoff' => request('takingoff'),
            'arrival' => request('arrival'),
            'method' => request('method'),
            'price' => request('price'),
            'image' => $imagePath,
            'product_description' => request('product_description')
        ]);

        return redirect('/shipment')->with('message', 'Shipment added successfully');
    }

    public function show(Shipment $shipment)
    {
        return view('shipment.edit', [
            'shipment' => $shipment,
        ]);
    }

    public function update(Request $request, Shipment $shipment)
    {
        $imagePath = $shipment->image;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images/shipments', 'public');
            Storage::disk('public')->delete($shipment->image);
        }

        $shipment->update([
            'contact_number' => request('contact_number'),
            'user_name' => request('user_name'),
            'company_name' => request('company_name'),
            'company_email' => request('company_email'),
            'company_address' => request('company_address'),
            'from' => request('from'),
            'to' => request('to'),
            'receive_address' => request('receive_address'),
            'city' => request('city'),
            'material' => request('material'),
            'weight' => request('weight'),
            'size' => request('size'),
            'takingoff' => request('takingoff'),
            'arrival' => request('arrival'),
            'method' => request('method'),
            'price' => request('price'),
            'image' => $imagePath,
            'product_description' => request('product_description')
        ]);

        return redirect('/shipment')->with('message', 'Shipment updated successfully');
    }

    public function destroy(Shipment $shipment)
    {
        if ($shipment->image != null) {
            Storage::disk('public')->delete($shipment->image);
        };

        $shipment->delete();

        return redirect('/shipment')->with('message', 'Shipment deleted successfully');
    }

    public function view(Shipment $shipment)
    {
        return view('shipment.view', [
            'shipment' => $shipment,
        ]);
    }

    public function order(Shipment $shipment)
    {
        $shipment->update([
            'is_ordered' => 1
        ]);

        Order::create([
            'user_id' => Auth::id(),
            'shipment_id' => $shipment->id,
        ]);

        return redirect('/store')->with('message', 'Your ordered set successfully');
    }
}
