<!DOCTYPE html>
<html lang="en">
<head>
    <meta content="text/html; charset=UTF-8" http-equiv="Content-Type">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="la-themes" name="author">
    <link href="{{asset('assets/images/favicon.png')}}" rel="icon" type="image/x-icon">
    <link href="{{asset('assets/images/favicon.png')}}" rel="shortcut icon" type="image/x-icon">

    <title>CollegeConnect101 - Reset Password</title>

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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet">
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
                                <form class="app-form rounded-control" method="POST" action="{{ route('password.email') }}">
                                @csrf
                                    <div class="mb-3 text-center">
                                        <a class="logo d-inline-block" href="{{route('home')}}">
                                            <img alt="CollegeConnect101" src="{{asset('assets/images/logo.png')}}" width="100">
                                        </a>
                                        <h3 class="text-primary-dark">Reset Password</h3>
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
                                    <div>
                                        <button class="btn btn-light-primary w-100"
                                           type="submit">Send Password Reset Link</button>
                                    </div>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script>
    @if (session('status'))
        toastr.success("{{ session('status') }}");
    @endif

    @if ($errors->any())
        @foreach ($errors->all() as $error)
            toastr.error("{{ $error }}");
        @endforeach
    @endif
</script>
</body>
</html>