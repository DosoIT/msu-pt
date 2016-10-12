@extends('layouts.template')
@section('content')
    <style>
        .fonts {
            font-family: ThaiNeue;
            font-size: 18pt;
        }
        td {
            font-family: ThaiNeue;
            font-size: 18pt;
        }
        tr {
            font-family: ThaiNeue;
            font-size: 18pt;
        }
        .link {
            font-family: ThaiNeue;
            font-size: 18pt;
        }
        .fontheader {
            font-family: ThaiNeue;
            font-size: 25pt;
        }
        .li{
            font-family: ThaiNeue;
            font-size: 16pt;
            color: #1d1d1d;
        }

    </style>

    <div class="container">
        <div class="row" >
            <div class="page-header col-md-offset-1">
                <button class="btn btn-default"><span class="glyphicon glyphicon-user"></span>
                    <a href="{{ url('editprofile') }}" class="link"> แก้ไขโปร์ไฟล์</a></button>
                <button class="btn btn-default"><span class="glyphicon glyphicon-plus"></span>
                    <a href="{{ url('postEmployer') }}" class="link"> เพิ่มประกาศรับสมัคร</a></button>
            </div>
                <div class="col-xs-12 col-sm-6 col-md-12">
                        <div class="row">
                            <div class="col-sm-6 col-md-4" align="center">
                                <br>
                                <img src="{{url('image/pic-default.png')}}" class="img-Thumbnail" width="150" height="150">
                                <h4 class="fonts">Jeremylin Corei5</h4>
                                <h4 class="fonts" align="left"><img src="{{ url('image/call.png') }}" width="30" height="30"> โทร : 0874236079</h4>
                                <h4 class="fonts" align="left"><img src="{{ url('image/facebook.png') }}" width="30" height="30"> Facebook : Siriwut Patsan</h4>
                                <h4 class="fonts" align="left"><img src="{{ url('image/email.png') }}" width="30" height="30"> E-mail : Siriwut@hotmail.com</h4>
                                <h4 class="fonts" align="left"><img src="{{ url('image/location.png') }}" width="30" height="30"> สถานที่ : ท่านขอนย่าน</h4>
                            </div>
                            <div class="col-sm-6 col-md-8">
                                <h4 class="col-md-offset-1 fontheader">ประวัติการประกาศโฟสรับสมัคร</h4>
                                <table class="table table-hover table-responsive" width="100%">
                                    <thead>
                                    <tr bgcolor="#bce8f1">
                                        <th width="2">No.</th>
                                        <th width="150">รายการ</th>
                                        <th width="100">วันที่โฟส</th>
                                        <th width="50">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($work_post as $row)
                                    <tr>
                                        <td>{{ $row->wp_id }}</td>
                                        <td>{{ $row->wp_titel }}</td>
                                        <td>{{ $row->created_at }}</td>
                                        <td>
                                            <form action="{{ route('postEmployer.edit',$row->wp_id) }}" >
                                                {{ method_field('GET') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-warning btn-sm link li" ><li class="glyphicon glyphicon-pencil"></li>Edit</button>
                                            </form>
                                            <form action="{{ route('postEmployer.destroy',$row->wp_id) }}" method="post" onclick="return confirm('คุณต้องการที่จะลบโพสต์ ใช่หรือไม่')">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm link li" ><li class="glyphicon glyphicon-trash"></li>Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                </div>
        </div>
    </div>
@endsection