<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- <link rel="stylesheet" href="public/build/assets/app-DlbDCAyn.css"> -->
        @vite(["resources/css/app.css"])
        <script src="public/build/assets/app-CJy8ASEk.js"></script>

        <title>{{ $title ?? config('app.name') }}</title>
    </head>
    <body>
        {{ $slot }}
    </body>
</html>
