<x-template>
    <div class="min-vh-100 container my-2">
        <div class="d-flex align-items-center mb-2">
            <h1 class="col">Request Offers</h1>
            @if (Auth::user()->role == 1 && $request->status < 2)
                <a class="btn btn-custom-primary d-flex align-items-center shadow-sm" href="/sea-offer/add/{{ $request->id }}"><i class="bi bi-plus me-1"></i>Add New Offer</a>
            @endif
        </div>

        @if (count($offers) != 0)
            <div class="table-responsive">
                <table class="table-striped table">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">Company</th>
                            <th scope="col">Price (per 1 kg)</th>
                            <th scope="col">Total Price</th>
                            <th scope="col">Date of Loading</th>
                            <th scope="col" colspan="2">Date of Discharge</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($offers as $offer)
                            <tr>
                                <td style="vertical-align: middle;">{{ $offer->company }}</td>
                                <td style="vertical-align: middle;">{{ $offer->price }}</td>
                                <td style="vertical-align: middle;">{{ $offer->total_price }}</td>
                                <td style="vertical-align: middle;">{{ $offer->date_of_loading }}</td>
                                <td style="vertical-align: middle;">{{ $offer->date_of_discharge }}</td>

                                <td style="vertical-align: middle;" scope="row">
                                    @if ($request->status == 1)
                                        <form action="/sea-offer/choose/{{ $offer->seaRequest->id }}/{{ $offer->id }}" method="post">
                                            @csrf
                                            <button class="btn btn-sm btn-primary border-0" type="submit" onclick="return confirm('Are you sure?')">Choose</button>
                                        </form>
                                    @elseif($request->status == 2)
                                        Selected
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @else
            <p class="text-muted">No offers yet</p>
        @endif
    </div>

</x-template>
