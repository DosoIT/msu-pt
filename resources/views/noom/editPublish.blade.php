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
    </style>
    <div class="container">
        <div class="row">
            <div class="page-header">
                <h3>
                    <span class="label label-default">แก้ไขโปรไฟล์</span>
                    <span class="label label-default">เพิ่มประกาศรับสมัคร</span>
                </h3>
            </div>
        </div>

        <div class="row">
            <h1 align="center">แก้ไขประกาศ</h1>
            <form>
                <div class="col-xs-4" align="center">
                    <img src="{{url('image/pic-default.png')}}" alt="เลือกรูปภาพ" class="img-rounded" width="200"
                         height="200" id="output">
                    <br><br><input type="file" name="file" id="file" class="inputfile" onchange="loadFile(event)"/>
                    <label for="file"> <i class="glyphicon glyphicon-upload"></i> Choose a Picture...</label>
                </div>
                <div class="col-xs-8">
                    <div class="form-group">
                        <label for="exampleInputEmail1">หัวข้อ</label>
                        <input type="text" class="form-control" placeholder="หัวข้อ" value="xxxxx">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">ประเภทงาน</label>
                        <select name="" class="form-control">
                            <option>พนักงานเสิร์ฟ</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">รายละเอียด</label>
                        <textarea name="" class="form-control" rows="5">รับจำนวน 2 คน</textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">สถานที่</label>
                        <input type="text" class="form-control" placeholder="สถานที่" value="แชมป์หมูกระทะ">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">คุณสมบัติผู้สมัคร</label>
                        <textarea name="" class="form-control" rows="5">1.xxxxx</textarea>
                    </div>
                    <br><br>
                    <h3>ช่องทางการติดต่อ</h3>
                    <div class="headerline"></div>
                    <br>
                    <div class="form-group">
                        <label for="exampleInputPassword1">เบอร์โทร</label>
                        <input type="number" class="form-control" placeholder="เบอร์โทร" value="1234567890">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Facebook</label>
                        <input type="text" class="form-control" placeholder="Facebook" value="xxxxxxx">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">E-mail</label>
                        <input type="email" class="form-control" placeholder="Facebook" value="xxx@xxx.com">
                    </div>
                    <button type="submit" class="btn btn-warning btn-lg">แก้ไข</button>
                </div>

            </form>
        </div>
    </div>
@endsection