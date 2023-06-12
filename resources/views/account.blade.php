@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-2">
            <a href="{{ route('blog_posts.index', ['user_id' => $user->id]) }}" class="btn btn-warning w-100">Мои посты</a>
        </div>
        <div class="col-md-2">
            <a href="/" class="btn btn-outline-dark w-100">Назад</a>
        </div>
    </div>

    @include('includes.user_structure', array(
        'users' => [$user],
    ))
@endsection
