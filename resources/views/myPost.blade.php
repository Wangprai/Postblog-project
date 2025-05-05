@extends('layout')

@section('content')
    @if ($myPosts && $myPosts->count())
        <div class="container">
            <h2>You Posts</h2>
            @foreach ($myPosts as $post)
                <div class="card-container">
                    <div class="card mb-3" style="width: 80%;">
                        <div class="card-body">
                            <a href="{{ route('show', $post) }}">
                                <img src="{{ asset('storage/' . $post->image) }}" class="card-img-top" alt="...">
                            </a>
                            <h5 class="card-title mt-3">{{ $post->title }}</h5>
                            <p class="card-text">{{ $post->content }}</p>
                            <a href="{{ route('edit', $post) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('delete', $post) }}" method="POST" style="display:inline"
                                onsubmit="return confirm('Are you sure?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
            </div>
        </div>

    @else
        <div class="container text-center" style="display: flex; justify-content: center;">
            <p>Empty Post</p>
        </div>
    @endif

@endsection