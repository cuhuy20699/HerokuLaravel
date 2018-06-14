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
    <link href="{{asset('css/layout.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <script src="{{asset('js/app.js')}}"> </script>
    <script src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
</head>
<body>

<header>
    <div id="header-md" class="container-fluid">
        <div class="row">
            <div class="col-md-3 col-lg-3">
                <h1 id="logo-header" class="text-center"><a href="#"><img src="https://thucpham.com/wp-content/themes/shop/images/thucpham-logo.png?x89043"></a></h1>
            </div>
            <div class="col-md-7 col-lg-7">
                <div class="col-md-11">
                    <form class="form-group text-input-search p-2" action="/action_page.php">
                        <input type="text" class="border-left form-control float-left mb-2 ml-1" placeholder="Nhập sản phẩm cần tìm...">
                        <button type="submit" class="btn btn-success mb-2"><i class="fas fa-search-plus p-1"></i>Search</button>
                    </form>
                </div>
            </div>
            <div class="col-md-2 col-lg-2">
                <div class="car-menu">
                    <a href="#" class="text-dark"><i class="fas fa-cart-plus"></i>Giỏ hàng</a>
                </div>
            </div>
        </div>
        <nav class="text-nav-menu nav nav-pills nav-justified text-uppercase text">
            <a class="nav-item nav-link text-dark " href="#">Giống chó</a>
            <a class="nav-item nav-link text-dark" href="#">Giống mèo</a>
            <a class="nav-item nav-link text-dark" href="#">Giống cá</a>
            <a class="nav-item nav-link text-dark" href="#">Giống chim</a>
            <a class="nav-item nav-link text-dark" href="#">đang bán</a>
            <a class="nav-item nav-link text-dark" href="#">ảnh đẹp</a>
            <a class="nav-item nav-link text-dark" href="#">hỏi đáp</a>
        </nav>
    </div>

    <div id="header-sm" class="container-fluid">
        <div class="row">
            <div class="col-4 col-sm-4">
                <div class="a navbar-light">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"><span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="col-md-12 collapse" id="navbarNav">
                        <ul class="nav">
                            <li class="nav-item"><a class="nav-item" href="#">Home</a></li>
                            <li class="nav-item"><a class="nav-item" href="#">Home</a></li>
                            <li class="nav-item"><a class="nav-item" href="#">Home</a></li>
                            <li class="nav-item"><a class="nav-item" href="#">Home</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class=" col-8 col-sm-8">
                <h1 id="logo-header"><a href="#"><img src="https://thucpham.com/wp-content/themes/shop/images/thucpham-logo.png?x89043"></a></h1>
            </div>
            <div class="col-12">
                <form class="form-group text-input-search ml-sm-5">
                    <input type="text" class="border-left form-control float-left mb-2 ml-1" placeholder="Nhập thú cưng cần tìm...">
                    <button type="submit" class="btn btn-success mb-2 "><i class="fas fa-search-plus p-1"></i>Search</button>
                </form>

            </div>
        </div>
    </div>
</header>
<div class="container-fluid mt-2 mb-2">
    <div class="row">
        <div class="col-lg-3">
            <div class="list-group">
                <a href="#" class="list-group-item">Disabled item</a>
                <a href="#" class="list-group-item">Disabled item</a>
                <a href="#" class="list-group-item">Third item</a>
            </div>
        </div>
        <div class="col-lg-9">
            @yield('content')
        </div>
    </div>
</div>

<footer class="container">
    <div class="card text-center">
        <div class="card-header">
            Featured
        </div>
        <div class="card-body">
            <h5 class="card-title">Special title treatment</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        </div>
        <div class="card-footer text-muted">
            2 days ago
        </div>
    </div>
</footer>
<script>
    CKEDITOR.replace( 'summary-ckeditor' );
</script>
</body>
</html>
{{--<a id="show-menu" href="" class="__web-inspector-hide-shortcut__"><i class="fa fa-align-justify"></i></a>--}}