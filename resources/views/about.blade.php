<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ "About | " . config('app.name') }}</title>
    <link href="{{ asset('css/style.css')  }}" rel="stylesheet">
</head>
<body>
     @include("component.header") 
     @include("component.footer") 
</body>
</html>
