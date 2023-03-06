<x-template>
    <div class="min-vh-100 container my-2">
        <div class="d-flex align-items-center mb-2">
            <h1 class="col">My Shipments</h1>
            <a class="btn btn-custom-primary d-flex align-items-center shadow-sm" href="/shipment/add"><i class="bi bi-plus me-1"></i>Add New Shipment</a>
        </div>

        @if (count($shipments) != 0)
            <div class="table-responsive">
                <table class="table-striped table">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">Product / Material</th>
                            <th scope="col">Weight (Kg)</th>
                            {{-- <th scope="col">Size (m2)</th> --}}
                            <th scope="col">Price (per 1 kg)</th>
                            <th scope="col" colspan="3">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($shipments as $shipment)
                            <tr>
                                <td style="vertical-align: middle;">
                                    <img class="image-fluid me-3" src="{{ asset($shipment->image) }}" alt="Material" width="100px">
                                    {{ $shipment->material }}
                                </td>
                                <td style="vertical-align: middle;">{{ $shipment->weight }}</td>
                                {{-- <td style="vertical-align: middle;">{{ $shipment->size }}</td> --}}
                                <td style="vertical-align: middle;">{{ $shipment->price }}</td>
                                @if ($shipment->is_ordered == 0)
                                    <td style="vertical-align: middle;">In store</td>
                                    <td style="vertical-align: middle;" scope="row">
                                        <a class="link-secondary" href="/shipment/edit/{{ $shipment->id }}">Edit</a>
                                    </td>
                                    <td style="vertical-align: middle;" scope="row">
                                        <form action="/shipment/delete/{{ $shipment->id }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-sm link-danger border-0" type="submit" onclick="return confirm('Are you sure?')">Delete</button>
                                        </form>
                                    </td>
                                @elseif ($shipment->is_ordered == 1)
                                    <td style="vertical-align: middle;" colspan="3">Ordered (under proccessing)</td>
                                @endif
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @else
            <p class="text-muted">No shipments yet</p>
        @endif
    </div>

</x-template>
