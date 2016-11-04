@extends('layouts/back_end')
@section('content')
    <style>
        h1 {
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

    </style>
    <div class="container">
        <div class="row">
            <div class="page-header">

                <div class="dropdown">
                    <a href="profile">
                        <button class="btn btn-default  btn-lg"><i class="glyphicon glyphicon-user"></i> โปรไฟล์
                        </button>
                    </a>
                    <div class="dropdown-content">
                        <a href="manageProfile"><i class="glyphicon glyphicon-wrench"></i> จัดการโปรไฟล์</a>
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
        <br><br>
        <div class="row">
            <h1 align="center">เพิ่มผลงาน</h1>
            <form action="{{url('addPortfolio')}}" method="post" enctype="multipart/form-data" onSubmit="return imgSubmit();">
                <input type="hidden" name="_token" value="<?php echo csrf_token();?>">
                <div class="col-xs-4" align="center">
                    <img src="{{url('image/pic-default.png')}}" alt="เลือกรูปภาพ" class="img-rounded" width="200"
                         height="200" id="output">
                    <br><br><input type="file" name="image[]" id="file" class="inputfile" onchange="loadFile(event)"
                                    multiple/>
                    <label for="file"> <i class="glyphicon glyphicon-upload"></i> Choose a Picture...</label>
                    <p style="color: #86493f;">***สามารถเลือกได้มากกว่า 1 รูป</p>
                </div>
                <div class="col-xs-8">
                    <div class="form-group">
                        <label for="exampleInputEmail1">ชื่อผลงาน</label>
                        <input type="text" class="form-control" placeholder="ชื่อผลงาน" name="pf_name" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">ประเภท </label>
                        <select name="cate" class="form-control">
                            @foreach($cate as $value)
                                <option value="{{$value->c_id}}">{{$value->c_name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">รายละเอียด <span style="font-size: 12pt;">(กรอกรายละเอียดของผลงาน)</span></label>
                        <textarea name="pf_detail" class="form-control" rows="5" required></textarea>
                    </div>

                    <button type="submit" class="btn btn-success btn-lg" style="font-family: ThaiNeue;">เพิ่ม</button>
                </div>

            </form>
        </div>
    </div>
    <script !src="">
        function imgSubmit()
        {
            if(document.getElementById('file').value  == ""  )
            {
                alert('กรุณาเลือกรูปภาพ');
                return false;
            }
        }
    </script>
@endsection