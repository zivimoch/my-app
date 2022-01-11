<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=Home [ge, initial-scale=1.0">
    <link rel="stylesheet" href="/css/app.css">
    <title>{{$title}}</title>
    {{$style}}
</head>
<body>
    {{-- @include('layout.nav') --}}

    <x-navbar></x-navbar>
    </br>
    {{-- @yield('content') --}}
    {{$slot}}
</body>
</html>
