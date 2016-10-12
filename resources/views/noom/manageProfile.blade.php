@extends('layouts/back_end')
@section('content')
    <style>
        h1{
            font-size: 30pt;
            font-family: ThaiNeue;
        }
        label {
            font-size: 18pt;
            font-family: ThaiNeue;
        }
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
        .h3-header {
            font-size: 20pt;
            font-family: ThaiNeue;
        }

        label {
            font-size: 12pt;
            font-family: ThaiNeue;
        }

        .label-font {
            font-size: 18pt;
            font-weight: 700;
            color: gray;
            display: inline-block;
            font-family: ThaiNeue;
        }

        .remove_field {
            color: #fff;
        }

        /*เมนู*/
        .dropbtn {
            background-color: #fff;
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

    </style>

    <div class="container">
        <div class="row">
            <div class="page-header">

                <div class="dropdown">
                    <a href="profile"><button class="btn btn-default  btn-lg"><i class="glyphicon glyphicon-user"></i> โปรไฟล์</button></a>
                    <div class="dropdown-content">
                        <a href="manageProfile"><i class="glyphicon glyphicon-wrench"></i> จัดการโปรไฟล์</a>
                        <a href="managePortfolio"><i class="glyphicon glyphicon-pencil"></i> แก้ไขโปรไฟล์</a>
                    </div>
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
        <form action="{{url('manageProfile')}}" method="post" enctype="multipart/form-data">

            <input type="hidden" name="_token" value="<?php echo csrf_token();?>">

            <div class="row " align="center">


                    <img src="{{url('image/pic-default.png')}}" alt="เลือกรูปภาพ" class="img-rounded" width="200" height="150" id="output">
                    <br><br><input type="file" name="image" id="file" class="inputfile" onchange="loadFile(event)"/>
                    <label for="file"> <i class="glyphicon glyphicon-upload"></i> Choose a Picture...</label>


                <br><br><label class="label-font">{{ Auth::user()->name }}</label>
                <div class="page-header"></div>


                <div class="col-xs-6 " align="center">
                    <h3 class="h3-header">ที่อยู่</h3>
                    <textarea ea name="address" class="form-control">

                    </textarea>
                    <div class="page-header"></div>


                    <h3 class="h3-header">ข้อมูลการติดต่อ</h3><br>
                    <div align="left">
                        <img src="{{ url('image/call.png') }}" width="30" height="30"> :
                        <input type="text" name="tel" ><br><br>
                        <img src="{{ url('image/facebook.png') }}" width="30" height="30"> :
                        <input type="text" name="facebook" ><br><br>
                        <img src="{{ url('image/email.png') }}" width="30" height="30"> :
                        <input type="email" name="email" >
                    </div>
                </div>
                <div class="col-xs-6" align="left">


                    <h3 class="h3-header">ประเภทงาน</h3><br>

                    <div>
                        <select name="cat_id" class="form-control">
                            @foreach($cate as $cat_value)
                                <option value="{{$cat_value->c_id}}">{{$cat_value->c_name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="page-header"></div>
                    <h3 class="h3-header">ความสามารถ</h3><br>
                    <div class="input_fields_01">
                        <br>
                        <div><input type="text" name="skill[]" class="form-control" required /></div>
                        <button class="add_field_01 btn btn-success">เพิ่มความสามารถ</button>
                    </div>

                    <div class="page-header"></div>
                    <h3 class="h3-header">ลักษณะงาน</h3><br>
                    <div class="input_fields_02">
                        <br>
                        <div><input type="text" name="job[]" class="form-control" required /></div>
                        <button class="add_field_02 btn btn-success">เพิ่มความสามารถ</button>
                        <br>
                    </div>


                </div>
                <br><br>

            </div>
            <div align="center">
                <br><br>
                <input type="submit" value="บันทึกข้อมูล" class="btn btn-success"
                                style="font-family: ThaiNeue;font-size: 18pt;height: 30px;">
            </div>
        </form>
        <br><br>

    </div>

@endsection