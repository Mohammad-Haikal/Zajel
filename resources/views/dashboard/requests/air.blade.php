<x-template>
    <main class="row g-0 col-12 bg-white">
        @include('partials.admin-sidebar')
        <div class="col-md-10 min-vh-100 p-3">
            <h2>Requested Air Shipments</h2>
            @if (count($requests) != 0)
                <div class="table-responsive">
                    <table class="table-striped table">
                        <thead class="table-dark">
                            <tr>
                                <th scope="col">Shipper Name</th>
                                <th scope="col">Shipper Address</th>
                                <th scope="col">Consignee's Name</th>
                                <th scope="col">Consignee's Address</th>
                                <th scope="col" colspan="4">On Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($requests as $request)
                                @if ($request->status != 3)
                                    <tr>
                                        <td style="vertical-align: middle;">{{ $request->shipper_name }}</td>
                                        <td style="vertical-align: middle;">{{ $request->shipper_address }}</td>
                                        <td style="vertical-align: middle;">{{ $request->consignee_name }}</td>
                                        <td style="vertical-align: middle;">{{ $request->consignee_address }}</td>
                                        <td style="vertical-align: middle;">{{ date('M d, Y', strtotime($request->created_at)) }}</td>
                                        <td style="vertical-align: middle;"><a class="btn btn-sm btn-secondary" href="/air/view/{{ $request->id }}">View Details</a></td>
                                        <td style="vertical-align: middle;"><a class="btn btn-sm {{ ($request->status == 0 || $request->status == 1) ? 'btn-primary' : 'btn-secondary' }}" href="/air-offer/{{ $request->id }}">View Offers</a></td>

                                        @if ($request->status == 2)
                                            <td style="vertical-align: middle;">
                                                <form action="/air/arrived/{{ $request->id }}" method="post">
                                                    @csrf
                                                    @method('PUT')
                                                    <button class="btn btn-sm btn-primary border-0" type="submit" onclick="return confirm('Are you sure?')">Arrived</button>
                                                </form>
                                            </td>
                                        @endif
                                    </tr>
                                @endif
                            @endforeach
                        </tbody>
                    </table>
                </div>
                {{ $requests->links() }}
            @else
                <p class="text-muted">No requests yet</p>
            @endif
        </div>
    </main>
</x-template>
