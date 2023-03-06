<x-template>
    <div class="container my-2">
        <h1 class="mb-1">Add New Offer</h1>
        <hr class="col-2 bg-custom-primary border-custom-primary mt-0" style="height: 2px">

        <form action="/air-offer/store/{{$request->id}}" method="post">
            @csrf
            <div class="mb-2">
                <div class="form-outline">
                    <label class="form-label mb-1">Company</label>
                    <input class="form-control" name="company" type="text" value="{{ old('company') }}" required />
                </div>
            </div>
            <div class="mb-2">
                <div class="form-outline">
                    <label class="form-label mb-1">Price (per 1 kg)</label>
                    <input class="form-control" name="price" type="number" value="{{ old('price') }}" step="0.01" required />
                </div>
            </div>
            <div class="mb-2">
                <div class="form-outline">
                    <label class="form-label mb-1">Total Price</label>
                    <input class="form-control" name="total_price" type="number" value="{{ old('total_price') }}" step="0.01" required />
                </div>
            </div>
            <div class="mb-2">
                <div class="form-outline">
                    <label class="form-label mb-1">Date of Departure</label>
                    <input class="form-control" name="date_of_departure" type="date" value="{{ old('date_of_departure') }}" required />
                </div>
            </div>
            <div class="mb-3">
                <div class="form-outline">
                    <label class="form-label mb-1">Date of Arrival</label>
                    <input class="form-control" name="date_of_destination" type="date" value="{{ old('date_of_destination') }}" required />
                </div>
            </div>

            <div class="mb-5 text-center">
                <input class="btn btn-custom-primary col-12" type="submit" value="Add Offer" />
            </div>
        </form>
    </div>

</x-template>
