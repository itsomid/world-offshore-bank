<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>World Offshore Banks Panel</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        .dot {
            display: inline-block;
            background: black;
            border-radius: 50%;
            height: 20px;
            width: 20px;
            margin: 0;

        }

        .dot.active {
            background-image: -webkit-radial-gradient(45px 45px, circle cover, lightgreen, green);
            border: 1px solid green;
            -webkit-box-shadow: 0 3px 8px rgba(0, 0, 0, .3);
            box-shadow: 0 3px 8px rgba(0, 0, 0, .3);
        }

        .dot.deactive {
            background: radial-gradient(circle at 47px 55px, #e3342f, #e3342f);
            -webkit-box-shadow: 0 3px 8px rgba(0, 0, 0, .3);
            box-shadow: 0 3px 8px rgba(0, 0, 0, .3);
        }
    </style>

    @yield('css')
</head>
<body>
<div id="app">
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                World Offshore Banks
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                      style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>

    <main class="py-4">
        <div class="container-fluid">
            <div class="row justify-content-center">
                @auth
                    <div class="col-md-2">
                        <ul class="list-group">
                            <li class="list-group-item">
                                <a href="{{route('banks.index')}}">Banks List</a>
                            </li>
                            <li class="list-group-item">
                                <a href="{{route('banks.create')}}">Add Bank</a>
                            </li>
                            <li class="list-group-item">
                                <a href="{{route('panel/profile')}}">User Profile</a>
                            </li>
                        </ul>
                        <ul class="list-group mt-5">
                            <li class="list-group-item">
                                <a href="">Trashed Banks</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-9">
                        @yield('content')
                    </div>
                @else
                    <div class="col-md-12">
                        @yield('content')
                    </div>
                @endauth
            </div>
        </div>
    </main>

</div>

<script src="{{ asset('js/app.js') }}"></script>

@yield('scripts')
</body>
</html>
