@extends('layouts.template')
@section('content')
    <style>
        @media only screen and (min-width: 960px) {
            .pg {
                margin-left: 20%;
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
    <div class="container">
        <div class="col-xs-12 col-md-12">
            <div class="row">
                @include('layouts.folio')
            </div>
        </div>
    </div>
@endsection