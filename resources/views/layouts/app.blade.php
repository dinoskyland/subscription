<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Bulma Version 0.6.1 -->
    <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.1/css/bulma.min.css" rel="stylesheet"> -->
</head>
<body>
    <div id="app">
        <section class="hero is-light is-fullheight">
            <div class="hero-head">
                <nav class="navbar">
                    <div class="container">
                        <div class="navbar-brand">
                            <a class="navbar-item" href="https://bulma.io/">
                                {{ config('app.name', 'Laravel') }}
                            </a>
                            <div class="navbar-burger burger" data-target="navMenuIndex" onclick="document.querySelector('.navbar-menu').classList.toggle('is-active');">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </div>

                        <div id="navMenuIndex" class="navbar-menu">
                            <div class="navbar-start">
                                <a class="navbar-item" href="https://bulma.io/">
                                    Home
                                </a>
                                <div class="navbar-item has-dropdown is-hoverable">
                                    <a class="navbar-link" href="https://bulma.io/">
                                        Docs
                                    </a>
                                    <div class="navbar-dropdown is-boxed">
                                        <a class="navbar-item" href="/documentation/overview/start/">
                                            Overview
                                        </a>
                                        <a class="navbar-item" href="https://bulma.io/documentation/modifiers/syntax/">
                                            Modifiers
                                        </a>
                                        <a class="navbar-item" href="https://bulma.io/documentation/columns/basics/">
                                            Columns
                                        </a>
                                    </div>
                                </div>
                            </div>
                        
                            <div class="navbar-end">
                                @guest
                                    <a class="navbar-item" href="{{ route('login') }}">
                                        Login
                                    </a>
                                    <a class="navbar-item" href="{{ route('register') }}">
                                        Register
                                    </a>
                                @else
                                    <div class="navbar-item has-dropdown is-hoverable">
                                        <a href="#" class="navbar-link" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                            {{ Auth::user()->name }}
                                        </a>
                                        <div class="navbar-dropdown is-boxed">
                                            <a href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                            document.getElementById('logout-form').submit();">
                                                Logout
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                {{ csrf_field() }}
                                            </form>
                                        </div>
                                    </div>
                                @endguest
                            </div>          
                        </div>  
                    </div>
                </nav>
            </div>

            @yield('content')

            <div class="hero-foot">
            </div>
    </section>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
