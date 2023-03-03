<x-template>
    <div class="carousel slide carousel-fade" id="carousel" data-bs-ride="carousel" data-bs-pause="false">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="{{ asset('images/slider/airplane.jpg') }}" alt="..." style="height: 500px;object-fit: cover">
                <div class="imgFilter"></div>
                <div class="text-uppercase carousel-caption">
                    <small>We Deliver</small>
                    <h1>Cargo WorldWide</h1>
                    <p class="mb-0">Go beyond logistics, make the world go round and more forrevolution business.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{ asset('images/slider/ship.jpg') }}" alt="..." style="height: 500px;object-fit: cover">
                <div class="imgFilter"></div>
                <div class="text-uppercase carousel-caption">
                    <small>We Deliver</small>
                    <h1>Cargo WorldWide</h1>
                    <p class="mb-0">Go beyond logistics, make the world go round and more forrevolution business.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" data-bs-target="#carousel" data-bs-slide="prev" type="button">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" data-bs-target="#carousel" data-bs-slide="next" type="button">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</x-template>
