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

            <ul class="nav nav-pills">
                <li role="presentation"><a href="/article">ARTICLES</a></li>
                <li role="presentation"><a href="/article/create">CREATE</a></li>
                <li role="presentation"><a href="/auth/register">REGISTER </a></li>
                <li role="presentation"><a href="/auth/login">LOGIN</a></li>
                <li role="presentation"><a href="/auth/logout">LOGOUT</a></li>
            </ul>


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
    <h1>Master Template</h1>
    @yield('content')


    </div>
</body>
</html>