@extends('layouts.main')
@section('content')
    <form action="{{ route('users.store') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="first_name">First name</label>
            <input type="first_name" name="first_name" class="form-control" id="first_name" placeholder="first_name">
        </div>
        <div class="form-group">
            <label for="middle_name">Middle name</label>
            <input type="middle_name" name="middle_name" class="form-control" id="middle_name" placeholder="middle_name">
        </div>
        <div class="form-group">
            <label for="last_name">Last name</label>
            <input type="last_name" name="last_name" class="form-control" id="last_name" placeholder="last_name">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control" id="email" placeholder="email">
        </div>
        <div class="form-group">
            <label for="phone">Phone number</label>
            <input type="phone" name="phone" class="form-control" id="phone" placeholder="phone">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" class="form-control" id="password" placeholder="password">
        </div>
        <button type="submit" class="btn btn-primary">Add</button>
    </form>
@endsection
