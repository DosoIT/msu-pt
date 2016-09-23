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
                <br><br>
            </div>
            <div align="center">
                <br><br> <input type="submit" value="บันทึกข้อมูล" class="btn btn-primary btn-lg">
            </div>
        </form>
    </div>
@endsection