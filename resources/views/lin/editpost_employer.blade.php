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

        .h1 {
            font-family: ThaiNeue;
            font-size: 26pt;
        }

        .textinput {
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
            /*background-color: #f9f9f9;*/
            min-width: 160px;
            /*box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);*/
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

    <div class="container">
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
                                    <p style="font-size: 13pt;">*รูปภาพสถานที่ตั้ง</p>
                                </div>
                                <div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">ชื่อบริษัท/หัวข้อ</label>
                                        <input type="text" class="w3-input w3-animate-input txt" placeholder="หัวข้อ"
                                               value="{{ $row->wp_titel }}" name="titel">
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
                                            <?php while ($values = mysqli_fetch_array($query)){ ?>
                                            <option value="<?php echo $values['c_name']; ?>"
                                            <?php if ($values['c_name'] == $row->wp_description) {
                                                echo 'selected';
                                            }?>>
                                                <?php echo $values['c_name']; ?>
                                            </option>
                                            <?php } ?>
                                        </select>
                                        <p style="font-size: 13pt;">*ประเภทงานคุณ</p>
                                    </div>
                                    <div class="form-group col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                        <label for="exampleTotal" class="control-label">จำนวน/ตำแหน่ง</label>
                                        <input type="text" name="total" class="w3-input w3-animate-input txt"
                                               onkeyup="if(isNaN(this.value)){alert('จำนวนต้องเป็นตัวเลขเท่านั้น!'); this.value='';}"
                                               required value="{{ $row->wp_total }}">
                                        <p style="font-size: 13pt;">*จำนวนคนที่ต้องการ</p>
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">รายละเอียด</label>
                                        <textarea name="detail" class="w3-input w3-animate-input txt"
                                                  rows="5">{{ $row->wp_detail }}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleLocation">สถานที่</label>
                                        <?php
                                        $conn = mysqli_connect("localhost", "root", "", "msu_pt");
                                        mysqli_set_charset($conn, "utf8");
                                        $sql = "SELECT * FROM tb_locations";
                                        $query = mysqli_query($conn, $sql);
                                        ?>
                                        <select name="location" class="w3-input w3-animate-input txt">
                                            <?php while ($values = mysqli_fetch_array($query)){ ?>
                                            <option value="<?php echo $values['location']; ?>" <?php if ($values['location'] == $row->wp_location) {
                                                echo 'selected';
                                            }?>>
                                                <?php echo $values['location']; ?>
                                            </option>
                                            <?php } ?>
                                            <p style="font-size: 13pt;">*สถานที่ของที่ตั้งทำงาน</p>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">คุณสมบัติผู้สมัคร</label>
                                        <textarea name="property" class="w3-input w3-animate-input txt"
                                                  rows="5">{{ $row->wp_property }}</textarea>
                                        <p style="font-size: 13pt;">*18ปีขึ้นไป *จบมัธยมศึกษาตอนปลาย</p>
                                    </div>
                                    <br>
                                    <h3>ช่องทางการติดต่อ</h3>
                                    <div class="headerline"></div>
                                    <br>
                                    <div class="form-group">
                                        <label for="exampleInput">เบอร์โทร</label>
                                        <input type="tel" class="w3-input w3-animate-input txt" placeholder="เบอร์โทร"
                                               value="{{ $row->wp_tel }}" name="tel" maxlength="10">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInput">Line</label>
                                        <input type="tel" class="w3-input w3-animate-input txt" placeholder="เบอร์โทร"
                                               value="{{ $row->wp_tel }}" name="tel" maxlength="10">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInput">Facebook</label>
                                        <input type="text" class="w3-input w3-animate-input txt" placeholder="Facebook"
                                               value="{{ $row->wp_fb }}" name="fb">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInput">E-mail</label>
                                        <input type="email" class="w3-input w3-animate-input txt" placeholder="E-mail"
                                               value="{{ $row->wp_email }}" name="email">
                                    </div>
                                    <button type="submit" class="btn btn-success btn-lg w3-btn w3-white w3-hover-green btn-lg ">แก้ไขประกาศ</button>
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