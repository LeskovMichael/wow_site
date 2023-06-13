@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-2">
            <a href="{{ route('users.index') }}" class="btn btn-warning w-100">Все пользователи</a>
        </div>
        <div class="col-md-2">
            <a href="/" class="btn btn-outline-dark w-100">Назад</a>
        </div>
    </div>
@endsection
