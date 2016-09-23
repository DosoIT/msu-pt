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
{{--@include('layouts.recommd')--}}
{{--@include('layouts.folio')--}}
<hr style="border: 1px solid crimson">
{{--Footer--}}
@include('layouts.footer')
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
