@extends('layout')

@section('content')
    <div style="display: flex; justify-content: center;">
        <div class="card" style="width:50%;">
            <div class="card-content">
                <div class="header text-center mt-5">
                    <h1>Create Post</h1>
                </div>

                <form action="{{ route('store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-3 mx-3" style="width: 80%;">
                        <label for="title">Title :</label>
                        <input type="text" name="title" class="form-control" required>
                    </div>
                    <div class="mb-3 mx-3" style="width: 80%;">
                        <label for="image">Image :</label>
                        <input type="file" name="image" class="form-control" required>
                    </div>
                    <div class="mb-3 mx-3" style="width: 80%;">
                        <label for="content">Content :</label>
                        <textarea type="text" name="content" class="form-control" required></textarea>
                    </div>
                    <div class="button-group mb-3">
                        <a href="{{ route('homePage') }}" class="btn btn-secondary">Back</a>
                        <button class="btn btn-primary" type="submit">Create Post</button>
                    </div>
                </form>
            </div>

        </div>
    </div>

@endsection