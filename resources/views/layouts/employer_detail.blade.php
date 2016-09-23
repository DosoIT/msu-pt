@extends('layouts.template')
@section('content')
    <div class="container">
        <div class="col-xs-12 col-md-12">
            <div class="row">
                <h1 style="font-family: ThaiNeue;">รายละเอียด</h1>
            </div>
        </div>
        <div class="col-xs-12 col-md-12">
            <div class="row">
                <div class="col-md-4">
                {{Html::image('image/pic-default.png','picture-default',array('width'=>100,'height'=>65,'id'=>'myImg'))}}

                <!-- The Modal -->
                    <div id="myModal" class="modal">
                        <span class="close">×</span>
                        <img class="modal-content" id="img01">
                        <div id="caption"></div>
                    </div>
                </div>
                <div class="col-md-4">Details</div>
            </div>
        </div>
    </div>
    {!! Html::script('js/jquery.min.js') !!}
    {!! Html::script('js/bootstrap.min.js') !!}
    <script>
        // Get the modal
        var modal = document.getElementById('myModal');

        // Get the image and insert it inside the modal - use its "alt" text as a caption
        var img = document.getElementById('myImg');
        var modalImg = document.getElementById("img01");
        var captionText = document.getElementById("caption");
        img.onclick = function(){
            modal.style.display = "block";
            modalImg.src = this.src;
            captionText.innerHTML = this.alt;
        }

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal.style.display = "none";
        }
    </script>

@endsection