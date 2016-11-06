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
            cursor: pointer;
        }

        .intext {
            font-family: ThaiNeue;
            font-size: 18pt;
        }

        .labeltext {
            font-family: ThaiNeue;
            font-size: 18pt;
        }

        .textinput {
            margin-top: 11px;
            margin-left: -20px;
            font-size: 15pt;
            background: #DCDCDC;
        }

        .dropdownlinks {
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

        .dropdownlinks:hover .dropdown-content {
            display: block;
        }

        .dropdownlinks {
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

        .dropdownlinks:hover .dropdown-content {
            display: block;
        }

        .dropdownlinks:hover {
            background-color: #2a88bd;
            color: #fff;
            text-decoration: none;
        }

        .btnBorder {
            border: 1px solid Gray;
            width: 100%;
            height: 50px;
        }

        .btnBorder > p {
            font-family: ThaiNeue;
            font-size: 18pt;

        }
    </style>
    <div class="container ">
        <div class="row">
            <div class="col-md-offset-1">
                <div class="dropdownlinks">
                    <a href="showpostEmployer">
                        <button class="dropdown-toggle w3-btn w3-white w3-hover-green btnBorder">
                            <p><i class="glyphicon glyphicon-user"></i>โปรไฟล์</p>
                        </button>
                    </a>
                    <div class="dropdown-content w3-hover-Teal">
                        <a href="editProfileEmployer"><i class="glyphicon glyphicon-wrench "></i> จัดการโปรไฟล์</a>
                    </div>
                </div>
                <div class="dropdownlinks">
                    <a href="{{ url('postEmployer') }}">
                        <button class="w3-btn w3-white w3-hover-green w3-large btnBorder">
                            <p><i class="glyphicon glyphicon-plus"></i>เพิ่มประกาศรับสมัคร</p>
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
                              class="form-horizontal" enctype="multipart/form-data" onSubmit="return imgSubmit();">
                            <div class="row">
                                <div class="col-xs-4" align="center">
                                    <img src="{{url('image/pic-default.png')}}" alt="เลือกรูปภาพ" class="img-rounded"
                                         width="200"
                                         height="200" id="output" required="">
                                    <br><br><input type="file" name="image" id="file" class="inputfile"
                                                   onchange="loadFile(event)"/>
                                    <label for="file">
                                        <i class="glyphicon glyphicon-upload"></i> Choose a Picture...</label>
                                    <p style="font-size: 11pt;">*รูปประจำตัวของคุณ</p>
                                </div>
                                <div class="col-sm-8 col-md-8">
                                    <div class="row">
                                        <fieldset>
                                            <legend class="w3-xxlarge" style="font-family: ThaiNeue; font-size: 22pt;">
                                                เพิ่มโปร์ไฟล์
                                            </legend>
                                            <div class="form-group row">
                                                <label class="col-sm-3 control-label labeltext">ชื่อเข้าใช้งาน :</label>
                                                <div class="col-sm-5">
                                                    <input type="text" name="fullname"
                                                           class="w3-input w3-animate-input w3-large txt"
                                                           value="{{ Auth::user()->name }}" disabled>
                                                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                                    <p style="font-size: 11pt;">
                                                        *ชื่อเข้าใช้งานไม่สารมาถเปลี่ยนแปลงได้</p>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label labeltext">ที่อยู่ :</label>
                                                <div class="col-sm-5">
                                                    <textarea name="address" id="" rows="2"
                                                              class="w3-input w3-animate-input txt intext"
                                                              required=""></textarea>
                                                    <p style="font-size: 11pt;">*ที่อยู่ของคุณ</p>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label labeltext" for="textinput">สถานที่
                                                    :</label>
                                                <div class="col-sm-5">
                                                    <?php
                                                    $conn = mysqli_connect("localhost", "root", "", "msu_pt");
                                                    mysqli_set_charset($conn, "utf8");
                                                    $sql = "SELECT * FROM tb_locations";
                                                    $query = mysqli_query($conn, $sql);
                                                    ?>
                                                    <select class="w3-input w3-animate-input txt intext"
                                                            name="location">
                                                        <option value="">-- เลือกสถานที่ --</option>
                                                        <?php while ($values = mysqli_fetch_array($query)){ ?>
                                                        <option value="<?php echo $values['id']; ?>"><?php echo $values['location']; ?></option>
                                                        <?php } ?>
                                                    </select>
                                                    <p style="font-size: 11pt;">*อำเภอ</p>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label labeltext" for="textinput">โทร
                                                    :</label>
                                                <div class="col-sm-5">
                                                    <input type="tel" name="tel" placeholder="080-xxxxxxx"
                                                           class="w3-input w3-animate-input txt" value=""
                                                           maxlength="10" required
                                                           onkeyup="if(isNaN(this.value)){alert('เบอร์โทรต้องเป็นตัวเลขเท่านั้น!'); this.value='';}">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label labeltext" for="textinput">Line
                                                    :</label>
                                                <div class="col-sm-5">
                                                    <input type="tel" name="line" placeholder="ID-Line"
                                                           class="w3-input w3-animate-input txt" value=""
                                                           maxlength="10" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label labeltext">Faecbook :</label>
                                                <div class="col-sm-5">
                                                    <input type="text" name="facebook"
                                                           class="w3-input w3-animate-input txt"
                                                           value="" placeholder="Facebook" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-offset-3 col-sm-10 col-md-10">
                                                    <div class="pull-left">
                                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                        <button type="submit"
                                                                class="btn btn-success btn-lg w3-btn w3-white w3-hover-green"
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
                        {{--ถ้ามีข้อมูล--}}
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
                                        <p style="font-size: 11pt;" align="center">*รูปประจำตัวของคุณ</p>
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
                                                               class="w3-input w3-animate-input txt"
                                                               value="{{ Auth::user()->name }}" disabled>
                                                        <p style="font-size: 11pt;">
                                                            *ชื่อเข้าใช้งานไม่สามารถเปลี่ยนแปลงได้</p>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-3 control-label labeltext">ที่อยู่ :</label>
                                                    <div class="col-sm-5">
                                                <textarea name="address" id="" rows="2" class="w3-input w3-animate-input txt">
                                                    {{ $value->address  }}
                                                </textarea>
                                                        <p style="font-size: 11pt;">
                                                            *ที่อยู่ของคุณ</p>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-3 control-label labeltext" for="textinput">สถานที่
                                                        :</label>
                                                    <div class="col-sm-5">
                                                        <?php
                                                        $conn = mysqli_connect("localhost", "root", "", "msu_pt");
                                                        mysqli_set_charset($conn, "utf8");
                                                        $sql = "SELECT * FROM tb_locations";
                                                        $query = mysqli_query($conn, $sql);
                                                        ?>
                                                        <select class="w3-input w3-animate-input txt" name="location">
                                                            <?php while ($values = mysqli_fetch_array($query)){ ?>
                                                            <option value="<?php echo $values['lo_id']; ?>"
                                                            <?php if ($values['id'] == $value->lo_id) {
                                                                echo 'selected';
                                                            }?>>
                                                                <?php echo $values['location']; ?>
                                                            </option>
                                                            <?php } ?>
                                                        </select>
                                                        <p style="font-size: 11pt;">*อำเภอ</p>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-3 control-label labeltext" for="textinput">โทร
                                                        :</label>
                                                    <div class="col-sm-5">
                                                        <input type="tel" name="tel" placeholder="080-xxxxxxx"
                                                               class="w3-input w3-animate-input txt" value="{{ $value->tel  }}"
                                                               maxlength="10"
                                                               onkeyup="if(isNaN(this.value)){alert('เบอร์โทรต้องเป็นตัวเลขเท่านั้น!'); this.value='';}">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-3 control-label labeltext" for="textinput">Line
                                                        :</label>
                                                    <div class="col-sm-5">
                                                        <input type="tel" name="line" placeholder="ID-Line"
                                                               class="w3-input w3-animate-input txt"
                                                               value="{{ $value->line  }}"
                                                               maxlength="10"
                                                        >
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-3 control-label labeltext">Faecbook :</label>
                                                    <div class="col-sm-5">
                                                        <input type="text" name="facebook"
                                                               class="w3-input w3-animate-input txt"
                                                               value="{{ $value->facebook  }}" placeholder="Facebook">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-sm-offset-3 col-sm-10 col-md-10">
                                                        <div class="pull-left">
                                                            <button type="submit"
                                                                    class="btn btn-success btn-lg w3-btn w3-white w3-hover-green"
                                                                    style="margin-top: 11px;margin-left: -20px;font-size: 15pt;">
                                                                แก้ไข
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
        function imgSubmit() {
            if (document.getElementById('file').value == "") {
                alert('กรุณาเลือกรูปภาพ');
                return false;
            }
        }
    </script>
@endsection