@extends('layouts.main')
@section('content')
    <table class="table table-hover table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Имя</th>
            <th scope="col">Фамилия</th>
            <th scope="col">Отчество</th>
            <th scope="col">Электронная почта</th>
            <th scope="col">Номер телефона</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">{{$user->id}}</th>
            <td>{{$user->first_name}}</td>
            <td>{{$user->middle_name}}</td>
            <td>{{$user->last_name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->phone}}</td>
        </tr>
        </tbody>
    </table>
@endsection
