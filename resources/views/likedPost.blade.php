@extends('layout')

@section('content')
@if ($likedPosts && $likedPosts->count())
        <div class="container">
            <h2>You Posts</h2>
            @foreach ($likedPosts as $post)
                <div class="card-container">
                    <div class="card mb-3" style="width: 80%;">
                        <div class="card-body">
                            <a href="{{ route('show', $post) }}">
                                <img src="{{ asset('storage/' . $post->image) }}" class="card-img-top" alt="...">
                            </a>
                            <h5 class="card-title mt-3">{{ $post->title }}</h5>
                            <p class="card-text">{{ $post->content }}</p>
                            @php
                                $liked = auth()->user() && $post->likedByUsers->contains(auth()->user()->id);
                            @endphp
                            
                            <form action="{{ $liked ? route('posts.unlike', $post) : route('posts.like', $post) }}" method="POST" style="display: inline;">
                                @csrf
                                @if ($liked)
                                    <button type="submit" class="btn btn-secondary">Unlike ({{ $post->likedByUsers->count() }})</button>
                                @else
                                    <button type="submit" class="btn btn-primary">Like ({{ $post->likedByUsers->count() }})</button>
                                @endif
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