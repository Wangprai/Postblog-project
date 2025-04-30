@extends('layout')

@section('content')
    <div class="button-create text-center">
        <a href="{{ route('create') }}" class="btn btn-md btn-primary rounded-pill">+ Create Post</a>
    </div>
    @if ($posts->count())
        
            <div class="container">
                <h2>All Posts</h2>
                @foreach ($posts as $post)
                <div class="card-container">
                    <div class="card mb-3" style="width: 80%;">
                        <div class="card-body">
                            <img src="{{ asset('storage/' . $post->image) }}" class="card-img-top" alt="...">
                            <h5 class="card-title mt-3">{{ $post->title }}</h5>
                            <p class="card-text">{{ $post->content }}</p>
                            <a href="{{ route('show', $post) }}" class="btn btn-primary">View</a>
                            <a href="{{ route('edit', $post) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('delete', $post) }}" method="POST" style="display:inline" onsubmit="return confirm('Are you sure?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
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