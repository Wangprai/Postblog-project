<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body class="index-background">
    <div class="container text-center center">
        <h1 class="welcome-text mb-5">Welcome to PostBlog Website</h1>
        <p class="mb-5">Get start now</p>
        <div class="button-group">
            <a href="{{ route('register-form') }}" class="btn btn-primary btn-lg">Sign in</a>
            <a href="{{ route('login-form') }}" class="btn btn-outline-secondary btn-lg ">Log in</a>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"></script>
</html>