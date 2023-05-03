<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('page.title')</title>
    <link rel="icon" type="image/x-icon" href="{{ Vite::asset('resources/img/favicon.ico') }}">
    @vite('resources/js/app.js')
</head>
<body>
    @include('partials.header')
    <main>
        @yield('page.main')
    </main>
    @include('partials.footer')
</body>
</html>