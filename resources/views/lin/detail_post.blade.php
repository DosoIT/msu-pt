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
<div class="modal-body row">
    <div>
        <h4 class="fonts">ชื่อบริษัท/หัวข้อ :@foreach($detail_post as $values)
                {{ $values->wp_titel }}
            @endforeach</h4>
        <h4 class="fonts">
             เบอร์โทร :
            @foreach($detail_post as $values)
                {{ $values->wp_tel }}
            @endforeach
        </h4>
    </div>
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
</div>