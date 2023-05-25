<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{--<link rel=“stylesheet“ href="{{ asset('css/app.css') }}">--}}
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <title>Document</title>
</head>
<body>
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="{{ route("wow_users.index") }}">Start page</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route("wow_users.create") }}">Add wow player</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{-- route("wow_users.edit") --}}">Edit wow player</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{-- route("wow_users.update") --}}">update</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{-- route("wow_users.destroy") --}}">Remove wow player</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active disabled" href="#">Coming soon</a>
        </li>
    </ul>
    @yield('content')
</body>
</html>
