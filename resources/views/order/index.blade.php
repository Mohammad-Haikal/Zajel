<x-template>
    <div class="min-vh-100 container my-2">
        <h1 class="col">My Orders</h1>

        @if (count($orders) != 0)
            <div class="table-responsive">
                <table class="table-striped table">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">Product / Material</th>
                            <th scope="col">Price (per 1 kg)</th>
                            <th scope="col" colspan="2">State</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($orders as $order)
                            <tr>
                                <td style="vertical-align: middle;">
                                    <img class="image-fluid me-3" src="{{ asset($order->shipment->image) }}" alt="Material" width="100px">
                                    {{ $order->shipment->material }}
                                </td>
                                <td style="vertical-align: middle;">{{ $order->shipment->price }}</td>
                                <td style="vertical-align: middle;">{{ $order->state }}</td>

                                <td style="vertical-align: middle;" scope="row">
                                    <form action="/order/delete/{{ $order->shipment->id }}/{{ $order->id }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-sm link-danger border-0" type="submit" onclick="return confirm('Are you sure?')">Cancel</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @else
            <p class="text-muted">No orders yet</p>
        @endif
    </div>

</x-template>
