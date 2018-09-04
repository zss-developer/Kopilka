<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content=="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link rel="stylesheet" type="text/css" href="{{secure_asset('/fonts/line-awesome/css/line-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{secure_asset('/libs/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{secure_asset('/libs/bootstrap-notify/bootstrap-notify.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{secure_asset('/libs/tether/css/tether.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{secure_asset('/libs/flag-icon-css/css/flag-icon.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{secure_asset('/libs/jscrollpane/jquery.jscrollpane.css')}}">
    <link rel="stylesheet" type="text/css" href="{{secure_asset('/libs/select2/css/select2.min.css')}}"> <!-- Original -->
    <link rel="stylesheet" type="text/css" href="{{secure_asset('/libs/select2/css/select2.custom.min.css')}}"> <!-- Customization -->
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- TYPOGRAPHY -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,500,700&amp;subset=cyrillic" rel="stylesheet">

    <!-- BEGIN MAIN STYLES -->
    <link rel="stylesheet" type="text/css" href="{{secure_asset('/css/styles/common.css')}}">
    <link rel="stylesheet" type="text/css" href="{{secure_asset('/css/styles/themes/primary.css')}}">
    <!--<link rel="stylesheet" type="text/css" href="{{secure_asset('/css/styles/themes/sidebar-black.min.css')}}">-->
    <link rel="stylesheet" type="text/css" href="{{secure_asset('/css/styles//widgets/help.css')}}">
    <!-- END THEME STYLES -->

    <!-- BEGIN PAGE LAYOUT STYLES -->
    <style>

        .ks-navbar .nav-item {
            border: none;
        }
        .btn.btn-sm {
            font-size: 14px;
        }
        .navbar {
            align-items: start;
        }
        .roo-logo {
            width: 300px;
            height: 60px;
            margin: 20px;
        }
        body.ks-navbar-fixed {
            padding-top: 150px;
        }
        .ks-navbar {
            background-color: #fefefe;
            background-image: url(/img/banner.jpeg);
            background-repeat: no-repeat;
            background-size: 100% 100%;
            height: 150px;
        }
        @media (min-width: 1600px) {
            .ks-navbar {
                background-size: 1340px 150px;
            }
        }
        @media (max-width: 1000px) {
            .ks-navbar {
                background-size: 1340px 150px;
            }
        }
        .ks-navbar-logo-overlay {
            cursor: pointer;
            width: 580px;
            height: 70px;
            position: absolute;
            top: 40px;
            left: 300px;
            border-radius: 30px;
        }
        .ks-navbar-logo-overlay:hover {
            background-color: #80a6de;
            opacity: .15;
        }
    </style>
@stack('styles')
<!-- END PAGE LAYOUT STYLES -->
</head>
<!-- ks-content-solid-bg -->
<body class="ks-navbar-fixed ks-sidebar-default ks-sidebar-position-fixed ks-theme-primary ks-help-wrapper @stack('classes')">

@include('layouts.header')

<div class="ks-page-container">

    @stack('left-sidebar')

    <div class="ks-column ks-page">
        @yield('content')
    </div>

    @stack('right-sidebar')
</div>

<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>



<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="{{secure_asset('/libs/vue/vue.min.js')}}"></script>
<script src="{{secure_asset('/libs/jquery/jquery.min.js')}}"></script>
<script src="{{secure_asset('/libs/responsejs/response.min.js')}}"></script>
<script src="{{secure_asset('/libs/loading-overlay/loadingoverlay.min.js')}}"></script>
<script src="{{secure_asset('/libs/tether/js/tether.min.js')}}"></script>
<script src="{{secure_asset('/libs/popper/popper.min.js')}}"></script>
<script src="{{secure_asset('/libs/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{secure_asset('/libs/bootstrap-notify/bootstrap-notify.min.js') }}"></script>
<script src="{{secure_asset('/libs/jscrollpane/jquery.jscrollpane.min.js')}}"></script>
<script src="{{secure_asset('/libs/jscrollpane/jquery.mousewheel.min.js')}}"></script>
<script src="{{secure_asset('/libs/noty/noty.min.js')}}"></script>
<!-- END PAGE LEVEL PLUGINS -->

<!-- BEGIN THEME LAYOUT SCRIPTS -->
<script src="{{secure_asset('/js/scripts/common.js')}}"></script>
<!-- END THEME LAYOUT SCRIPTS -->

<!-- BEGIN PAGE LAYOUT SCRIPTS -->
@stack('scripts')
<!-- END PAGE LAYOUT SCRIPTS -->

</body>
</html>
