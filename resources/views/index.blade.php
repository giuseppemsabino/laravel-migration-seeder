<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Edu+TAS+Beginner:wght@400..700&family=Fredoka:wght@300..700&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Share+Tech+Mono&family=Tinos:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <title>Trains</title>

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