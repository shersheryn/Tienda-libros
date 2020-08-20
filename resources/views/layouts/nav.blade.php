<nav class="navbar navbar-default navbar-fixed-top" style="margin-bottom: -2px;padding-bottom: -2px;">
    <div class="container" style="padding-right: 15px;">
    
        <div class="navbar-header col-sm-4 col-md-3 general-nav-col">
        
            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#app-navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button> 

            <a href="/shop">
            <img src= {{ asset('images/UKIYO1_V2.png') }} title="UKIYO-E LOGO" alt="Our tastefull Logo">
            </a> 
        </div> 
        
        <!--
        <nav-search :search-url="{{json_encode(route('search'))}}"></nav-search>
        -->
        <div class="collapse navbar-collapse" id="app-navbar-collapse">

                <div class="col-sm-4 col-lg-5 general-nav-col pull-right" style="margin-top: 6px;">

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right general-nav" style="margin-top: 9px; width: 470px;">
                        <!-- Authentication Links -->
                        @guest
                            <li><a href="{{ route('login') }}">Se connecter</a></li>
                            <li><a href="{{ route('register') }}">S'inscrire</a></li>
                            @else
                            <li style="margin: 0 10px;"><a href="/orders" target="_blank">Vos commandes</a></li>
                                <nav-cart :cart="@if (session()->has('cartProducts')) {{json_encode(session('cartProducts'))}} @else {{json_encode([])}} @endif">
                                </nav-cart>

                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                       aria-expanded="false">
                                        {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>

                                    <ul class="dropdown-menu" role="menu">
                                        <li>
                                            <a onclick="document.getElementById('logout-form').submit();" style="cursor: pointer">
                                                Se délogger
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                @endguest
                    </ul>

                </div>
            <form style="display: none" id="logout-form" name="logout-form" action="{{ route('logout') }}" method="POST">
                @csrf
                @method('POST')
            </form>
        </div>
    </div>
</nav>
<modal-wrapper></modal-wrapper>
