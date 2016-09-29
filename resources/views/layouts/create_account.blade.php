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
            <form>
                <div class="col-xs-4" align="center">
                    <img src="{{url('image/pic-default.png')}}" alt="เลือกรูปภาพ" class="img-rounded" width="200"
                         height="200" id="output">
                    <br><br><input type="file" name="file" id="file" class="inputfile" onchange="loadFile(event)"/>
                    <label for="file"> <i class="glyphicon glyphicon-upload"></i> Choose a Picture...</label>
                    <hr>
                    {{--Login Form--}}
                    <fieldset>
                        <div class="input-control modern text iconic">
                            <input type="text">
                            <span class="label">You login</span>
                            <span class="informer">Please enter you login or email</span>
                            <span class="placeholder">Input login</span>
                            <span class="icon mif-user"></span>
                        </div>

                        <div class="input-control modern password iconic" data-role="input">
                            <input type="password">
                            <span class="label">You password</span>
                            <span class="informer">Please enter you password</span>
                            <span class="placeholder">Input password</span>
                            <span class="icon mif-lock"></span>
                            <button class="button helper-button reveal"><span class="mif-looks"></span></button>
                        </div>

                       <div class="ch-gender">
                           <input type="radio" id="gender" name="gender" value="emyer">
                           <label class="w3-validate capM">Male</label>

                           <input type="radio" id="gender" name="gender" value="emyies">
                           <label class="w3-validate capF">Female</label>
                       </div>

                    </fieldset>
                    <br>
                </div>
                <div class="col-xs-8">
                    <div class="form-group">
                        <label for="exampleInputEmail1">ชื่อ</label>
                        <input type="text" class="form-control" placeholder="ชื่อ">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">นามสกุล</label>
                        <input type="text" class="form-control" placeholder="นามสกุล">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">ที่อยู่</label>
                        <textarea name="" class="form-control" rows="5"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">เบอร์โทรศัพท์</label>
                        <input type="number" class="form-control" placeholder="เบอร์โทรศัพท์">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">อีเมลล์</label>
                        <input type="email" class="form-control" placeholder="อีเมลล์">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">facebook</label>
                        <input type="text" class="form-control" placeholder="facebook">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">อาชีพ</label>
                        <input type="text" class="form-control" placeholder="อาชีพ">
                    </div>


                    <div style="border: 3px dashed #808080;margin-top: 50px;"></div>
                    <br>
                    <button type="submit" class="btn btn-success btn-lg" style="font-family: ThaiNeue;">เพิ่ม</button>
                </div>

            </form>
        </div>
    </div>

@endsection
