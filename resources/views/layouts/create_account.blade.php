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

    </style>
    <div class="container">
        <div class="row">
            <h1 align="center"><i class="fa fa-user-plus"></i>&nbsp;สมัครสมาชิก</h1>
            <form>
                <div class="col-xs-4" align="center">
                    <img src="{{url('image/pic-default.png')}}" alt="เลือกรูปภาพ" class="img-rounded" width="200"
                         height="200" id="output">
                    <br><br><input type="file" name="file" id="file" class="inputfile" onchange="loadFile(event)"/>
                    <label for="file"> <i class="glyphicon glyphicon-upload"></i> Choose a Picture...</label>
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
                    <fieldset>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Username</label>
                            <input type="text" class="form-control" placeholder="Username">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">เลือกประเภท</label>
                            <input type="radio" class="form-control" placeholder="Password">xxxx
                            <input type="radio" class="form-control" placeholder="Password">xxxx
                        </div>
                    </fieldset>
                    <br>
                    <button type="submit" class="btn btn-success btn-lg" style="font-family: ThaiNeue;">เพิ่ม</button>
                </div>

            </form>
        </div>
    </div>
@endsection