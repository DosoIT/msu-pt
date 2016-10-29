<style>
    .title-page h2 {
        font-family: ThaiNeue;
        font-size: 34pt;
        text-align: center;
        /*border-bottom: 1px solid #8c8c8c;*/
    }

    .btn-category {
        margin-left: 10%;
    }

    .btn-category .bt {
        font-family: ThaiNeue;
        font-size: 18pt;
        width: 150px;
        color: #0f0f0f;
    }

    .bt a {
        color: #000;
    }

    i {
        margin-left: -8px;
        padding-left: -1px;
        color: #0f0f0f;
    }
</style>
<script>
    function loadSound() {
        var beep = new Audio();
        beep.src = "audio/beep.mp3";
        beep.play().speed = 1000;
        beep.volume=0.1;
    }
</script>

<div class="container">
    <div class="row">
        <div class="col-xs-12 col-md-12">
            <div class="row">
                <div class="col-md-12 title-page">
                    <h2>เลือกจากหมวดหมู่</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 btn-category">
                    <?php
                    $conn = mysqli_connect("localhost", "root", "", "msu_pt");
                    mysqli_set_charset($conn, "utf8");
                    $sql = "SELECT * FROM category";
                    $result = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_array($result)){

                        ?>
                    <div class="col-xs-2">
                        <div class="w3-btn w3-white w3-border w3-round-large bt ">
                            <a href="show_all_pt" onmouseover="loadSound()"><i class="fa fa-code"></i><?php echo $row['c_name']?></a>
                        </div>
                    </div>
                    <?php } ?>

                </div>
            </div>
            <div class="page-header"></div>
        </div>
    </div>
</div>
