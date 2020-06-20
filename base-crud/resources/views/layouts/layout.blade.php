<!DOCTYPE html>
<html lang="it" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="{{ asset("css/app.css") }}">
        <title></title>
    </head>
    <body>
        @include('components.header')
        @yield('main')
        @include('components.footer')

    </body>
</html>
