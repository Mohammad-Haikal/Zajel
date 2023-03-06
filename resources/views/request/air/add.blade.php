<x-template>
    <div class="container my-2">
        <h1 class="mb-1">Request Air Shipment</h1>
        <hr class="col-2 bg-custom-primary border-custom-primary mt-0" style="height: 2px">

        <form action="/air/store" method="post">
            @csrf
            <div class="mb-2">
                <div class="form-outline">
                    <label class="form-label mb-1">Shipper Name</label>
                    <div class="mb-3">
                        <textarea class="form-control" name="shipper_name" rows="4" required>{{ old('shipper_name') }}</textarea>
                    </div>
                </div>
            </div>
            <div class="mb-2">
                <div class="form-outline">
                    <label class="form-label mb-1">Shipper Address</label>
                    <div class="mb-3">
                        <textarea class="form-control" name="shipper_address" rows="4" required>{{ old('shipper_address') }}</textarea>
                    </div>
                </div>
            </div>
            <div class="mb-2">
                <div class="form-outline">
                    <label class="form-label mb-1">Consignee's Name</label>
                    <div class="mb-3">
                        <textarea class="form-control" name="consignee_name" rows="4" required>{{ old('consignee_name') }}</textarea>
                    </div>
                </div>
            </div>
            <div class="mb-2">
                <div class="form-outline">
                    <label class="form-label mb-1">Consignee's Address</label>
                    <div class="mb-3">
                        <textarea class="form-control" name="consignee_address" rows="4" required>{{ old('consignee_address') }}</textarea>
                    </div>
                </div>
            </div>
            <div class="mb-2">
                <div class="form-outline">
                    <label class="form-label mb-1">Issuing Carriers Agent Name</label>
                    <input class="form-control" name="agent_name" type="text" value="{{ old('agent_name') }}" required />
                </div>
            </div>
            <div class="mb-2">
                <div class="form-outline">
                    <label class="form-label mb-1">Issuing Carriers Agent City</label>
                    <input class="form-control" name="agent_city" type="text" value="{{ old('agent_city') }}" required />
                </div>
            </div>
            <div class="mb-2">
                <div class="form-outline">
                    <label class="form-label mb-1">Airport of Departure</label>
                    <input class="form-control" name="airport_of_departure" type="text" value="{{ old('airport_of_departure') }}" required />
                </div>
            </div>
            <div class="mb-2">
                <div class="form-outline">
                    <label class="form-label mb-1">Airpprt Destination</label>
                    <input class="form-control" name="airport_of_destination" type="text" value="{{ old('airport_of_destination') }}" required />
                </div>
            </div>
            <div class="mb-2">
                <div class="form-outline">
                    <label class="form-label mb-1">Number of pieces</label>
                    <div class="mb-3">
                        <textarea class="form-control" name="number_of_pieces" rows="4" required>{{ old('number_of_pieces') }}</textarea>
                    </div>
                </div>
            </div>
            <div class="mb-2">
                <div class="form-outline">
                    <label class="form-label mb-1">Number and kind of package(description of good)</label>
                    <div class="mb-3">
                        <textarea class="form-control" name="number_of_package" rows="8" required>{{ old('number_of_package') }}</textarea>
                    </div>
                </div>
            </div>
            <div class="mb-2">
                <div class="form-outline">
                    <label class="form-label mb-1">Gross Wight (KGs)</label>
                    <input class="form-control" name="gross_weight" type="number" value="{{ old('gross_weight') }}" step="0.01" required />
                </div>
            </div>
            <div class="mb-3">
                <div class="form-outline">
                    <label class="form-label mb-1">Date of Shipment</label>
                    <input class="form-control" name="date_of_shipment" type="date" value="{{ old('date_of_shipment') }}" required />
                </div>
            </div>

            <div class="mb-5 text-center">
                <input class="btn btn-custom-primary col-12" type="submit" value="Send Request" />
            </div>
        </form>
    </div>

</x-template>
















