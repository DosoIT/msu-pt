@extends('layouts.template')
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
        .font{
            font-family: ThaiNeue;
            font-size: 18pt;
        }
        .fontheader{
            font-family: ThaiNeue;
            font-size: 28pt;
        }
        .link {
            font-family: ThaiNeue;
            font-size: 18pt;
        }
    </style>

    <div class="container ">
        <div class="row">
            <div class="page-header col-md-offset-1">
                <button class="btn btn-default link"><span class="glyphicon glyphicon-user"></span>
                    <a href="{{ url('editprofile') }}"> แก้ไขโปร์ไฟล์</a></button>
                <button class="btn btn-default link"><span class="glyphicon glyphicon-plus"></span>
                    <a href="{{ url('postEmployer') }}"> เพิ่มประกาศรับสมัคร</a></button>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-12">
                <div class="well well-sm font">
                    <div class="row">
                        <h1 align="center" class="fontheader">ประกาศรับสมัครงาน</h1>
                        <form action="{{ url('postEmployer') }}" method="post" enctype="multipart/form-data">
                            <div class="col-xs-4" align="center">
                                <img src="{{url('image/pic-default.png')}}" alt="เลือกรูปภาพ" class="img-rounded" width="200"
                                     height="200" id="output">
                                <br><br><input type="file" name="pic" id="file" class="inputfile" onchange="loadFile(event)"/>
                                <label for="file">
                                    <i class="glyphicon glyphicon-upload"></i> Choose a Picture...</label>
                            </div>
                            <div class="col-xs-8">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">หัวข้อ</label>
                                    <input type="text" class="form-control" placeholder="หัวข้อ" name="titelpost" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">ประเภทงาน</label>
                                    <select name="description" class="form-control">
                                        <option >กลางคืน</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">รายละเอียด</label>
                                    <textarea name="detail" class="form-control" rows="5"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">สถานที่</label>
                                    <input type="text" class="form-control" placeholder="สถานที่" value="" name="location">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">คุณสมบัติผู้สมัคร</label>
                                    <textarea name="property" class="form-control" rows="5"></textarea>
                                </div>
                                <br><br>
                                <h3>ช่องทางการติดต่อ</h3>
                                <div class="headerline"></div>
                                <br>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">เบอร์โทร</label>
                                    <input type="number" name="tel" class="form-control" placeholder="เบอร์โทร"  maxlength="10ssss">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Facebook</label>
                                    <input type="text" name="fb" class="form-control" placeholder="Facebook">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">E-mail</label>
                                    <input type="email" class="form-control" placeholder="E-mail" value="" name="email">
                                </div>
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <button type="submit" class="btn btn-success btn-lg link">ประกาศ</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.row -->
                </div>
            </div>
        </div>
    </div>
@endsection