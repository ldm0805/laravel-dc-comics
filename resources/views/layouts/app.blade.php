<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/js/app.js')
</head>
<body>
    {{-- Includo l'header --}}
    @include('partials.header')

    {{-- Includo il jumbotron --}}
    @include('partials.jumbotron')
    
    {{-- "Segnaposto" nella pagina per il contenuto  --}}
    @yield('content')

    {{-- Includo il footer --}}
    @include('partials.footer')
</body>
</html>