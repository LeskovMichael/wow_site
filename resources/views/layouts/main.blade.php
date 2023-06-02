<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <title>Document</title>
</head>
<body>
    <div class="container overflow-hidden px-4">
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('blog_posts.index') }}">Лента</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/">Подписки</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('users.index') }}">Личный кабинет</a>
            </li>
        </ul>
    </div>
    <div class="container overflow-hidden px-4">
        @yield('content')
    </div>
</body>
</html>
