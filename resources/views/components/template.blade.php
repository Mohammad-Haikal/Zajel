<!DOCTYPE html >
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link type="image/x-icon" href="{{ asset('images/favicon.ico') }}" rel="icon">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/jquery-3.6.3.min.js') }}"></script>
    <title>Zajel</title>
</head>

<body style="overflow-x: hidden">
    @include('partials.navbar')
    {{ $slot }}
    @include('partials.footer')

    {{-- <div class="row g-0 vh-100">
        @include('partials.sidebar', ['style' => "d-none d-md-flex"])

        <div class="col-md h-100 overflow-auto p-3">
            {{ $slot }}
        </div>
    </div> --}}


    {{-- Flash Message --}}
    <x-flash-message />

    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
