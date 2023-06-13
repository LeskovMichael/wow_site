@extends('layouts.app')

@section('content')
    <form action="{{ route('blog_posts.store') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="title">Заголовок</label>
            <input type="title" name="title" class="form-control" id="title" placeholder="Заголовок">
        </div>
        <div class="form-group">
            <label for="content">Контент</label>
            <input type="content" name="content" class="form-control" id="content" placeholder="Контент">
        </div>
        <div class="form-group">
            <label for="category">Категория</label>
            <input type="category" name="category" class="form-control" id="category" placeholder="Категория">
        </div>
        <div class="form-group">
            <label for="category">Теги</label>
            <div class="input-group">
                <input type="text" placeholder="Тег" class="form-control" name="tag_1">
                <input type="text" placeholder="Тег" class="form-control" name="tag_2">
                <input type="text" placeholder="Тег" class="form-control" name="tag_3">
            </div>
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Создать</button>
    </form>
@endsection
