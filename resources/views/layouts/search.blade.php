<style>
    @media only screen and (max-device-width: 480px) {
        /* styles for mobile browsers smaller than 480px; (iPhone) */
        .col-xs-12 h2 {
            background-color: #00bcd4;
        }

        .col-xs-3, .col-xs-3 h2 {
            background-color: #00bcd4;
        }
        input{
            border: 1px solid black;
        }

    }
</style>
<div class="container">
    <div class="row">
        <div class="col-md-12" id="src">
            <div class="row">
                <div class="col-xs-12"><h1 style="font-family: 'ThaiNeue'; font-size: 48px;">ค้นหางาน</h1></div>
            </div>
            <div class="row">
                <div class=" col-xs-3">
                    <label for="ex2"><h2 style="font-family: 'ThaiNeue';">ประเภทงาน</h2></label>
                    <input class="form-control" id="ex2" type="text" style="border:1px solid #000000;">
                </div>
                <div class="col-xs-2">
                    <label for="ex2"><h2 style="font-family: 'ThaiNeue';">ราคา</h2></label>
                    <input class="form-control" id="ex2" type="text" style="border:1px solid #000000;">
                </div>
                <div class="col-xs-2">
                    <label for="ex2"><h2 style="color: transparent">.</h2></label>
                    <select name="slPrice" id="slPrice" class="form-control"
                            style="font-family: 'ThaiNeue'; font-size: large;border:1px solid #000000;">
                        <option value="f">ราคาเต็มวัน</option>
                        <option value="h">ราคาครึ่งวัน</option>
                    </select>
                </div>
                <div class="col-xs-3">
                    <label for="ex2"><h2 style="font-family: 'ThaiNeue';">สถานที่</h2></label>
                    <?php
                    $conn = mysqli_connect("localhost", "root", "", "msu_pt");
                    mysqli_set_charset($conn, "utf8");
                    $sql = "SELECT * FROM tb_locations";
                    $query = mysqli_query($conn, $sql);
                    ?>
                    <select name="slPlace" id="slPlace" class="form-control"
                            style="font-family: 'ThaiNeue'; font-size: large;border:1px solid #000000;">
                        <?php while ($values = mysqli_fetch_array($query)){ ?>
                        <option value="<?php echo $values['location']; ?>"><?php echo $values['location']; ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="col-xs-2">
                    <button type="submit" class="w3-btn w3-white w3-border" style="margin-top: 35%;position: absolute;font-family: 'ThaiNeue';font-size: large">
                        <i class="fa fa-search"></i>&nbsp;ค้นหา
                    </button>
                </div>
            </div>
        </div>
    </div>
    <hr style="border: 1px solid #8c8c8c">
</div>
