@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-5">

        </div>
        <div class="col-md-1">

        </div>
        <div class="col-md-1">
            <button type="button" class="btn btn-link">
                <a href="{{ url()->previous() }}">Назад</a>
            </button>
        </div>
        <div class="col-md-5">

        </div>
    </div>
    <br>
    @include('includes.blog_post_structure', array(
        'blogPost' => $blogPost,
    ))
@endsection
