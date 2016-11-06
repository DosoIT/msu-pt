@extends('layouts.template')
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
                    <div class="title-page" style="margin-left: -60%">
                        <h2>หมวดหมู่ในเว็บของเรา</h2>
                    </div>
                </div>
                <div class="row">
                    <div class=" btn-category">
                        <?php
                        $conn = mysqli_connect("localhost", "root", "", "msu_pt");
                        mysqli_set_charset($conn, "utf8");
                        $sql = "SELECT * FROM category";
                        $result = mysqli_query($conn, $sql);
                        while ($row = mysqli_fetch_array($result)){
                        ?>
                        <div class="col-xs-2">
                            <div class="w3-btn w3-white w3-border w3-round-large bt ">
                                <a href="p?cId=<?php echo $row['c_id'] ?>"
                                   onmouseover="loadSound()"><?php echo $row['c_name']?></a>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection