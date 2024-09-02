<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nepalgunj Living</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@2.44.0/tabler-icons.min.css">
    <link href="{{ asset('assets/frontend/css/style.css') }}" rel="stylesheet">
</head>

<body >
    <x-frontend.nav>
    </x-frontend.nav>



{{ $slot }}
</body>


</html>
