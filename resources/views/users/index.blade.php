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
        @foreach($users as $user)

                <tr>
                    <th scope="row"><a href="{{ route('users.show', $user->id) }}">{{$user->id}}</a></th>
                    <td>{{$user->first_name}}</td>
                    <td>{{$user->middle_name}}</td>
                    <td>{{$user->last_name}}</td>
                </tr>

        @endforeach
        </tbody>
    </table>
@endsection
