@extends('layout')

@section('content')
<h1>Edit Profile</h1>
<button type="submit" class="btn btn-success">Save</button>
<a href="{{ route('profile') }}" class="btn btn-secondary">Back</a>
@endsection