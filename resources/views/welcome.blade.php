<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    <style>
        html,
        body {
            font-family: 'figtree', sans-serif;
            font-weight: 400;
            font-size: 16px;
            line-height: 1.5;
            color: #212529;
            background-color: #fff;
        }

        a {
            color: #007bff;
            text-decoration: none;
        }

        a:hover {
            color: #0056b3;
            text-decoration: underline;
        }

        ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        li {
            display: inline-block;
            margin: 0 10px;
        }

        li:last-child {
            margin-right: 0;
        }
    </style>
</head>

<body class="antialiased">
    <nav>
        <ul>
            <li><a class="" href="/">Home</a></li>
            <li><a href="/app">app</a></li>
        </ul>
    </nav>
    @yield('content')
    <footer>
        <hr>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p>Copyright &copy; 2021</p>
                </div>
                <div class="col-md-6">
                    <p class="float-right">
                        <a href="https://github.com/laravel/laravel">Laravel</a>
                    </p>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>
