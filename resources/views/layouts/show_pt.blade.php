@extends('layouts.template')
@section('content')
    <style>
        .title-page h2 {
            font-family: ThaiNeue;
            font-size: 34pt;
            text-align: center;
            /*border-bottom: 1px solid #8c8c8c;*/
        }

        .btn-category01 {
            margin-left: 0%;
            margin-top: 2%;
        }

        .btn-category01 .bt {
            font-family: ThaiNeue;
            font-size: 18pt;
            width: 200px;
            height: 100px;
        }

        i {
            margin-left: -8px;
            padding-left: -1px;
        }

        .btw-xs {
            margin-top: 3%;
        }
    </style>

    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-12">
                <h2>Part Time</h2>
                <div class="row">
                    <div class="col-md-12 btn-category01">
                        <div class="col-xs-3 btw-xs">
                            <a href="{{url('show_all_pt')}}">
                                <div class="w3-btn w3-white w3-border w3-round-large bt ">
                                    <i class="fa fa-code"></i>&nbsp;Programming
                                </div>
                            </a>
                        </div>
                        <div class="col-xs-3 btw-xs">
                            <a href="{{url('show_all_pt')}}">
                                <div class="w3-btn w3-white w3-border w3-round-large bt ">
                                    <i class="fa fa-wrench"></i>&nbsp;ซ่อมคอม
                                </div>
                            </a>
                        </div>
                        <div class="col-xs-3 btw-xs">
                            <a href="{{url('show_all_pt')}}">
                                <div class="w3-btn w3-white w3-border w3-round-large bt ">
                                    <i class="fa fa-camera"></i>&nbsp;ช่างภาพ
                                </div>
                            </a>
                        </div>
                        <div class="col-xs-3 btw-xs">
                            <a href="{{url('show_all_pt')}}">
                                <div class="w3-btn w3-white w3-border w3-round-large bt ">
                                    <i class="fa fa-video-camera"></i>&nbsp;ตัดต่อวิดีโอ
                                </div>
                            </a>
                        </div>
                        <div class="col-xs-3 btw-xs">
                            <a href="{{url('show_all_pt')}}">
                                <div class="w3-btn w3-white w3-border w3-round-large bt ">
                                    <i class="fa fa-bolt"></i>&nbsp;Event
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection