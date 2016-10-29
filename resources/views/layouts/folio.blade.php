<style>
    .news-post {
        width: 100px;
        height: 85px;
    }

    .td-img {
        width: 110px;
    }
</style>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <h2 style="font-family: 'ThaiNeue'; font-size: 48px">รับสมัครงาน <span style="font-size: 14pt;"
                                                                                   class="w3-tag w3-teal">งานใหม่ในรอบสัปดาห์!</span>
            </h2>
            <h2 style="font-family: 'ThaiNeue'; font-size: 26pt;margin:40px 30px 0px 0px" class="w3-display-topright">
                <a href="#" class="show-all" title="'คลิก' ดูทั้งหมด">ทั้งหมด >></a>
            </h2>
        </div>
    </div>
    <div class="row">
        <div class="table-responsive">
            <table class="table table-hover">
                <tbody>
                <?php
                $mysqli = mysqli_connect('localhost', 'root', '', 'msu_pt') or die('Connect DB Error');
                mysqli_set_charset($mysqli, 'utf8');
                $query = "SELECT * FROM work_posts";
                $result = mysqli_query($mysqli, $query);
                while ($row = mysqli_fetch_array($result)){
                ?>
                <tr>
                    <td class="td-img">
                        <img src="picture/<?php echo $row['wp_pic'] ?>" alt="Person" class="w3-card-4 news-post">
                    </td>
                    <td width="900">
                        <p>
                            <a href="{{ route('showpostEmployer.show',$row['wp_id'] ) }}"
                               data-toggle="modal" data-target="#detail<?php echo $row['wp_id']?>">
                                {{ method_field('GET') }}
                                {{ csrf_field() }}
                                <b><?php echo $row['wp_titel']; ?></b>
                            </a>
                        </p>
                        <p style="color: red"><?php echo "(&nbsp;" . $row['wp_total'] . "&nbsp;ตำแหน่ง)"; ?></p>
                        <p><?php echo $row['wp_detail']; ?></p>
                    </td>
                    {{--model--}}
                    <div class="modal fade" id="detail<?php echo $row['wp_id']?>" tabindex="-1"
                         role="dialog" aria-labelledby="myModalLabel">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            </div>
                        </div>
                    </div>
                    {{--end model--}}
                    <td>
                        <p style="color: #cccccc"><?php echo $row['created_at']; ?></p>
                    </td>
                </tr>
                <?php }?>
                </tbody>
            </table>
        </div>
    </div>
    <hr style="border: 1px solid #8c8c8c">
</div>
<script !src="">
    $(document).ready(function () {
        $('a.show-all').tooltip();
    })
</script>