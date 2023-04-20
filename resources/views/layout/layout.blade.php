@props(['title'])

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Vitamine Bo {{ $title ?? '' }}</title>

        <!-- Styles -->
        <style>

        </style>

        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="antialiased">
        {{ $slot }}
    </body>
</html>
