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
        <div class="row">
            <div class="page-header">

                <div class="dropdown">
                    <a href="manageProfile" class="dropbtn"><i class="glyphicon glyphicon-user"></i> โปรไฟล์</a>
                </div>

                <div class="dropdown">
                    <button class="dropbtn"><i class="glyphicon glyphicon-list"></i> ผลงาน</button>
                    <div class="dropdown-content">
                        <a href="addPortfolio"><i class="glyphicon glyphicon-plus"></i> เพิ่มผลงาน</a>
                        <a href="managePortfolio"><i class="glyphicon glyphicon-wrench"></i> จัดการผลงาน</a>

                    </div>
                </div>

            </div>
        </div>
        <form>
            <div class="row well" align="center">
                <img src="{{url('image/pic-default.png')}}" class="img-circle" width="150" height="150">
                <br><br><label class="label-font">Noom Attapon Jangpai</label>
                <div class="page-header"></div>

                <div class="col-xs-6 " align="center">
                    <h3>ที่อยู่</h3>
                    <label align="left">71 หมู่ที่ 6 ต.บ้านเหลื่อม อ.บ้านเหลื่อม จ.นครราชสีมา 30350</label>
                    <div class="page-header"></div>

                    <h3>ข้อมูลการติดต่อ</h3><br>
                    <div align="left">
                        <img src="{{ url('image/call.png') }}" width="30" height="30"> :
                        <label>086-2511993</label><br><br>
                        <img src="{{ url('image/facebook.png') }}" width="30" height="30"> : <label>Noom Attapon
                            Noon</label><br><br>
                        <img src="{{ url('image/email.png') }}" width="30" height="30"> : <label>noom.noon09@gmail
                            .com</label>
                    </div>
                </div>
                <div class="col-xs-6" align="left">
                    <h3>ความสามารถ</h3><br>
                    <div class="input_fields_01">
                        <br>
                        <button class="add_field_01 btn btn-success">เพิ่มความสามารถ</button>
                    </div>

                    <div class="page-header"></div>
                    <h3>ลักษณะงาน</h3><br>
                    <div class="input_fields_02">
                        <br>
                        <button class="add_field_02 btn btn-success">เพิ่มความสามารถ</button>
                        <br>
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