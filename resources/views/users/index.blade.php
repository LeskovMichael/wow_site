@extends('layouts.app')

@section('content')
    @include('includes.user_structure', array(
        'users' => $users,
    ))
@endsection
