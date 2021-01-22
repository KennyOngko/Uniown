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

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> -->


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        .logo{
            position:absolute;
            width: 60px;
            max-height: 50px;
            left: 30px;
        }
        .navbar{
            height: 100px;
        }
        .container{
            position:absolute;
            Left: 80px;
        }

        .content-navbar{
            padding-left: 100px;
        }

        .content-font{
            font-size: 12pt;
            padding-left: 80px;
            font-weight: bold;
        }

        .content-font2{
            font-size: 12pt;
            font-weight: bold;
            padding-left: 35px;
        }

        footer {
            background: white;
            height: auto;
            width: 100vw;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            padding-top: 40px;
            color: black;
        }

        .footer-content {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            text-align: center;
        }

        .footer-content h4 {

        }

        .socials {
            list-style: none;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 1rem 0 3;
        }

        .socials li {
            margin: 0 10px;
        }

        .socials a {
            text-decoration: none;
            color: black;
        }

        .socials a i {
            font-size: 1.1rem;
            transition: color .4s ease;
        }

        .socials a:hover i {
            color: gray;
        }

        .footer-bottom {
            background: white;
            width: 100vw;
            padding: 20px 0;
            text-align: center;
        }

        .footer-bottom h4 {
            font-size: 14px;
            word-spacing: 2px;
            text-transform: capitalize;
        }

        .footer-bottom span {
            text-transform: uppercase;
            opacity: .6;
            font-weight: 200;
        }

        .footer-line{
            width: 1345px;
            height: 0px;
            margin-left: 90px;
            background-color: gray;
            border: 1px solid rgba(0, 0, 0, 0.2);
            transform: rotate(-0.09deg);
        }
    </style>


</head>
<body style="background-color: white">
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white">
        <img class="logo" src="asset/logo.png" alt="">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    UniOwn
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                        <div class="navbar-nav content-navbar">
                            <a class="content-font" href="{{route('news')}}">Health News</a>
                            <a class="content-font" href="{{route('schedule')}}">Schedule</a>
                            <a class="content-font" href="{{route('support')}}">Support</a>
                            <a class="content-font" href="{{route('aboutus')}}">About Us</a>
                        </div>
                </div>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto content-font" style="position: absolute; left: 1100px; width: 300px">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="content-font2" href="{{ route('login') }}">{{ __('Sign In') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="content-font2" href="{{ route('register') }}">{{ __('Sign Up') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="content-font2 dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->first_name }} {{ Auth::user()->last_name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                    </ul>
            </div>
            <form class="form-inline" action="{{ route('search') }}" method="get"style ="padding-left: 1070px; padding-top: 90px">
                <input class="form-control mr-sm-2" name="search" type="search" placeholder="Search" aria-label="Search" style="width: 300px">
                <button class="btn btn-outline-danger" type="submit">Search</button>
             </form>
             @endguest
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <footer>
        <div class="footer-content footer-line">
        </div>
        <div class="footer-bottom">
            <h4>
                Copyright &copy;2020 <span>UniOwn.com Group,</span> Inc. All Rights Reserved
            </h4>
        </div>
    </footer>
</body>
</html>