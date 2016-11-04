@extends('layouts.template')
<style>
    .recom-img > img {
        opacity: 1;
    }
    .recom-img:hover {
        background-color: #cccccc;
    }
    .grid-block {
        background-color: transparent;
        position: relative;
        float: left;
        width: 180px;
        height: 250px;
        margin: 0 0 30px 30px;
        /*-moz-box-shadow: 0 0 5px #888;*/
        /*-webkit-box-shadow: 0 0 5px#888;*/
        /*box-shadow: 0 0 5px #888;*/
    }
    .grid-block .recom-img {
        width: 100%;
        height: 85%;
    }
    .grid-block .recom-img > img {
        width: 100%;
        height: 100%;
    }
    .grid-block h4 {
        font-size: .9em;
        color: #333;
        background: #f5f5f5;
        margin: 0;
        padding: 10px;
        border: 1px solid #ddd;
    }
    .caption {
        display: none;
        position: absolute;
        top: 0;
        left: 0;
        background-image: url("image/blank.png");
        width: 100%;
        height: 100%;
    }
    .caption h3, .caption p {
        color: #fff;
        /*margin: 20px;*/
    }

    .caption h3 {
        margin: 20px 20px 10px;
    }

    .caption p {
        font-size: .75em;
        line-height: 1.2em;
        /*margin: 0 20px 15px;*/
    }

    .details > p {
        padding-bottom: -50px;
    }
</style>
@section('content')
    <style>
        .fnt {
            font-family: ThaiNeue;
            font-size: 34pt;
        }

        .title-page h2 {
            font-family: ThaiNeue;
            font-size: 34pt;
            /*border-bottom: 1px solid #8c8c8c;*/
        }

        .btn-category01 {
            margin-left: 0%;
            margin-top: 2%;
        }

        .btn-category01 .bt {
            font-family: ThaiNeue;
            font-size: 18pt;
            width: 200px;
            height: 100px;
        }

        i {
            margin-left: -8px;
            padding-left: -1px;
        }

        .bt {
            margin-top: 7%;
        }
    </style>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-12">
                <div class="row">
                    <div class="title-page" style="margin-left: -80%">
                        <h2>ค้นหา <i class="fa fa-search"></i></h2>
                    </div>
                </div>
                <div class="row">
                    <?php
                    $conn = mysqli_connect("localhost", "root", "", "msu_pt");
                    mysqli_set_charset($conn, "utf8");
                    $cid = $_GET['cId'];
                    $sql = "SELECT * FROM tb_classify WHERE c_id ='$cid' GROUP BY user_id";
                    $query = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_array($query)){
                    ?>
                    <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                        {{--<a href="{{ url('profiles') }}">--}}
                        <a href="profiles?id=<?php echo $row['user_id'] ?>">
                            <div class="thumbnail thm grid-block slide">
                                <div class="caption">
                                    <?php
                                    $sqluser = "SELECT * FROM users WHERE id=" . $row['user_id'];
                                    $resultuser = mysqli_query($conn, $sqluser);
                                    while ($rowuser = mysqli_fetch_array($resultuser)){
                                    ?>
                                    <h5 style="color:#fff;"><?php echo $rowuser['name']?></h5>
                                    <?php } ?>
                                    <p style="color:#fff;">
                                        <?php
                                        $sqldt = "SELECT * FROM tb_discription WHERE user_id=" . $row['user_id'];
                                        $resultdt = mysqli_query($conn, $sqldt);
                                        while ($rowdt = mysqli_fetch_array($resultdt)) {
                                            echo "<p>-" . $rowdt['dt_detail'] . "</p>";
                                        } ?>
                                    </p>
                                </div>
                                <div class="recom-img">
                                    <?php
                                    $sqluser = "SELECT * FROM user_detail WHERE id=" . $row['user_id'];
                                    $resultuser = mysqli_query($conn, $sqluser);
                                    while ($rowuser = mysqli_fetch_array($resultuser)){
                                    ?>
                                    <img src="{{ url('picture/'.$rowuser['picture']) }}" alt="picture">
                                </div>
                                <button type="submit"
                                        class="btn-jang w3-btn w3-white w3-hover-black w3-display-bottomright">
                                    <?php echo "฿ " . number_format($rowuser['price_st']) . " - " . number_format($rowuser['price_fn'])?>
                                </button>
                                <?php } ?>
                            </div>
                        </a>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
    <div style="border: 1px solid #cccccc;margin-bottom: 3%"></div>
    <div class="row">
        @include('layouts.contact')
    </div>
    </div>
    <script !src="">
        $('.slide').hover(
                function () {
                    $(this).find('.caption').slideDown(250);
                },
                function () {
                    $(this).find('.caption').slideUp(250);
                }
        );
        $('a.show-all').tooltip();
    </script>
@endsection