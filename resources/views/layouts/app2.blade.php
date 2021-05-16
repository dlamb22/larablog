<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <title>{{ config('app.name', 'LaraBlog') }}</title>
    </head>
    <body>
        @include('inc.navbar')
        <div class="container my-4">
            @include('inc.messages')
            @yield('content')
        </div>
    </body>
</html>