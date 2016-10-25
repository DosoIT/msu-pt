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

        .label a {
            font-family: ThaiNeue;
            font-size: 18pt;
        }

        .input {
            font-family: ThaiNeue;
            font-size: 12pt;
        }

        .aherf {
            font-family: ThaiNeue;
            font-size: 18pt;
            color: #0f0f0f;
        }

        .h1 {
            font-family: ThaiNeue;
            font-size: 26pt;
        }

        .textinput {
            font-size: 15pt;
            background: #DCDCDC;
        }
    </style>

    <div class="container">
        <div class="row">
            <div class="col-md-offset-1">
                <div class="dropdown">
                    <a href="showpostEmployer">
                        <button class="btn btn-default  btn-lg dropdown-toggle"><i class="glyphicon glyphicon-user"></i>
                            โปรไฟล์
                        </button>
                    </a>
                    <div class="dropdown-content">
                        <a href="editProfileEmployer"><i class="glyphicon glyphicon-wrench"></i> จัดการโปรไฟล์</a>
                    </div>
                </div>
                <div class="dropdown">
                    <a href="{{ url('postEmployer') }}">
                        <button class="btn btn-default btn-lg"><i class="glyphicon glyphicon-plus"></i>
                            เพิ่มประกาศรับสมัคร
                        </button>
                    </a>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-12">
                <div class="well well-sm">
                    <div class="row">
                        <h1 class="h1" align="center">แก้ไขประกาศ</h1>
                        @foreach($edit_post as $row)
                            <form action="{{ url('postEmployer',$row->wp_id) }}" method="post"
                                  enctype="multipart/form-data">
                                {{ method_field('PUT')}}
                                {{ csrf_field() }}
                                <div class="col-xs-4" align="center">
                                    <img src="{{ url('picture/'.$row->wp_pic) }}" alt="เลือกรูปภาพ" class="img-rounded"
                                         width="200"
                                         height="200" id="output">

                                    <br><br><input type="file" name="pic" id="file" class="inputfile input"
                                                   onchange="loadFile(event)"/>
                                    <label for="file">
                                        <i class="glyphicon glyphicon-upload"></i> Choose a Picture...</label>
                                </div>
                                <div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">หัวข้อ</label>
                                        <input type="text" class="form-control textinput" placeholder="หัวข้อ"
                                               value="{{ $row->wp_titel }}" name="titel">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">ประเภทงาน</label>
                                        <select name="description" class="form-control textinput">
                                            <option>{{ $row->wp_description }}</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">รายละเอียด</label>
                                        <textarea name="detail" class="form-control textinput"
                                                  rows="5">{{ $row->wp_detail }}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">สถานที่</label>
                                        <input type="text" name="location" class="form-control textinput"
                                               placeholder="สถานที่"
                                               value="{{ $row->wp_location }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">คุณสมบัติผู้สมัคร</label>
                                        <textarea name="property" class="form-control textinput"
                                                  rows="5">{{ $row->wp_property }}</textarea>
                                    </div>
                                    <br><br>
                                    <h3>ช่องทางการติดต่อ</h3>
                                    <div class="headerline"></div>
                                    <br>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">เบอร์โทร</label>
                                        <input type="tel" class="form-control textinput" placeholder="เบอร์โทร"
                                               value="{{ $row->wp_tel }}" name="tel">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Facebook</label>
                                        <input type="text" class="form-control textinput" placeholder="Facebook"
                                               value="{{ $row->wp_fb }}" name="fb">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">E-mail</label>
                                        <input type="email" class="form-control textinput" placeholder="Facebook"
                                               value="{{ $row->wp_email }}" name="email">
                                    </div>
                                    <button type="submit" class="btn btn-success btn-lg">แก้ไขประกาศ</button>
                                </div>
                                @endforeach
                            </form>
                    </div>
                    <!-- /.row -->
                </div>
            </div>
        </div>
    </div>

@endsection