@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-1">
            <a href="{{ route('blog_posts.create') }}" class="btn btn-warning w-100">Создать</a>
        </div>
        <div class="col-md-1">
            <a href="{{ url()->previous() }}" class="btn btn-outline-dark w-100">Назад</a>
        </div>

        <div class="col-md-5"></div>

        <div class="col-md-5">{{ $blogPosts->withQueryString()->links() }}</div>
    </div>
    <br>
    @foreach($blogPosts as $blogPost)
        @include('includes.blog_post_structure', array(
            'blogPost' => $blogPost,
        ))
    @endforeach
@endsection
