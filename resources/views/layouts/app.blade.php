<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ trans('panel.site_title') }}</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/login/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/login/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/login/css/iofrm-style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/login/css/iofrm-theme1.css') }}">
    <link href="{{ asset('css/assets/img/img.png') }}" rel="shortcut icon" />
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet" />
    @yield('styles')
</head>

<body class="header-fixed sidebar-fixed aside-menu-fixed aside-menu-hidden login-page">
    <div class="app flex-row align-items-center">
        <div class="container">
            @yield("content")
        </div>
    </div>
    @yield('scripts')
</body>
<script type="text/javascript" src="{{ asset('css/login/js/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('css/login/js/popper.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('css/login/js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('css/login/js/main.js') }}"></script>
</html>
