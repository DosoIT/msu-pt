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
        beep.volume = 0.1;
    }
</script>

<div class="container">
    <div class="row">
        <div class="col-xs-12 col-md-12">
            <div class="row">
                <div class="col-md-12 title-page">
                    <h2>หมวดหมู่บางส่วนในเว็บของเรา</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 btn-category">
                    <div class="col-xs-2">
                        <div class="w3-btn w3-white w3-border w3-round-large bt ">
                            <?php
                            $conn = mysqli_connect("localhost", "root", "", "msu_pt");
                            mysqli_set_charset($conn, "utf8");
                            $sql = "SELECT * FROM category WHERE c_id = 1";
                            $result = mysqli_query($conn, $sql);
                            while ($row = mysqli_fetch_array($result)){
                            ?>
                            <a href="p?cId=<?php echo $row['c_id'] ?>" onmouseover="loadSound()"><i class="fa fa-code"></i>&nbsp;<?php echo $row['c_name']; ?></a>
                            <?php } ?>
                        </div>
                    </div>

                    <div class="col-xs-2">
                        <div class="w3-btn w3-white w3-border w3-round-large bt ">
                            <?php
                            $conn = mysqli_connect("localhost", "root", "", "msu_pt");
                            mysqli_set_charset($conn, "utf8");
                            $sql = "SELECT * FROM category WHERE c_id = 2";
                            $result = mysqli_query($conn, $sql);
                            while ($row = mysqli_fetch_array($result)){
                                ?>
                            <a href="p?cId=<?php echo $row['c_id'] ?>" onmouseover="loadSound()"><i
                                        class="fa fa-camera"></i>&nbsp;&nbsp;<?php echo $row['c_name']; ?></a>
                                <?php } ?>
                        </div>
                    </div>

                    <div class="col-xs-2">
                        <div class="w3-btn w3-white w3-border w3-round-large bt ">
                            <?php
                            $conn = mysqli_connect("localhost", "root", "", "msu_pt");
                            mysqli_set_charset($conn, "utf8");
                            $sql = "SELECT * FROM category WHERE c_id = 3";
                            $result = mysqli_query($conn, $sql);
                            while ($row = mysqli_fetch_array($result)){
                                ?>
                            <a href="p?cId=<?php echo $row['c_id'] ?>" onmouseover="loadSound()"><i
                                        class="fa fa-wrench"></i>&nbsp;&nbsp;<?php echo $row['c_name']; ?></a>
                            <?php } ?>
                        </div>
                    </div>

                    <div class="col-xs-2">
                        <div class="w3-btn w3-white w3-border w3-round-large bt ">
                            <?php
                            $conn = mysqli_connect("localhost", "root", "", "msu_pt");
                            mysqli_set_charset($conn, "utf8");
                            $sql = "SELECT * FROM category WHERE c_id = 4";
                            $result = mysqli_query($conn, $sql);
                            while ($row = mysqli_fetch_array($result)){
                                ?>
                            <a href="p?cId=<?php echo $row['c_id'] ?>" onmouseover="loadSound()"><i class="fa fa-video-camera"></i>&nbsp;&nbsp;<?php echo $row['c_name']; ?></a>
                            <?php } ?>
                        </div>
                    </div>

                    <div class="col-xs-2">
                        <div class="w3-btn w3-white w3-border w3-round-large bt ">
                            <?php
                            $conn = mysqli_connect("localhost", "root", "", "msu_pt");
                            mysqli_set_charset($conn, "utf8");
                            $sql = "SELECT * FROM category WHERE c_id = 5";
                            $result = mysqli_query($conn, $sql);
                            while ($row = mysqli_fetch_array($result)){
                                ?>
                            <a href="p?cId=<?php echo $row['c_id'] ?>" onmouseover="loadSound()"><i class="fa fa-ellipsis-h"></i>&nbsp;&nbsp;<?php echo $row['c_name']; ?></a>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="page-header"></div>
        </div>
    </div>
</div>
