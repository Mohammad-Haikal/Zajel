<x-template>
    <div class="container my-2">
        <h1 class="mb-3">Add New Shipment</h1>

        <form action="/shipment/store" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row g-4 mb-3">
                <section class="col-md-6">
                    <h3>Personal Info</h3>
                    <hr class="col-2 bg-custom-primary border-custom-primary mt-0" style="height: 2px">
                    <div class="mb-2">
                        <div class="form-outline">
                            <label class="form-label mb-1">Your Name</label>
                            <input class="form-control" name="user_name" type="text" value="{{ old('user_name') }}" placeholder="Your Name" required />
                        </div>
                    </div>
                    <div class="mb-2">
                        <div class="form-outline">
                            <label class="form-label mb-1">Contact Number</label>
                            <input class="form-control" name="contact_number" type="tel" value="{{ old('contact_number') }}" placeholder="Contact Number" required />
                        </div>
                    </div>

                    <div class="mb-2">
                        <div class="form-outline">
                            <label class="form-label mb-1">Company Name</label>
                            <input class="form-control" name="company_name" type="text" value="{{ old('company_name') }}" placeholder="Company Name" required />
                        </div>
                    </div>
                    <div class="mb-2">
                        <div class="form-outline">
                            <label class="form-label mb-1">Company Email</label>
                            <input class="form-control" name="company_email" type="email" value="{{ old('company_email') }}" placeholder="Company Email" required />
                        </div>
                    </div>
                    <div class="mb-2">
                        <div class="form-outline">
                            <label class="form-label mb-1">Company Address</label>
                            <input class="form-control" name="company_address" type="text" value="{{ old('company_address') }}" placeholder="Company Address" required />
                        </div>
                    </div>
                </section>

                <section class="col-md-6">
                    <h3>Shipment Information</h3>
                    <hr class="col-2 bg-custom-primary border-custom-primary mt-0" style="height: 2px">

                    <div class="mb-2">
                        <div class="form-outline">
                            <label class="form-label mb-1">From</label>
                            <input class="form-control" name="from" type="text" value="{{ old('from') }}" placeholder="From" required />
                        </div>
                    </div>
                    <div class="mb-2">
                        <div class="form-outline">
                            <label class="form-label mb-1">To</label>
                            <input class="form-control" name="to" type="text" value="{{ old('to') }}" placeholder="To" required />
                        </div>
                    </div>
                    <div class="mb-2">
                        <div class="form-outline">
                            <label class="form-label mb-1">Receive Address</label>
                            <input class="form-control" name="receive_address" type="text" value="{{ old('receive_address') }}" placeholder="Receive Address" required />
                        </div>
                    </div>
                    <div class="mb-2">
                        <div class="form-outline">
                            <label class="form-label mb-1">City</label>
                            <input class="form-control" name="city" type="text" value="{{ old('city') }}" placeholder="City" required />
                        </div>
                    </div>
                    <div class="mb-2">
                        <div class="form-outline">
                            <label class="form-label mb-1">Material</label>
                            <input class="form-control" name="material" type="text" value="{{ old('material') }}" placeholder="Material" required />
                        </div>
                    </div>
                    <div class="mb-2">
                        <div class="form-outline">
                            <label class="form-label mb-1">Weight (Kg)</label>
                            <input class="form-control" name="weight" type="number" value="{{ old('weight') }}" step="0.01" placeholder="Weight (Kg)" required />
                        </div>
                    </div>
                    <div class="mb-2">
                        <div class="form-outline">
                            <label class="form-label mb-1">Size (m2)</label>
                            <input class="form-control" name="size" type="number" value="{{ old('size') }}" step="0.01" placeholder="Size (m2)" required />
                        </div>
                    </div>
                    <div class="mb-2">
                        <div class="form-outline">
                            <label class="form-label mb-1">Date of Takingoff</label>
                            <input class="form-control" name="takingoff" type="date" value="{{ old('takingoff') }}" placeholder="Date of Takingoff" required />
                        </div>
                    </div>
                    <div class="mb-2">
                        <div class="form-outline">
                            <label class="form-label mb-1">Date of Arrival</label>
                            <input class="form-control" name="arrival" type="date" value="{{ old('arrival') }}" placeholder="Date of Arrival" required />
                        </div>
                    </div>
                    <div class="mb-2">
                        <label class="form-label mb-1">Shipment Method</label>
                        <div class="form-group">
                            <select class="form-control" id="method" name="method" required>
                                <option value="" selected>Select Method</option>
                                <option value="Air">Air Shipment</option>
                                <option value="Sea">Sea Shipment</option>
                                <option value="Ground">Ground Shipment</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-2">
                        <div class="form-outline">
                            <label class="form-label mb-1">Price in Dollar (per 1 kg)</label>
                            <input class="form-control" name="price" type="number" value="{{ old('price') }}" step="0.01" placeholder="Price in Dollar (per 1 kg)" required />
                        </div>
                    </div>
                    <div class="mb-2">
                        <div class="form-outline">
                            <label class="form-label mb-1">Image</label>
                            <input class="form-control" name="image" type="file" value="{{ old('image') }}" placeholder="Image" accept="image/png, image/jpeg" required />
                        </div>
                    </div>
                    <div class="mb-2">
                        <div class="form-outline">
                            <label class="form-label mb-1">Product Description</label>
                            <div class="mb-3">
                                <textarea class="form-control" name="product_description" rows="4" placeholder="Product Description" required>{{ old('product_description') }}</textarea>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="mb-2 mb-5 text-center">
                <input class="btn btn-custom-primary col-12" type="submit" value="Add Shipment" />
            </div>
        </form>

    </div>

</x-template>
