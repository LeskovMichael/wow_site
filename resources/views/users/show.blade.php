@extends('layouts.main')
@section('content')
    <table class="table table-hover table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Имя</th>
            <th scope="col">Фамилия</th>
            <th scope="col">Отчество</th>
        </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">{{$user->id}}</th>
                <td>{{$user->nickname}}</td>
                <td>{{$user->class}}</td>
                <td>{{$user->specialization}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->phone}}</td>
            </tr>
        </tbody>
    </table>
@endsection
