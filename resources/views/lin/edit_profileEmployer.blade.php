@extends('layouts.template')
@section('content')
    <div class="container ">
        <div class="row">
            <div class="page-header col-md-offset-1">
                <button class="btn btn-default"><span class="glyphicon glyphicon-user"></span>แก้ไขโปร์ไฟล์</button>
                <button class="btn btn-default"><span class="glyphicon glyphicon-plus"></span> เพิ่มประกาศรับสมัคร์
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
                                        <legend>แก้ไขโปร์ไฟล์</legend>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">ชื่อ :</label>
                                            <div class="col-sm-4">
                                                <input type="text" placeholder="Name" class="form-control">
                                            </div>
                                            <label class="col-sm-2 control-label">นามสกุล :</label>
                                            <div class="col-sm-4">
                                                <input type="text" placeholder="Last Name" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">ที่อยู่ :</label>
                                            <div class="col-sm-10">
                                                <textarea name="" id="" cols="30" rows="3"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label" for="textinput">โทร :</label>
                                            <div class="col-sm-4">
                                                <input type="text" placeholder="080-xxxxxxx" class="form-control" value="">
                                            </div>
                                            <label class="col-sm-2 control-label">E-mail :</label>
                                            <div class="col-sm-4">
                                                <input type="text" placeholder="@hotmail.com" class="form-control" value="">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">FB :</label>
                                            <div class="col-sm-4">
                                                <input type="text" placeholder="Siriwut Patsan" class="form-control" value="">
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