@extends('layouts.app')

<!-- Main Content -->
@section('contents')
    <style>
        @font-face {
            font-family: ThaiNeue;
            src: url('../fonts/ThaiSansNeue-Light.ttf');
        }

        body {
            background-image: url("image/background.png");
        }

        .panel {
            margin-top: 20%;
            box-shadow: 1px 1px 50px #8c8c8c;
            border-top: 4px solid black;
        }

        .panel-heading, label {
            font-family: ThaiNeue;
            font-size: 16pt;
        }
    </style>
    <body>
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    {!! Html::style('css/w3.css') !!}
    {!! Html::style('css/animate.css') !!}
    <div class="container animated zoomIn">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">รีเซตรหัสผ่าน</div>
                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form class="form-horizontal" role="form" method="POST" action="{{ url('/password/email') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="col-md-4 control-label">อีเมล์</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Send Password Reset Link
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </body>
@endsection
