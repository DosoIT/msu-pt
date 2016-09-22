<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MSU Helping</title>
    {!! Html::style('css/bootstrap.min.css') !!}
    {!! Html::style('css/bootstrap.css') !!}
    {!! Html::style('css/w3.css') !!}

    <style>
        @font-face {
            font-family: Naipol;
            src: url('fonts/NP-Naipol-All-in-One-Regular-3.000.ttf');
        }

        @font-face {
            font-family: ThaiNeue;
            src: url('fonts/ThaiSansNeue-Light.ttf');
        }

        .navbar-xs {
            min-height: 28px;
            height: 28px;
            width: 100%;
        }

        .navbar-xs .navbar-brand {
            padding: 0px 12px;
            font-size: 16px;
            line-height: 28px;
        }

        .navbar-xs .navbar-nav > li > a {
            padding-top: 0px;
            padding-bottom: 0px;
            line-height: 28px;
        }

        .img-ban {
            margin-top: -18px;
            position: fixed;
            width: 100%;
            left: 50%;
            /* bring your own prefixes */
            transform: translate(-50%);
        }

        .img-zoom {
            width: 310px;
            -webkit-transition: all .2s ease-in-out;
            -moz-transition: all .2s ease-in-out;
            -o-transition: all .2s ease-in-out;
            -ms-transition: all .2s ease-in-out;
        }

        .transition {
            -webkit-transform: scale(2);
            -moz-transform: scale(2);
            -o-transform: scale(2);
            transform: scale(2);
        }
    </style>
</head>
<body>
@include('layouts.navbar')
@include('layouts.nav2')
@include('layouts.search')
@include('layouts.recommd')
@include('layouts.folio')
<hr style="border: 1px solid crimson">
{{--Footer--}}
<style>
    footer {
        width: 100%;
        height: 300px;
        border: 1px solid #0f0f0f;
        background-color: #0f0f0f;
        color: #d9edf7;
    }

    .page-footer {
        margin-top: 2%;
        padding-left: 10%;
    }

    .page-footer hr {
        width: 20%;
        margin-top: 1%;
        border-bottom: 1px solid #2ca02c;

    }

    .page-footer a:hover {
        border-color: transparent;
        color: #ff1aba;

    }

    .page-footer .tag {
        margin-left: -50px;
    }
    .page-footer .tag a {
        border-bottom: 1px solid #9acfea;
    }

    .page-footer .tag a:hover {
        border-color: transparent;
        color: #ff1aba;

    }
</style>
<footer>
    <div class="col-xs-3 col-sm-3 col-md-12">
        <div class="row">
            <div class="col-xs-3 col-sm-3 page-footer">
                <p>ABOUT US</p>
                <hr>
                <a href="#">Info</a></p>
                <a href="#">Blog</a></p>
                <a href="#">Jobs</a></p>
                <a href="#">Advertise with us</a></p>
                <a href="#">Policies</a></p>
            </div>
            <div class="col-xs-3 col-sm-3 page-footer">
                <p>Help</p>
                <hr>
                <a href="#">Help Center</a></p>
                <a href="#">Seller Information Center</a></p>
                <a href="#">Privacy</a></p>
                <a href="#">Contact us</a></p>
            </div>
            <div class="col-xs-2 col-sm-2 page-footer">
                <p>TAG</p>
                <hr>
                <div class="col-xs-8">
                    <div class="row tag">
                        <div class="col-xs-8"><a href="#">#pongsiri</a></div>
                        <div class="col-xs-8"><a href="#">#jupiter</a></div>
                        <div class="col-xs-8"><a href="#">#slumboy</a></div>
                        <div class="col-xs-8"><a href="#">#MSU</a></div>
                        <div class="col-xs-8"><a href="#">#atom</a></div>
                        <div class="col-xs-8"><a href="#">#doso</a></div>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-sm-4 page-footer">
                <a href="#">INFORMATION</a><br>
                <hr>
                Add:<a href="#">Mahasarakham University</a><br>
                Tel:<a href="#">043700219</a><br>
                Email:<a href="#" style="color: #20ff07">it@msu.ac.th</a><br>
                Hotline:<a href="#" style="color: #20ff07">096669999</a><hr>
                <a href="#">{!! Html::image('image/minimap.jpg','minimap',array('width'=>180,'height'=>100)) !!}</a>
            </div>
        </div>
    </div>
</footer>
{{--Script--}}
{!! Html::script('js/jquery.min.js') !!}
{!! Html::script('js/bootstrap.min.js') !!}
<script>
    $(document).ready(function () {
        var colors = ["#ff33ac", "#f44336", "#ffff00", "00ffff", "#FF5733", "#2ECC71", "#3498DB", "#8E44AD"];
        var ran = Math.floor(Math.random() * colors.length);
        $(".borColor").css("border", "2px solid " + colors[ran]);
    });
    $('.img-responsive').hover(function () {
        $(this).addClass('transition');
    }, function () {
        $(this).removeClass('transition');
    });
</script>
</body>
</html>