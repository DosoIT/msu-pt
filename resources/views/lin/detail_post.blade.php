<style>
    .fonts {
        font-family: ThaiNeue;
        font-size: 20pt;
        margin-left: 1cm;
    }
</style>
<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                aria-hidden="true">&times;</span></button>
    <h4 class="modal-title fonts" id="myModalLabel">รายละเอียด</h4>
</div>
<div class="modal-body row" style="margin-top: -1cm;">
    <div class="table-responsive">
        <table class="table table-hover table-condensed" cellpadding="0" cellspacing="0">
            <tr class="fonts">
                <td width="30%" align="right">
                    ชื่อบริษัท/หัวข้อ :
                </td>
                <td>
                    @foreach($detail_post as $values){{ $values->wp_titel }}@endforeach
                </td>
            </tr>
            <tr class="fonts" >
                <td width="30%" align="right">
                    เบอร์โทร :
                </td>
                <td class="fonts">
                    @foreach($detail_post as $values){{ $values->wp_tel }}@endforeach
                </td>
            </tr>
            <tr  class="fonts">
                <td width="30%" align="right">
                    รายละเอียด :
                </td>
                <td class="fonts">
                    @foreach($detail_post as $values){{ $values->wp_detail }}@endforeach
                </td>
            </tr>
            <tr  class="fonts">
                <td width="30%" align="right">
                    ตำแหน่ง :
                </td>
                <td class="fonts">
                    @foreach($detail_post as $values){{ $values->wp_location }}@endforeach
                </td>
            </tr>
            <tr  class="fonts">
                <td width="30%" align="right">
                    ประเภทงาน :
                </td>
                <td class="fonts">
                    @foreach($detail_post as $values){{ $values->wp_description }}@endforeach
                </td>
            </tr>
            <tr  class="fonts">
                <td width="30%" align="right">
                    คุณสมบัติ :
                </td>
                <td class="fonts">
                    @foreach($detail_post as $values){{ $values->wp_property }}@endforeach
                </td>
            </tr>
            <tr  class="fonts">
                <td width="30%" align="right">
                    เบอร์โทร :
                </td>
                <td class="fonts">
                    @foreach($detail_post as $values){{ $values->wp_tel }}@endforeach
                </td>
            </tr>
            <tr  class="fonts">
                <td width="30%" align="right">
                    Facebook :
                </td>
                <td class="fonts">
                    @foreach($detail_post as $values){{ $values->wp_fb }}@endforeach
                </td>
            </tr>
            <tr  class="fonts">
                <td width="30%" align="right">
                    E-mail :
                </td>
                <td class="fonts">
                    @foreach($detail_post as $values){{ $values->wp_email }}@endforeach
                </td>
            </tr>
            <tr  class="fonts">
                <td width="30%" align="right">
                    รูปภาพ :
                </td>
                <td class="fonts">
                    @foreach($detail_post as $values)
                        <img src="{{url('picture/'.$values->wp_pic)}}" alt="รูป ตำแหน่งที่ทำงาน" width="250"
                             height="180">
                    @endforeach
                </td>
            </tr>
        </table>
    </div>
</div>
<div class="modal-footer" style="margin-top: -1cm;">
    <button type="button" class="btn btn-warning btn-sm" data-dismiss="modal"
            style="font-family: ThaiNeue;font-size: 18pt;">Close</button>
</div>