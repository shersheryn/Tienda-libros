<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Admin UKIYO-E</title> 
 
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body style="padding-top: 100px; background-color: LightYellow;">
<div id="app">
    @if (Auth::guard('admin')->check())
        @include('admin.nav')
    @endif

    <div class="container">
        <div class="row">
            <div class="col-md-2">
                @yield('left-column')
            </div>
            <div class="col-md-10 content">
                @include('layouts.error')
                @yield('content')
            </div>
        </div>
        <br>
    </div>
    <br>
    <br>
    <br>

    <hr/>
    <footer class="footer" style=" position: fixed; left: 0; bottom: 0; background-color: black; height: 50px; vertical-align: bottom;">
        <p class="text-center" style="vertical-align: bottom; line-height: 50px; margin-bottom: 0;">F O O T E R</p>
</footer>
</div>
<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/admin_script.js') }}"></script>
</body>
</html>