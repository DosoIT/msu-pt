<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>MSU Helping</title>
	{!! Html::style('css/bootstrap.min.css') !!}
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
	<div class="borColor"></div>
        <div class="col-md-offset-9">
            <p></p>
            <p> <a href="#" class="btn btn-primary glyphicon glyphicon-edit">Edit</a>
                <a href="#" class="btn btn-danger glyphicon glyphicon-remove">Delect</a>
            </p>
        </div>
		<div class="container well">
			<div align="center">
				<h3 align="center">My Profile</h3>
					<img src="image/bander01.png" class="img-thumbnail" alt="Cinque Terre" width="304" height="236">
			</div>
                <div class="col-md-8  col-md-offset-2">
                	<form action="">
                		<div class="col-md-6  form-group">
                			<h4>ที่อยู่</h4>
                			 <h5>
                                192 ม.2 ต.หนองน้ำใส อ.บ้านไผ่ จ.ขอนแก่น นะครัช
                             </h5>
                		</div>
                		<div class="col-md-6  form-group">
                			<h4>ความสามารถ</h4>
                            <h5><p>ซักผ้าเก่ง</p>
                                <p>เขียนโปรแกรม</p>
                                <p>ตัดต่อภาพ</p>
                                <p>ตัดต่อวีดีโอ</p>
                            </h5>
                		</div>
                		<div class="col-md-6  form-group">
                            <div class="dropdown">
                                <button class="btn btn-danger dropdown-toggle" type="button" data-toggle="dropdown">ติดต่อ
                                <span class="caret"></span></button>
                                <ul class="dropdown-menu">
                                  <li><a href="#">
                                    <span class="glyphicon glyphicon-phone"> 0874236079</span></a></li>
                                  <li><a href="https://www.facebook.com/siriwut.patsan"><span class="glyphicon glyphicon-star"> SiriwutPatsan</span></a></li>
                                  <li><a href="#"><span class="glyphicon glyphicon-envelope"> Siruwt-77@hotmail.com</span></a></li>
                                  <li>
                                        <a href=""><span class="glyphicon glyphicon-road"> สารคาม แดนฝัน</span></a>
                                  </li>
                                </ul>
                            </div>
                		</div>
                		<div class="col-md-6  form-group">
                			<h4>ลักษณะงาน</h4>
                			 <p>
                                ......................................................... <br>
                                ......................................................... <br>
                                ......................................................... <br>
                             </p>
                		</div>
                	</form>
                </div>
                <div class="container">
    <div class="row">
        <div class="col-xs-12"><h2 style="font-family: 'ThaiNeue'; font-size: 48px">ผลงาน</h2></div>
    </div>
    <div class="row">
        <div class="col-xs-3 img-responsive">
            <img src="image/bander01.png" class="img-thumbnail img-zoom" alt="Cinque Terre" width="304" height="236">
        </div>
        <div class="col-xs-3 img-responsive">
            <img src="image/bander01.png" class="img-thumbnail img-zoom" alt="Cinque Terre" width="304" height="236">
        </div>
        <div class="col-xs-3 img-responsive">
            <img src="image/bander01.png" class="img-thumbnail img-zoom" alt="Cinque Terre" width="304" height="236">
        </div>
        <div class="col-xs-3 img-responsive">
            <img src="image/bander01.png" class="img-thumbnail img-zoom" alt="Cinque Terre" width="304" height="236">
        </div>
    </div>
    <hr style="border: 1px solid #8c8c8c">
</div>
		</div>
	{{--Script--}}
{!! Html::script('js/jquery.min.js') !!}
{!! Html::script('js/bootstrap.min.js') !!}
<script>
    $(document).ready(function () {
        var colors = ["#ff33ac", "#f44336", "#ffff00", "00ffff", "#FF5733", "#2ECC71", "#3498DB", "#8E44AD"];
        var ran = Math.floor(Math.random() * colors.length);
        $(".borColor").css("border", "2px solid " + colors[ran]);
        $('[data-toggle="popover"]').popover();
    });
    $('.img-responsive').hover(function () {
       $(this).addClass('transition');
    },function () {
        $(this).removeClass('transition');
    });
</script>
</body>
</html>
