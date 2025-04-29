@extends('layout')

@section('content')
    <h1>Edit Post</h1>

    <form action="#" method="" enctype="multipart/form-data">
        <div>
            <label for="title" name="title">Title</label>
            <input type="text" value="" require>
        </div>
        <div>
            <label for="image" name="image">Image</label>
            <input type="file" value="" require>
        </div>
        <div>
            <label for="content" name="content">content</label>
            <input type="text" value="" require>
        </div>
        <button type="submit">Edit Post</button>
        <a href="#" class="btn btn-secondary">Back</a>
    </form>

@endsection