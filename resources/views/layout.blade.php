<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Postblog</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body class="d-flex flex-column min-vh-100">
    <div class="container">
        <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
            <a href="{{ route('home') }}"
                class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
                <svg class="bi me-2" width="40" height="32" aria-hidden="true">
                    <use xlink:href="#bootstrap"></use>
                </svg>
                <span class="fs-4">PostBlog</span>
            </a>

            <ul class="nav nav-masthead">
                <li class="nav-item"><a href="{{ route('home') }}" class="nav-link" aria-current="page">Home</a></li>
                <li class="nav-item"><a href="{{ route('likedPosts') }}" class="nav-link">Liked Post</a></li>
                <li class="nav-item"><a href="{{ route('ownerPost') }}" class="nav-link">You Post</a></li>
                <li class="nav-item"><a href="{{ route('profile') }}" class="nav-link">Profile</a></li>
                <li class="nav-item"><a href="{{ route('about') }}" class="nav-link">About</a></li>
                <li class="nav-item">
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-primary">Sign out</button>
                    </form>
                </li>
            </ul>
        </header>
    </div>
    
    <div class="content">
        @yield('content')
    </div>
        
    <footer class="bg-dark text-white mt-auto">
        <div class="content-footer mx-3 mt-3">
            <p>@Copyright 2025.</p>
        </div>
    </footer>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"></script>

</html>