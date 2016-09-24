@extends('layouts.template')
@section('content')
    <div class="container ">
        <div class="row">
            <div class="page-header col-md-offset-1">
                <button class="btn btn-default"><span class="glyphicon glyphicon-user"></span>
                    <a href="{{ url('editprofile') }}"> แก้ไขโปร์ไฟล์</a></button>
                <button class="btn btn-default"><span class="glyphicon glyphicon-plus"></span>
                    <a href="detail_employer"> เพิ่มประกาศรับสมัคร์</a></button>
            </div>
                <div class="col-xs-12 col-sm-6 col-md-12">
                    <div class="well well-sm">
                        <div class="row">
                            <div class="col-sm-6 col-md-4" align="center">
                                <br>
                                <img src="{{url('image/jeremy.jpg')}}" class="img-Thumbnail" width="150" height="150">
                                <h4>Jeremylin Corei5</h4>
                            </div>
                            <div class="col-sm-6 col-md-8">
                                <h4 class="col-md-offset-1">ประวัติการประกาศโฟสรับสมัคร</h4>
                                <table class="table table-striped table-bordered">
                                    <thead>
                                    <tr>
                                        <th width="8">No.</th>
                                        <th width="150">รายการ</th>
                                        <th width="100">วันที่โฟส</th>
                                        <th width="20">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>รับพนักงาน Part-Time</td>
                                        <td>10/10/2559</td>
                                        <td>
                                            <button class="btn btn-success" ><a href="#" ><li class="glyphicon glyphicon-pencil"></li>Edit</a></button>
                                            <button class="btn btn-danger" ><a href="#" ><li class="glyphicon glyphicon-trash"></li>Delect</a></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>รับพนักงาน เซ้งพาณิชย์</td>
                                        <td>10/10/2559</td>
                                        <td>
                                            <button class="btn btn-success" ><a href="#" ><li class="glyphicon glyphicon-pencil"></li>Edit</a></button>
                                            <button class="btn btn-danger" ><a href="#" ><li class="glyphicon glyphicon-trash"></li>Delect</a></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>รับพนักงาน เด็กเสิร์ฟนมปั่น</td>
                                        <td>20/10/2559</td>
                                        <td>
                                            <button class="btn btn-success" ><a href="#" ><li class="glyphicon glyphicon-pencil"></li>Edit</a></button>
                                            <button class="btn btn-danger" ><a href="#" ><li class="glyphicon glyphicon-trash"></li>Delect</a></button>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
@endsection