<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/notiflix-aio-2.7.0.min.js') }}"></script>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css"  crossorigin="anonymous">
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</head>
<body>
    <div id="app">
        <nav id="navdesifn" class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                  <i class="fas fa-fist-raised"></i>  {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->

                      @guest
                            @if (Route::has('login'))
                              
                            @endif
                            
                        
                        @else
                              <ul class="navbar-nav ml-auto text-center">
  <li class="nav-item dropdown">
        <a class="nav-link" href="/sendfollower">
         <i style="color: white;margin-right: 7px;" class="fas fa-user-plus"></i> Send followers
        </a>
       
      </li>
      
<li class="nav-item dropdown">
        <a class="nav-link" href="/history">
         <i style="color: white;margin-right: 7px;" class="fas fa-history"></i> Historique
        </a>
       
      </li>
<li class="nav-item dropdown">
        <a class="nav-link" href="/me">
         <i style="color: white;margin-right: 7px;" class="fas fa-funnel-dollar"></i> Transaction
        </a>
       
      </li>
                    </ul>
                        @endguest
                 

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif
                            
                          
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} |  <span style="color: green;font-size: 15px;"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                                   
                                   
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                     <i style="margin-right: 3px;" class="fas fa-sign-out-alt"></i>
                                        {{ __('Logout') }}
                                    </a>

                                    

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

            @yield('content')
    </div>
</body>
</html>
