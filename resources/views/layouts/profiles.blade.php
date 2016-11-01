@extends('layouts.template')
<head>
    {!! Html::style("css/bootstrap.min.css") !!}
    {!! Html::script("js/jquery.min.js") !!}
    {!! Html::style('css/slick.css') !!}
    <style>
        .ul-fix > li {
            float: left;
            margin-top: 1%;
            margin-right: 2%;
            list-style: none;
            font-family: ThaiNeue;
            font-size: 14pt;
        }

        .btt {
            margin: 10px 0px 0px 0px;
        }

        .bt1 {
            width: 150px;
            height: 50px;
            font-size: 16pt;
        }

        .bt1 > p {
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

        .li-icon > i {
            margin: 0px 10px 0px 10px;
        }

        .mthm {
            background-color: transparent;
            width: 100%;


            /*-moz-box-shadow: 0 0 5px #888;*/
            /*-webkit-box-shadow: 0 0 5px#888;*/
            /*box-shadow: 0 0 5px #888;*/
        }

        .rimg > img {
            margin-left: 0px;;
            margin-right: -50px;
            margin-bottom: -300px;
            width: 100%;
        }

    </style>
</head>
<body>
@section('content')
    <div class="container">
        <?php
        $conn = mysqli_connect("localhost", "root", "", "msu_pt");
        mysqli_set_charset($conn, "utf8");
        $Id = $_REQUEST['id'];
        $sql = "SELECT * FROM user_detail WHERE id=$Id";
        $query = mysqli_query($conn, $sql);
        while ($item = mysqli_fetch_array($query)){?>
        <div class="row">
            <div class="col-xs-4 col-md-4" align="right">
                {{--<img src="image/pic-default.png" alt="profiles" width="120" height="120">--}}
                <img src="picture/<?php echo $item['picture'] ?>" alt="profiles" width="100" height="100"
                     class="w3-circle">
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4" >
                <ul class="ul-fix">
                    <?php
                    $sql = "SELECT * FROM users WHERE id=" . $item['user_id'];
                    $query = mysqli_query($conn, $sql);
                    $row = mysqli_fetch_array($query);
                    ?>
                    <li>ชื่อ : <?php echo $row['name'] ?> </li>
                    <br>
                    <li>ประเภทงาน :
                        <?php
                        $dts = "SELECT * FROM tb_classify WHERE user_id=" . $item['user_id'];
                        $query = mysqli_query($conn, $dts);
                        while ($dt = mysqli_fetch_array($query)) {
                            $cate = "SELECT * FROM category WHERE c_id=" . $dt['c_id'];
                            $querycate = mysqli_query($conn, $cate);
                            while ($rowcate = mysqli_fetch_array($querycate)) {
                                echo $rowcate['c_name'] . " , ";

                            }
                        } ?>
                    </li>
                    <br>
                    <li>ใช้งานล่าสุด : 1 วันที่แล้ว</li>
                    <br>
                    <li>จ้างแล้ว <?php
                        $rat = "SELECT COUNT(user_id) AS cnt FROM tb_rating WHERE user_id=" . $item['user_id'];
                        $query = mysqli_query($conn, $rat);
                        $num = mysqli_num_rows($query);
                        if ($num > 0) {
                            while ($rats = mysqli_fetch_array($query)) { ?>
                        <?php echo $rats['cnt']; ?>
                        <?php }
                        } else {
                            echo " 0 ";
                        } ?>
                        ครั้ง
                    </li>
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
            <div class="col-xs-2 col-md-3">
                <ul class="ul-fix">
                    <li>เริ่มต้น <?php echo number_format($item['price_st'])?> บาท</li>
                    <br>
                    <li>
                        <button class="w3-btn w3-teal btn-lg w3-border w3-round-large bt1" onmouseover="btn()" onclick="openCity(event, 'tab3');">
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
                        <i class="glyphicon glyphicon-thumbs-up"></i>&nbsp;รีวิวจากผู้ว่างจ้าง
                    </div>
                </a>
                <a href="javascript:void(0)" onclick="openCity(event, 'tab3');">
                    <div class="w3-third tablink w3-bottombar w3-hover-light-grey w3-padding">
                        <i class="glyphicon glyphicon-earphone"></i>&nbsp;ติดต่อ-สอบถาม
                    </div>
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

        <div class="row">
            <div class="col-md-12">
                <h2>ผลงาน</h2>
                <?php
                $sqlpf = "SELECT * FROM tb_portfolio WHERE user_id=" . $item['user_id'];
                $querypf = mysqli_query($conn, $sqlpf);
                while ($itempf = mysqli_fetch_array($querypf)) {
                ?>
                <h3><?php echo $itempf['pf_name']?></h3>

                <div class="row">
                    <div class="items" style="height: 200px;">
                        <?php
                        $sqlpf_detail = "SELECT * FROM tb_portfolio_picture WHERE pf_id=" . $itempf['pf_id'];
                        $querypf_detail = mysqli_query($conn, $sqlpf_detail);
                        while ($itempf_detail = mysqli_fetch_array($querypf_detail)) {
                        ?>
                        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2" >
                            <div class="mthm">
                                <table>
                                    <tr>
                                        <td class="rimg" width="100%">
                                            <img src="{{ url('images/'.$itempf_detail['pfpic_name']) }}" >
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>

            <div id="line" style="border: 1px solid #8c8c8c;margin-top: 10px;"></div>
            <?php }?>
        </div>
    </div>
    <?php } ?>
    </div>
    {!! Html::script('js/slick.min.js') !!}
    <script !src="">
        $('.items').slick({
            infinite: true,
            slidesToShow: 4,
            slidesToScroll: 4,
            autoplay: true,
            autoplaySpeed: 2000,
        });
        $('a.show-all').tooltip();
    </script>
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