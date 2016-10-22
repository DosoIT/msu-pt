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

        .li {
            font-family: ThaiNeue;
            font-size: 16pt;
            color: #1d1d1d;
        }

        .cnt:hover {
            background-color: #00AFF0;
        }

        .back-to-top {
            cursor: pointer;
            position: fixed;
            bottom: 20px;
            right: 20px;
            display: none;
        }

        /*Back to top*/
        .navbar-fixed-top + .content-container {
            margin-top: 70px;
        }

        .content-container {
            margin: 0 130px;
        }

        #top-link-block.affix-top {
            position: absolute; /* allows it to "slide" up into view */
            bottom: -82px; /* negative of the offset - height of link element */
            right: 20px; /* padding from the left side of the window */
        }

        #top-link-block.affix {
            position: fixed; /* keeps it on the bottom once in view */
            bottom: 18px; /* height of link element */
            right: 20px; /* padding from the left side of the window */
        }

        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
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

        .ig {
            position: static;
        }
    </style>

    @if (\Session::has('updates'))
        <div class="alert alert-success">
            <ul>
                <li>{!! \Session::get('updates') !!}</li>
            </ul>
        </div>
    @endif
    @if (\Session::has('insert'))
        <div class="alert alert-success">
            <ul>
                <li>{!! \Session::get('insert') !!}</li>
            </ul>
        </div>
    @endif
    @if (\Session::has('delete'))
        <div class="alert alert-danger">
            <ul>
                <li>{!! \Session::get('delete') !!}</li>
            </ul>
        </div>
    @endif
    @if (\Session::has('insertprofile'))
        <div class="alert alert-success">
            <ul>
                <li>{!! \Session::get('insertprofile') !!}</li>
            </ul>
        </div>
    @endif
    @if (\Session::has('updateprofile'))
        <div class="alert alert-success">
            <ul>
                <li>{!! \Session::get('updateprofile') !!}</li>
            </ul>
        </div>
    @endif
    <div class="container">
        <div class="row">
            <div class="col-md-offset-1">
                <div class="dropdown">
                    <a href="showpostEmployer">
                        <button class="btn btn-default  btn-lg"><i class="glyphicon glyphicon-user"></i> โปรไฟล์
                        </button>
                    </a>
                    <div class="dropdown-content">
                        <a href="editProfileEmployer"><i class="glyphicon glyphicon-wrench"></i> จัดการโปรไฟล์</a>
                    </div>
                </div>
                <div class="dropdown">
                    <a href="{{ url('postEmployer') }}">
                    <button class="btn btn-default btn-lg"><i class="glyphicon glyphicon-plus"></i>
                         เพิ่มประกาศรับสมัคร</button>
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
                                <h4 class="fonts">{{ Auth::user()->name }}</h4>
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
                            <h4 class="fonts">{{ Auth::user()->name }}</h4>
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
                            <?php $count = 1 ?>
                            @if(!empty($post_work))
                                @foreach($post_work as $row)
                                    <tr class="active">
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
                                                <button type="submit" class="btn btn-warning btn-sm link li">
                                                    <li class="glyphicon glyphicon-pencil"></li>
                                                    Edit
                                                </button>
                                            </form>
                                        </td>
                                        <td>
                                            <form action="{{ route('postEmployer.destroy',$row->wp_id) }}" method="post"
                                                  onclick="return confirm('คุณต้องการที่จะลบโพสต์ ใช่หรือไม่')">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm link li">
                                                    <li class="glyphicon glyphicon-trash"></li>
                                                    Delete
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
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
                                            <button type="submit" class="btn btn-danger btn-sm link li">
                                                <li class="glyphicon glyphicon-trash"></li>
                                                Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endif
                            </tbody>
                        </table>
                        {{ $post_work->links() }}
                    </div>
                </div>
            </div>
        </div>
        <a id="back-to-top" href="#" class="btn btn-primary btn-lg back-to-top" role="button"
           title="Click to return on the top page"
           data-toggle="tooltip" data-placement="left"><span class="glyphicon glyphicon-chevron-up"></span>
        </a>
    </div>
    {{--end container--}}
    <script>
        $(document).ready(function () {
            $(window).scroll(function () {
                if ($(this).scrollTop() > 50) {
                    $('#back-to-top').fadeIn();
                } else {
                    $('#back-to-top').fadeOut();
                }
            });
            // scroll body to 0px on click
            $('#back-to-top').click(function () {
                $('#back-to-top').tooltip('hide');
                $('body,html').animate({
                    scrollTop: 0
                }, 800);
                return false;
            });
            $('#back-to-top').tooltip('show');
            $(".cnt").tooltip();
        });
    </script>
    {{-- End Back to top --}}
@endsection