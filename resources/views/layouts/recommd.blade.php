<style>
    .recom-img:hover {
        background-color: #cccccc;
    }

    .grid-block-container {
        float: left;
        width: 990px;
        margin: 20px 0 0 -30px;
    }

    .grid-block {
        position: relative;
        float: left;
        width: 180px;
        height: 250px;
        margin: 0 0 30px 30px;
    }
    .grid-block .recom-img{
        width: 170px;
        height: 190px;
    }
    .grid-block .recom-img img{
        width: 170px;
        height: 190px;
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
        background: url(image/trans-black-50.png);
        width: 100%;
        height: 100%;
    }

    .caption h3, .caption p {
        color: #fff;
        margin: 20px;
    }

    .caption h3 {
        margin: 20px 20px 10px;
    }

    .caption p {
        font-size: .75em;
        line-height: 1.5em;
        margin: 0 20px 15px;
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
</style>
<div class="container">
    <div class="row">
        <div class="col-xs-12"><h2 style="font-family: 'ThaiNeue'; font-size: 48px">แนะนำ</h2></div>
    </div>
    <div class="row">
        <?php
        $conn = mysqli_connect("localhost", "root", "", "testlaravel");
        mysqli_set_charset($conn, "utf8");
        $sql = "SELECT * FROM user_detail";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_array($result)){

        ?>
        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
            <div class="thumbnail thm grid-block slide">
                <div class="caption">
                    <p>Lorem ipsum dolor sit amet.</p>
                    <p>Lorem ipsum dolor sit amet.</p>
                    <p>Lorem ipsum dolor sit amet.</p>
                </div>
                <div class="recom-img">
                    <img src="{{ url('picture/'.$row['picture']) }}" alt="picture">
                </div>
                <p>Phone : <?php echo $row['tel']; ?></p>
            </div>
        </div>
        <?php } ?>
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
</script>