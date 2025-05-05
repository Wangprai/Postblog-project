@extends('layout')

@section('content')
    <div class="container">
        <h1>{{ ($user->username) }}</h1>
        <div>
            <img src="..." alt="">
            <h5>Firstname: {{ ($user->firstname) }} </h5>
            <h5>Lastname: {{ ($user->lastname) }}</h5>
            <h5>Email: {{ ($user->email) }}</h5>
            <h5>Gender: {{ ($user->gender) }}</h5>
            <p>Bio..........</p>
        </div>
        <a href="{{ route('editProfile') }}" class="btn btn-primary">Edit Profile</a>
        <button type="submit" class="btn btn-danger">Delete User</button>
    </div>
@endsection