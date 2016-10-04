@extends('layouts/template')
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
        .ch-gender > input{
            margin-top: -2%;
            margin-left: 3%;
        }
        .cap{
            margin-top: 0px;
            padding-top: 2px;
        }
    </style>
    <script>
        $(document).ready(function () {
            console.log('นี้ไง นี้ไง ฮ๋วย');
            $('input[type=radio][name=gender]').change(function() {
                if (this.value == 'emyer') {
                    $(".capF").html('Part-Time');
                    $(".capM").html('&nbsp;<i style="color: #00AFF0" class="fa fa-money"></i>');
                }
                else if (this.value == 'emyies') {
                    $(".capM").html('ผู้ว่าจ้าง');
                    $(".capF").html('&nbsp;<i style="color: #8c8c8c" class="fa fa-male"></i>');
                }
            });
        })
    </script>
    <div class="container">

        <div class="row">
            <h1 align="center"><i class="fa fa-user-plus"></i>&nbsp;สมัครสมาชิก</h1>
            <form   method="POST" action="{{ url('register') }}" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="<?php echo csrf_token();?>">

                <div class="col-xs-4" align="center">
                    <img src="{{url('image/pic-default.png')}}" alt="เลือกรูปภาพ" class="img-rounded" width="200"
                         height="200" id="output">
                    <br><br><input type="file" name="file" id="file" class="inputfile" onchange="loadFile(event)"/>
                    <label for="file"> <i class="glyphicon glyphicon-upload"></i> Choose a Picture...</label>
                    <hr>
                    {{--Login Form--}}
                    <fieldset>
                        <div class="input-control modern text iconic">
                            <input type="text" name="user_name" >
                            <span class="label">You login</span>
                            <span class="informer">Please enter you login or email</span>
                            <span class="placeholder">Input login</span>
                            <span class="icon mif-user"></span>
                        </div>

                        <div class="input-control modern password iconic" data-role="input">
                            <input type="password" name="pass">
                            <span class="label">You password</span>
                            <span class="informer">Please enter you password</span>
                            <span class="placeholder">Input password</span>
                            <span class="icon mif-lock"></span>
                            <button class="button helper-button reveal"><span class="mif-looks"></span></button>
                        </div>

                       <div class="ch-gender">
                           <input type="radio" id="gender" name="status" value="1">
                           <label class="w3-validate capM">ผู้ว่าจ้าง</label>

                           <input type="radio" id="gender" name="status" value="2">
                           <label class="w3-validate capF">Part-Time</label>
                       </div>

                    </fieldset>
                    <br>
                </div>
                <div class="col-xs-8">
                    <div class="form-group">
                        <label for="exampleInputEmail1">ชื่อ</label>
                        <input type="text" class="form-control" placeholder="ชื่อ" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">นามสกุล</label>
                        <input type="text" class="form-control" placeholder="นามสกุล" name="lastname" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">เพศ : </label>
                        <input type="radio" id="sex" name="sex" value="1">
                        <label class="w3-validate capM">ชาย</label>

                        <input type="radio" id="sex" name="sex" value="2">
                        <label class="w3-validate capF">หญิง</label>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">วันเกิด</label>
                        <input type="date" class="form-control" placeholder="อาชีพ" name="date" required>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">ที่อยู่</label>
                        <textarea name="address" class="form-control" rows="5" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">เบอร์โทรศัพท์</label>
                        <input type="number" class="form-control" placeholder="เบอร์โทรศัพท์" name="tel" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">อีเมลล์</label>
                        <input type="email" class="form-control" placeholder="อีเมลล์" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">facebook</label>
                        <input type="text" class="form-control" placeholder="facebook" name="facebook" required>
                    </div>



                    <div style="border: 3px dashed #808080;margin-top: 50px;"></div>
                    <br>
                    <button type="submit" class="btn btn-success btn-lg" style="font-family: ThaiNeue;">สมัครสมาชิก</button>
                </div>

            </form>
        </div>
    </div>

@endsection
