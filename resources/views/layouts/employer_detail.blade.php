@extends('layouts.template')
@section('content')
    <style>
        #Img {
            border-radius: 5px;
            cursor: pointer;
            transition: 0.3s;
        }

        #Img:hover {
            opacity: 0.7;
        }
        /* 100% Image Width on Smaller Screens */
        @media only screen and (max-width: 700px) {
            .modal-content {
                width: 100%;
            }
        }

        .pfont {
            font-family: ThaiNeue;
            font-size: 18pt;
        }
    </style>
    <div class="container">
        <div class="col-xs-12 col-md-12">
            <div class="row">
                <h1 style="font-family: ThaiNeue;">รายละเอียด</h1>
            </div>
        </div>
        <div class="col-xs-12 col-md-12">
            <div class="row">
                <div class="col-md-4">
                    {{Html::image('image/pic-default.png','picture-default',array('width'=>200,'height'=>200,'id'=>'Img'))}}
                </div>
                <div class="col-md-4 pfont">
                    <p>ประเภทงาน : </p>
                    <p>รายละเอียด : </p>
                    <p>สถานที่ทำงาน : </p>
                    <p>คุณสมบัติ : </p>
                    <p>เบอร์โทร : </p>
                    <p>Facebook : </p>
                </div>
            </div>
        </div>
    </div>
    {!! Html::script('js/jquery.min.js') !!}
    {!! Html::script('js/bootstrap.min.js') !!}
@endsection