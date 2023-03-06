<x-template>
    <div class="min-vh-100 container my-2">
        <h1 class="col">My Sea Shipment Requests</h1>

        @if (count($requests) != 0)
            <div class="table-responsive">
                <table class="table-striped table">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">Shipper</th>
                            <th scope="col">Consignee</th>
                            <th scope="col">Notify Address</th>
                            <th scope="col">Carrier's Reference</th>
                            <th scope="col" colspan="3">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($requests as $request)
                            <tr>
                                <td style="vertical-align: middle;">{{ $request->shipper }}</td>
                                <td style="vertical-align: middle;">{{ $request->consignee }}</td>
                                <td style="vertical-align: middle;">{{ $request->notify_address }}</td>
                                <td style="vertical-align: middle;">{{ $request->carrier_reference }}</td>

                                @if ($request->status == 0)
                                    <td style="vertical-align: middle;">Pending</td>
                                    <td style="vertical-align: middle;"><a class="link-secondary" href="/sea/edit/{{ $request->id }}">Edit</a></td>

                                    <td style="vertical-align: middle;" scope="row">
                                        <form action="/sea/delete/{{ $request->id }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-sm link-danger border-0" type="submit" onclick="return confirm('Are you sure?')">Delete</button>
                                        </form>
                                    </td>
                                @elseif($request->status == 1)
                                    <td style="vertical-align: middle;">Offers ready (under proccessing)</td>
                                    <td style="vertical-align: middle;" colspan="2"><a class="btn-primary" href="/sea-offer/{{ $request->id }}">Select Offer</a></td>
                                @elseif($request->status == 2)
                                    <td style="vertical-align: middle;" colspan="3">Shipment in progress</td>
                                @elseif ($request->status == 3)
                                    <td style="vertical-align: middle;" colspan="3">Arrived</td>
                                @endif
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            {{ $requests->links() }}
        @else
            <p class="text-muted">No requests yet</p>
        @endif
    </div>

</x-template>
