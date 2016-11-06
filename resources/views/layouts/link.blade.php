{!! Html::style('css/slick.css') !!}
<style>
    .addOn-img > img{
        width: 100%;
        height: 60%;
    }
    iframe:hover{
        box-shadow: 1px 1px 100px #ccc;
    }
    .ft{
        font-family: ThaiNeue;
        font-size: 18pt;
    }
    .ft-c{
        font-family: ThaiNeue;
        font-size: 16pt;
        margin-left: 5%;
    }
</style>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <h2 style="font-family: 'ThaiNeue'; font-size: 48px">มุมแนะนำ</h2>
            <h2 style="font-family: 'ThaiNeue'; font-size: 26pt;margin:40px 30px 0px 0px" class="w3-display-topright">
                <a href="#" class="show-all" title="'คลิก' ดูทั้งหมด">ทั้งหมด >></a>
            </h2>
        </div>
    </div>
    <div class="row">
        <div class="items">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="row">
                    <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                        <div class="row">
                            <iframe width="750" height="350" src="https://www.youtube.com/embed/-ZS5P7HHfEM" frameborder="0" allowfullscreen></iframe>
                        </div>
                        <div class="row">
                            <h3 class="ft">
                               <b> วีดีโอ</b> : แนะนำสาขาคณะวิทยาการสารสนเทศ มหาวิทยาลัยมหาสารคาม
                            </h3>
                            <p class="ft-c"><i class="fa fa-hashtag" aria-hidden="true"></i>&nbsp;คณะวิทยาการสารสนเทศ มหาวิทยาลัยมหาสารคาม</p>
                            <p class="ft-c"><i class="fa fa-map-marker"></i>&nbsp;ต.ขามเรียง อ.กันทรวิชัย จ.มหาสารคาม 44150</p>
                            <p class="ft-c"><i class="fa fa-phone"></i>&nbsp;โทรศัพท์ 0-4375-4359 , FAX: 0-4375-4359</p>
                        </div>
                    </div>

                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                        <div class="fb-page" data-href="https://www.facebook.com/informationtechnologyMSU/?fref=ts" data-tabs="timeline" data-width="500" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/informationtechnologyMSU/?fref=ts" class="fb-xfbml-parse-ignore">
                                <a href="https://www.facebook.com/informationtechnologyMSU/?fref=ts">สาขาเทคโนโลยีสารสนเทศ มหาวิทยาลัยมหาสารคาม</a></blockquote></div>
                        <div id="fb-root"></div>
                        <script>(function(d, s, id) {
                                var js, fjs = d.getElementsByTagName(s)[0];
                                if (d.getElementById(id)) return;
                                js = d.createElement(s); js.id = id;
                                js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8&appId=1604673509829668";
                                fjs.parentNode.insertBefore(js, fjs);
                            }(document, 'script', 'facebook-jssdk'));</script>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr style="border: 1px solid #8c8c8c">
</div>
{!! Html::script('js/slick.min.js') !!}
{{ Html::script('js/jquery.min.js') }}
<script !src="">
    $('.items').slick({
        infinite: true,
        slidesToShow: 4,
        slidesToScroll: 3,
        autoplay: true,
        autoplaySpeed: 2000,
    });
    $('a.show-all').tooltip();
    $('video,audio').mediaelementplayer(/* Options */);
</script>