@extends('layouts.template')
<style>
    @media only screen and (min-width:960px){
        .pg{
            margin-left: 40%;
        }
    }

    @media only screen and (min-width: 1440px) {
        .pg {
            margin-left: 40%;
        }
    }

    @media only screen and (device-width: 768px) {
        /* styles for mobile browsers smaller than 480px; (iPhone) */
        .pg {
            margin-left: 30%;
        }
    }
</style>
@section('content')
    <div class="container">
        <div class="col-xs-12 col-md-12">
            <div class="row">
                <h1 style="font-family: ThaiNeue">ประกาศรับสมัครงาน</h1>

                <div class="row">
                    <div class="col-xs-3 img-responsive">
                        <img src="image/bander01.png" class="img-thumbnail img-zoom" alt="Cinque Terre" width="304"
                             height="236">
                    </div>
                    <div class="col-xs-3 img-responsive">
                        <img src="image/bander01.png" class="img-thumbnail img-zoom" alt="Cinque Terre" width="304"
                             height="236">
                    </div>
                    <div class="col-xs-3 img-responsive">
                        <img src="image/bander01.png" class="img-thumbnail img-zoom" alt="Cinque Terre" width="304"
                             height="236">
                    </div>
                    <div class="col-xs-3 img-responsive">
                        <img src="image/bander01.png" class="img-thumbnail img-zoom" alt="Cinque Terre" width="304"
                             height="236">
                    </div>
                </div>
                <hr style="border: 1px solid #8c8c8c">

                <div class="pg">
                    <ul class="w3-pagination pg">
                        <li><a href="#">&laquo;</a></li>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#">&raquo;</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection