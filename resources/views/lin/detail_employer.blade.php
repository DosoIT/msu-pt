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
    <style>
        .back-to-top {
            cursor: pointer;
            position: fixed;
            bottom: 20px;
            right: 20px;
            display:none;
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
    <div class="container">
        <div class="row" >
            <div class="page-header col-md-offset-1">
                <button class="btn btn-default"><span class="glyphicon glyphicon-user"></span>
                    <a href="{{ url('editProfileEmployer') }}" class="link"> แก้ไขโปร์ไฟล์</a>
                </button>
                <button class="btn btn-default"><span class="glyphicon glyphicon-plus"></span>
                    <a href="{{ url('postEmployer') }}" class="link"> เพิ่มประกาศรับสมัคร</a></button>
            </div>
                <div class="col-xs-12 col-sm-6 col-md-12">
                        <div class="row">
                            <div class="col-sm-6 col-md-4" align="center">
                                <br>

                                <img src="{{url('image/pic-default.png')}}" class="img-Thumbnail" width="150" height="150">
                                <h4 class="fonts">{{ Auth::user()->name }}</h4>
                                <h4 class="fonts" align="left"><img src="{{ url('image/call.png') }}" width="30" height="30"> โทร : 0874236079</h4>
                                <h4 class="fonts" align="left"><img src="{{ url('image/facebook.png') }}" width="30" height="30"> Facebook : Siriwut Patsan</h4>
                                <h4 class="fonts" align="left"><img src="{{ url('image/email.png') }}" width="30" height="30"> E-mail : Siriwut@hotmail.com</h4>
                                <h4 class="fonts" align="left"><img src="{{ url('image/location.png') }}" width="30" height="30"> สถานที่ : ท่านขอนย่าน</h4>
                            </div>
                            <div class="col-sm-6 col-md-8">
                                <h4 class="col-md-offset-1 fontheader">ประวัติการประกาศโฟสรับสมัคร <span class="badge" alt="จำนวนที่โฟส">{{ count(\App\EmployerPostModel::all()) }}</span></h4>
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
                                    <?php $count=1 ?>
                                    @foreach($postwork as $row)
                                    <tr  class="active">
                                        <td><?php echo $count++ ?></td>
                                        <td> <a href="#detail" data-toggle="modal"> {{ $row->wp_titel }}</a></td>
                                        <td>{{ $row->created_at }}</td>
                                        <td>
                                            <form action="{{ route('postEmployer.edit',$row->wp_id) }}" >
                                                {{ method_field('GET') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-warning btn-sm link li" ><li class="glyphicon glyphicon-pencil"></li>Edit</button>
                                            </form>
                                        </td>
                                        <td>
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
                                {{  $postwork->links() }}
                            </div>
                        </div>
                </div>
        </div>
        {{--model--}}
        <div class="modal fade" id="detail" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">รายละเอียด</h4>
                    </div>
                    <div class="modal-body row">
                        <div>
                            <h5>{{ $row->wp_titel }}</h5>
                            <h5>{{ $row->wp_detail }}</h5>
                            <h5>{{ $row->wp_tel }}</h5>

                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        {{--end model--}}
        <a id="back-to-top" href="#" class="btn btn-primary btn-lg back-to-top" role="button" title="Click to return on the top page"
           data-toggle="tooltip" data-placement="left"><span class="glyphicon glyphicon-chevron-up"></span>
        </a>
    </div>
    {{--end container--}}
    <script>
        $(document).ready(function(){
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

        });
    </script>
    {{-- End Back to top --}}
@endsection