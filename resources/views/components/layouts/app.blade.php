<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{ asset('build/assets/app-BVdCxMie.css') }}">
        <!-- <script src="build/assets/app-CJy8ASEk.js"></script> -->

        <title>{{ $title ?? config('app.name') }}</title>
    </head>
    <body>
        {{ $slot }}
        <div class="flex justify-center items-center h-96">
            <a href="/home" class="m-4 bg-cyan-600 text-white rounded-lg p-3 text-l">Home</a>
        </div>
        <script src="{{ asset('build/assets/app-CJy8ASEk.js') }}"></script>
    </body>
</html>
