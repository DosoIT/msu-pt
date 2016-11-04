{!! Html::style('css/slick.css') !!}
<style>
    .mthm {
        background-color: transparent;
        width: 270px;
        height: 130px;
        border-radius: 15px;
        /*-moz-box-shadow: 0 0 5px #888;*/
        /*-webkit-box-shadow: 0 0 5px#888;*/
        /*box-shadow: 0 0 5px #888;*/
    }

    .rimg > img {
        margin: -30px 0px 0px 0px;
        height: 70px;
    }

    .img-circle {
        background-color: #2e3436;
        border-radius: 50px;
    }

    .txt {
        font-family: ThaiNeue;
        font-size: 14pt;
    }

    .txt > p {
        margin-top: -7px;
    }

    .w3-display-topright a {
        color: #8c8c8c;
    }

    a:hover {
        text-decoration: none;
    }
</style>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <h2 style="font-family: 'ThaiNeue'; font-size: 48px">สมาชิกล่าสุด <span style="font-size: 14pt;"
                                                                                    class="w3-tag w3-teal">สมาชิกล่าสุด!</span>
            </h2>
            <h2 style="font-family: 'ThaiNeue'; font-size: 26pt;margin:40px 30px 0px 0px" class="w3-display-topright">
                <a href="#" class="show-all" title="'คลิก' ดูทั้งหมด">ทั้งหมด >></a>
            </h2>
        </div>
    </div>
    <div class="row">
        <div class="items">
            <?php
            $conn = mysqli_connect("localhost", "root", "", "msu_pt");
            mysqli_set_charset($conn, "utf8");
            $sqlch = "SELECT * FROM users WHERE status='PartTime'";
            $qry = mysqli_query($conn, $sqlch);
            while ($rowsuser = mysqli_fetch_array($qry)){

            $sql = "SELECT * FROM user_detail WHERE user_id = " . $rowsuser['id'];
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_array($result)){
            ?>
            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                <a href="profiles?id=<?php echo $row['id'] ?>">
                    <div class="mthm w3-btn w3-white w3-border w3-round-large w3-hover-light-grey">
                        <table style="margin-top: 25px;">
                            <tr>
                                <td class="rimg" width="90">
                                    <img src="{{ url('picture/'.$row['picture']) }}" class="img-circle" alt="picture" >
                                </td>
                                <td class="txt" >
                                    <p align="left">ชื่อ : <?php echo $rowsuser['name']; ?></p>
                                    <p align="left">เรทราคา : <?php echo number_format($row['price_st'])." ถึง ".number_format($row['price_fn']); ?></p>
                                </td>
                            </tr>
                        </table>
                    </div>
                </a>
            </div>
            <?php } } ?>
        </div>
    </div>
    <hr style="border: 1px solid #8c8c8c">
</div>
{!! Html::script('js/slick.min.js') !!}
<script !src="">
    $('.items').slick({
        infinite: true,
        slidesToShow: 4,
        slidesToScroll: 3,
        autoplay: true,
        autoplaySpeed: 2000,
    });
    $('a.show-all').tooltip();
</script>