{!! Html::style('css/slick.css') !!}
<style>
    .addOn-img > img {
        width: 100%;
        height: 60%;
    }

    ul {
        list-style: none outside none;
        margin: 0;
        padding: 0;
        text-align: center
    }

    .contact-l > li {
        margin: 0 10px;
        display: inline;
    }
    .contact-l > img{
        margin-bottom: 20px;
    }

    .contact-r > li {
        margin: 20px 50px;
        display: inline;
    }
    .textinfo{
        font-family: ThaiNeue;
        font-size: 18pt;
    }
</style>
<div class="container">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <ul class="contact-l">
                    <li>
                        <img src="image/LOGO_it.png" alt="LOGO">
                    </li>
                    <br>
                    <li class="textinfo">
                        <p>คณะวิทยาการสารสนเทศ ภาควิชาเทคโนโลยีสารสนเทศ</p>
                        <p>มหาวิทยาลัยมหาสารคาม</p>
                        <p>ต.ขามเรียง อ.กันทรวิชัย จ.มหาสารคาม 44150</p>
                        <p>โทรศัพท์ 0-4375-4359 , FAX: 0-4375-4359</p>
                        <p>E-mail : it.msu.ac.th@gmail.com </p>
                    </li>
                </ul>

            </div>
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <ul class="contact-r">
                    <li>
                        <img src="image/msu.png" alt="logo" width="150" class="w3-circle w3-border">
                    </li>
                    <br>
                    <li class="textinfo">
                        <p>เว็บไซต์จัดจ้างและฝึกทักษะวิชาชีพ สำหรับนิสิต</p>
                        <p>มหาวิทยาลัยมหาสารคาม</p>
                        <p>ต.ขามเรียง อ.กันทรวิชัย จ.มหาสารคาม 44150</p>
                        <p>โทรศัพท์ 0-4375-4359 , FAX: 0-4375-4359</p>
                        <p>E-mail : it.msu.ac.th@gmail.com </p>
                    </li>
                </ul>
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