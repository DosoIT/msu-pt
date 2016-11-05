@extends('layouts/back_end')
{!! Html::style('css/sweetalert.css') !!}
{!! Html::style('css/twitter.css') !!}
{{--{!! Html::style('css/jquery-ui.css') !!}--}}
{!! Html::style('css/jquery-confirm.css') !!}
@section('content')
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        html, body, h1, h2, h3, h4, h5, h6 {
            font-family: "Roboto", sans-serif
        }

        #img-resize {
            width: 100%;
        }

        .inputfile + label {
            font-size: 1.25em;
            font-weight: 700;
            color: gray;
            display: inline-block;
        }

        .inputfile + label {
            cursor: pointer; /* "hand" cursor */
        }

        label {
            font-size: 12pt;
            font-family: ThaiNeue;
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

        .btnBorder{
            border: 1px solid Gray;
            width: 100%;
            height: 50px;
        }
        .btnBorder > p{
            font-family: ThaiNeue;
            font-size: 18pt;

        }
    </style>
    <body>
    <div class="container">
        <div class="row">
            <div class="page-header w3-right">
                <div class="dropdown">
                    <a href="profile">
                        <button class="dropdown-toggle w3-btn w3-white w3-hover-green btnBorder"><i class="glyphicon glyphicon-user"></i> โปรไฟล์
                        </button>
                    </a>
                    <div class="dropdown-content w3-hover-Teal">
                        <a href="manageProfile"><i class="glyphicon glyphicon-wrench"></i> จัดการโปรไฟล์</a>
                    </div>
                </div>

                <div class="dropdown">
                    <button class="w3-btn w3-white w3-hover-green w3-large btnBorder "><i class="glyphicon glyphicon-list"></i> ผลงาน</button>
                    <div class="dropdown-content w3-hover-Teal">
                        <a href="addPortfolio"><i class="glyphicon glyphicon-plus"></i> เพิ่มผลงาน</a>
                        <a href="managePortfolio"><i class="glyphicon glyphicon-wrench"></i> จัดการผลงาน</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @if(count($userDetail) > 0)
        <div class="w3-container w3-content w3-margin-top" style="max-width:1400px;">
            <!-- The Grid -->
            <div class="w3-row-padding" style="margin:0 -16px">
                <!-- Left Column -->
                <div class="w3-third">
                    @foreach($userDetail as $item)
                        <div class="w3-white w3-text-grey w3-card-4">
                            <div class="w3-display-container">
                                <img src="picture/{{$item->picture}}" style="width:100%;height:400px;" alt="Avatar">
                                <div class="w3-display-bottomleft w3-container w3-text-black">
                                    <h2>{{Auth::user()->name}}</h2>
                                </div>
                            </div>
                            <br>
                            <div class="w3-container">
                                @foreach($classify as $key)
                                    @foreach($cate as $cat_value)
                                        @if($cat_value->c_id == $key->c_id)
                                            <p>
                                                <i class="fa fa-briefcase fa-fw w3-margin-right w3-large w3-text-teal"></i> {{$cat_value->c_name}}
                                                @endif
                                                @endforeach
                                                @endforeach
                                            </p>
                                            <p><i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-teal"></i>
                                                {{$item->address}}
                                            </p>
                                            <p>
                                                <i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-teal"></i>
                                                {{Auth::user()->email }}
                                            </p>
                                            <p><i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-teal"></i>
                                                {{$item->tel}}
                                            </p>
                                            <p class="w3-large"><b><i
                                                            class="fa fa-money fa-fw w3-margin-right w3-text-teal"></i>เรทราคา : </b>

                                                {{number_format($item->price_st) }} - {{number_format($item->price_fn)}}
                                            </p>
                                            <hr>

                                            <p class="w3-large"><b><i
                                                            class="fa fa-asterisk fa-fw w3-margin-right w3-text-teal"></i>ความสามารถ</b>
                                            </p>

                                            @foreach($skill as $key)
                                                <p> - {{$key->s_detail}}</p>

                                            @endforeach
                                            <br>

                                            <p class="w3-large w3-text-theme"><b><i
                                                            class="fa fa-globe fa-fw w3-margin-right w3-text-teal"></i>Languages</b>
                                            </p>
                                            <p>English</p>
                                            <br>
                            </div>
                        </div>
                    @endforeach
                    <br>

                    <!-- End Left Column -->
                </div>

                <!-- Right Column -->
                <div class="w3-twothird">

                    <div class="w3-container w3-card-2 w3-white w3-margin-bottom">
                        <h2 class="w3-text-grey w3-padding-16"><i
                                    class="fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>
                            ลักษณะงาน
                        </h2>
                        <div class="w3-container">
                            @foreach($discript as $value)
                                <h5 class="w3-opacity"><b>* {{$value->dt_detail}}</b></h5>
                                <h6 class="w3-text-teal"><i class="fa  fa-fw w3-margin-right"></i>
                                </h6>                                </h6>

                                <hr>
                            @endforeach
                        </div>

                    </div>

                    <div class="w3-container w3-card-2 w3-white">
                        <h2 class="w3-text-grey w3-padding-16"><i
                                    class="fa fa-certificate fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Education
                        </h2>
                        <div class="w3-container">
                            <h5 class="w3-opacity"><b>สาขาเทคโนโลยีสารสนเทศ</b></h5>
                            <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i></h6>
                            <p>คณะวิทยาการสารสนเทศ  มหาวิทยาลัยมหาสารคาม</p>
                            <hr>
                        </div>
                    </div>

                    <!-- End Right Column -->
                </div>

                <!-- End Grid -->
            </div>

            <!-- End Page Container -->
        </div>
    @else
        <div class="w3-container w3-content w3-margin-top" style="max-width:1400px;">


            <!-- The Grid -->
            <div class="w3-row-padding" style="margin:0 -16px">
                <!-- Left Column -->
                <div class="w3-third">

                    <div class="w3-white w3-text-grey w3-card-4">
                        <div class="w3-display-container">
                            <img src="image/pic-default.png" style="width:100%" alt="Avatar">
                            <div class="w3-display-bottomleft w3-container w3-text-black">
                                <h2>Jane Doe</h2>
                            </div>
                        </div>
                        <div class="w3-container">
                            <p><i class="fa fa-briefcase fa-fw w3-margin-right w3-large w3-text-teal"></i>Designer</p>
                            <p><i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-teal"></i>London, UK</p>
                            <p><i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-teal"></i>ex@mail.com</p>
                            <p><i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-teal"></i>1224435534</p>
                            <hr>

                            <p class="w3-large"><b><i
                                            class="fa fa-asterisk fa-fw w3-margin-right w3-text-teal"></i>Skills</b></p>
                            <p>Adobe Photoshop</p>
                            <div class="w3-progress-container w3-round-xlarge w3-small">
                                <div class="w3-progressbar w3-round-xlarge w3-teal" style="width:90%">
                                    <div class="w3-center w3-text-white">90%</div>
                                </div>
                            </div>
                            <p>Photography</p>
                            <div class="w3-progress-container w3-round-xlarge w3-small">
                                <div class="w3-progressbar w3-round-xlarge w3-teal" style="width:80%">
                                    <div class="w3-center w3-text-white">80%</div>
                                </div>
                            </div>
                            <p>Illustrator</p>
                            <div class="w3-progress-container w3-round-xlarge w3-small">
                                <div class="w3-progressbar w3-round-xlarge w3-teal" style="width:75%">
                                    <div class="w3-center w3-text-white">75%</div>
                                </div>
                            </div>
                            <p>Media</p>
                            <div class="w3-progress-container w3-round-xlarge w3-small">
                                <div class="w3-progressbar w3-round-xlarge w3-teal" style="width:50%">
                                    <div class="w3-center w3-text-white">50%</div>
                                </div>
                            </div>
                            <br>

                            <p class="w3-large w3-text-theme"><b><i
                                            class="fa fa-globe fa-fw w3-margin-right w3-text-teal"></i>Languages</b></p>
                            <p>English</p>
                            <div class="w3-progress-container w3-round-xlarge">
                                <div class="w3-progressbar w3-round-xlarge w3-teal" style="width:100%"></div>
                            </div>
                            <p>Spanish</p>
                            <div class="w3-progress-container w3-round-xlarge">
                                <div class="w3-progressbar w3-round-xlarge w3-teal" style="width:55%"></div>
                            </div>
                            <p>German</p>
                            <div class="w3-progress-container w3-round-xlarge">
                                <div class="w3-progressbar w3-round-xlarge w3-teal" style="width:25%"></div>
                            </div>
                            <br>
                        </div>
                    </div>
                    <br>

                    <!-- End Left Column -->
                </div>

                <!-- Right Column -->
                <div class="w3-twothird">

                    <div class="w3-container w3-card-2 w3-white w3-margin-bottom">
                        <h2 class="w3-text-grey w3-padding-16"><i
                                    class="fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Work
                            Experience
                        </h2>
                        <div class="w3-container">
                            <h5 class="w3-opacity"><b>Front End Developer / w3schools.com</b></h5>
                            <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Jan 2015 -
                                <span
                                        class="w3-tag w3-teal w3-round">Current</span></h6>
                            <p>Lorem ipsum dolor sit amet. Praesentium magnam consectetur vel in deserunt aspernatur est
                                reprehenderit sunt hic. Nulla tempora soluta ea et odio, unde doloremque repellendus
                                iure,
                                iste.</p>
                            <hr>
                        </div>
                        <div class="w3-container">
                            <h5 class="w3-opacity"><b>Web Developer / something.com</b></h5>
                            <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Mar 2012 - Dec
                                2014
                            </h6>
                            <p>Consectetur adipisicing elit. Praesentium magnam consectetur vel in deserunt aspernatur
                                est
                                reprehenderit sunt hic. Nulla tempora soluta ea et odio, unde doloremque repellendus
                                iure,
                                iste.</p>
                            <hr>
                        </div>
                        <div class="w3-container">
                            <h5 class="w3-opacity"><b>Graphic Designer / designsomething.com</b></h5>
                            <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Jun 2010 - Mar
                                2012
                            </h6>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p><br>
                        </div>
                    </div>

                    <div class="w3-container w3-card-2 w3-white">
                        <h2 class="w3-text-grey w3-padding-16"><i
                                    class="fa fa-certificate fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Education
                        </h2>
                        <div class="w3-container">
                            <h5 class="w3-opacity"><b>W3Schools.com</b></h5>
                            <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Forever</h6>
                            <p>Web Development! All I need to know in one place</p>
                            <hr>
                        </div>
                        <div class="w3-container">
                            <h5 class="w3-opacity"><b>London Business School</b></h5>
                            <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>2013 - 2015
                            </h6>
                            <p>Master Degree</p>
                            <hr>
                        </div>
                        <div class="w3-container">
                            <h5 class="w3-opacity"><b>School of Coding</b></h5>
                            <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>2010 - 2013
                            </h6>
                            <p>Bachelor Degree</p><br>
                        </div>
                    </div>

                    <!-- End Right Column -->
                </div>

                <!-- End Grid -->
            </div>

            <!-- End Page Container -->
        </div>
    @endif
    {!! Html::script('js/sweetalert.min.js') !!}
    {!! Html::script('js/jquery.min.js') !!}
    {!! Html::script('js/jquery-confirm.min.js') !!}
    <script !src="">
        function openLeftMenu() {
            document.getElementById("leftMenu").style.display = "block";
        }
        function closeLeftMenu() {
            document.getElementById("leftMenu").style.display = "none";
        }
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
@endsection