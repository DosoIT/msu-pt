@extends('layouts.template')
<style>
    .title-page h2 {
        font-family: ThaiNeue;
        font-size: 34pt;
        text-align: center;
        border-bottom: 1px solid #8c8c8c;
    }
    .btn-category{
        margin-left: 10%;
    }
    .btn-category .bt{
        font-family: ThaiNeue;
        font-size: 18pt;
        width: 150px;
    }
    i{
        margin-left: -8px;
        padding-left: -1px;
    }
</style>
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-12">
                <div class="row">
                    <div class="col-md-12 title-page">
                        <h2>เลือกจากหมวดหมู่</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 btn-category">
                        <div class="col-xs-2">
                            <div class="w3-btn w3-white w3-border w3-round-large bt ">
                                <a href="#"><i class="fa fa-code"></i>&nbsp;Programming</a>
                            </div>
                        </div>
                        <div class="col-xs-2">
                            <div class="w3-btn w3-white w3-border w3-round-large bt ">
                                <a href="#"><i class="fa fa-wrench"></i>&nbsp;ซ่อมคอม</a>
                            </div>
                        </div>
                        <div class="col-xs-2">
                            <div class="w3-btn w3-white w3-border w3-round-large bt ">
                                <a href="#"><i class="fa fa-camera"></i>&nbsp;ช่างภาพ</a>
                            </div>
                        </div>
                        <div class="col-xs-2">
                            <div class="w3-btn w3-white w3-border w3-round-large bt ">
                                <a href="#"><i class="fa fa-video-camera"></i>&nbsp;ตัดต่อวิดีโอ</a>
                            </div>
                        </div>
                        <div class="col-xs-2">
                            <div class="w3-btn w3-white w3-border w3-round-large bt ">
                                <a href="#"><i class="fa fa-bolt"></i>&nbsp;Event</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('layouts.recommd')
    @include('layouts.folio')
@endsection