@extends('layouts/template')
@section('content')
    <style>
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
                    <a href="manageProfile" class="dropbtn"><i class="glyphicon glyphicon-user"></i> โปรไฟล์</a>
                </div>

                <div class="dropdown">
                    <button class="dropbtn"><i class="glyphicon glyphicon-list"></i> ผลงาน</button>
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
                    <thead>
                    <tr>
                        <th>ลำดับที่</th>
                        <th>ชื่อผลงาน</th>
                        <th>รูปภาพผลงาน</th>
                        <th>แก้ไข</th>
                        <th>ลบ</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>1</td>
                        <td>คันแทนา</td>
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
                        <td><a href="editPortfolio"><img src="{{url('image/edit.png')}}" width="30" height="30"></a>
                        </td>
                        <td><a href="#"><img src="{{url('image/del.png')}}" width="30" height="30"></a></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>นาทงน้อย</td>
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
                        <td><a href="editPortfolio"><img src="{{url('image/edit.png')}}" width="30" height="30"></a>
                        </td>
                        <td><a href="#"><img src="{{url('image/del.png')}}" width="30" height="30"></a></td>
                    </tr>
                    </tbody>
                </table>


            </div>
        </div>
    </div>
    <br>
    {!! Html::script('js/jquery.min.js') !!}
    {!! Html::script('js/bootstrap.min.js') !!}
    <script !src="">
        var modal = document.getElementById('myModal');

        // Get the image and insert it inside the modal - use its "alt" text as a caption
        var img = document.getElementById('myImg');
        var modalImg = document.getElementById("img01");
        img.onclick = function () {
            modal.style.display = "block";
            modalImg.src = this.src;
        }

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks on <span> (x), close the modal
        span.onclick = function () {
            modal.style.display = "none";
        }
    </script>
@endsection