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

        .labeltext {
            font-family: ThaiNeue;
            font-size: 18pt;
        }

        input {
            font-family: ThaiNeue;
            font-size: 12pt;
        }

        .alink {
            font-family: ThaiNeue;
            font-size: 18pt;
        }

        .textinput {
            margin-top: 11px;
            margin-left: -20px;
            font-size: 15pt;
            background: #DCDCDC;
        }

        .dropdown {
            position: relative;
            display: inline-block;
        }
        .dropdown-content {
            display: none;
            position: absolute;
            /*background-color: #f9f9f9;*/
            min-width: 160px;
            /*box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);*/
        }
        .dropdown:hover .dropdown-content {
            display: block;
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
        .dropdown:hover {
            background-color: #2a88bd;
            color: #fff;
            text-decoration: none;
        }
    </style>
    <div class="container ">
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
            @if (\Session::has('insert'))
                <div class="alert alert-success">
                    <ul>
                        <li>{!! \Session::get('insert') !!}</li>
                    </ul>
                </div>
            @endif
            <br>
            <br>
            <div class="col-xs-12  col-md-12">
                <div class="well well-sm">
                    @if(count($profile)<1)
                        <form action="{{ url('editProfileEmployer') }}" method="post"
                              class="form-horizontal" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-xs-4" align="center">
                                    <img src="{{url('image/pic-default.png')}}" alt="เลือกรูปภาพ" class="img-rounded"
                                         width="200"
                                         height="200" id="output" required="">
                                    <br><br><input type="file" name="image" id="file" class="inputfile"
                                                   onchange="loadFile(event)"/>
                                    <label for="file">
                                        <i class="glyphicon glyphicon-upload"></i> Choose a Picture...</label>
                                </div>
                                <div class="col-sm-8 col-md-8">
                                    <div class="row">
                                        <fieldset>
                                            <legend class="font">เพิ่มโปร์ไฟล์</legend>
                                            <div class="form-group row">
                                                <label class="col-sm-3 control-label labeltext">ชื่อเข้าใช้งาน :</label>
                                                <div class="col-sm-5">
                                                    <input type="text" name="fullname" class="form-control textinput"
                                                           value="{{ Auth::user()->name }}" disabled>
                                                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label labeltext">ที่อยู่ :</label>
                                                <div class="col-sm-5">
                                                    <textarea name="address" id="" rows="2"
                                                              class="form-control textinput" required=""></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label labeltext" for="textinput">โทร
                                                    :</label>
                                                <div class="col-sm-5">
                                                    <input type="tel" name="tel" placeholder="080-xxxxxxx"
                                                           class="form-control textinput" value=""
                                                           maxlength="10" required
                                                           onkeyup="if(isNaN(this.value)){alert('เบอร์โทรต้องเป็นตัวเลขเท่านั้น!'); this.value='';}">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label labeltext">Faecbook :</label>
                                                <div class="col-sm-5">
                                                    <input type="text" name="facebook" class="form-control textinput"
                                                           value="" placeholder="Facebook" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label labeltext">E-mail :</label>
                                                <div class="col-sm-5">
                                                    <input type="text" name="email" class="form-control textinput"
                                                           value="{{ Auth::user()->email }}" placeholder="Facebook"
                                                           required>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-sm-offset-3 col-sm-10 col-md-10">
                                                    <div class="pull-left">
                                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                        <button type="submit" class="btn btn-success btn-lg"
                                                                style="margin-top: 11px;margin-left: -20px;font-size: 15pt;">
                                                            บันทึก
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>
                                    </div><!-- end row2 -->
                                </div>
                            </div>
                        </form>
                    @else
                        {{--my data--}}
                        @foreach($profile as $value)
                            <form action="{{ url('editProfileEmployer',$value->id) }}" method="post"
                                  class="form-horizontal" role="form" enctype="multipart/form-data">
                                {{ method_field('PUT')}}
                                {{ csrf_field() }}
                                <div class="row">
                                    <div class="col-xs-4" align="center">
                                        <img src="{{url('picture/'.$value->picture)}}" alt="เลือกรูปภาพ"
                                             class="img-rounded"
                                             width="200"
                                             height="200" id="output" required="">
                                        <br><br><input type="file" name="image" id="file" class="inputfile"
                                                       onchange="loadFile(event)"/>
                                        <label for="file">
                                            <i class="glyphicon glyphicon-upload"></i> Choose a Picture...</label>
                                    </div>
                                    <div class="col-sm-8 col-md-8">
                                        <div class="row">
                                            <fieldset>
                                                <legend class="font">แก้ไขโปร์ไฟล์</legend>
                                                <div class="form-group row">
                                                    <label class="col-sm-3 control-label labeltext">ชื่อเข้าใช้งาน
                                                        :</label>
                                                    <div class="col-sm-5">
                                                        <input type="text" name="fullname"
                                                               class="form-control textinput"
                                                               value="{{ Auth::user()->name }}" disabled>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-3 control-label labeltext">ที่อยู่ :</label>
                                                    <div class="col-sm-5">
                                                <textarea name="address" id="" rows="2" class="form-control textinput">
                                                    {{ $value->address  }}
                                                </textarea>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-3 control-label labeltext" for="textinput">โทร
                                                        :</label>
                                                    <div class="col-sm-5">
                                                        <input type="tel" name="tel" placeholder="080-xxxxxxx"
                                                               class="form-control textinput" value="{{ $value->tel  }}"
                                                               maxlength="10"
                                                               onkeyup="if(isNaN(this.value)){alert('เบอร์โทรต้องเป็นตัวเลขเท่านั้น!'); this.value='';}">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-3 control-label labeltext">Faecbook :</label>
                                                    <div class="col-sm-5">
                                                        <input type="text" name="facebook"
                                                               class="form-control textinput"
                                                               value="{{ $value->facebook  }}" placeholder="Facebook">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-3 control-label labeltext">E-mail :</label>
                                                    <div class="col-sm-5">
                                                        <input type="text" name="email"
                                                               class="form-control textinput"
                                                               value="{{ $value->email }}" placeholder="Facebook">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-sm-offset-3 col-sm-10 col-md-10">
                                                        <div class="pull-left">
                                                            <button type="submit" class="btn btn-success btn-lg"
                                                                    style="margin-top: 11px;margin-left: -20px;font-size: 15pt;">
                                                                บันทึก
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </fieldset>
                                        </div><!-- end row2 -->
                                    </div>
                                </div>
                            </form>
                        @endforeach
                    @endif
                </div>
                <!-- end row1 -->
            </div>
        </div>
    </div>
    </div>
    <script>
        $('#back-to-top').tooltip('show');
        $(".alert").tooltip();
    </script>
@endsection