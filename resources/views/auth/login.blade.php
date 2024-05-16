
</html>

<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>INSPINIA | Login</title>

    <link href="{{ asset('admin/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/font-awesome/css/font-awesome.css') }}" rel="stylesheet">

    <link href="{{ asset('admin/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/css/style.css') }}" rel="stylesheet">
</head>

<body class="gray-bg">
    <div class="middle-box text-center loginscreen animated fadeInDown">
        <div>
            <div>

                <h1 class="logo-name">IN+</h1>

            </div>
            <h3>Welcome to IN+</h3>
            <p>Login in. To see it in action.</p>
            <x-auth-session-status class="mb-4" :status="session('status')" />
            <form class="m-t" role="form" action="{{ route('login') }}" method="post">
                @csrf
                <div class="form-group">
                    <input name="email" type="email" class="form-control" value="{{ old('email') }}" placeholder="Email" >
                    <x-input-error :messages="$errors->get('email')" class="error" />
                </div>
                <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="Password" >
                    <x-input-error :messages="$errors->get('password')" class="error" />
                </div>
                <button type="submit" class="btn btn-primary block full-width m-b">Login</button>

                    @if (Route::has('password.request'))
                        <a href="#"><small>Forgot password?</small></a>
                @endif
                <p class="text-muted text-center"><small>Do not have an account?</small></p>
                <a class="btn btn-sm btn-white btn-block" href="{{ route('register') }}">Create an account</a>
            </form>
            <p class="m-t"> <small>Inspinia we app framework base on Bootstrap 3 &copy; 2014</small> </p>
        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="{{ asset('admin/js/jquery-3.1.1.min.js') }}"></script>
    <script src="{{ asset('admin/js/bootstrap.min.js') }}"></script>

</body>

</html>

