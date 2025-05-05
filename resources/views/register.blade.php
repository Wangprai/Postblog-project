<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

    <div class="container">
        <div class="card p-4">
            <h1 class="text-center mb-3">Register</h1>
            <form action="{{ route('register') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="firstname">Firstname:</label>
                    <input type="text" class="form-control" name="firstname" id="firstname" required>
                </div>

                <div class="mb-3">
                    <label for="lastname">Lastname:</label>
                    <input type="text" class="form-control" name="lastname" id="lastname" required>
                </div>

                <div class="mb-3">
                    <label for="username">Username:</label>
                    <input type="text" class="form-control" name="username" id="username" required>
                </div>

                <div class="mb-3">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" name="email" id="email" required>
                </div>

                <div class="mb-3">
                    <label for="age">Age:</label>
                    <input type="number" class="form-control" name="age" id="age" required>
                </div>

                <div class="mb-3">
                    <label for="gender">Gender:</label>
                    <select class="form-control" name="gender" id="gender" required>
                        <option value="">-- Select Gender --</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="other">Other</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="password">Password:</label>
                    <input type="password" class="form-control" name="password" id="password" required>
                </div>

                <div class="mb-3">
                    <label for="password_confirmation">Confirm Password:</label>
                    <input type="password" class="form-control" name="password_confirmation" id="password_confirmation"
                        required>
                </div>

                <button type="submit" class="btn btn-primary">Confirm</button>
                <a href="{{ route('index') }}" class="btn btn-secondary ms-2">Back</a>
            </form>
        </div>

    </div>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"></script>

</html>