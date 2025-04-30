@extends('layout')

@section('content')
    <div style="display: flex; justify-content: center;">
        <div class="card" style="width:50%;">
            <div class="card-content">
                <div class="header text-center mt-5">
                    <h1>Edit Post</h1>
                </div>
                
                <form action="{{ route('update', $post) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3 mx-3" style="width: 80%;">
                        <label for="title">Title :</label>
                        <input type="text" name="title" class="form-control" value="{{ $post->title }}" required>
                    </div>
                    <div class="mb-3 mx-3" style="width: 80%;">
                        <label for="current-image ">Current Image :</label>
                        <div class="mb-3 mx-3">
                            <img src="{{ asset('storage/' . $post->image) }}" alt="Current Image"
                                style="max-width: 200px; max-height:200px">
                        </div>
                        <input type="file" name="image" class="form-control">
                    </div>
                    <div class="mb-3 mx-3" style="width: 80%;">
                        <label for="content">Content :</label>
                        <textarea name="content" class="form-control" required>{{ $post->content }}</textarea>
                    </div>
                    <div class="button-group text-center mb-3">
                        <a href="{{ route('homePage') }}" class="btn btn-secondary">Back</a>
                        <button type="submit" class="btn btn-primary">Edit Post</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection