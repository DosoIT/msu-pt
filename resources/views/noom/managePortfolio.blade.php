@extends('layouts/template')
@section('content')
    <style>
        thead {
            background-color: #bce8f1;
            font-size: 1.2em;
        }

        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

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
        <br><br><br>
        <h1><i class="glyphicon glyphicon-list"></i> จัดการผลงาน </h1>
        <br>
        <div class="row">
            <div class="col-xs-12">
                <table class="table table-hover ">
                    <thead>
                    <tr>
                        <th>ลำดับที่</th>
                        <th>ชื่อผลงาน</th>
                        <th>รูปภาพผลงาน</th>
                        <th>แก้ไข</th>
                        <th>ลบ</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>1</td>
                        <td>คันแทนา</td>
                        <td>
                            {{--ขยายรูป--}}
                            <div class="dropdown">
                                <img src="{{url('image/profile.jpg')}}" width="30" height="30">
                                <div class="dropdown-content">
                                    <img src="{{url('image/profile.jpg')}}" width="350" height="250">
                                </div>
                            </div>
                            {{--จบ--}}
                        </td>
                        <td><a href="editPortfolio"><img src="{{url('image/edit.png')}}" width="30" height="30"></a>
                        </td>
                        <td><a href="#"><img src="{{url('image/del.png')}}" width="30" height="30"></a></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>นาทงน้อย</td>
                        <td>
                            {{--ขยายรูป--}}
                            <div class="dropdown">
                                <img src="{{url('image/del.png')}}" width="30" height="30">
                                <div class="dropdown-content">
                                    <img src="{{url('image/del.png')}}" width="350" height="250">
                                </div>
                            </div>
                            {{--จบ--}}
                        </td>
                        <td><a href="editPortfolio"><img src="{{url('image/edit.png')}}" width="30" height="30"></a>
                        </td>
                        <td><a href="#"><img src="{{url('image/del.png')}}" width="30" height="30"></a></td>
                    </tr>
                    </tbody>
                </table>


            </div>
        </div>
    </div>
    <br>
@endsection