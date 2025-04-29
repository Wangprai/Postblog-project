@extends('layout')

@session('content')
    @if ()
        <a href="#" class="btn btn-primary rounded-pill">+ Create Post</a>
        <h1>All Posts</h1>
        <div class="card" style="width: 18rem;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Like</a>
            </div>
        </div> 
    @else
        <p>Empty Post</p>
    @endif
@endsession