<style>
    @media only screen and (max-width: 480px) {
        /* STYLES HERE for BROWSER WINDOWS with a max-width of 480px.
           This will work on desktops when the window is narrowed.  */
        .nav2 {
            width: 100%;
            margin-top: -1%;
            /*position: fixed;*/
            left: 0%;
            right: 15%;
        }

        .nav2 .navbar-brand {
            margin-left: 10%;
            margin-top: 1px;
            font-family: ThaiNeue;
            font-size: 38px
        }

        .nav2 ul {
            margin-right: 1%;
            margin-top: -.5%;
            padding-top: 10px;
            font-family: ThaiNeue;
            font-size: 28px
        }
    }
    @media only screen and (min-width:960px){
        /* styles for browsers larger than 960px; */
        .nav2 {
            width: 100%;
            margin-top: -1%;
            /*position: fixed;*/
            left: 0%;
            right: 15%;
        }

        .nav2 .navbar-brand {
            margin-left: 0%;
            margin-top: 1px;
            font-family: ThaiNeue;
            font-size: 38px
        }

        .nav2 ul {
            margin-right: 1%;
            margin-top: -.5%;
            padding-top: 10px;
            font-family: ThaiNeue;
            font-size: 28px
        }
        .nav2 ul li a:hover{
            margin-top: 15px;
            zoom: 1;
        }
    }
    @media only screen and (min-width:1440px){
        /* styles for browsers larger than 1440px; */
        .nav2 {
            width: 100%;
            margin-top: -1%;
            /*position: fixed;*/
            left: 0%;
            right: 15%;
        }

        .nav2 .navbar-brand {
            margin-left: -36%;
            margin-top: 10px;
            font-family: Aileron;
            font-size: 38px;
            color: #8c8c8c;
        }

        .nav2 ul {
            margin-right: 4%;
            margin-top: 3px;
            padding-top: 10px;
            font-family: ThaiNeue;
            font-size: 36px;
        }
        .nav2 ul li a{
            color: #8c8c8c;
        }
        .bner{
            margin-left: 100%;
        }
    }
    @media only screen and (min-width:2000px){
        /* for sumo sized (mac) screens */
    }
    @media only screen and (max-device-width:480px){
        /* styles for mobile browsers smaller than 480px; (iPhone) */
        .nav2 {
            width: 100%;
            height: 40px;
            margin-top: -8%;
            left: 0%;
            right: 15%;
            background-color: #ffff00;
        }

        .nav2 .navbar-brand {
            margin-left: 0%;
            margin-top: 1px;
            font-family: ThaiNeue;
            font-size: 20px
        }

        .nav2 ul {
            margin-right: -100%;
            margin-top: -.5%;
            padding-top: 10px;
            font-family: ThaiNeue;
            font-size: 16px
        }
        .nav2 ul li {
            float: left;
        }
        .nav2 ul li a{
            width: 100%;
            margin-left: 100%;
            padding-right: 10%;
        }

    }
    @media only screen and (device-width:768px){
        /* default iPad screens */
        .nav2 {
            width: 100%;
            margin-top: -1%;
            /*position: fixed;*/
            left: 0%;
            right: 15%;
        }

        .nav2 .navbar-brand {
            margin-left: 10%;
            margin-top: 1px;
            /*font-family: ThaiNeue;*/
            font-size: 38px
        }

        .nav2 ul {
            margin-right: 1%;
            margin-top: -.5%;
            padding-top: 10px;
            font-family: ThaiNeue;
            font-size: 28px
        }
    }
    /* different techniques for iPad screening */
    @media only screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:portrait) {
        /* For portrait layouts only */
    }

    @media only screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:landscape) {
        /* For landscape layouts only */
    }
</style>
<nav class="nav navbar-static-top nav2" role="navigation">
    <a class="navbar-brand" href="{{url('/')}}">MSU:HELPING</a>
    <ul class="nav navbar-nav navbar-right">
        <li>
            <a href="{{url('detail_employer')}}">ผู้ว่าจ้าง</a>
        </li>
        <li>
            <a href="{{url('show_pt')}}">Part-time</a>
        </li>
    </ul>
    {{--<div class="borColor"></div>--}}
    {!! Html::image('image/it-ban.png','banner') !!}
</nav>


