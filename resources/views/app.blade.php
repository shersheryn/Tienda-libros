<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>UKIYO-E</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<body class="general-body" style="padding-top: 20px;">
<div id="app" style="margin-bottom: 70px; margin-top: 45px;">
    @include('layouts.nav')
    <div class="jumbotron jumbotron-fluid" style="background-color: black; height: 130%; padding-bottom: 0px; margin-bottom: 30px;padding-top: 0px;">
    <img src= {{ asset('images/fondec2.jpg') }} style="  width: 100%; height: 100%; display: table-cell; vertical-align: middle;" title="Banner" alt="bannière">
  <div class="container" style="display: table;"> 
   
{{--    
    <h1 class="display-4">Fluid jumbotron</h1>
    <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
 --}} 
 
  </div>
</div>
    @include('layouts.categories')
    @include('layouts.modal')

    <div class="container" style="height: 80px, margin-bottom: 40px;">
    <br>
        <div class="row" style="height: 80px; display: flex; justify-content: center;">
        
            {{--
            <div class="col-xs-4 col-sm-3 col-lg-2">
                @yield('left-column')
            </div> 
            --}}
            <div class="col-xs-8 col-sm-9 col-lg-10 content" style="margin: 0; padding: 0;" >
                @include('layouts.error')
                @yield('content')
                <br>
    <br>
    <br>
    <br>
    <br>
            </div>
        </div>
    </div>

    <hr/>
    
</div>


<footer class="footer" style=" position: fixed; left: 0; bottom: 0; background-color: black; height: 50px; vertical-align: bottom;">
        <p class="text-center" style="vertical-align: bottom; line-height: 50px; margin-bottom: 0;">F O O T E R</p>
</footer>
<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{asset('js/my_script.js')}}"></script>

</body>
</html>

