<!DOCTYPE html>
<html lang="en">
<head>
    <meta content="text/html; charset=UTF-8" http-equiv="Content-Type">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="la-themes" name="author">
    <link href="{{asset('assets/images/favicon.png')}}" rel="icon" type="image/x-icon">
    <link href="{{asset('assets/images/favicon.png')}}" rel="shortcut icon" type="image/x-icon">

    <title>Dubai Lawyers - Login To Dashboard</title>

    <link href="{{asset('assets/login/vendor/fontawesome/css/all.css')}}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/" rel="preconnect">
    <link crossorigin href="https://fonts.gstatic.com/" rel="preconnect">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&amp;display=swap"
          rel="stylesheet">

    <link href="{{asset('assets/login/vendor/ionio-icon/css/iconoir.css')}}" rel="stylesheet">
    <link href="{{asset('assets/login/vendor/tabler-icons/tabler-icons.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/login/vendor/bootstrap/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/login/css/style.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/login/css/responsive.css')}}" rel="stylesheet" type="text/css">
    <style>
        .btn {
            padding: 7px;
        }
    </style>
</head>
<body>
<div class="app-wrapper d-block">
    <div class="">
        <main class="w-100 p-0">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 p-0">
                        <div class="login-form-container">
                            <div class="form_container">
                                <form class="app-form rounded-control" method="POST" action="{{ route('login') }}">
                                @csrf
                                    <div class="mb-3 text-center">
                                        <a class="logo d-inline-block" href="{{route('home')}}">
                                            <img alt="CollegeConnect" src="{{asset('assets/images/logo.png')}}" width="100">
                                        </a>
                                        <h3 class="text-primary-dark">Login to your Account</h3>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Email address</label>
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Password</label>
                                         <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="mb-3 form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                        <label class="form-check-label" for="formCheck1">remember me</label>
                                    </div>
                                    <div>
                                        <button class="btn btn-light-primary w-100"
                                           type="submit">Submit</button>
                                    </div>
                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>
<script src="{{asset('assets/login/js/jquery-3.6.3.min.js')}}"></script>
<script src="{{asset('assets/login/vendor/bootstrap/bootstrap.bundle.min.js')}}"></script>
</body>
</html>