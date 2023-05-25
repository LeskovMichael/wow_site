@extends('layouts.main')
@section('content')
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
            <tr>
                <th scope="row">{{$wowUser->id}}</th>
                <td>{{$wowUser->nickname}}</td>
                <td>{{$wowUser->class}}</td>
                <td>{{$wowUser->specialization}}</td>
            </tr>
        </tbody>
    </table>
@endsection
