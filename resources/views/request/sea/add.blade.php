<x-template>
    <div class="container my-2">
        <h1 class="mb-1">Request Sea Shipment</h1>
        <hr class="col-2 bg-custom-primary border-custom-primary mt-0" style="height: 2px">

        <form action="/sea/store" method="post">
            @csrf
            <div class="mb-2">
                <div class="form-outline">
                    <label class="form-label mb-1">Shipper</label>
                    <div class="mb-3">
                        <textarea class="form-control" name="shipper" rows="4" required>{{ old('shipper') }}</textarea>
                    </div>
                </div>
            </div>
            <div class="mb-2">
                <div class="form-outline">
                    <label class="form-label mb-1">Consignee</label>
                    <div class="mb-3">
                        <textarea class="form-control" name="consignee" rows="4" required>{{ old('consignee') }}</textarea>
                    </div>
                </div>
            </div>
            <div class="mb-2">
                <div class="form-outline">
                    <label class="form-label mb-1">Notify Address</label>
                    <div class="mb-3">
                        <textarea class="form-control" name="notify_address" rows="4" required>{{ old('notify_address') }}</textarea>
                    </div>
                </div>
            </div>
            <div class="mb-2">
                <div class="form-outline">
                    <label class="form-label mb-1">carrier's reference</label>
                    <input class="form-control" name="carrier_reference" type="text" value="{{ old('carrier_reference') }}" required />
                </div>
            </div>
            <div class="mb-2">
                <div class="form-outline">
                    <label class="form-label mb-1">SWB-No.</label>
                    <input class="form-control" name="swb_no" type="text" value="{{ old('swb_no') }}" required />
                </div>
            </div>
            <div class="mb-2">
                <div class="form-outline">
                    <label class="form-label mb-1">Vessel(s)</label>
                    <input class="form-control" name="vessel" type="text" value="{{ old('vessel') }}" required />
                </div>
            </div>
            <div class="mb-2">
                <div class="form-outline">
                    <label class="form-label mb-1">Voyage-No.</label>
                    <input class="form-control" name="voyage_no" type="text" value="{{ old('voyage_no') }}" required />
                </div>
            </div>
            <div class="mb-2">
                <div class="form-outline">
                    <label class="form-label mb-1">Port of Loading</label>
                    <input class="form-control" name="port_of_loading" type="text" value="{{ old('port_of_loading') }}" required />
                </div>
            </div>
            <div class="mb-2">
                <div class="form-outline">
                    <label class="form-label mb-1">Port of Discharge</label>
                    <input class="form-control" name="port_of_discharge" type="text" value="{{ old('port_of_discharge') }}" required />
                </div>
            </div>
            <div class="mb-2">
                <div class="form-outline">
                    <label class="form-label mb-1">Container Nos., Seal Nos.:Marks and Nos.</label>
                    <div class="mb-3">
                        <textarea class="form-control" name="nos" rows="8" required>{{ old('nos') }}</textarea>
                    </div>
                </div>
            </div>
            <div class="mb-2">
                <div class="form-outline">
                    <label class="form-label mb-1">Number and Kind of Package (description of good)</label>
                    <div class="mb-3">
                        <textarea class="form-control" name="number_of_package" rows="4" required>{{ old('number_of_package') }}</textarea>
                    </div>
                </div>
            </div>
            <div class="mb-2">
                <div class="form-outline">
                    <label class="form-label mb-1">Gross Weight (KGs)</label>
                    <input class="form-control" name="gross_weight" type="number" value="{{ old('gross_weight') }}" step="0.01" required />
                </div>
            </div>
            <div class="mb-2">
                <div class="form-outline">
                    <label class="form-label mb-1">Measurement (CBM)</label>
                    <input class="form-control" name="measurement" type="number" value="{{ old('measurement') }}" step="0.01" required />
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
