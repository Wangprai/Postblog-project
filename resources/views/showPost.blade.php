@extends('layout')

@section('content')
    <h1>{{ $post->title }}</h1>
    <img src="{{ asset('storage/'  . $post->image) }}" alt="Post Image">
    <h5>{{ $post->content }}</h5>
    <a href="{{ route('home') }}" class="btn btn-secondary">Back</a>
@endsection