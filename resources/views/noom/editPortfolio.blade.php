@extends('layouts/template')
@section('content')
    <style>
        .inputfile {
            width: 0.1px;
            height: 0.1px;
            opacity: 0;
            overflow: hidden;
            position: absolute;
            z-index: -1;
        }

        .inputfile + label {
            font-size: 1.25em;
            font-weight: 700;
            color: gray;
            display: inline-block;
        }

        .inputfile + label {
            cursor: pointer; /* "hand" cursor */
        }

        .headerline {
            border-bottom: 2px solid #8c8c8c;
            background-color: lightgrey;
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
        h1{
            font-size: 30pt;
            font-family: ThaiNeue;
        }
        label {
            font-size: 18pt;
            font-family: ThaiNeue;
        }
    </style>

    <div class="container">
        <div class="row">
            <div class="page-header">

                <div class="dropdown">
                    <button class="btn btn-default  btn-lg" >
                        <a href="manageProfile" > <i class="glyphicon glyphicon-user" ></i> โปรไฟล์</a></button>
                </div>

                <div class="dropdown">
                    <button class="btn btn-default btn-lg "><i class="glyphicon glyphicon-list"></i> ผลงาน</button>
                    <div class="dropdown-content">
                        <a href="addPortfolio"><i class="glyphicon glyphicon-plus"></i> เพิ่มผลงาน</a>
                        <a href="managePortfolio"><i class="glyphicon glyphicon-wrench"></i> จัดการผลงาน</a>
                    </div>
                </div>

            </div>
        </div>
        <br><br>
        <div class="row">
            <h1 align="center">แก้ไขผลงาน</h1><br>
            <form>
                <div class="col-xs-4" align="center">
                    <img src="{{url('image/pic-default.png')}}" alt="เลือกรูปภาพ" class="img-rounded" width="200"
                         height="200" id="output">
                    <br><br><input type="file" name="file" id="file" class="inputfile" onchange="loadFile(event)"/>
                    <label for="file"> <i class="glyphicon glyphicon-upload"></i> Choose a Picture...</label>
                </div>
                <div class="col-xs-8">
                    <div class="form-group">
                        <label for="exampleInputEmail1">ชื่อผลงาน</label>
                        <input type="text" class="form-control" placeholder="ชื่อผลงาน" value="คันแทนา">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1"> </label>
                        <select name="" class="form-control">
                            <option>พนักงานเสิร์ฟ</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">รายละเอียด</label>
                        <textarea name="" class="form-control" rows="5">โหดจุง</textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">สถานที่</label>
                        <input type="text" class="form-control" placeholder="สถานที่" value="เลนกลาง">
                    </div>

                    <button type="submit" class="btn btn-warning btn-lg">แก้ไข</button>
                </div>

            </form>
        </div>
    </div>
@endsection