<style>
    @media only screen and (min-width: 960px) {
        /* styles for browsers larger than 960px; */
        footer {
            width: 100%;
            height: 60%;
            border: 1px solid #0f0f0f;
            background-color: #0f0f0f;
            color: #d9edf7;
        }

        .page-footer {
            margin-top: 2%;
            padding-left: 10%;
        }

        .page-footer hr {
            width: 20%;
            margin-top: 1%;
            border-bottom: 1px solid #2ca02c;

        }

        .page-footer a:hover {
            border-color: transparent;
            color: #ff1aba;

        }

        .page-footer .tag {
            margin-left: -50px;
        }

        .page-footer .tag a {
            border-bottom: 1px solid #9acfea;
        }

        .page-footer .tag a:hover {
            border-color: transparent;
            color: #ff1aba;
        }
    }
    @media only screen and (min-width: 1440px) {
        footer {
            width: 100%;
            height: 40%;
            border: 1px solid #0f0f0f;
            background-color: #0f0f0f;
            color: #d9edf7;
        }

        .page-footer {
            margin-top: 2%;
            padding-left: 10%;
        }

        .page-footer hr {
            width: 20%;
            margin-top: 1%;
            border-bottom: 1px solid #2ca02c;

        }

        .page-footer a:hover {
            border-color: transparent;
            color: #ff1aba;

        }

        .page-footer .tag {
            margin-left: -50px;
        }

        .page-footer .tag a {
            border-bottom: 1px solid #9acfea;
        }

        .page-footer .tag a:hover {
            border-color: transparent;
            color: #ff1aba;
        }
    }
</style>
<footer>
    <div class="col-xs-3 col-sm-3 col-md-12">
        <div class="row">
            <div class="col-xs-3 col-sm-3 page-footer">
                <p>ABOUT US</p>
                <hr>
                <a href="#">Info</a></p>
                <a href="#">Blog</a></p>
                <a href="#">Jobs</a></p>
                <a href="#">Advertise with us</a></p>
                <a href="#">Policies</a></p>
            </div>
            <div class="col-xs-3 col-sm-3 page-footer">
                <p>Help</p>
                <hr>
                <a href="#">Help Center</a></p>
                <a href="#">Seller Information Center</a></p>
                <a href="#">Privacy</a></p>
                <a href="#">Contact us</a></p>
            </div>
            <div class="col-xs-2 col-sm-2 page-footer">
                <p>TAG</p>
                <hr>
                <div class="col-xs-8">
                    <div class="row tag">
                        <div class="col-xs-8"><a href="#">#pongsiri</a></div>
                        <div class="col-xs-8"><a href="#">#jupiter</a></div>
                        <div class="col-xs-8"><a href="#">#slumboy</a></div>
                        <div class="col-xs-8"><a href="#">#MSU</a></div>
                        <div class="col-xs-8"><a href="#">#atom</a></div>
                        <div class="col-xs-8"><a href="#">#doso</a></div>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-sm-4 page-footer">
                <a href="#">INFORMATION</a><br>
                <hr>
                Add:<a href="#">Mahasarakham University</a><br>
                Tel:<a href="#">043700219</a><br>
                Email:<a href="#" style="color: #20ff07">it@msu.ac.th</a><br>
                Hotline:<a href="#" style="color: #20ff07">096669999</a>
                <hr>
                <a href="#">{!! Html::image('image/minimap.jpg','minimap',array('width'=>180,'height'=>100)) !!}</a>
            </div>
        </div>
    </div>
</footer>