@extends('layouts.main')
@section('content')
    <div class="row">
        <div class="col-md-5">

        </div>
        <div class="col-md-1">
            <button type="button" class="btn btn-warning">
                <a href="{{ route('blog_posts.create') }}">Создать</a>
            </button>
        </div>
        <div class="col-md-1">
            <button type="button" class="btn btn-link">
                <a href="/">Назад</a>
            </button>
        </div>
        <div class="col-md-5">

        </div>
    </div>
    <br>
    @foreach($blogPosts as $blogPost)
        @include('layouts.post_structure', array(
            'blogPost' => $blogPost,
        ))
    @endforeach
@endsection
