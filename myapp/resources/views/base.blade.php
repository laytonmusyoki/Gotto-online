<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="author" content="">

        <title>Gotto Online Shop || @yield('title')</title>

        <!-- CSS FILES -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

        <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@100;300;400;600;700&display=swap" rel="stylesheet">

        <link href="/static/css/bootstrap.min.css" rel="stylesheet">

        <link href="/static/css/bootstrap-icons.css" rel="stylesheet">

        <link href="/static/css/owl.carousel.min.css" rel="stylesheet">

        <link href="/static/css/main.css" rel="stylesheet">

        <link href="/static/css/owl.theme.default.min.css" rel="stylesheet">

        <link href="/static/css/tooplate-gotto-job.css" rel="stylesheet">
        <link rel="stylesheet" href="/static/bootstrap/css/bootstrap.min.css">
        
<!--

Tooplate 2134 Gotto Job

https://www.tooplate.com/view/2134-gotto-job

Bootstrap 5 HTML CSS Template

-->
    </head>
    <style>
        .navbar{
            top:0;
            position:sticky;
        }
       
    </style>
    
    <body id="top">

        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand d-flex align-items-center" href="index.html">
                    <img src="/static/images/logo.png" class="img-fluid logo-image">

                    <div class="d-flex flex-column">
                        <strong class="logo-text">Gotto</strong>
                        <small class="logo-slogan">Online Shop</small>
                    </div>
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav align-items-center ms-lg-5">
                        @auth
                        <li class="nav-item">
                            <a class="nav-link active" href="{{ route('all') }}">Products</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="about.html">About Gotto</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{route('products')}}">shop</a>
                        </li>


                        <!-- <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarLightDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Pages</a>

                            <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarLightDropdownMenuLink">
                                <li><a class="dropdown-item" href="job-listings.html">Job Listings</a></li>

                                <li><a class="dropdown-item" href="job-details.html">Job Details</a></li>
                            </ul>
                        </li> -->
                        <li class="nav-item">
                            <a class="nav-link custom-btn btn" href="{{ route('cart') }}" style="width:45px; height:45px; border-radius:50%;align-items:center; color:#fff; display:flex;justify-content:center; background:red;">{{App\Helpers\CartHelper::getCartItemsCount(auth()->user()->id)}}</a>
                        </li>
                        <li class="nav-item ms-lg-auto">
                            <a class="nav-link" style="width:120px; border-radius:30px; color:#fff ;padding:10px 30px; background:orange;" href="{{ route('logout') }}">Logout</a>
                        </li>
                        @else

                        
                        <li class="nav-item ms-lg-auto">
                            <a class="nav-link" href="{{ route('register') }}">Register</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link custom-btn btn" href="{{ route('login') }}">Login</a>
                        </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>


        @yield('content')

        
       
        <!-- JAVASCRIPT FILES -->
        <script src="/static/js/jquery.min.js"></script>
        <script src="/static/js/bootstrap.min.js"></script>
        <script src="/static/js/owl.carousel.min.js"></script>
        <script src="/static/js/counter.js"></script>
        <script src="/static/js/custom.js"></script>
        <script src="/static/bootstrap/js/bootstrap.min.js"></script>

    </body>
</html>