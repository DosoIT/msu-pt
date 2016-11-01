@extends('layouts.template')
{!! Html::style('css/sweetalert.css') !!}
{!! Html::style('css/twitter.css') !!}
{{--{!! Html::style('css/jquery-ui.css') !!}--}}
{!! Html::style('css/jquery-confirm.css') !!}

@section('content')
    <style>
        .btns{
            font-family: ThaiNeue;
            font-size: 34pt;
        }
        .fonts {
            font-family: ThaiNeue;
            font-size: 20pt;
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

        .li {
            font-family: ThaiNeue;
            font-size: 16pt;
            color: #1d1d1d;
        }

        .cnt:hover {
            background-color: #00AFF0;
        }

        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            /*background-color: #f9f9f9;*/
            min-width: 160px;
            /*box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);*/
        }

        .dropdown:hover .dropdown-content {
            display: block;
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

        .dropdown:hover {
            background-color: #2a88bd;
            color: #fff;
            text-decoration: none;
        }
    </style>
    <div class="container">
        <div class="row">
            <div class="col-md-offset-1">
                <div class="dropdown">
                    <a href="showpostEmployer">
                        <button class="btn btn-default  btn-lg dropdown-toggle"><i class="glyphicon glyphicon-user"></i>
                            โปรไฟล์
                        </button>
                    </a>
                    <div class="dropdown-content">
                        <a href="editProfileEmployer"><i class="glyphicon glyphicon-wrench"></i> จัดการโปรไฟล์</a>
                    </div>
                </div>
                <div class="dropdown">
                    <a href="{{ url('postEmployer') }}">
                        <button class="btn btn-default btn-lg"><i class="glyphicon glyphicon-plus"></i>
                            เพิ่มประกาศรับสมัคร
                        </button>
                    </a>
                </div>
            </div>
            <br>
            <br>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="row">
                    <div class="col-sm-6 col-md-4" align="center">
                        <br> {{-- ถ้ามีข้อมูล --}}
                        @if(count($profile)>0)
                            @foreach($profile as $values)
                                <img src="{{url('picture/'.$values->picture)}}" class="img-Thumbnail" width="180"
                                     height="180">
                                <h4 class="fonts">Username : {{Auth::user()->name }}</h4>
                                <h4 class="fonts" align="left"><img src="{{ url('image/call.png') }}" width="30"
                                                                    height="30">
                                    โทร : {{ $values->tel }}</h4>
                                <h4 class="fonts" align="left"><img src="{{ url('image/facebook.png') }}" width="30"
                                                                    height="30">
                                    Facebook : {{ $values->facebook }}</h4>
                                <h4 class="fonts" align="left"><img src="{{ url('image/email.png') }}" width="30"
                                                                    height="3">
                                    ที่อยู่ : {{ $values->address }} </h4>
                            @endforeach
                        @else
                            {{-- ถ้าไม่มี --}}
                            <img src="{{url('image/pic-default.png')}}" class="img-Thumbnail" width="150" height="150">
                            <h4 class="fonts">Username : {{Auth::user()->name }}</h4>
                            <h4 class="fonts" align="left"><img src="{{ url('image/call.png') }}" width="30"
                                                                height="30">
                                โทร : </h4>
                            <h4 class="fonts" align="left"><img src="{{ url('image/facebook.png') }}" width="30"
                                                                height="30"> Facebook : </h4>
                            <h4 class="fonts" align="left"><img src="{{ url('image/email.png') }}" width="30"
                                                                height="30">
                                E-mail : </h4>
                            <h4 class="fonts" align="left"><img src="{{ url('image/location.png') }}" width="30"
                                                                height="30"> สถานที่ : </h4>
                        @endif
                    </div>
                    <div class="col-sm-8 col-md-8">
                        <h4 class="fontheader">ประวัติการประกาศโฟสรับสมัคร <span class="badge cnt"
                                                                                 title="จำนวนที่โพส {{ count(\App\EmployerPostModel::all()) }} โพส"
                                                                                 alt="จำนวนที่โฟส">{{ count(\App\EmployerPostModel::all()) }}</span>
                        </h4>
                        <table class="table table-hover table-condensed" width="100%">
                            <thead>
                            <tr bgcolor="#bce8f1">
                                <th width="2">No.</th>
                                <th width="500">รายการ</th>
                                <th width="350">วัน/เวลาที่โฟส</th>
                                <th width="20" colspan="2">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            {{-- ถ้ามีข้อมูล --}}
                            <?php $count = 1 ?>
                            @if(!empty($post_work))
                                @foreach($post_work as $row)
                                    <?php $id=$row['wp_id']; ?>
                                    <tr class="active" style="margin-top: 1cm">
                                        <td><?php echo $count++ ?></td>
                                        <td>
                                            <a href="{{ route('showpostEmployer.show',$row->wp_id) }}"
                                               data-toggle="modal" data-target="#detail{{ $row->wp_id }}">
                                                {{ method_field('GET') }}
                                                {{ csrf_field() }}
                                                {{ $row->wp_titel }}
                                            </a>
                                            {{--model--}}
                                            <div class="modal fade" id="detail{{ $row->wp_id }}" tabindex="-1"
                                                 role="dialog" aria-labelledby="myModalLabel">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                    </div>
                                                </div>
                                            </div>
                                            {{--end model--}}
                                        </td>
                                        <td>{{ $row->created_at }}</td>
                                        <td>
                                            <form action="{{ route('postEmployer.edit',$row->wp_id) }}">
                                                {{ method_field('GET') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="w3-btn w3-white w3-hover-yellow link li">
                                                    <li class="glyphicon glyphicon-pencil"></li>
                                                    Edit
                                                </button>
                                            </form>
                                        </td>
                                        <td>
                                            {{----}}
                                            <form method="post" action="{{ route('postEmployer.destroy',$row->wp_id) }}" class="delete_form">
                                                {{ method_field('Delete') }}
                                                {{ csrf_field() }}
                                                <button id="delete-btn" class="w3-btn w3-grey w3-hover-red link li">
                                                    <li class="glyphicon glyphicon-trash"></li>Delete
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                {{-- ถ้าไม่มีข้อมูล--}}
                                <tr class="active">
                                    <td><?php echo $count++ ?></td>
                                    <td><a href="#detail" data-toggle="modal"> </a></td>
                                    <td></td>
                                    <td>
                                        <form action="{{ route('postEmployer.edit') }}">
                                            {{ method_field('GET') }}
                                            {{ csrf_field() }}
                                            <button type="submit" class="btn btn-warning btn-sm link li">
                                                <li class="glyphicon glyphicon-pencil"></li>
                                                Edit
                                            </button>
                                        </form>
                                    </td>
                                    <td>
                                        <form action="{{ route('postEmployer.destroy') }}" method="post"
                                              onclick="return confirm('คุณต้องการที่จะลบโพสต์ ใช่หรือไม่')">
                                            {{ method_field('DELETE') }}
                                            {{ csrf_field() }}
                                            <button type="submit" class="btn btn-danger btn-sm link li"
                                                    onmouseover="return cm()">
                                                <li class="glyphicon glyphicon-trash"></li>
                                                Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endif
                            </tbody>
                        </table>
                        {{ $post_work->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{--end container--}}
    {!! Html::script('js/sweetalert.min.js') !!}
    {!! Html::script('js/jquery.min.js') !!}
    {!! Html::script('js/jquery-confirm.min.js') !!}
    {{--script--}}
    <script !src="">
        $(document).on('click', '#delete-btn', function(e) {
            e.preventDefault();
            var self = $(this);
            swal({
                        title: "คุนต้องการลบข้อมูลนี้?",
                        text: "ข้อมูลทั้งหมดในโพสนี้จะถูกลบออกทั้งหมด!",
                        type: "warning",
                        showCancelButton: true,
                        confirmButtonColor: "#DD6B55",
                        confirmButtonText: "ใช่, ฉันต้องการลบ!",
                        closeOnConfirm: true
                    },
                    function(isConfirm){
                        if(isConfirm){
                            swal("{!! \Session::get('delete') !!}!","ข้อมูลทั้งหมดถูกลบเรียบร้อย", "success");
                            setTimeout(function() {
                                self.parents(".delete_form").submit();
                            }, 1000);
                        }
                        else{
                            swal("cancelled","Your categories are safe", "error");
                        }
                    });
        });
    </script>
    @if (\Session::has('updates'))
        <script !src="">
        swal("{!! \Session::get('updates') !!}", "ขอบคุณที่ใช้บริการผ่านเว็บไซต์ของเรา", "success");
        </script>
    @endif
    @if (\Session::has('insert'))
        <script !src="">
            swal("{!! \Session::get('insert') !!}", "ขอบคุณที่ใช้บริการผ่านเว็บไซต์ของเรา", "success");
        </script>
    @endif
    @if (\Session::has('delete'))
        <script !src="">
            swal("{!! \Session::get('delete') !!}", "ขอบคุณที่ใช้บริการผ่านเว็บไซต์ของเรา", "success");
        </script>
    @endif
    @if (\Session::has('insertprofile'))
        <div class="alert alert-success">
            <ul>
                <li>{!! \Session::get('insertprofile') !!}</li>
            </ul>
        </div>
    @endif
    @if (\Session::has('updateprofile'))
        <script !src="">
        swal("{!! \Session::get('updateprofile') !!}", "ขอบคุณที่ใช้บริการผ่านเว็บไซต์ของเรา", "success");
        </script>
    @endif
    {{--end script--}}
@endsection
