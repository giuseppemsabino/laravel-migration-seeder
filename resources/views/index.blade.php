<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boiler</title>

    @vite(["resources/sass/app.scss","resources/js/app.js"])
</head>
<body>
    <header class="bg-primary text-white text-center py-3 mb-4">
        <h1>Train Schedule</h1>
</header>
<div class="container my-5">

    <section class=" gap-3 row d-flex justify-content-center flex-wrap">

        @foreach ($trains as $train)
            <div class="card col-3">
                <div class="card-body">

                    <h2>{{ $train->company }}</h2>
                    <p><strong>Train Code:</strong> {{ $train->train_code }}</p>
                    <p><strong>Departure:</strong> {{ $train->departure_time }}</p>
                    <p><strong>Arrival:</strong> {{ $train->arrival_time }}</p>
                    <p><strong>On Time:</strong> {{ $train->on_time ? 'Yes' : 'No' }}</p>
                </div>
            </div>
        @endforeach
    </section>
</div>


</body>
</html>