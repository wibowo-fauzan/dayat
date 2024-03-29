<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gallery Foto</title>
    <link rel="stylesheet" href="asset/main/main.css">
    @include('linkcdn.linkbootstrap')
</head>

<body class="welcome">
    <nav class="navbar bg-dark border-bottom border-body" data-bs-theme="dark">
        <div class="container">
            <img src="" width="10" class="navbar-brand" alt="">

            @auth
                <!-- User is authenticated (logged in) -->
                <form action="{{ route('logout') }}" method="post">
                    @csrf
                    <button type="submit" class="btn btn-outline-danger">Log Out</button>
                </form>
            @else
                <!-- User is not authenticated (not logged in) -->
                <a href="{{ route('login') }}" class="btn btn-outline-success">Log In</a>
            @endauth
        </div>
    </nav>
</body>
</body>
</html>
