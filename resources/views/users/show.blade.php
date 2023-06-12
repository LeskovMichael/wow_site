@extends('layouts.app')

@section('content')
    <div class="row">
        @can('update', $user)
            <div class="col-md-2">
                <form action="{{ route('users.edit', $user->id) }}" method="post">
                    @csrf
                    @method('get')
                    <input class="btn btn-success w-100" type="submit" value="Изменить" />
                </form>
            </div>
        @else
            <div class="col-md-2"></div>
        @endcan
        @can('delete', $user)
            <div class="col-md-2">
                <form action="{{ route('users.destroy', $user->id) }}" method="post">
                    @csrf
                    @method('delete')
                    <input class="btn btn-danger w-100" type="submit" value="Удалить" />
                </form>
            </div>
        @else
            <div class="col-md-2"></div>
        @endcan
    </div>
    @include('includes.user_structure', array(
        'users' => [$user],
    ))
@endsection
