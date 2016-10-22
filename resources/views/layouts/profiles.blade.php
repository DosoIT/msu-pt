@extends('layouts.template')
<head>
    {!! Html::style("css/bootstrap.min.css") !!}
    {!! Html::script("js/jquery.min.js") !!}
    <style>
        .ul-fix > li {
            float: left;
            margin-top: 1%;
            margin-right: 2%;
            list-style: none;
            font-family: ThaiNeue;
            font-size: 16pt;
        }
        .btt {
            margin: 10px 0px 0px 0px;
        }
        .bt1{
            width: 150px;
            height: 50px;
            font-size: 16pt;
        }
        .bt1>p{
            font-size: 22pt;
            margin-top: -10px;
        }
        .city {
            display: none;
        }

        .tablink {
            font-family: ThaiNeue;
            font-size: 16pt;
            color: #000;
        }
        .li-icon>i{
            margin:0px 10px 0px 10px;
        }
    </style>
</head>
<body>
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xs-6 col-md-4" align="right">
                <img src="image/pic-default.png" alt="profiles" width="120" height="120">
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4">
                <ul class="ul-fix">
                    <li>ชื่อ : นายพงศ์ศิริ &nbsp; นามสกลุ : อนุพันธ์</li>
                    <br>
                    <li>ประเภทงาน : ออกแบบเว็บ</li>
                    <br>
                    <li>ใช้งานล่าสุด : 1 วันที่แล้ว</li>
                    <br>
                    <li>จ้างแล้ว 3 ครั้ง</li>
                    <br>
                    <li style="margin-left: 1%">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                    </li>
                </ul>
            </div>
            <div class="col-xs-3 col-md-3" align="left">
                <ul class="ul-fix">
                    <li>เริ่มต้น 5,000 บาท</li>
                    <br>
                    <li>
                        <button class="w3-btn w3-teal btn-lg w3-border w3-round-large bt1" onmouseover="btn()">
                           <p>จ้างเลย</p>
                        </button>
                    </li>
                    <br>
                    <li><p style="font-size: 13pt;color: red;">(กรุณาอ่านรายละเอียดก่อนทำการจ้างงาน)</p></li>
                    <br>
                    <li class="w3-border w3-round-large li-icon">
                        <i class="fa fa-eye"></i>
                        <i class="fa fa-heart-o"></i>
                        <i class="fa fa-thumbs-o-up"></i>
                    </li>
                </ul>
            </div>
        </div>
        <div id="line" style="border: 1px solid #8c8c8c;margin-top: 10px;"></div>
        <div class="row">
            <div align="center">
                <button class="w3-btn w3-black w3-border w3-round-large btt" onmouseover="btn()"><span>จ้างเลย</span>
                </button>
            </div>
            <div class="w3-row">
                <a href="javascript:void(0)" onclick="openCity(event, 'tab1');">
                    <div class="w3-third tablink w3-bottombar w3-hover-light-grey w3-padding">
                        <i class="glyphicon glyphicon-list-alt"></i>&nbsp;รายละเอียด
                    </div>
                </a>
                <a href="javascript:void(0)" onclick="openCity(event, 'tab2');">
                    <div class="w3-third tablink w3-bottombar w3-hover-light-grey w3-padding">
                        <i class="glyphicon glyphicon-thumbs-up"></i>&nbsp;รีวิวจากผู้ว่างจ้าง</div>
                </a>
                <a href="javascript:void(0)" onclick="openCity(event, 'tab3');">
                    <div class="w3-third tablink w3-bottombar w3-hover-light-grey w3-padding">
                        <i class="glyphicon glyphicon-earphone"></i>&nbsp;ติดต่อ-สอบถาม</div>
                </a>
            </div>

            <div id="tab1" class="w3-container city">
                <h2>tab1</h2>
                <p>tab1 is the capital city of England.</p>
            </div>

            <div id="tab2" class="w3-container city">
                <h2>tab2</h2>
                <p>tab2 is the capital of France.</p>
            </div>

            <div id="tab3" class="w3-container city">
                <h2>tab3</h2>
                <p>tab3 is the capital of Japan.</p>
            </div>
        </div>
    </div>
    <script !src="">
        $(".btt").hover(
                function () {
                    $(this).addClass('w3-hover-teal');
                    $(this).find("span").text("8,000 ฿");
                },
                function () {
                    $(this).find("span").text("จ้างเลย");
                }
        );

        function openCity(evt, cityName) {
            var i, x, tablinks;
            x = document.getElementsByClassName("city");
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablink");
            for (i = 0; i < x.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" w3-border-red", "");
            }
            document.getElementById(cityName).style.display = "block";
            evt.currentTarget.firstElementChild.className += " w3-border-red";
        }
    </script>
@endsection
</body>