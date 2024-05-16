<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>INSPINIA | Dashboard</title>

    <link href="{{ asset('admin/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/font-awesome/css/font-awesome.css') }}" rel="stylesheet">

    <!-- Gritter -->
    <link href="{{ asset('admin/js/plugins/gritter/jquery.gritter.css') }}" rel="stylesheet">

    <link href="{{ asset('admin/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/css/style.css') }}" rel="stylesheet">

</head>

<body>

    <div id="wrapper">
        @include('admin.components.navbar')
        <div id="page-wrapper" class="gray-bg dashbard-1">
            <div class="row border-bottom">

            </div>

            <div class="row  border-bottom white-bg dashboard-header">
                @include('admin.components.nav')

            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="wrapper wrapper-content">
                        @yield('contents')
                    </div>
                    @include('admin.components.footer')
                </div>
            </div>

        </div>
    </div>
    @include('admin.components.script')
    @yield('script')
</body>

</html>
