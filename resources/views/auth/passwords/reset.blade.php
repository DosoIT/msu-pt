@extends('layouts.app')

@section('contents')
    <style>
        @font-face {
            font-family: ThaiNeue;
            src: url('../../fonts/ThaiSansNeue-Light.ttf');
        }

        body {
            background-image: url("image/background.png");
        }

        .panel {
            margin-top: 20%;
            box-shadow: 1px 1px 50px #8c8c8c;
            border-top: 4px solid black;
        }

        .panel-heading, label, {
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
                    <div class="panel-heading">รีเซตรหัสผ่าน <i class="fa fa-wrench"></i></div>

                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="{{ url('/password/reset') }}">
                            {{ csrf_field() }}

                            <input type="hidden" name="token" value="{{ $token }}">

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="col-md-4 control-label">กรอกอีเมลยืนยัน</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control" name="email" value="{{ $email or old('email') }}" required autofocus>

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password" class="col-md-4 control-label">รหัสผ่านใหม่</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control" name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                                <label for="password-confirm" class="col-md-4 control-label">ยืนยันรหัสผ่าน</label>
                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>

                                    @if ($errors->has('password_confirmation'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="w3-btn w3-hover-blue" style="font-family:ThaiNeue;font-size: 16pt;;margin-left: 50%">
                                        ยืนยันรหัสผ่านใหม่
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