<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up</title>
    <link rel="stylesheet" href="asset/main/main.css">
    @include('linkcdn.linkbootstrap')
</head>

<body>
    <div class="container py-4">
        <div class="row g-0 align-items-center">
            <div class="col-lg-6 mb-5 mb-lg-0">
                <div class="card cascading-right"
                    style=" background: hsla(0, 0%, 100%, 0.55); backdrop-filter: blur(30px); ">
                    <div class="card-body p-5 shadow-5">
                        <h2 class="fw-bold">Sign up now</h2>
                        <p class="fw-bolder">If you already have an account, please do <a href="/login">Sign Up</a></p>
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif

                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <!-- full name -->
                            <div class="row">
                                <div class="form-outline mb-4">
                                    <div class="form-outline">
                                        <label class="form-label fw-normal" for="name">Full Name</label>
                                        <input type="text" id="name" name="name" class="form-control form-control-lg"
                                            required />
                                    </div>
                                </div>
                            </div>

                            <!-- Email input -->
                            <div class="form-outline mb-4">
                                <label class="form-label fw-normal" for="email">Email address</label>
                                <input type="email" id="email" name="email" class="form-control form-control-lg"
                                    required />
                            </div>

                            <!-- Password input -->
                            <div class="form-outline mb-4">
                                <label class="form-label fw-normal" for="password">Password</label>
                                <input type="password" id="password" name="password"
                                    class="form-control form-control-lg" required />
                            </div>

                            <!-- Password confirmation input -->
                            <div class="form-outline mb-4">
                                <label class="form-label fw-normal" for="password_confirmation">Confirm Password</label>
                                <input type="password" id="password_confirmation" name="password_confirmation"
                                    class="form-control form-control-lg" required />
                            </div>

                            <!-- Checkbox -->
                            <div class="form-check d-flex mb-4">
                                <input class="form-check-input me-2" type="checkbox" value="" id="form2Example33"
                                    checked />
                                <label class="form-check-label" for="form2Example33">Remember me</label>
                            </div>

                            <!-- Submit button -->
                            <button type="submit" class="btn btn-primary btn-block mb-4">
                                Sign up
                            </button>

                        </form>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 mb-5 mb-lg-0">
                <img src="https://mdbootstrap.com/img/new/ecommerce/vertical/004.jpg"
                    class="img-fluid rounded-4 shadow-4" alt="" />
            </div>
        </div>
    </div>
    <!-- Jumbotron -->
    </section>
</body>

</html>
