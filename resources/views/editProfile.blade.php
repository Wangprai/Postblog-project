@extends('layout')

@section('content')
    <div style="display: flex; justify-content: center;">
        <div class="card" style="width:50%;">
            <div class="card-content">
                <div class="header text-center mt-5">
                    <h1>Edit Profile</h1>
                </div>

                <form action="{{ route('updateProfile', $user) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3 mx-3" style="width: 80%;">
                        <label for="firstname">Firstname :</label>
                        <input type="text" name="firstname" class="form-control" value="{{ $user->firstname }}" required>
                    </div>
                    <div class="mb-3 mx-3" style="width: 80%;">
                        <label for="lastname ">Lastname :</label>
                        <input type="text" name="lastname" class="form-control" value="{{ $user->lastname }}" required>
                    </div>
                    <div class="mb-3 mx-3" style="width: 80%;">
                        <label for="username">Username :</label>
                        <input type="text" name="username" class="form-control" value="{{ $user->username }}" required>
                    </div>
                    <div class="mb-3 mx-3" style="width: 80%;">
                        <label for="email">Email :</label>
                        <input type="email" name="email" class="form-control" value="{{ $user->email }}" required>
                    </div>
                    <div class="mb-3 mx-3" style="width: 80%;">
                        <label for="gender">Gender:</label>
                        <select class="form-control" name="gender" id="gender" required>
                            <option value="">{{ $user->gender }}</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="other">Other</option>
                        </select>
                    </div>
                    <div class="button-group text-center mb-3">
                        <a href="{{ route('home') }}" class="btn btn-secondary">Back</a>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection