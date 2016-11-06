@extends('layouts.template')
@section('content')
    <style>
        .news-post {
            width: 100px;
            height: 85px;
        }

        .td-img {
            width: 110px;
        }
    </style>
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h2 style="font-family: 'ThaiNeue'; font-size: 48px">ผลการค้นหาการรับสมัครงาน </h2>
                <h2 style="font-family: 'ThaiNeue'; font-size: 26pt;margin:40px 30px 0px 0px"
                    class="w3-display-topright">
                </h2>
            </div>
        </div>
        <div class="row">
            <div class="table-responsive">
                @if(isset($data))
                    <table class="table table-hover">
                        <tbody>
                        @foreach($data as $row)
                            <tr>
                                <td class="td-img">
                                    <img src="picture/{{ $row->wp_pic }}" alt="Person" class="w3-card-4 news-post">
                                </td>
                                <td width="900">
                                    <p>
                                        <a href="{{ route('showpostEmployer.show',$row->wp_id ) }}"
                                           data-toggle="modal" data-target="#detail{{ $row->wp_id}}">
                                            {{ method_field('GET') }}
                                            {{ csrf_field() }}
                                            <b>{{ $row->wp_titel }}</b>
                                        </a>
                                    </p>
                                    <p style="color: red">(&nbsp; {{$row->wp_total}} &nbsp;ตำแหน่ง)</p>
                                    <p>{{ $row->wp_detail}}</p>
                                </td>
                                {{--model--}}
                                <div class="modal fade" id="detail{{ $row->wp_id}}" tabindex="-1"
                                     role="dialog" aria-labelledby="myModalLabel">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                        </div>
                                    </div>
                                </div>
                                {{--end model--}}
                                <td>
                                    <p style="color: #cccccc">{{ $row->created_at }}</p>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                @elseif(isset($datanull))
                    <table class="table table-hover">
                        <tbody>
                        <tr>
                            <td class="td-img">
                                <h2 style="font-family: ThaiNeue;">ไม่พบข้อมูล....</h2>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                @endif

            </div>
        </div>
        <hr style="border: 1px solid #8c8c8c">
    </div>
    <script !src="">
        $(document).ready(function () {
            $('a.show-all').tooltip();
        })
    </script>
@endsection