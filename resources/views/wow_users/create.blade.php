@extends('layouts.main')
@section('content')
    <form action="{{ route('wow_users.store') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="nickname">Nickname</label>
            <input type="nickname" name="nickname" class="form-control" id="nickname" placeholder="nickname">
        </div>
        <div class="form-group">
            <label for="class">Class</label>
            <input type="class" name="class" class="form-control" id="class" placeholder="class">
        </div>
        <div class="form-group">
            <label for="specialization">Specialization</label>
            <input type="specialization" name="specialization" class="form-control" id="specialization" placeholder="specialization">
        </div>
        <button type="submit" class="btn btn-primary">Add</button>
    </form>
@endsection
