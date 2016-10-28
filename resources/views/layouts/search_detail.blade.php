@extends('layouts.template')
@section('content')
    <style>
        .recom-img > img {
            opacity: 1;
        }

        .recom-img:hover {
            background-color: #cccccc;
        }

        .grid-block {
            background-color: transparent;
            position: relative;
            float: left;
            width: 180px;
            height: 250px;
            margin: 0 0 30px 30px;
            /*-moz-box-shadow: 0 0 5px #888;*/
            /*-webkit-box-shadow: 0 0 5px#888;*/
            /*box-shadow: 0 0 5px #888;*/
        }

        .grid-block .recom-img {
            width: 100%;
            height: 85%;
        }

        .grid-block .recom-img > img {
            width: 100%;
            height: 100%;
        }

        .grid-block h4 {
            font-size: .9em;
            color: #333;
            background: #f5f5f5;
            margin: 0;
            padding: 10px;
            border: 1px solid #ddd;
        }

        .caption {
            display: none;
            position: absolute;
            top: 0;
            left: 0;
            background-image: url("image/blank.png");
            width: 100%;
            height: 100%;
        }

        .caption h3, .caption p {
            color: #fff;
            margin: 20px;
        }

        .caption h3 {
            margin: 20px 20px 10px;
        }

        .caption p {
            font-size: .75em;
            line-height: 1.5em;
            margin: 0 20px 15px;
        }

        .caption a.learn-more {
            padding: 5px 10px;
            background: #08c;
            color: #fff;
            border-radius: 2px;
            -moz-border-radius: 2px;
            font-weight: bold;
            text-decoration: none;
        }

        .caption a.learn-more:hover {
            background: #fff;
            color: #08c;
        }

        .details > p {
            padding-bottom: -50px;
        }

        .fa-star-o:hover {
            color: orangered;
            zoom: 1;
        }
    </style>
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h2 style="font-family: 'ThaiNeue'; font-size: 48px">
                    ผลการค้นหา
                    <span style="font-size: 14pt;" class="fa fa-star-o"></span>
                    <span style="font-size: 14pt;" class="fa fa-star-o"></span>
                    <span style="font-size: 14pt;" class="fa fa-star-o"></span>
                    <span style="font-size: 14pt;" class="fa fa-star-o"></span>
                    <span style="font-size: 14pt;" class="fa fa-star-o"></span>
                </h2>
                <h2 style="font-family: 'ThaiNeue'; font-size: 26pt;margin:40px 30px 0px 0px"
                    class="w3-display-topright">
                    <a href="#" class="show-all" title="'คลิก' ดูทั้งหมด">ทั้งหมด >></a>
                </h2>
            </div>
        </div>
        <div class="row">
            @if(count($data)>0)
                @foreach($data as $value)
                    <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                        <a href="{{ url('profiles') }}">
                            <div class="thumbnail thm grid-block slide">
                                <div class="caption">
                                    <p>Lorem ipsum dolor sit amet.</p>
                                    <p>Lorem ipsum dolor sit amet.</p>
                                    <p>Lorem ipsum dolor sit amet.</p>
                                </div>
                                <div class="recom-img">
                                    <img src="{{ url('picture/'.$value->picture) }}" alt="picture">
                                </div>
                                <button type="submit"
                                        class="btn-jang w3-btn w3-white w3-hover-black w3-display-bottomright">
                                    {{"$ ".number_format($value->price_st)." - ".number_format($value->price_fn)}}
                                </button>
                            </div>
                        </a>
                    </div>
                @endforeach
            @else
                <div class="col-md-12" align="center">
                    <h3>ไม่พบข้อมูลที่ค้นหา............</h3>
                </div>
            @endif
        </div>
        <br>
        <hr style="border: 1px solid #8c8c8c">
    </div>
    <script !src="">
        $('.slide').hover(
                function () {
                    $(this).find('.caption').slideDown(250);
                },
                function () {
                    $(this).find('.caption').slideUp(250);
                }
        );
        $('a.show-all').tooltip();
    </script>

@endsection