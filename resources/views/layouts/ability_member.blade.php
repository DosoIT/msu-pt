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
@extends('layouts/template')
@section('content')
    <style>
        .label-font {
            font-size: 1.5em;
            font-weight: 700;
            color: gray;
            display: inline-block;
        }

        .remove_field {
            color: #fff;
        }

        /*เมนู*/
        .dropbtn {
            background-color: #cccccc;
            color: black;
            padding: 16px;
            font-size: 20px;
            border: none;
            cursor: pointer;
        }

        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 200px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            font-size: 18px;
        }

        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;

        }
        .img-zoom {
            width: 310px;
            -webkit-transition: all .2s ease-in-out;
            -moz-transition: all .2s ease-in-out;
            -o-transition: all .2s ease-in-out;
            -ms-transition: all .2s ease-in-out;
        .dropdown-content a:hover {
            background-color: #00bcd4;
            color: #fff;
        }

        .dropdown:hover .dropdown-content {
            display: block;

        }

        .dropdown:hover .dropbtn {
            background-color: #2a88bd;
            color: #fff;
            text-decoration: none;
        }
    </style>
</head>
<body>
@include('layouts.navbar')
<div class="col-md-offset-9">
    <p></p>
    <p><a href="#" class="btn btn-primary glyphicon glyphicon-edit">Edit</a>
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
                        <li><a href="https://www.facebook.com/siriwut.patsan"><span class="glyphicon glyphicon-star"> SiriwutPatsan</span></a>
                        </li>
                        <li><a href="#"><span class="glyphicon glyphicon-envelope"> Siruwt-77@hotmail.com</span></a>
                        </li>
                        <li>
                            <a href=""><span class="glyphicon glyphicon-road"> สารคาม แดนฝัน</span></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6  form-group">
                <h4>ลักษณะงาน</h4>
                <p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
                <p>Ab blanditiis enim ipsum optio recusandae reiciendis!</p>
                <p>Facilis illum inventore iste nobis quos sapiente.</p>
                <p>Asperiores minima qui quod repudiandae temporibus ut?</p>
                <p>Ex incidunt magni nostrum obcaecati odit voluptatem?</p>
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
                <img src="image/bander01.png" class="img-thumbnail img-zoom" alt="Cinque Terre" width="304"
                     height="236">
            </div>
            <div class="col-xs-3 img-responsive">
                <img src="image/bander01.png" class="img-thumbnail img-zoom" alt="Cinque Terre" width="304"
                     height="236">
            </div>
            <div class="col-xs-3 img-responsive">
                <img src="image/bander01.png" class="img-thumbnail img-zoom" alt="Cinque Terre" width="304"
                     height="236">
            </div>
            <div class="col-xs-3 img-responsive">
                <img src="image/bander01.png" class="img-thumbnail img-zoom" alt="Cinque Terre" width="304"
                     height="236">
            </div>
        </div>
        <hr style="border: 1px solid #8c8c8c">
    </div>
</div>
{{--Script--}}
{!! Html::script('js/jquery.min.js') !!}
{!! Html::script('js/bootstrap.min.js') !!}
</body>
</html>
=======
    <div class="container">
        <form>
            <div class="row well" align="center">
                <img src="{{url('image/profile.jpg')}}" class="img-circle" width="150" height="150">
                <br><br><label class="label-font">Noom Attapon Jangpai</label>
                <div class="page-header"></div>

                <div class="col-xs-6 " align="center">
                    <h4>ที่อยู่</h4>
                        <h5>
                            192 ม.2 ต.หนองน้ำใส อ.บ้านไผ่ จ.ขอนแก่น นะครัช
                        </h5>
                    <div class="page-header"></div>
                    <div class="dropdown">
                        <button class="btn btn-danger dropdown-toggle" type="button" data-toggle="dropdown">ข้อมูลการติดต่อ
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
                <div class="col-xs-6" align="left">
                    <h3>ความสามารถ</h3><br>
                    <div class="input_fields_01">
                        <p>ซักผ้าเก่ง</p>
                        <p>เขียนโปรแกรม</p>
                        <p>ตัดต่อภาพ</p>
                        <p>ตัดต่อวีดีโอ</p>
                    </div>

                    <div class="page-header"></div>
                    <h3>ลักษณะงาน</h3><br>
                    <div class="input_fields_02">
                       <p>สามารถใช้ Photo Shop ได้</p>
                        <p>เขียนโปรแกรมได้</p>
                        <p>ออกแบบ เว็บดีไซน์ได้</p>
                        <p>ตัดต่อวีดีโอได้ครัช</p>
                    </div>
                            </div>
                		</div>
                		<div class="col-md-6  form-group">
                			<h4>ลักษณะงาน</h4>
                			 <p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
                            <p>Ab blanditiis enim ipsum optio recusandae reiciendis!</p>
                            <p>Facilis illum inventore iste nobis quos sapiente.</p>
                            <p>Asperiores minima qui quod repudiandae temporibus ut?</p>
                            <p>Ex incidunt magni nostrum obcaecati odit voluptatem?</p>
                             </p>
                		</div>
                	</form>
                </div>
                <br><br>

            </div>
            <div align="center">
                <br><br> <input type="submit" value="บันทึกข้อมูล" class="btn btn-primary btn-lg">
            </div>
        </form>
    </div>
@endsection
