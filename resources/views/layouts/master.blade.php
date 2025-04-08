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
    
    
    @include('partials.header')
    
    @yield('content')
    
    @include('partials.footer')
    
    </body>
    </html>