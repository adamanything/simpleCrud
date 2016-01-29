<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <header>

            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
                            <span class="sr-only">Toggle Navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="/article">Laravel</a>
                    </div>

                    <div class="collapse navbar-collapse" id="navbar">
                        <ul class="nav navbar-nav">
                            <li role="presentation"><a href="{{ url('/article') }}">ARTICLES</a></li>
                            <li role="presentation"><a href="{{ url('/article/create') }}">CREATE</a></li>
                            <li role="presentation"><a href="{{ url('/auth/register') }}">REGISTER </a></li>
                            <li role="presentation"><a href="{{ url('/auth/login') }}">LOGIN</a></li>
                            <li role="presentation"><a href="{{ url('/auth/logout') }}">LOGOUT</a></li>

                        </ul>

                        <ul class="nav navbar-nav navbar-right">
                            @if(auth()->guest())
                                @if(!Request::is('auth/login'))
                                    <li><a href="{{ url('/auth/login') }}">Login</a></li>
                                @endif
                                @if(!Request::is('auth/register'))
                                    <li><a href="{{ url('/auth/register') }}">Register</a></li>
                                @endif
                            @else
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ auth()->user()->name }} <span class="caret"></span></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="{{ url('/auth/logout') }}">Logout</a></li>
                                    </ul>
                                </li>
                            @endif
                        </ul>
                    </div>
                </div>
            </nav>


            {{--<nav class="navbar navbar-default">--}}
                {{--<ul>--}}
                    {{--<li>--}}
                        {{--<a class="navbar-btn" href="/article">ARTICLES</a>--}}
                    {{--</li>--}}
                    {{--<li>--}}
                        {{--<a href="/article/create">CREATE</a>--}}
                    {{--</li>--}}
                    {{--<li>--}}
                        {{--<a href="/auth/register">REGISTER</a>--}}
                    {{--</li>--}}
                    {{--<li>--}}
                        {{--<a href="/auth/login">LOGIN</a>--}}
                    {{--</li>--}}
                    {{--<li>--}}
                        {{--<a href="/auth/logout">LOGOUT</a>--}}
                    {{--</li>--}}
                {{--</ul>--}}
            {{--</nav>--}}
        </header>
    <h1>Master Template Test</h1>
    @yield('content')


    </div>
</body>
</html>