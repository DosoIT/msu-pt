<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">
    <style>
        @media only screen and (min-width: 960px) {
            /* styles for browsers larger than 960px; */
            .navbar-xs {
                background-color: black;
                width: 115%;
                height: 1%;
            }

            .navbar-xs a {
                color: #f0f0f0;
            }

            .navbar-xs .brand {
                font-family: ThaiNeue;
                font-size: 16pt;
                color: #00AFF0;
                margin-top: -2px;
                margin-left: -200px;
            }

            .drop > li > a {
                text-align: center;
                padding-left: 0px;
                padding-right: 0px;
                margin-right: 10px;
            }
            .navbar-content
            {
                width:320px;
                padding: 15px;
                padding-bottom:0px;
            }
            .navbar-content:before, .navbar-content:after
            {
                display: table;
                content: "";
                line-height: 0;
            }
            .navbar-nav.navbar-right:last-child {
                margin-right: 15px !important;
            }
            .navbar-footer
            {
                background-color:#DDD;
            }
            .navbar-footer-content { padding:15px 15px 15px 15px; }
            .dropdown-menu {
                padding: 0px;
                overflow: hidden;
            }
        }

        @media only screen and (min-width: 1440px) {
            .navbar-xs {
                background-color: black;
                width: 140%;
                height: 1%;
            }

            .navbar-xs a {
                color: #f0f0f0;
            }

            .navbar-xs .brand {
                color: #f0f0f0;
                margin-left: -680px;
            }

            .drop > li > a {
                text-align: center;
                padding-left: 50px;
                padding-right: 50px;
                margin-right: 0;
            }

            .navbar-content
            {
                width:320px;
                padding: 15px;
                padding-bottom:0px;
            }
            .navbar-content:before, .navbar-content:after
            {
                display: table;
                content: "";
                line-height: 0;
            }
            .navbar-nav.navbar-right:last-child {
                margin-right: 15px !important;
            }
            .navbar-footer
            {
                background-color:#DDD;
            }
            .navbar-footer-content { padding:15px 15px 15px 15px; }
            .dropdown-menu {
                padding: 0px;
                overflow: hidden;
            }

        }
    </style>
    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
                'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
<nav class="navbar-xs">
    <div class="container">
        <div class="navbar-header">

            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#app-navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Branding Image -->
            <a class="navbar-brand brand" href="{{ url('/') }}">
                {{--{{ config('app.name', 'Laravel') }}--}}
                {{ 'คณะวิทยาการสารสนเทศ' }}
            </a>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav">
                &nbsp;
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right drop">
                <!-- Authentication Links -->
                @if (Auth::guest())
                    <li><a href="{{ url('/login') }}" style="background-color: #00AFF0">Login</a></li>
                    <li><a href="{{ url('/register') }}">Register</a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            <i class="fa fa-circle-o" style="color: #20ff07"></i>
                            {{ Auth::user()->name }}
                            <span class="caret"></span>
                        </a>
{{--<<<<<<< HEAD--}}

                        {{--<ul class="dropdown-menu" role="menu">--}}
                            {{--@if(Auth::user()->status =='PartTime')--}}
                                {{--<li><a href="{{ url('/profile') }}">Profile</a></li>--}}
                            {{--@elseif(Auth::user()->status =='ผู้ว่าจ้าง')--}}
                                {{--<li><a href="{{ url('/postEmployer') }}">Profile</a></li>--}}
                            {{--@endif--}}
{{--=======--}}
                        {{--<ul class="dropdown-menu">--}}
{{-->>>>>>> origin/master--}}
                            <li>
                                <div class="navbar-content">
                                    <div class="row">
                                        <div class="col-md-5">
                                            {!! Html::image('image/pic-default.png') !!}
                                            <p class="text-center small" style="margin-top: 10%"><a href="#">Change Photo</a></p>
                                        </div>
                                        <div class="col-md-7">
                                            <span>{{ Auth::user()->name }}</span>
                                            <p class="text-muted small" style="margin-top: 10%;margin-left: -10px">{{ Auth::user()->email }}</p>
                                            <div class="divider"></div>
                                            <a href="{{ url('/manageProfile') }}" class="w3-btn w3-white w3-border w3-border-blue w3-hover-blue w3-round-xlarge">ดูโปร์ไฟล์</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="navbar-footer">
                                    <div class="navbar-footer-content">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <a href="{{ url('password/reset') }}" class="w3-btn w3-white w3-border w3-round-large" onclick="event.preventDefault();document.getElementById('reset-form').submit();">เปลี่ยนรหัสผ่าน</a>
                                                <form id="reset-form" action="{{ url('password/reset') }}" method="POST"
                                                      style="display: none;">
                                                    {{ csrf_field() }}
                                                </form>
                                            </div>
                                            <div class="col-md-6">
                                                <a href="{{ url('/logout') }}" class="w3-btn w3-white w3-border w3-round-large pull-right" onclick="event.preventDefault();document.getElementById('logout-form').submit();">ออกจากระบบ</a>
                                                <form id="logout-form" action="{{ url('/logout') }}" method="POST"
                                                      style="display: none;">
                                                    {{ csrf_field() }}
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>
<br>
@yield('contents')
<!-- Scripts -->
<script src="/js/app.js"></script>
{{--</body>--}}
{{--</html>--}}

{!! Html::script('js/jquery.min.js') !!}
{!! Html::script('js/bootstrap.min.js') !!}
</body>
</html>
