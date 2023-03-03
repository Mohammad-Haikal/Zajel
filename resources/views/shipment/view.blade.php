<x-template>
    <div class="min-vh-100 container my-2">
        <div class="row g-5">
            <div class="col-md-7">
                <div class="d-flex align-items-center justify-content-between">
                    <h1 class="mb-0">{{ $shipment->material }}</h1>
                    <h4 class="text-secondary mb-0">${{ $shipment->price }}/Kg</h4>
                </div>
                <h5 class="text-muted">{{ $shipment->company_name }}</h5>
                <p class="text-secondary mb-1"><strong>From:</strong> {{ $shipment->from }}</p>
                <p class="text-secondary mb-1"><strong>To:</strong> {{ $shipment->to }}</p>
                <p class="text-secondary mb-1"><strong>Takeoff Date:</strong> {{ $shipment->takingoff }}</p>
                <p class="text-secondary mb-1"><strong>Arrival Date:</strong> {{ $shipment->arrival }}</p>
                <p class="text-secondary mb-1"><strong>Method:</strong> {{ $shipment->method }} Shipping</p>
                <p class="text-secondary mb-1"><strong>Weight:</strong> {{ $shipment->weight }} Kg</p>
                <p class="text-secondary mb-1"><strong>Size:</strong> {{ $shipment->size }} m2</p>
                <hr class="col-12">
                <form action="/shipment/order/{{ $shipment->id }}" method="post">
                    @csrf
                    <button class="btn btn-custom-secondary" type="submit"><i class="bi bi-cart me-2"></i>Order Shipment</button>
                </form>
            </div>
            <img class="col-md-5 mb-2" src="{{ asset($shipment->image) }}" alt="image" style="object-fit: cover;object-position: center; max-height: 500px">
        </div>

        <div class="accordion my-5" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#collapseOne" type="button" aria-expanded="true" aria-controls="collapseOne">
                        Product Description
                    </button>
                </h2>
                <div class="accordion-collapse show collapse" id="collapseOne" data-bs-parent="#accordionExample" aria-labelledby="headingOne">
                    <div class="accordion-body">
                        <textarea class="form-control bg-light border-0 p-0" rows="5" disabled>{{ $shipment->product_description }}</textarea>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseTwo" type="button" aria-expanded="false" aria-controls="collapseTwo">
                        Company Description
                    </button>
                </h2>
                <div class="accordion-collapse collapse" id="collapseTwo" data-bs-parent="#accordionExample" aria-labelledby="headingTwo">
                    <div class="accordion-body">
                        <strong>Company Name:</strong> {{ $shipment->company_name }} <br>
                        <strong>Contact Number:</strong> {{ $shipment->contact_number }} <br>
                        <strong>Company Email:</strong> {{ $shipment->company_email }} <br>
                        <strong>Company Address:</strong> {{ $shipment->company_address }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-template>
