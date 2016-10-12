<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MSU Helping</title>
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    {!! Html::style('css/bootstrap.min.css') !!}
    {!! Html::style('css/bootstrap.css') !!}
    {!! Html::style('css/w3.css') !!}
    {!! Html::style('ui/build/css/metro.css') !!}
    {!! Html::style('ui/build/css/metro-icons.css') !!}
    <style>
        @font-face {
            font-family: Naipol;
            src: url('fonts/NP-Naipol-All-in-One-Regular-3.000.ttf');
        }

        @font-face {
            font-family: ThaiNeue;
            src: url('fonts/ThaiSansNeue-Light.ttf');
        }
        @font-face {
            font-family: Domino;
            src: url('fonts/WP DOMINO novel.ttf');
        }
        @font-face {
            font-family: Manif;
            src: url('fonts/MANIFESTO.ttf');
        }
        @font-face {
            font-family: Aileron;
            src: url('fonts/Ailerons-Typeface.otf');
        }

        body {
            min-height: 100%;
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
{{--@include('layouts.navbar')--}}
@include('layouts.app')
@include('layouts.banner')
@include('layouts.nav2')
@include('layouts.search')
@include('layouts.category')
<div class="container">
    <div class="row">
        @yield('content')
    </div>
</div>
<hr style="border: 1px solid crimson">
{{--Footer--}}
@include('layouts.footer')
{{--Script--}}
{!! Html::script('js/jquery.min.js') !!}
{!! Html::script('js/bootstrap.min.js') !!}
{!! Html::script('ui/build/js/metro.js') !!}
{!! Html::style('css/animate.css') !!}
<script>
    //load picture ตอนเลือกมา
    var loadFile = function (event) {
        var output = document.getElementById('output');
        output.src = URL.createObjectURL(event.target.files[0]);
    };

    //เพิ่มฟิวกรอกข้อมูล ความสามารถ
    $(document).ready(function () {
        var max_fields = 10; //maximum input boxes allowed
        var wrapper = $(".input_fields_01"); //Fields wrapper
        var add_button = $(".add_field_01"); //Add button ID
        var x = 1;
        $(add_button).click(function (e) { //on add input button click
            e.preventDefault();
            if (x < max_fields) { //max input box allowed
                x++; //text box increment
                $(wrapper).prepend('<div><input type="text" name="skill[]" class="form-control"/><a  class="remove_field01  btn btn-danger btn-xs">ลบ</a></div>'); //add input box
            }
        });
        $(wrapper).on("click", ".remove_field01", function (e) { //user click on remove text
            e.preventDefault();
            $(this).parent('div').remove();
            x--;
        })
    });
    //เพิ่มฟิวกรอกข้อมูล ลักษณะงาน
    $(document).ready(function () {
        var max_fields = 10; //maximum input boxes allowed
        var wrapper = $(".input_fields_02"); //Fields wrapper
        var add_button = $(".add_field_02"); //Add button ID
        var x = 1;
        $(add_button).click(function (e) { //on add input button click
            e.preventDefault();
            if (x < max_fields) { //max input box allowed
                x++; //text box increment
                $(wrapper).prepend('<div><input type="text" name="job[]" class="form-control"/><a  class="remove_field02  btn btn-danger btn-xs">ลบ</a></div>'); //add input box
            }
        });
        $(wrapper).on("click", ".remove_field02", function (e) { //user click on remove text
            e.preventDefault();
            $(this).parent('div').remove();
            x--;
        })
    });
</script>
</body>
</html>
