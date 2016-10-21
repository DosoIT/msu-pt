{!! Html::style('css/slick.css') !!}
<style>
    .addOn-img > img{
        width: 100%;
        height: 60%;
    }
</style>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <h2 style="font-family: 'ThaiNeue'; font-size: 48px">โฆษณา</h2>
            <h2 style="font-family: 'ThaiNeue'; font-size: 26pt;margin:40px 30px 0px 0px" class="w3-display-topright">
                <a href="#" class="show-all" title="'คลิก' ดูทั้งหมด">ทั้งหมด >></a>
            </h2>
        </div>
    </div>
    <div class="row">
        <div class="items">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="addOn">
                    <table>
                        <tr>
                            <td class="addOn-img">
                                <img src="image/1080x336.jpg" alt="โฆษณา">
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
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