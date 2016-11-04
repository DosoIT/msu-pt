@extends('layouts/back_end')
{!! Html::style('css/sweetalert.css') !!}
{!! Html::style('css/twitter.css') !!}
{!! Html::style('css/jquery-confirm.css') !!}
@section('content')
    <style>
        td {

        }

        h1 {
            font-size: 30pt;
            font-family: ThaiNeue;
        }

        label {
            font-size: 18pt;
            font-family: ThaiNeue;
        }

        thead {
            background-color: #bce8f1;
            font-size: 1.2em;
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

        .dropbtn {
            background-color: #cccccc;
            color: black;
            padding: 16px;
            font-size: 20px;
            border: none;
            cursor: pointer;
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

        .dropdown:hover .dropbtn {
            background-color: #2a88bd;
            color: #fff;
            text-decoration: none;
        }

        #myImg {
            border-radius: 5px;
            cursor: pointer;
            transition: 0.3s;
        }

        #myImg:hover {
            opacity: 0.7;
        }

        /* The Modal (background) */
        .modal {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 1; /* Sit on top */
            padding-top: 100px; /* Location of the box */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: rgb(0, 0, 0); /* Fallback color */
            background-color: rgba(0, 0, 0, 0.9); /* Black w/ opacity */
        }

        /* Modal Content (image) */
        .modal-content {
            margin: auto;
            display: block;
            width: 20%;
            max-width: 700px;
        }

        /* Caption of Modal Image */
        #caption {
            margin: auto;
            display: block;
            width: 80%;
            max-width: 700px;
            text-align: center;
            color: #ccc;
            padding: 10px 0;
            height: 150px;
        }

        /* Add Animation */
        .modal-content, #caption {
            -webkit-animation-name: zoom;
            -webkit-animation-duration: 0.6s;
            animation-name: zoom;
            animation-duration: 0.6s;
        }

        @-webkit-keyframes zoom {
            from {
                -webkit-transform: scale(0)
            }
            to {
                -webkit-transform: scale(1)
            }
        }

        @keyframes zoom {
            from {
                transform: scale(0.1)
            }
            to {
                transform: scale(1)
            }
        }

        /* The Close Button */
        .close {
            position: absolute;
            top: 15px;
            right: 35px;
            color: #f1f1f1;
            font-size: 40px;
            font-weight: bold;
            transition: 0.3s;
        }

        .close:hover,
        .close:focus {
            color: #bbb;
            text-decoration: none;
            cursor: pointer;
        }

        /* 100% Image Width on Smaller Screens */
        @media only screen and (max-width: 700px) {
            .modal-content {
                width: 100%;
            }
        }
    </style>
    <div class="container">
        <div class="row">
            <div class="page-header">

                <div class="dropdown">
                    <a href="profile">
                        <button class="btn btn-default  btn-lg"><i class="glyphicon glyphicon-user"></i> โปรไฟล์
                        </button>
                    </a>
                    <div class="dropdown-content">
                        <a href="manageProfile"><i class="glyphicon glyphicon-wrench"></i> จัดการโปรไฟล์</a>
                    </div>
                </div>

                <div class="dropdown">
                    <button class="btn btn-default btn-lg "><i class="glyphicon glyphicon-list"></i> ผลงาน</button>
                    <div class="dropdown-content">
                        <a href="addPortfolio"><i class="glyphicon glyphicon-plus"></i> เพิ่มผลงาน</a>
                        <a href="managePortfolio"><i class="glyphicon glyphicon-wrench"></i> จัดการผลงาน</a>
                    </div>
                </div>

            </div>
        </div>
        <br><br><br>
        <h1><i class="glyphicon glyphicon-list"></i> จัดการผลงาน </h1>
        <br>
        <div class="row">
            <div class="col-xs-12">
                <table class="table table-hover ">
                    <thead style="font-family: ThaiNeue;font-size: 18pt;">
                    <tr>
                        <th>ลำดับที่</th>
                        <th>ชื่อผลงาน</th>
                        <th>รูปภาพผลงาน</th>
                        <th colspan="2">Action</th>

                    </tr>
                    </thead>
                    <tbody style="font-family: ThaiNeue;font-size: 18pt;">
                    <?php  $i = 1;?>
                    @foreach($port as $value)
                        <tr>
                            <td>{{ $i }}</td>
                            <td>{{$value->pf_name}}</td>
                            <td>
                            {{--ขยายรูป--}}
                            <!-- The Modal -->
                                <div id="myModal" class="modal">
                                    <span class="close">×</span>
                                    <img class="modal-content" id="img01">
                                    <div id="caption"></div>
                                </div>
                                <img src="{{url('image/pic-default.png')}}" id="myImg" width="30" height="30">
                                {{--จบ--}}
                            </td>
                            <td align="right">
                                <form action="{{ route('addPortfolio.edit',$value->pf_id) }}" method="post">
                                    {{ method_field('GET') }}
                                    {{ csrf_field() }}
                                    <button type="submit" class="btn btn-warning">
                                        <li class="glyphicon glyphicon-pencil"></li>
                                        Edit
                                    </button>
                                </form>
                            </td>
                            <td align="Left">
                                <form action="{{ url('addPortfolio',$value->pf_id) }}" method="post" class="delete_form">
                                    {{ method_field('DELETE') }}
                                    {{ csrf_field() }}
                                    <button class="btn btn-danger" id="delete-btn">
                                        <li class="glyphicon glyphicon-trash"></li>
                                        Delete
                                    </button>
                                </form>

                            </td>
                        </tr>
                        <?php $i++;?>
                    @endforeach
                    </tbody>
                </table>


            </div>
        </div>
    </div>
    <br>
    {!! Html::script('js/sweetalert.min.js') !!}
    {!! Html::script('js/jquery.min.js') !!}
    {!! Html::script('js/jquery-confirm.min.js') !!}
    <script>
        $(document).on('click', '#delete-btn', function (e) {
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
                    function (isConfirm) {
                        if (isConfirm) {
                            swal("{!! \Session::get('delete') !!}!", "ข้อมูลทั้งหมดถูกลบเรียบร้อย", "success");
                            setTimeout(function () {
                                self.parents(".delete_form").submit();
                            }, 1000);
                        }
                        else {
                            swal("cancelled", "Your categories are safe", "error");
                            $('html, body').animate({scrollTop: $('#delete-btn').offset().top - 300}, 'slow');
                        }
                    });
        });
        function ConfirmDelete() {
            var x = confirm("ต้องการลบข้อมูล หรือไม่ !!");
            if (x)
                return true;
            else
                return false;
        }
    </script>
    @if (\Session::has('insertfolio'))
        <script !src="">
            swal("{!! \Session::get('insertfolio') !!}", "ขอบคุณที่ใช้บริการผ่านเว็บไซต์ของเรา", "success");
        </script>
    @endif
    @if (\Session::has('editfolio'))
        <script !src="">
            swal("{!! \Session::get('editfolio') !!}", "ขอบคุณที่ใช้บริการผ่านเว็บไซต์ของเรา", "success");
        </script>
    @endif
@endsection