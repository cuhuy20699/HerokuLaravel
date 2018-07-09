<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <meta content="{{csrf_token()}}" name="csrf-token">
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    {{--<link href="{{asset('css/layout.css')}}" rel="stylesheet">--}}
    {{--<link href="{{asset('css/user-admin.css')}}" rel="stylesheet">--}}
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <script src="{{asset('js/app.js')}}"> </script>
    {!! Charts::styles() !!}
</head>
<body>
<header id="header" style="background: #f8f8f8; border-color: #e7e7e7" class="border-bottom">
    <nav class="navbar navbar-expand-lg navbar-light">
        <h5><a class="navbar-brand" href="#">Admin</a></h5>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="col-md-12 col-sm-12">
            <ul class="nav list-menu-item-l justify-content-lg-end mr-lg-5 pr-lg-5">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#"><i class="fas fa-user"></i></a>
                    <div id="drop-menu" class="dropdown-menu">
                        <a class="dropdown-item" href="#">Link 1</a>
                        <a class="dropdown-item" href="#">Link 2</a>
                        <a class="dropdown-item" href="#">Link 3</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</header>
<div>
    {!! $chart->render() !!}
    {!! Charts::scripts() !!}
    {!! $chart->script() !!}
</div>

<main class="page-wapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4 col-lg-2 pr-lg-0 pl-lg-0 border-right">
                <div class="username-admin">
                </div>
            </div>

            <div class="col-md-12 col-lg-10 bg-white">

            </div>
        </div>
    </div>
</main>
{{--<script src="{{asset('js/user-admin.js')}}"> </script>--}}
</body>
</html>