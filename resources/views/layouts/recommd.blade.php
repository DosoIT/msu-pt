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

    .caption a.learn-more {
        padding: 5px 10px;
        background: #08c;
        color: #fff;
        border-radius: 2px;
        -moz-border-radius: 2px;
        font-weight: bold;
        text-decoration: none;
    }

    .caption a.learn-more:hover {
        background: #fff;
        color: #08c;
    }

    .details > p {
        padding-bottom: -50px;
    }

    .fa-star-o:hover {
        color: orangered;
        zoom: 1;
    }
</style>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <h2 style="font-family: 'ThaiNeue'; font-size: 48px">
                แนะนำ
                <span style="font-size: 14pt;" class="fa fa-star-o"></span>
                <span style="font-size: 14pt;" class="fa fa-star-o"></span>
                <span style="font-size: 14pt;" class="fa fa-star-o"></span>
                <span style="font-size: 14pt;" class="fa fa-star-o"></span>
                <span style="font-size: 14pt;" class="fa fa-star-o"></span>
            </h2>
            <h2 style="font-family: 'ThaiNeue'; font-size: 26pt;margin:40px 30px 0px 0px" class="w3-display-topright">
                <a href="recommd_all" class="show-all" title="'คลิก' ดูทั้งหมด">ทั้งหมด >></a>
            </h2>
        </div>
    </div>
    <div class="row">
        <?php
        $conn = mysqli_connect("http://202.28.34.207/etc/apps/", "dekfreelance", "rnpcnPZpG", "dekfreelance_db1");
        mysqli_set_charset($conn, "utf8");
        $sqlch = "SELECT * FROM tb_rating  GROUP by user_id";
        $qry = mysqli_query($conn, $sqlch);
        while ($rows = mysqli_fetch_array($qry)){

        $sql = "SELECT * FROM user_detail WHERE user_id = ".$rows['user_id'];
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_array($result)){
        ?>
        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
            {{--<a href="{{ url('profiles') }}">--}}
            <a href="profiles?id=<?php echo $row['id'] ?>">
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
                        <img src="{{ url('picture/'.$row['picture']) }}" alt="picture">
                    </div>
                    <button type="submit" class="btn-jang w3-btn w3-white w3-hover-black w3-display-bottomright">
                        <?php echo "฿ " . number_format($row['price_st']) . " - " . number_format($row['price_fn'])?>
                    </button>
                </div>
            </a>
        </div>
        <?php } }  ?>
    </div>
    <br>
    <hr style="border: 1px solid #8c8c8c">
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