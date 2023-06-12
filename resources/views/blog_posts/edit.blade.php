@extends('layouts.app')

@section('content')
    <form action="{{ route('blog_posts.update', $blogPost->id) }}" method="post">
        @csrf
        @method('patch')
        <div class="form-group">
            <label for="title">Заголовок</label>
            <input type="title" name="title" class="form-control" id="title" value="{{ $blogPost->title }}">
        </div>
        <div class="form-group">
            <label for="content">Контент</label>
            <input type="content" name="content" class="form-control" id="content" value="{{ $blogPost->content }}">
        </div>
        <div class="form-group">
            <label for="category">Категория</label>
            <input type="category" name="category" class="form-control" id="category" value="{{ $blogPost->blog_category->name }}">
        </div>
        <div class="form-group">
            <label for="category">Теги</label>
            <div class="input-group">
                @foreach($blogPost->blog_tags as $blogTag)
                    <input type="text" value="{{ $blogTag->name }}" class="form-control" name="tag_names[]">
                @endforeach
            </div>
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Сохранить</button>
    </form>
@endsection
