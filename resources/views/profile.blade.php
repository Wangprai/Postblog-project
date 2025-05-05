@extends('layout')

@section('content')
    <h1>Profile</h1>
    <div>
        <img src="..." alt="">
        <h5>Username: </h5>
        <h5>Name: </h5>
        <p>Bio..........</p>
    </div>
    <a href="{{ route('editProfile') }}" class="btn btn-primary">Edit Profile</a>
    <button type="submit" class="btn btn-danger">Delete User</button>
@endsection