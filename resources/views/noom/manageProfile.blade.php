@extends('layouts/back_end')
{!! Html::style('css/sweetalert.css') !!}
{!! Html::style('css/twitter.css') !!}
{!! Html::style('css/jquery-confirm.css') !!}
@section('content')
    <style>
        .ft {
            font-size: 14pt;
            font-family: ThaiNeue;
        }

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

        .h3-header {
            font-size: 20pt;
            font-family: ThaiNeue;
            text-align: left;
            border-top: 1px solid #0b4059;
            background-color: #C8C8C8;

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

        P.blocktext {
            font-family: ThaiNeue;
            font-size: 14pt;
            text-align: left;
            margin-left: 28%;
            line-height: normal;
            margin-top: -10px;;
        }

        .txt {
            background-color: transparent;
            font-family: ThaiNeue;
            font-size: 14pt;
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

    <div class="container">
        <div class="row">
            <div class="page-header w3-right">
                <div class="dropdown">
                    <a href="profile">
                        <button class="dropdown-toggle w3-btn w3-white w3-hover-green btnBorder"><i
                                    class="glyphicon glyphicon-user"></i> โปรไฟล์
                        </button>
                    </a>
                    <div class="dropdown-content w3-hover-Teal">
                        <a href="manageProfile"><i class="glyphicon glyphicon-wrench"></i> จัดการโปรไฟล์</a>
                    </div>
                </div>

                <div class="dropdown">
                    <button class="w3-btn w3-white w3-hover-green w3-large btnBorder "><i
                                class="glyphicon glyphicon-list"></i> ผลงาน
                    </button>
                    <div class="dropdown-content w3-hover-Teal">
                        <a href="addPortfolio"><i class="glyphicon glyphicon-plus"></i> เพิ่มผลงาน</a>
                        <a href="managePortfolio"><i class="glyphicon glyphicon-wrench"></i> จัดการผลงาน</a>
                    </div>
                </div>
            </div>
        </div>
        @if(count($detail) >0)
            @foreach($detail as $item)
                <form action="{{ url('manageProfile',$item->id) }}" method="post"
                      class="form-horizontal" role="form" enctype="multipart/form-data">
                    {{ method_field('PUT')}}
                    {{ csrf_field() }}
                    <input type="hidden" name="_token" value="<?php echo csrf_token();?>">
                    <div class="row " align="center">
                        <img src="{{url('picture/'.$item->picture)}}" alt="เลือกรูปภาพ" class="img-rounded" width="200"
                             height="150" id="output" name="image">
                        <br><br><input type="file" name="image" id="file" class="inputfile" onchange="loadFile(event)"/>
                        <label for="file"> <i class="glyphicon glyphicon-upload"></i> Choose a Picture...</label>
                        <label for="caption">กรุณาเลือกรูปภาพโปร์ไฟล์</label>

                        <br><br><label class="label-font">{{ Auth::user()->name }}</label>
                        <div class="page-header"></div>

                        <div class="col-xs-6 " align="center">
                            <h3 class="h3-header">ที่อยู่</h3>
                            <div class="col-md-2">
                                <textarea name="address">{{$item->address}}</textarea>
                            </div>
                            <div class="col-md-10">
                                <label class="label-font">อำเภอ : </label>
                                <select name="lo_id">
                                    @foreach($local as $value)
                                        @if($value->id == $item->lo_id)
                                            <option value="{{$value->id}}" selected>{{$value->location}}</option>
                                        @else
                                            <option value="{{$value->id}}">{{$value->location}}</option>
                                        @endif

                                    @endforeach
                                </select>
                            </div>
                            <label class="label-font">จังหวัด : </label>


                            <div class="page-header"></div>
                            <h3 class="h3-header">ข้อมูลการติดต่อ</h3><br>
                            <div align="center">
                                <img src="{{ url('image/call.png') }}" width="30" height="30"> :
                                <input type="text" name="tel" value="{{$item->tel}}" required><br><br>
                                <img src="{{ url('image/facebook.png') }}" width="30" height="30"> :
                                <input type="text" name="facebook" value="{{$item->facebook}}" required><br><br>
                            </div>
                        </div>
                        <div class="col-xs-6" align="left">
                            <h3 class="h3-header">ประเภทงาน</h3><br>
                            <div>
                                @foreach($cate as $cat_value)
                                    <input type="checkbox" id="cate" name="cate_id[]"
                                           @foreach($classify as $key)
                                           @if($cat_value->c_id == $key->c_id)
                                           checked
                                           @endif
                                           @endforeach
                                           value="{{$cat_value->c_id}}"> {{$cat_value->c_name}}<br>
                                @endforeach
                            </div>

                            <div>
                                <h3 class="h3-header">เรทราคา</h3>
                                <label class="label-font ">เรื่มต้น : </label>
                                <input type="number" maxlength="100000" name="price_st" value="{{$item->price_st}}"
                                       required>
                                <label class="label-font ">ถึง : </label>
                                <input type="number" maxlength="100000" name="price_F" value="{{$item->price_fn}}"
                                       required>
                                <label class="label-font ">/ บาท </label>
                                <p style="color: #86493f;">*กรอกเรทราคาตามต้องการ</p>
                            </div>
                            <div class="page-header"></div>
                            <h3 class="h3-header">ความสามารถ</h3><br>
                            <div class="input_fields_01">
                                <br>
                                <div>
                                    @foreach($skill as $kk)
                                        <input type="text" name="skill[]" class="form-control" value="{{$kk->s_detail}}"
                                               required/>
                                        <input type="hidden" name="skill_id[]" class="form-control"
                                               value="{{$kk->s_id}}"
                                        />
                                    @endforeach
                                    <p style="color: #86493f;">***กรอกความสามรถของตัวเอง เช่น
                                        สามารถเขียนโปรแแกรมด้วยภาษา PHP ได้</p>
                                </div>
                            </div>

                            <div class="page-header"></div>
                            <h3 class="h3-header">ลักษณะงาน</h3><br>
                            <div class="input_fields_02">
                                <br>
                                <div>
                                    @foreach( $decrip as $dd)
                                        <input type="text" name="job[]" class="form-control"
                                               value="{{$dd->dt_detail}}"/>
                                        <input type="hidden" name="job_id[]" class="form-control"
                                               value="{{$dd->dt_id}}"/>
                                    @endforeach
                                    <p style="color: #86493f;">***กรอกลักษณะงานที่ต้องการทำ เช่น
                                        รับเขียนเว็ปแอพพริเคชั่น</p>
                                </div>

                                <br>
                            </div>
                        </div>
                        <br><br>
                    </div>
                    <div align="center">
                        <br><br>
                        @foreach($classify as $key)
                            <input type="hidden" name="class_id[]" value="{{$key->cf_id}}">
                        @endforeach
                        <input type="submit" value="แก้ไขข้อมูล" class="btn btn-success"
                               style="font-family: ThaiNeue;font-size: 18pt;height: 30px;">
                    </div>
                </form>
            @endforeach
            <br><br>

            {{--ถ้าล็อกอินแล้ว--}}
        @else
            <form action="{{url('manageProfile')}}" class="w3-container" method="post" enctype="multipart/form-data"
                  onSubmit="return imgSubmit();">
                <input type="hidden" name="_token" value="<?php echo csrf_token();?>">
                <div class="row " align="center">
                    <img src="{{url('image/pic-default.png')}}" alt="เลือกรูปภาพ" class="img-rounded" width="200"
                         height="150" id="output">
                    <br><br><input type="file" name="image" id="file" class="inputfile" onchange="loadFile(event)"/>
                    <label for="file"> <i class="glyphicon glyphicon-upload w3-hover-red"></i> กรุณาเลือกรูปภาพโปร์ไฟล์</label>

                    <br><br><label class="label-font">ยินดีต้อนรับคุณ : {{ Auth::user()->name }}</label>
                    <p>กรุณากรอกข้อมูลที่เป็นลักษณะงานของคุณ เพื่อให้เราทราบถึงรายละเอียดเกี่ยวกับคุณ
                        และเพื่อความสะดวกให้การจัดจ้างและหางาน</p>
                    <div class="col-xs-8 col-md-8">
                        <div class="row">
                            <div class="col-xs-8 col-md-12">
                                <p class="blocktext" style="color: red">*** ข้อกำหนด</p>
                                <p class="blocktext">1.&nbsp;กรอกข้อมูลการติดต่อที่สามารถติดต่อได้จริง</p>
                                <p class="blocktext">2.&nbsp;กรอก ประเภทงาน ได้มากกว่า 1 ประเภท ตามที่คุณถนัด</p>
                                <p class="blocktext">3.&nbsp;กรุณาตั้งเรทราคาเริ่มต้น-มากที่สุด ตามความเหมาะสม</p>
                                <p class="blocktext">4.&nbsp;ระบุความสามารถของคุณได้มากกว่า 1 ความสามารถ</p>
                                <p class="blocktext">5.&nbsp;ระบุลักษณะงาน เช่น รับเขียนเว็ปแอพพริเคชั่น , E-commerce</p>
                            </div>
                        </div>
                    </div>

                    <div class="page-header"></div>
                    <div class="col-xs-6 col-md-12" align="center">
                        <h3 class="h3-header">&nbsp;<i class="fa fa-map-marker"></i>&nbsp;ข้อมูลการติดต่อ</h3>
                        <div class="row">
                            <div class="col-md-4">
                                <label class="label-font">ที่อยู่ : </label>
                                <input name="address" class="w3-input w3-animate-input txt" type="text"
                                       style="width:235px" required><br>
                            </div>

                            <div class="col-md-4">
                                <label class="label-font">อำเภอ : </label>
                                <select name="lo_id" class="w3-select txt">
                                    @foreach($local as $value)
                                        <option value="{{$value->id}}">{{$value->location}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label class="label-font">จังหวัด : มหสารคาม </label>
                                <input class="w3-input w3-animate-input txt" type="text" style="width:235px"
                                       placeholder="มหาสารคาม" readonly><br>
                            </div>
                            <div class="col-md-4">
                                <input name="facebook" class="w3-input w3-animate-input txt" type="text"
                                       style="width:235px"
                                       required><br>
                                <img src="{{ url('image/facebook.png') }}" class="w3-label w3-validate" width="30"
                                     height="30"> :
                            </div>
                            <div class="col-md-4">
                                <input name="tel" class="w3-input w3-animate-input txt" type="text" style="width:235px"
                                       required><br>
                                <img src="{{ url('image/call1.png') }}" class="w3-label w3-validate" width="30"
                                     height="30"> :
                            </div>
                            <div class="col-md-4">
                                <input name="tel" class="w3-input w3-animate-input txt" type="text" style="width:235px"
                                       required><br>
                                <img src="{{ url('image/line.png') }}" class="w3-label w3-validate" width="30"
                                     height="30"> :
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-6 col-md-12" align="left">
                        <h3 class="h3-header">&nbsp;<i class="fa fa-check-circle-o" aria-hidden="true"></i>&nbsp;ประเภทงาน
                        </h3><br>
                        <p class="txt">
                            @foreach($cate as $cat_value)
                                <input type="checkbox" id="cate" name="cate_id[]" value="{{$cat_value->c_id}}">&nbsp;
                                &nbsp;
                                {{$cat_value->c_name}}
                                <br>
                            @endforeach
                        </p>
                        <div>
                            <h3 class="h3-header">&nbsp;<i class="fa fa-money" aria-hidden="true"></i>&nbsp;เรทราคา</h3>
                            <label class="label-font ">เรื่มต้น : </label>
                            <input type="number" maxlength="100000" name="price_st" class="w3-input txt" placeholder="บาท" required>
                            <label class="label-font ">ถึง : </label>
                            <input type="number" maxlength="100000" name="price_F" class="w3-input txt" placeholder="บาท" required>
                            <p style="color: #86493f;">***กรอกเรทราคาตามต้องการ</p>
                        </div>

                        <div class="page-header"></div>
                        <h3 class="h3-header">&nbsp;<i class="fa fa-angellist" aria-hidden="true"></i>&nbsp;ความสามารถ
                        </h3>
                        <div class="input_fields_01">
                            <div><input type="text" name="skill[]" class="form-control txt" required></div>
                            <p style="color: #86493f;">***กรอกความสามรถของตัวเอง เช่น สามารถเขียนโปรแแกรมด้วยภาษา PHP
                                ได้</p>
                            <button class="add_field_01 w3-btn w3-light-grey w3-hover-grey">&nbsp;<i class="fa fa-plus"
                                                                                                     aria-hidden="true"></i>&nbsp;เพิ่มความสามารถ
                            </button>
                        </div>

                        <div class="page-header"></div>
                        <h3 class="h3-header">&nbsp;<i class="fa fa-align-justify" aria-hidden="true"></i>&nbsp;ลักษณะงาน
                        </h3><br>
                        <div class="input_fields_02">
                            <br>
                            <div><input type="text" name="job[]" class="form-control txt" required/></div>
                            <p style="color: #86493f;">***กรอกลักษณะงานที่ต้องการทำ เช่น รับเขียนเว็ปแอพพริเคชั่น</p>
                            <button class="add_field_02 w3-btn w3-light-grey w3-hover-grey">&nbsp;<i class="fa fa-plus"
                                                                                                     aria-hidden="true"></i>&nbsp;เพิ่มความสามารถ
                            </button>
                            <br>
                        </div>
                    </div>
                    <br><br>
                </div>
                <div align="center">
                    <br><br>
                    <button type="submit" class="w3-btn w3-light-grey w3-hover-grey" style="font-family: ThaiNeue;font-size: 18pt;">
                        &nbsp;บันทึก&nbsp;<i class="fa fa-arrow-right" aria-hidden="true"></i>
                    </button>
                </div>
            </form>
            <br><br>
        @endif
    </div>
    {!! Html::script('js/sweetalert.min.js') !!}
    {!! Html::script('js/jquery.min.js') !!}
    {!! Html::script('js/jquery-confirm.min.js') !!}
    <script !src="">
        function imgSubmit() {
            if (document.getElementById('file').value == "") {
                alert('กรุณาเลือกรูปภาพ');
                return false;
            }
            if (document.getElementById('cate').checked == false) {
                alert('กรุณาเลือกประเภทงาน');
                return false;
            }
        }
        $(document).on('click', '#delete-btn', function (e) {
            e.preventDefault();
            var self = $(this);
            swal({
                        title: "คุนต้องการลบข้อมูลนี้?",
                        text: "ข้อมูลทั้งหมดในโพสนี้จะถูกลบออกทั้งหมด!",
                        type: "warning",
                        showCancelButton: true,
                        confirmButtonColor: "#DD6B55",
                        confirmButtonText: "ใช่, ฉันต้องการลบ!",
                        closeOnConfirm: true
                    },
                    function (isConfirm) {
                        if (isConfirm) {
                            swal("{!! \Session::get('delete') !!}!", "ข้อมูลทั้งหมดถูกลบเรียบร้อย", "success");
                            setTimeout(function () {
                                self.parents(".delete_form").submit();
                            }, 1000);
                        }
                        else {
                            swal("cancelled", "Your categories are safe", "error");
                            $('html, body').animate({scrollTop: $('#delete-btn').offset().top - 300}, 'slow');
                        }
                    });
        });
    </script>

    @if (\Session::has('insertfolio'))
        <script !src="">
            swal("{!! \Session::get('insertfolio') !!}", "ขอบคุณที่ใช้บริการผ่านเว็บไซต์ของเรา", "success");
        </script>
    @endif
    @if (\Session::has('editfolio'))
        <script !src="">
            swal("{!! \Session::get('editfolio') !!}", "ขอบคุณที่ใช้บริการผ่านเว็บไซต์ของเรา", "success");
        </script>
    @endif
@endsection