<style>
    .fonts {
        font-family: ThaiNeue;
        font-size: 20pt;
        margin-left: 1cm;
    }

    .ul-fix > li {
        float: left;
        margin-top: 1%;
        margin-right: 2%;
        list-style: none;
        font-family: ThaiNeue;
        font-size: 16pt;
    }

    .bt1 > p {
        font-size: 22pt;
        margin-top: -10px;
    }

    .li-icon > i {
        margin: 0px 10px 0px 10px;
    }
</style>
<div class="modal-header" style="heigth: 50px; ">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                aria-hidden="true">&times;</span></button>
    {{--<h5 class="modal-title fonts" id="myModalLabel">รายละเอียด</h5>--}}
    <p class="modal-title fonts" id="myModalLabel">รายละเอียด</p>
</div>
<div class="modal-body">
    <div class="container">
        <div class="row">
            @foreach($detail_post as $values)
            <div class="col-xs-3 col-md-3" align="center">
                <img src="{{url('picture/'.$values->wp_pic)}}" alt="รูป ตำแหน่งที่ทำงาน" width="180" height="150">

          <ul class="ul-fix" style="margin-top: 25px; margin-left: 1px;">
              <li>เบอร์  : {{ $values->wp_tel }}</li>
              <br>
              <li>Facebook : {{ $values->wp_fb }}</li>
              <br>
              <li>E-mail : {{ $values->wp_email }}</li>
          </ul>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6" style="margin-left: -80px;">
                <ul class="ul-fix">
                    <li>ชื่อบริษัท/หัวข้อ : {{ $values->wp_titel }}</li>
                    <br>
                    <li>ประเภทงาน : {{ $values->wp_description }}</li>
                    <br>
                    <li>จำนวน/ตำแหน่ง  : <b>{{ $values->wp_total }}</b></li>
                    <br>
                    <li>รายละเอียด : {{ $values->wp_detail }}</li>
                    <br>
                    <li>สถานที่  : {{ $values->wp_location }}</li>
                    <br>
                    <li>คุณสมบัติ : {{ $values->wp_property }}</li>
                    <br>
                    <br>
                    <li style="margin-left: 1%">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                    </li>
                </ul>
            </div>
            @endforeach
        </div>
    </div>
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-warning btn-sm" data-dismiss="modal"
            style="font-family: ThaiNeue;font-size: 18pt;">Close
    </button>
</div>

{{--<div class="table-responsive">--}}
{{--<table class="table" cellpadding="0" cellspacing="0">--}}
{{--<tr class="fonts">--}}
{{--<td width="30%" align="right">ชื่อบริษัท/หัวข้อ :</td>--}}
{{--<td>--}}
{{--@foreach($detail_post as $values){{ $values->wp_titel }}@endforeach--}}
{{--</td>--}}
{{--</tr>--}}
{{--<tr class="fonts" >--}}
{{--<td width="30%" align="right">ประเภทงาน :</td>--}}
{{--<td class="fonts">--}}
{{--@foreach($detail_post as $values){{ $values->wp_description }}@endforeach--}}
{{--</td>--}}
{{--</tr>--}}
{{--<tr  class="fonts">--}}
{{--<td width="30%" align="right">จำนวน/ตำแหน่ง :</td>--}}
{{--<td class="fonts">--}}
{{--@foreach($detail_post as $values){{ $values->wp_total }}@endforeach--}}
{{--</td>--}}
{{--</tr>--}}
{{--<tr  class="fonts">--}}
{{--<td width="30%" align="right">รายละเอียด :</td>--}}
{{--<td class="fonts">--}}
{{--@foreach($detail_post as $values){{ $values->wp_detail }}@endforeach--}}
{{--</td>--}}
{{--</tr>--}}
{{--<tr  class="fonts">--}}
{{--<td width="30%" align="right">สถานที่ :</td>--}}
{{--<td class="fonts">--}}
{{--@foreach($detail_post as $values){{ $values->wp_location }}@endforeach--}}
{{--</td>--}}
{{--</tr>--}}
{{--<tr  class="fonts">--}}
{{--<td width="30%" align="right">คุณสมบัติ :</td>--}}
{{--<td class="fonts">--}}
{{--@foreach($detail_post as $values){{ $values->wp_property }}@endforeach--}}
{{--</td>--}}
{{--</tr>--}}
{{--<tr  class="fonts">--}}
{{--<td width="30%" align="right">เบอร์โทร :--}}
{{--</td>--}}
{{--<td class="fonts">--}}
{{--@foreach($detail_post as $values){{ $values->wp_tel }}@endforeach--}}
{{--</td>--}}
{{--</tr>--}}
{{--<tr  class="fonts">--}}
{{--<td width="30%" align="right">Facebook :</td>--}}
{{--<td class="fonts">--}}
{{--@foreach($detail_post as $values){{ $values->wp_fb }}@endforeach--}}
{{--</td>--}}
{{--</tr>--}}
{{--<tr  class="fonts">--}}
{{--<td width="30%" align="right">E-mail :</td>--}}
{{--<td class="fonts">--}}
{{--@foreach($detail_post as $values){{ $values->wp_email }}@endforeach--}}
{{--</td>--}}
{{--</tr>--}}
{{--<tr  class="fonts">--}}
{{--<td width="30%" align="right">รูปภาพ :</td>--}}
{{--<td class="fonts">--}}
{{--@foreach($detail_post as $values)--}}
{{--<img src="{{url('picture/'.$values->wp_pic)}}" alt="รูป ตำแหน่งที่ทำงาน" width="250"--}}
{{--height="180">--}}
{{--@endforeach--}}
{{--</td>--}}
{{--</tr>--}}
{{--</table>--}}
{{--</div>--}}