<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <title>{{ $title ?? 'Fumetti Hack70' }}</title>
</head>

<body>
    
    <x-navbar />

    <div class="min-vh-100"> 
        {{ $slot }}
    </div>

    <x-footer />

</body>

</html>