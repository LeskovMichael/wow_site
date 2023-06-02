@extends('layouts.main')
@section('content')
    <div class="container overflow-hidden px-4">
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
                @foreach($users as $user)
                        <tr>
                            <th scope="row"><a href="{{ route('users.show', $user->id) }}">{{$user->id}}</a></th>
                            <td>{{$user->first_name}}</td>
                            <td>{{$user->middle_name}}</td>
                            <td>{{$user->last_name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->phone}}</td>
                        </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
