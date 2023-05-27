@extends('layouts.main')
@section('content')
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="#">Найти игрока</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Добавить игрока</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Сгенерировать игрока</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Изменить игрока</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Удалить игрока</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active disabled" href="#">Coming soon</a>
        </li>
    </ul>
    <table class="table table-hover table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Имя</th>
            <th scope="col">Класс</th>
            <th scope="col">Специализация</th>
        </tr>
        </thead>
        <tbody>
        @foreach($wowUsers as $wowUser)
            <tr>
                <th scope="row">{{$wowUser->id}}</th>
                <td>{{$wowUser->nickname}}</td>
                <td>{{$wowUser->class}}</td>
                <td>{{$wowUser->specialization}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
