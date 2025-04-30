@extends('layout')

@section('content')
    <div class="button-create text-center">
        <a href="{{ route('create') }}" class="btn btn-md btn-primary rounded-pill">+ Create Post</a>
    </div>
    @if ($posts->count())
        @foreach ($posts as $post)
            <div class="container">
                <h2>All Posts</h2>
                <div class="card-container">
                    <div class="card mb-3" style="width: 80%;">
                        <div class="card-body">
                            <img src="{{ asset('storage/' . $post->image) }}" class="card-img-top" alt="...">
                            <h5 class="card-title">{{ $post->title }}</h5>
                            <p class="card-text">{{ $post->content }}</p>
                            <a href="#" class="btn btn-primary">Like</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach

    @else
        <div class="container text-center" style="display: flex; justify-content: center;">
            <p>Empty Post</p>
        </div>
    @endif

@endsection