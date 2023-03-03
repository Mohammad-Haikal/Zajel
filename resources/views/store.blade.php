<x-template>
    <div class="min-vh-100 container my-2 mb-5">
        <h1 class="col">Store</h1>
        @if (count($shipments) != 0)
            <div class="row row-cols-1 row-cols-1 row-cols-sm-2 row-cols-md-3 g-4">
                @foreach ($shipments as $shipment)
                    <div class="col">
                        <img src="{{ asset($shipment->image) }}" class="mb-2" alt="image" style="width: 100%; height: 200px ;object-fit: cover;object-position: center;">
                        <h3 class="mb-0">{{ $shipment->material }}</h3>
                        <div class="d-flex align-items-center justify-content-between">
                            <h6 class="text-muted">{{ $shipment->company_name }}</h6>
                            <h6 class="text-muted">${{ $shipment->price }}/Kg</h6>
                        </div>
                        <a class="btn btn-custom-secondary" href="/shipment/view/{{$shipment->id}}"><i class="bi bi-cart me-2"></i>View Shipment</a>
                    </div>
                @endforeach
            </div>
        @else
            <p class="text-muted">No shipments found</p>
        @endif
    </div>
</x-template>
