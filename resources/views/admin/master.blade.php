<!DOCTYPE html>
<html>

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>INSPINIA | Dashboard</title>

    <link href="{{ asset('admin/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/font-awesome/css/font-awesome.css') }}" rel="stylesheet">

    <!-- Gritter -->
    <link href="{{ asset('admin/js/plugins/gritter/jquery.gritter.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/css/plugins/switchery/switchery.css') }}" rel="stylesheet">

    <link href="{{ asset('admin/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/css/custom.css') }}" rel="stylesheet">
    <link href="
https://cdn.jsdelivr.net/npm/sweetalert2@11.11.0/dist/sweetalert2.min.css
" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('standalone/switchery.css') }}" />

</head>

<body>
    <div id="wrapper">
        @include('admin.components.navbar')
        <div id="page-wrapper" class="gray-bg dashbard-1">
            <div class="row border-bottom gray-bg">
                @include('admin.components.nav')
            </div>
            @yield('contents')
            {{-- @include('admin.components.footer') --}}
        </div>
    </div>
    @include('admin.components.script')
    @yield('script')
</body>

</html>
