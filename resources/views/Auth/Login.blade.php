<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Log In</title>
    <link rel="stylesheet" href="asset/main/main.css">
    @include('linkcdn.linkbootstrap')
</head>
<section class="vh-100">
    <div class="container py-5 h-100 blur-backgroud">
        <div class=" border p-3 border-0 row d-flex align-items-center justify-content-center h-100">
            <div class="col-md-8 col-lg-7 col-xl-6">
                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.svg"
                    class="img-fluid" alt="Phone image">
            </div>
            <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1 mt-3">
                @if(session('error'))
                    <div>
                        {{ session('error') }}
                    </div>
                @endif
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <h1 class="fw-bolder">Log In</h1>
                    <p class="fw-bolder">If you don't have an account, please <a href="/register">log in</a></p>
                    <div class="form-outline mb-4">
                        <label class="form-label fw-normal" for="email">Email address</label>
                        <input type="email" id="email" name="email" class="form-control form-control-lg" required/>
                    </div>
                    <div class="form-outline mb-4">
                        <label class="form-label" for="password">Password</label>
                        <input type="password" id="password" name="password" class="form-control form-control-lg" required/>
                    </div>

                    <div class="form-outline mb-4">
                        <input class="form-check-input" type="checkbox" value="" id="form1Example3" checked />
                        <label class="form-check-label" for="form1Example3"> Remember me </label>
                    </div>
                    
                    <button type="submit" class="btn btn-primary btn-lg btn-block">Sign in</button>
                </form>
            </div>
        </div>
    </div>
</section>

<body>
</body>

</html>
