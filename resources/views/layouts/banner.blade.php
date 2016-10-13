<!--suppress ALL -->
<style>
    @media only screen and (min-width: 960px) {
        /* styles for browsers larger than 960px; */
        body {
            /*background-image: url("image/background.png");*/
            /*background-repeat: no-repeat;*/
            height: 100vh;
            background-color: #ffffff;
        }

        .bannerImg {
            height: 100vh;
        }

        .desktop {
            border: 5px solid black;
            border-radius: 15px;
            margin-left: 32%;
            width: 40%;
            height: 50%;
        }

        .keyboard {
            /*background-color: #0f0f0f;*/
            border: 5px solid black;
            border-radius: 15px;
            margin-left: 27%;
            width: 50%;
            height: 2%;
        }

        .bannerImg {
            margin: 150px 0px 0px 95px;
            height: 100vh;
        }

        #example1 {
            font-size: 30pt;
            color: #000000;
            margin: -350px 0px 0px 450px;
        }
    }
    @media only screen and (min-width: 1300px) {
        /* styles for browsers larger than 960px; */
        body {
            /*background-image: url("image/background.png");*/
            /*background-repeat: no-repeat;*/
            height: 100vh;
            background-color: #ffffff;
        }

        .bannerImg {
            height: 100vh;
        }

        .desktop {
            border: 5px solid black;
            border-radius: 15px;
            margin-left: 32%;
            width: 40%;
            height: 50%;
        }

        .keyboard {
            /*background-color: #0f0f0f;*/
            border: 5px solid black;
            border-radius: 15px;
            margin-left: 27%;
            width: 50%;
            height: 2%;
        }

        .bannerImg {
            margin: 150px 0px 0px 95px;
            height: 100vh;
        }

        #example1 {
            font-size: 30pt;
            color: #000000;
            margin: -300px 0px 0px 450px;
        }
    }

    @media only screen and (min-width: 1440px) {
        body {
            /*background-image: url("image/background.png");*/
            /*background-repeat: no-repeat;*/
            height: 100vh;
            background-color: #ffffff;
        }

        .bannerImg {
            height: 100vh;
        }

        .desktop {
            border: 5px solid black;
            border-radius: 15px;
            margin-left: 32%;
            width: 40%;
            height: 50%;
        }

        .keyboard {
            /*background-color: #0f0f0f;*/
            border: 5px solid black;
            border-radius: 15px;
            margin-left: 27%;
            width: 50%;
            height: 2%;
        }

        .bannerImg {
            margin: 150px 0px 0px 95px;
            height: 100vh;
        }

        #example1 {
            font-size: 34pt;
            color: #000000;
            margin: -350px 0px 0px 750px;
        }
    }
</style>
<body>
{!! Html::style('css/animate.css') !!}
<div class="bannerImg">
    {{--    {{ Html::image('image/forWeb/banner-image.png','banner') }}--}}
    {{--{{ Html::image('image/forWeb/completeDK.png','banner') }}--}}
    <div class="desktop"></div>
    <div class="keyboard"></div>
    <p id="example1"></p>
</div>
</body>
{{--script--}}
{!! Html::script('js/jquery-3.1.1.min.js') !!}
{!! Html::script('js/typeIt.js') !!}
<script>
    $('#example1').typeIt({
        strings: ['Hello guys.','<b>Welcome to my site.</b>', 'we are freelance...'],
        speed: 80,
//        breakLines: false,
        autoStart: false
    }, setTimeout(function () {
        $('.desktop').hide('slow');
        $('.keyboard').hide('slow');
        $('#example1').addClass('animated fadeOut');
    }, 7000));

    setTimeout(function () {
        $('.bannerImg').hide('slow');
    },7300);
</script>