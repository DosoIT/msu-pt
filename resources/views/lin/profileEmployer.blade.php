@extends('layouts.template')
@section('content')
    <div class="container ">
        <div class="row">
            <div class="page-header col-md-offset-1">
                <button class="btn btn-default"><span class="glyphicon glyphicon-user"></span><a href="{{ url('editprofile') }}">แก้ไขโปร์ไฟล์</a></button>
                <button class="btn btn-default"><span class="glyphicon glyphicon-plus"></span> <a href="detail_employer"> เพิ่มประกาศรับสมัคร์</a>
                </button>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-12">
                <div class="well well-sm">
                    <div class="row">
                        <div class="col-sm-6 col-md-4" align="center">
                            <br>
                            <img src="{{url('image/jeremy.jpg')}}" class="img-Thumbnail" width="150" height="150">
                            <p></p>
                            <input type="file" name="myPic" style="margin-left: 2.7cm ">
                        </div>
                        <div class="col-sm-6 col-md-7">
                            <div class="row">
                                <form class="form-horizontal" role="form">
                                    <fieldset>
                                        <legend>โปร์ไฟล์</legend>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">ชื่อ :</label>
                                            <div class="col-sm-4" style="margin-left: -0.6cm;">
                                                <input type="text" placeholder="Name" class="form-control" value="Siriwut">
                                            </div>
                                            <label class="col-sm-2 control-label">นามสกุล :</label>
                                            <div class="col-sm-4" style="margin-left: -0.6cm;">
                                                <input type="text" placeholder="Last Name" class="form-control" value="Patsan">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">ที่อยู่ :</label>
                                            <div class="col-sm-10" style="margin-left: -0.6cm;">
                                                <textarea name="" id="" cols="30" rows="3">192 ม.2 ต.หนองน้ำใส อ.บ้านไผ่ จ.ขอนแก่น นะครัช</textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">FB :</label>
                                            <div class="col-sm-4" style="margin-left: -0.6cm;">
                                                <input type="text" placeholder="Siriwut Patsan" class="form-control" value=" Siriwut Patsan">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-sm-offset-2 col-sm-10">
                                                <div class="pull-left">
                                                    <button type="submit" class="btn btn-success">Save</button>
                                                </div>
                                            </div>
                                        </div>

                                    </fieldset>
                                </form>
                            </div><!-- /.row -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection