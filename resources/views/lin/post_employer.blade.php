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

        .font {
            font-family: ThaiNeue;
            font-size: 18pt;
            text-transform: lowercase;
        }

        .fontheader {
            font-family: ThaiNeue;
            font-size: 30pt;
            text-transform: uppercase;
        }

        .linksubmit {
            font-family: ThaiNeue;
            font-size: 20pt;
        }

        .textinput {
            font-size: 15pt;
            background: #DCDCDC;
            margin-top: -10pt;
        }

        .headertext {
            font-size: 20pt;
            text-transform: uppercase;
        }
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        }

        .dropdownlinks:hover .dropdownlinks-content {
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
        .btnBorder{
            border: 1px solid Gray;
            width: 100%;
            height: 50px;
        }
        .btnBorder > p{
            font-family: ThaiNeue;
            font-size: 18pt;

        }
    </style>
    <div class="container-fluid">
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
            <br>
            <br>
            <div class="col-xs-12 col-sm-6 col-md-12">
                <div class="well well-sm font">
                    <div class="row">
                        <h1 align="center" class="fontheader">ประกาศรับสมัครงาน</h1>
                        <form action="{{ url('postEmployer') }}" method="post" enctype="multipart/form-data" onSubmit="return imgSubmit();">
                            <div class="col-xs-4" align="center">
                                <img src="{{url('image/pic-default.png')}}" alt="เลือกรูปภาพ" class="img-rounded"
                                     width="200"
                                     height="200" id="output">
                                <br><br><input type="file" name="pic" id="file" class="inputfile"
                                               onchange="loadFile(event)">
                                <label for="file">
                                    <i class="glyphicon glyphicon-upload"></i> Choose a Picture...</label>
                                <p style="font-size: 13pt;">*รูปภาพสถานที่ตั้ง</p>
                            </div>
                            <div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
                                <div class="form-group">
                                    <label for="exampleTitle">ชื่อบริษัท/หัวข้อ</label>
                                    <input type="text" class="w3-input w3-animate-input txt" size="5" placeholder="หัวข้อ"
                                           name="titelpost" required>
                                    <p style="font-size: 13pt;">*ชื่อบริษัทหรือหัวข้อของท่านที่ต้องการโฟส</p>
                                </div>
                                <div class="form-group col-xs-7 col-sm-7 col-md-7 col-lg-7"
                                     style="margin-left: -0.4cm;">
                                    <label for="exampleDescription" class="control-label">ประเภทงาน</label>
                                    <?php
                                    $conn = mysqli_connect("localhost", "root", "", "msu_pt");
                                    mysqli_set_charset($conn, "utf8");
                                    $sql = "SELECT * FROM category";
                                    $query = mysqli_query($conn, $sql);
                                    ?>
                                    <select name="description" class="w3-input w3-animate-input txt">
                                        <option value="">-- เลือกประเภทงาน --</option>
                                        <?php while ($values = mysqli_fetch_array($query)){ ?>
                                        <option value="<?php echo $values['c_id']; ?>"><?php echo $values['c_name']; ?></option>
                                        <?php } ?>
                                    </select>
                                    <p style="font-size: 13pt;">*ประเภทงานของท่าน</p>
                                </div>
                                <div class="form-group col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                    <label for="exampleTotal" class="control-label">จำนวน/ตำแหน่ง</label>
                                    <input type="text" name="total" class="w3-input w3-animate-input txt"
                                           onkeyup="if(isNaN(this.value)){alert('จำนวนต้องเป็นตัวเลขเท่านั้น!'); this.value='';}"
                                           required>
                                    <p style="font-size: 13pt;">*จำนวนคนที่ต้องการ</p>
                                </div>
                                <br>
                                <div class="form-group">
                                    <label for="exampleDetail" class="control-label">รายละเอียด</label>
                                    <textarea name="detail" class="w3-input w3-animate-input txt" rows="2" required></textarea>
                                    <p style="font-size: 13pt;">*รายละเอียดของการทำงาน</p>
                                </div>
                                <div class="form-group">
                                    <label for="exampleAddress" class="control-label">สถานที่</label>
                                    <?php
                                    $sql = "SELECT * FROM tb_locations";
                                    $query = mysqli_query($conn, $sql);
                                    ?>
                                    <select class="w3-select txt" name="lo_id">
                                        <option value="">-- เลือกสถานที่ --</option>
                                        <?php while ($values = mysqli_fetch_array($query)){ ?>
                                        <option value="<?php echo $values['id']; ?>"><?php echo $values['location']; ?></option>
                                        <?php } ?>
                                    </select>
                                    <p style="font-size: 13pt;">*สถานที่ของที่ตั้งทำงาน</p>
                                </div>
                                <div class="form-group">
                                    <label for="exampleProperty" class="control-label">คุณสมบัติผู้สมัคร</label>
                                    <textarea name="property" class="w3-input w3-animate-input txt" rows="2" required></textarea>
                                    <p style="font-size: 13pt;">*18ปีขึ้นไป *จบมัธยมศึกษาตอนปลาย</p>
                                </div>
                                <h3 class="headertext">ช่องทางการติดต่อ</h3>
                                <div class="headerline"></div>
                                <div class="form-group">
                                    <label for="exampleTel" class="control-label">เบอร์โทร</label>
                                    <input type="tel" name="tel" class="w3-input w3-animate-input txt" placeholder="เบอร์โทร"
                                           maxlength="10"
                                           onkeyup="if(isNaN(this.value)){alert('เบอร์โทรต้องเป็นตัวเลขเท่านั้น!'); this.value='';}" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleTel" class="control-label" id="line">Line</label>
                                    <input type="tel" name="line" class="w3-input w3-animate-input txt" placeholder="ID-Line"
                                           maxlength="10">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFacebook" class="control-label" id="fb">Facebook</label>
                                    <input type="text" name="fb" class="w3-input w3-animate-input txt" placeholder="Facebook">
                                </div>
                                <div class="form-group">
                                    <label for="exampleEmail" id="mail">E-mail</label>
                                    <input type="email" class="w3-input w3-animate-input txt" placeholder="E-mail" value=""
                                           name="email">
                                </div>
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <button type="submit" id="button" class="btn btn-success btn-lg w3-btn w3-white w3-hover-green btn-lg linksubmit col-sm-2 col-xs-2 col-md-2">
                                    ประกาศ
                                </button>
                            </div>
                        </form>
                    </div>
                    <!-- /.row -->
                </div>
            </div>
        </div>
    </div>
    <script>
        $('#mail').css('text-transform', 'capitalize');
        $('#fb').css('text-transform', 'capitalize');
        $('#line').css('text-transform', 'capitalize');
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