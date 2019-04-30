<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    {{--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">--}}
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="{{ asset('css/mdb.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    {{--<script src="../../../resources/sass/script.js"></script>
    <script src="asset(https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js)"></script>
    <script href="{{asset('resources/sass/script.js')}}"></script>--}}
    {{--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>--}}
    {{--<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>--}}
    <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>



    <style>body {
            font-family: BYekan, 'BYekan', tahoma;
        }</style>
    <link href='http://www.fontonline.ir/css/BYekan.css' rel='stylesheet' type='text/css'>

</head>
<body  class="fixed-sn light-blue-skin" style="padding-left: 0">
<header>
    <nav class="navbar fixed-top navbar-toggleable-md navbar-expand-lg scrolling-navbar double-nav"
         style="padding-left: 0">

        <!-- Breadcrumb-->
        <ul class="nav navbar-nav nav-flex-icons ml-3">
            <li class="nav-item">
                <a class="nav-link"> <span class="clearfix d-none d-sm-inline-block">تماس با ما</span><i
                        class="fas fa-envelope"></i></a>
            </li>
            <li class="nav-item">
                <a class="nav-link"> <span class="clearfix d-none d-sm-inline-block">پشتیبانی</span><i
                        class="far fa-comments"></i></a>
            </li>
            @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}"> <span
                            class="clearfix d-none d-sm-inline-block">{{ __('ورود') }}</span><i
                            class="fas fa-sign-in-alt"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}"> <span
                            class="clearfix d-none d-sm-inline-block">{{ __('ثبت نام') }}</span><i
                            class="fas fa-user-plus"></i></a>
                </li>
            @else
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">
                        {{ Auth::user()->name }}
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">

                        <a class="dropdown-item" href="/users/account">
                            مشاهده ی حساب کاربری
                        </a>

                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                            {{ __('خروج') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                              style="display: none;">
                            @csrf
                        </form>


                    </div>
                </li>
            @endguest
        </ul>

        <div class="breadcrumb-dn ml-auto">
            <a href="{{url('/home')}}" class="app-name">سامانه ی پیش ثبت نام
            </a>
        </div>
        <!-- SideNav slide-out button -->
        <div class="float-right">
            <a href="#" data-activates="slide-out" class="button-collapse"><i class="fas fa-bars"></i></a>
        </div>
    </nav>

</header>
<!-- /.Navbar -->
<main class="py-4 pt-5 mx-lg-5 margin-top-100 container">
    @yield('content')
</main>
</body>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/popper.min.js')}}"></script>
<script src="{{asset('js/mdb.min.js')}}"></script>
{{--<script src="{{asset('js/chart.js')}}"></script>--}}
<script src="{{asset('js/custom.js')}}"></script>
</html>
