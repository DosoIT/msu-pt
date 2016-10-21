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
            text-transform: lowercase;
        }
        .fontheader{
            font-family: ThaiNeue;
            font-size: 30pt;
            text-transform: uppercase;
        }
        .link {
            font-family: ThaiNeue;
            font-size: 18pt;
        }
        .textinput{
            font-size: 15pt;
            background: #DCDCDC;
        }
        .headertext{
            font-size: 20pt;
            text-transform: uppercase;
        }
    </style>

    <div class="container ">
        <div class="row">
            <div class="page-header col-md-offset-1">
                <button class="btn btn-default link"><span class="glyphicon glyphicon-user"></span>
                    <a href="{{ url('editProfileEmployer') }}"> แก้ไขโปร์ไฟล์</a></button>
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
                                <br><br><input type="file" name="pic" id="file"  class="inputfile" onchange="loadFile(event)"/>
                                <label for="file">
                                    <i class="glyphicon glyphicon-upload"></i> Choose a Picture...</label>
                            </div>
                            <div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
                                <div class="form-group">
                                    <label for="exampleTitle inputWarning">ชื่อบริษัท/หัวข้อ</label>
                                    <input type="text" class="form-control textinput" size="5" placeholder="หัวข้อ" name="titelpost" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleDescription" class="control-label">ประเภทงาน</label>
                                    <select name="description" class="form-control textinput">
                                        <option>กลางคืน</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleDetail" class="control-label">รายละเอียด</label>
                                    <textarea name="detail" class="form-control textinput" rows="2"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleAddress" class="control-label">สถานที่</label>
                                    <input type="text" class="form-control textinput" placeholder="สถานที่" value="" name="location">
                                </div>
                                <div class="form-group">
                                    <label for="exampleProperty" class="control-label">คุณสมบัติผู้สมัคร</label>
                                    <textarea name="property" class="form-control textinput" rows="2"></textarea>
                                </div>
                                <h3 class="headertext">ช่องทางการติดต่อ</h3>
                                <div class="headerline"></div>
                                <br>
                                <div class="form-group">
                                    <label for="exampleTel" class="control-label">เบอร์โทร</label>
                                    <input type="tel" name="tel" class="form-control textinput" placeholder="เบอร์โทร"  maxlength="10" onkeyup="if(isNaN(this.value)){alert('เบอร์โทรต้องเป็นตัวเลขเท่านั้น!'); this.value='';}" >
                                </div>
                                <div class="form-group">
                                    <label for="exampleFacebook" class="control-label">Facebook</label>
                                    <input type="text" name="fb" class="form-control textinput" placeholder="Facebook">
                                </div>
                                <div class="form-group">
                                    <label for="exampleEmail" class="control-label">E-mail</label>
                                    <input type="email" class="form-control textinput" placeholder="E-mail" value="" name="email">
                                </div>
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <button type="submit" class="btn btn-success btn-lg link col-sm-2 col-xs-2 col-md-2">ประกาศ</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.row -->
                </div>
            </div>
        </div>
    </div>
@endsection