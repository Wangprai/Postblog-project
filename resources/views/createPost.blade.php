@extends('layout')

@section('content')
    <h1>Create Post</h1>

    <form action="#" method="" enctype="multipart/form-data">
        <div>
            <label for="title" name="title">Title</label>
            <input type="text" require>
        </div>
        <div>
            <label for="image" name="image">Image</label>
            <input type="file" require>
        </div>
        <div>
            <label for="content" name="content">content</label>
            <input type="text" require>
        </div>
        <button type="submit">Create Post</button>
        <a href="#" class="btn btn-secondary">Back</a>
    </form>
@endsection