@extends('layouts/back_end')
@section('content')
    <style>
        .h3-header {
            font-size: 20pt;
            font-family: ThaiNeue;
        }

        label {
            font-size: 18pt;
            font-family: ThaiNeue;
        }

        .label-font {
            font-size: 22pt;
            font-weight: 700;
            color: gray;
            display: inline-block;
            font-family: ThaiNeue;
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

        #img-resize {
            width: 150px;
            height: 150px;
        }

    </style>

    <div class="container">
        <div class="row">
            <div class="page-header">

                <div class="dropdown">
                    <a href="profile">
                        <button class="btn btn-default  btn-lg"><i class="glyphicon glyphicon-user"></i> โปรไฟล์
                        </button>
                    </a>
                    <div class="dropdown-content">
                        <a href="manageProfile"><i class="glyphicon glyphicon-wrench"></i> จัดการโปรไฟล์</a>
                        <a href="managePortfolio"><i class="glyphicon glyphicon-pencil"></i> แก้ไขโปรไฟล์</a>
                    </div>
                </div>

                <div class="dropdown">
                    <button class="btn btn-default btn-lg "><i class="glyphicon glyphicon-list"></i> ผลงาน</button>
                    <div class="dropdown-content">
                        <a href="addPortfolio"><i class="glyphicon glyphicon-plus"></i> เพิ่มผลงาน</a>
                        <a href="managePortfolio"><i class="glyphicon glyphicon-wrench"></i> จัดการผลงาน</a>
                    </div>
                </div>

            </div>
        </div>


        <div class="row " align="center">
            @foreach($userDetail as $value)
                <img src="{{ url('picture/'.$value->picture) }}" class="img-circle" id="img-resize">
            @endforeach
            <br><br><label class="label-font">{{ Auth::user()->name }} </label>
            <div class="page-header"></div>


            <div class="col-xs-6 " align="center">
                @foreach($userDetail as $valueUser)
                    <h3 class="h3-header">ที่อยู่</h3>
                    <label align="left">{{ $valueUser->address }}</label>
                    <div class="page-header"></div>


                    <h3 class="h3-header">ข้อมูลการติดต่อ</h3><br>
                    <div align="left">
                        <img src="{{ url('image/call.png') }}" width="30" height="30"> :
                        <label>{{ $valueUser->tel }}</label><br><br>
                        <img src="{{ url('image/facebook.png') }}" width="30" height="30"> :
                        <label>{{ $valueUser->facebook }}</label><br><br>
                        <img src="{{ url('image/email.png') }}" width="30" height="30"> :
                        <label>{{$valueUser->email}}</label>
                    </div>

                @endforeach
            </div>
            <div class="col-xs-6" align="left">


                <h3 class="h3-header">ประเภทงาน</h3><br>
                <div>
                    @foreach($cate as $valueCate)
                        @foreach($classify as $valueclassify)
                            @if($valueCate->c_id == $valueclassify->c_id)
                                <label>{{$valueCate->c_name}}</label><br>
                            @endif
                        @endforeach
                    @endforeach
                </div>

                <div class="page-header"></div>
                <h3 class="h3-header">ความสามารถ</h3><br>
                @foreach($skill as $valueSkill)

                    <label>{{$valueSkill->s_detail}}</label><br>

                @endforeach

                <div class="page-header"></div>
                <h3 class="h3-header">ลักษณะงาน</h3><br>
                @foreach($discript as $valuediscript)

                    <label>{{$valuediscript->dt_detail}}</label><br>

                @endforeach
            </div>
            <br><br>

        </div>

        <br><br>

    </div>

@endsection