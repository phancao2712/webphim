{{-- <x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required
                autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox"
                    class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                    href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}

<!DOCTYPE HTML>
<html>

<head>
    <title>Glance Design Dashboard an Admin Panel Category Flat Bootstrap Responsive Website Template | Login Page ::
        w3layouts</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords"
        content="Glance Design Dashboard Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('admin/css/bootstrap.css') }}" rel='stylesheet' type='text/css' />

    <!-- Custom CSS -->
    <link href="{{ asset('admin/css/style.css') }}" rel='stylesheet' type='text/css' />

    <!-- font-awesome icons CSS-->
    <link href="{{ asset('admin/css/font-awesome.css') }}" rel="stylesheet">
    <!-- //font-awesome icons CSS-->

    <!-- side nav css file -->
    <link href='{{ asset('admin/css/SidebarNav.min.css') }}' media='all' rel='stylesheet' type='text/css' />
    <!-- side nav css file -->

    <!-- js-->
    <script src="{{ asset('admin/js/jquery-1.11.1.min.js') }}"></script>
    <script src="{{ asset('admin/js/modernizr.custom.js') }}"></script>

    <!--webfonts-->
    <link href="//fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,latin-ext"
        rel="stylesheet">
    <!--//webfonts-->

    <!-- Metis Menu -->
    <script src="{{ asset('admin/js/metisMenu.min.js') }}"></script>
    <script src="{{ asset('admin/js/custom.js') }}"></script>
    <link href="{{ asset('admin/css/custom.css') }}" rel="stylesheet">
    <!--//Metis Menu -->

</head>

<body class="cbp-spmenu-push">
    <div class="main-content">

        <div class="main-page login-page " style="margin-top: 5rem">
            <h2 class="title1">Login</h2>
            <div class="widget-shadow">
                <div class="login-body">
                    <x-auth-session-status class="mb-4" :status="session('status')" />
                    <form action="{{ route('login') }}" method="post">
                        @csrf
                        <!-- Email Address -->
                        <input type="email" class="user" name="email" placeholder="Enter Your Email"
                            value="{{ old('email') }}" style="margin-bottom: 0 !important;">
                        <x-input-error :messages="$errors->get('email')" class="error" />

                        <!-- Password -->
                        <input type="password" name="password" class="lock" placeholder="Password"
                            autocomplete="current-password" style="margin-bottom: 0 !important; margin-top: 30px;">
                        <x-input-error :messages="$errors->get('password')" class="error" />
                        <div class="forgot-grid" style="margin-top: 10px">
                            <!-- Remember Me -->
                            <label class="checkbox"><input type="checkbox" name="remember"
                                    checked=""><i></i>Remember me</label>
                            {{-- Forget password --}}
                            @if (Route::has('password.request'))
                                <div class="forgot">
                                    <a href="{{ route('password.request') }}">forgot password?</a>
                                </div>
                            @endif
                            <div class="clearfix"> </div>
                        </div>
                        <input type="submit" name="Sign In" value="Sign In">
                        <div class="registration">
                            Don't have an account ?
                            <a class="" href="{{ route('register') }}">
                                Create an account
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
