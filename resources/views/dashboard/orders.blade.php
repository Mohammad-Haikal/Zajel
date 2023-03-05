<x-template>
    <main class="row g-0 col-12 bg-white">
        @include('partials.admin-sidebar')
        <div class="col-md-10 min-vh-100 p-3">
            <h2>Ordered Shipments</h2>
            @if (count($orders) != 0)
                <div class="table-responsive">
                    <table class="table-striped table">
                        <thead class="table-dark">
                            <tr>
                                <th scope="col">Ordered By</th>
                                <th scope="col">Owned By Company</th>
                                <th scope="col">Product / Material</th>
                                <th scope="col" colspan="3">On Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($orders as $order)
                                @if ($order->state == 'Pending')
                                    <tr>
                                        <td style="vertical-align: middle;">
                                            <h5 class="mb-0">{{ $order->user->name }}</h5>
                                            <a class="link-secondary" href="mailto:{{ $order->user->email }}">{{ $order->user->email }}</a><br>
                                            <a class="link-secondary" href="tel:{{ $order->user->phone }}">{{ $order->user->phone }}</a>
                                        </td>

                                        <td style="vertical-align: middle;">
                                            <h5 class="mb-0">{{ $order->shipment->company_name }}</h5>
                                            <a class="link-secondary" href="mailto:{{ $order->shipment->company_email }}">{{ $order->shipment->company_email }}</a><br>
                                            <a class="link-secondary" href="tel:{{ $order->shipment->contact_number }}">{{ $order->shipment->contact_number }}</a>
                                        </td>

                                        <td style="vertical-align: middle;">
                                            <img class="image-fluid me-3" src="{{ asset($order->shipment->image) }}" alt="Material" width="100px">
                                            <a class="link-secondary" href="/shipment/view/{{ $order->shipment->id }}">{{ $order->shipment->material }}</a><br>
                                        </td>
                                        <td style="vertical-align: middle;">{{ date('M d, Y', strtotime($order->created_at)) }}</td>

                                        <td class="pe-0" style="vertical-align: middle;" scope="row">
                                            <form action="/order/finish/{{ $order->id }}" method="post">
                                                @csrf
                                                @method('PUT')
                                                <button class="btn btn-sm btn-primary" type="submit" onclick="return confirm('Are you sure?')">Finish</button>
                                            </form>
                                        </td>

                                        <td style="vertical-align: middle;" scope="row">
                                            <form action="/order/delete/{{ $order->shipment->id }}/{{ $order->id }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-sm btn-outline-danger" type="submit" onclick="return confirm('Are you sure?')">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endif
                            @endforeach
                        </tbody>
                    </table>
                </div>
                {{ $orders->links() }}
            @else
                <p class="text-muted">No orders yet</p>
            @endif

        </div>
    </main>
</x-template>
