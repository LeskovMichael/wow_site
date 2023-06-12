@extends('layouts.app')

@section('content')
    <form action="{{ route('users.update', $user->id) }}" method="post">
        @csrf
        @method('patch')
        <div class="form-group">
            <label for="last_name">Фамилия</label>
            <input type="last_name" name="last_name" class="form-control" id="last_name" placeholder="last_name" value="{{ $user->last_name }}">
        </div>
        <div class="form-group">
            <label for="first_name">Имя</label>
            <input type="first_name" name="first_name" class="form-control" id="first_name" placeholder="first_name" value="{{ $user->first_name }}">
        </div>
        <div class="form-group">
            <label for="middle_name">Отчество</label>
            <input type="middle_name" name="middle_name" class="form-control" id="middle_name" placeholder="middle_name" value="{{ $user->middle_name }}">
        </div>
        <div class="form-group">
            <label for="phone">Номер телефона</label>
            <input type="phone" name="phone" class="form-control" id="phone" placeholder="phone" value="{{ $user->phone }}">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control" id="email" placeholder="email" value="{{ $user->email }}">
        </div>
        <div class="form-group">
            <label for="password">Пароль</label>
            <input type="password" name="password" class="form-control" id="password" placeholder="password">
        </div>
        <div class="form-group">
            <label for="password">Подтвердите пароль</label>
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
        </div>

        <button type="submit" class="btn btn-primary">Сохранить</button>
    </form>
@endsection
