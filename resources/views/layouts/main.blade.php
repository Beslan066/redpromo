<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RedPromo</title>
    <link rel="stylesheet" href="{{ asset('https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback')}}">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ asset('admin-lte/plugins/fontawesome-free/css/all.min.css')}}">
    <link rel="stylesheet" href="{{ asset('dist/css/normalize.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('dist/scss/style.css') }}">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand " href="#" >
            <img src="{{ asset('dist/images/logo.png') }}" alt="" class="logo">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('home.index') }}" tabindex="-1">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('news.index') }}" tabindex="-1">Все новости</a>
                </li>
                <li class="nav-item dropdown">
                </li>

                <li class="nav-item">
                    <a class="nav-link " href="#" tabindex="-1" >Contact</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0" method="get" action="/search">
                <input class="form-control mr-sm-2" name="search" type="search" placeholder="Search">
                <button class="btn btn-outline-warning my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>

<header class="header" >
    <div class="container">
        <div class="row d-flex flex-column justify-content-center align-items-center">
            <h1 class="display-2">Red Promo</h1>
            <p class="lead">Тестовый сайт  RP</p>
        </div>

    </div>
</header>


@yield('content')


<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-12">
                <h4> Traveler blog</h4>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                    Nobis consectetur ea commodi asperiores! Ab veniam, nobis consectetur autem culpa voluptates.</p>
            </div>

            <div class="col-lg-4 col-md-6">
                <h4>Contacts</h4>
                <address>
                    <b>Twitter inc</b><br>
                    1355 Market St <br> San Francisco, CA 94103, USA <br>
                    p: (123) 456 78 89

                </address>
            </div>

            <div class="col-lg-4 col-md-6">
                <h4>Navigation</h4>
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contacts</a>
                    </li>
                </ul>

            </div>

            <div class="copyright">
                <div class="container">
                    <img src="{{ asset('dist/images/logo.png') }}" alt="">
                    <p>Copyright &copy; Traveler Blog  2022 All rights reserved </p>
                </div>
            </div>

        </div>
    </div>
</footer>
