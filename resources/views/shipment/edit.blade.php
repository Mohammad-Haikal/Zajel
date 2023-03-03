<x-template>
    <div class="container my-2">
        <h1 class="mb-3">Edit Shipment</h1>
        <form action="/shipment/update/{{ $shipment->id }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row g-4 mb-3">
                <section class="col-md-6">
                    <h3>Personal Info</h3>
                    <hr class="col-2 bg-custom-primary border-custom-primary mt-0" style="height: 2px">
                    <div class="mb-2">
                        <div class="form-outline">
                            <label class="form-label mb-1">Your Name</label>
                            <input class="form-control form-control" name="user_name" type="text" value="{{ $shipment->user_name }}" placeholder="Your Name" required />
                        </div>
                    </div>
                    <div class="mb-2">
                        <div class="form-outline">
                            <label class="form-label mb-1">Contact Number</label>
                            <input class="form-control form-control" name="contact_number" type="tel" value="{{ $shipment->contact_number }}" placeholder="Contact Number" required />
                        </div>
                    </div>

                    <div class="mb-2">
                        <div class="form-outline">
                            <label class="form-label mb-1">Company Name</label>
                            <input class="form-control form-control" name="company_name" type="text" value="{{ $shipment->company_name }}" placeholder="Company Name" required />
                        </div>
                    </div>
                    <div class="mb-2">
                        <div class="form-outline">
                            <label class="form-label mb-1">Company Email</label>
                            <input class="form-control form-control" name="company_email" type="email" value="{{ $shipment->company_email }}" placeholder="Company Email" required />
                        </div>
                    </div>
                    <div class="mb-2">
                        <div class="form-outline">
                            <label class="form-label mb-1">Company Address</label>
                            <input class="form-control form-control" name="company_address" type="text" value="{{ $shipment->company_address }}" placeholder="Company Address" required />
                        </div>
                    </div>
                </section>

                <section class="col-md-6">
                    <h3>Shipment Information</h3>
                    <hr class="col-2 bg-custom-primary border-custom-primary mt-0" style="height: 2px">

                    <div class="mb-2">
                        <div class="form-outline">
                            <label class="form-label mb-1">From</label>
                            <input class="form-control form-control" name="from" type="text" value="{{ $shipment->from }}" placeholder="From" required />
                        </div>
                    </div>
                    <div class="mb-2">
                        <div class="form-outline">
                            <label class="form-label mb-1">To</label>
                            <input class="form-control form-control" name="to" type="text" value="{{ $shipment->to }}" placeholder="To" required />
                        </div>
                    </div>
                    <div class="mb-2">
                        <div class="form-outline">
                            <label class="form-label mb-1">Receive Address</label>
                            <input class="form-control form-control" name="receive_address" type="text" value="{{ $shipment->receive_address }}" placeholder="Receive Address" required />
                        </div>
                    </div>
                    <div class="mb-2">
                        <div class="form-outline">
                            <label class="form-label mb-1">City</label>
                            <input class="form-control form-control" name="city" type="text" value="{{ $shipment->city }}" placeholder="City" required />
                        </div>
                    </div>
                    <div class="mb-2">
                        <div class="form-outline">
                            <label class="form-label mb-1">Material</label>
                            <input class="form-control form-control" name="material" type="text" value="{{ $shipment->material }}" placeholder="Material" required />
                        </div>
                    </div>
                    <div class="mb-2">
                        <div class="form-outline">
                            <label class="form-label mb-1">Weight (Kg)</label>
                            <input class="form-control form-control" name="weight" type="number" value="{{ $shipment->weight }}" step="0.01" placeholder="Weight (Kg)" required />
                        </div>
                    </div>
                    <div class="mb-2">
                        <div class="form-outline">
                            <label class="form-label mb-1">Size (m2)</label>
                            <input class="form-control form-control" name="size" type="number" value="{{ $shipment->size }}" step="0.01" placeholder="Size (m2)" required />
                        </div>
                    </div>
                    <div class="mb-2">
                        <div class="form-outline">
                            <label class="form-label mb-1">Date of Takingoff</label>
                            <input class="form-control form-control" name="takingoff" type="date" value="{{ $shipment->takingoff }}" placeholder="Date of Takingoff" required />
                        </div>
                    </div>
                    <div class="mb-2">
                        <div class="form-outline">
                            <label class="form-label mb-1">Date of Arrival</label>
                            <input class="form-control form-control" name="arrival" type="date" value="{{ $shipment->arrival }}" placeholder="Date of Arrival" required />
                        </div>
                    </div>
                    <div class="mb-2">
                        <div class="mb-2">
                            <label class="form-label mb-1">Shipment Method</label>
                            <div class="form-group">
                                <select class="form-control" id="method" name="method" required>
                                    <option value="">Select Method</option>
                                    <option value="Air" {{ $shipment->method == 'Air' ? 'selected' : '' }}>Air</option>
                                    <option value="Sea" {{ $shipment->method == 'Sea' ? 'selected' : '' }}>Sea</option>
                                    <option value="Ground" {{ $shipment->method == 'Ground' ? 'selected' : '' }}>Ground</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="form-outline">
                            <label class="form-label mb-1">Price in Dollar (per 1 kg)</label>
                            <input class="form-control form-control" name="price" type="number" value="{{ $shipment->price }}" step="0.01" placeholder="Price in Dollar (per 1 kg)" required />
                        </div>
                    </div>

                    <img class="img-fluid mb-2" src="{{ asset($shipment->image) }}" alt="Material" width="100px">

                    <div class="mb-2">
                        <div class="form-outline">
                            <label class="form-label mb-1">Image</label>
                            <input class="form-control form-control" name="image" type="file" placeholder="Image" accept="image/png, image/jpeg" />
                        </div>
                    </div>
                    <div class="mb-2">
                        <div class="form-outline">
                            <label class="form-label mb-1">Product Description</label>
                            <div class="mb-3">
                                <textarea class="form-control" name="product_description" rows="4" placeholder="Product Description" required>{{ $shipment->product_description }}</textarea>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="mb-2 mb-5 text-center">
                <input class="btn btn-custom-primary col-12" type="submit" value="Save Changes" />
            </div>
        </form>

    </div>

</x-template>
