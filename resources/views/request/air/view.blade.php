<x-template>
    <div class="container my-2">
        <h1 class="mb-1">View Request</h1>
        <hr class="col-2 bg-custom-primary border-custom-primary mt-0" style="height: 2px">
        <form class="row g-2">
            <div class="mb-2">
                <div class="form-outline">
                    <label class="form-label mb-1">Shipper Name</label>
                    <div class="mb-3">
                        <textarea class="form-control" name="shipper_name" rows="4" required disabled>{{ $request->shipper_name }}</textarea>
                    </div>
                </div>
            </div>
            <div class="mb-2">
                <div class="form-outline">
                    <label class="form-label mb-1">Shipper Address</label>
                    <div class="mb-3">
                        <textarea class="form-control" name="shipper_address" rows="4" required disabled>{{ $request->shipper_address }}</textarea>
                    </div>
                </div>
            </div>
            <div class="mb-2">
                <div class="form-outline">
                    <label class="form-label mb-1">Consignee's Name</label>
                    <div class="mb-3">
                        <textarea class="form-control" name="consignee_name" rows="4" required disabled>{{ $request->consignee_name }}</textarea>
                    </div>
                </div>
            </div>
            <div class="mb-2">
                <div class="form-outline">
                    <label class="form-label mb-1">Consignee's Address</label>
                    <div class="mb-3">
                        <textarea class="form-control" name="consignee_address" rows="4" required disabled>{{ $request->consignee_address }}</textarea>
                    </div>
                </div>
            </div>
            <div class="mb-2">
                <div class="form-outline">
                    <label class="form-label mb-1">Issuing Carriers Agent Name</label>
                    <input class="form-control" name="agent_name" type="text" value="{{ $request->agent_name }}" required disabled />
                </div>
            </div>
            <div class="mb-2">
                <div class="form-outline">
                    <label class="form-label mb-1">Issuing Carriers Agent City</label>
                    <input class="form-control" name="agent_city" type="text" value="{{ $request->agent_city }}" required disabled />
                </div>
            </div>
            <div class="mb-2">
                <div class="form-outline">
                    <label class="form-label mb-1">Airport of Departure</label>
                    <input class="form-control" name="airport_of_departure" type="text" value="{{ $request->airport_of_departure }}" required disabled />
                </div>
            </div>
            <div class="mb-2">
                <div class="form-outline">
                    <label class="form-label mb-1">Airpprt Destination</label>
                    <input class="form-control" name="airport_of_destination" type="text" value="{{ $request->airport_of_destination }}" required disabled />
                </div>
            </div>
            <div class="mb-2">
                <div class="form-outline">
                    <label class="form-label mb-1">Number of pieces</label>
                    <div class="mb-3">
                        <textarea class="form-control" name="number_of_pieces" rows="4" required disabled>{{ $request->number_of_pieces }}</textarea>
                    </div>
                </div>
            </div>
            <div class="mb-2">
                <div class="form-outline">
                    <label class="form-label mb-1">Number and kind of package(description of good)</label>
                    <div class="mb-3">
                        <textarea class="form-control" name="number_of_package" rows="8" required disabled>{{ $request->number_of_package }}</textarea>
                    </div>
                </div>
            </div>
            <div class="mb-2">
                <div class="form-outline">
                    <label class="form-label mb-1">Gross Wight (KGs)</label>
                    <input class="form-control" name="gross_weight" type="number" value="{{ $request->gross_weight }}" step="0.01" required disabled />
                </div>
            </div>
            <div class="mb-3">
                <div class="form-outline">
                    <label class="form-label mb-1">Date of Shipment</label>
                    <input class="form-control" name="date_of_shipment" type="date" value="{{ $request->date_of_shipment }}" required disabled />
                </div>
            </div>
        </form>
    </div>

</x-template>
