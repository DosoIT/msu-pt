@extends('layouts.app')
@section('contents')
    <style>
        @font-face {
            font-family: ThaiNeue;
            src: url('fonts/ThaiSansNeue-Light.ttf');
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
                    <div class="panel-heading">Login <i class="fa fa-sign-in"></i></div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="col-md-4 control-label">อีเมล์</label>
                                <div class="col-md-6">
                                    <input id="email" type="email" name="email" value="{{ old('email') }}" required
                                           class="w3-input w3-animate-input" style="width:280px"><br>
                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password" class="col-md-4 control-label">รหัสผ่าน</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="w3-input w3-animate-input"
                                           name="password" style="width:280px" required>
                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="remember"> Remember Me
                                        </label>
                                        <button type="submit" class="w3-btn w3-hover-blue" style="font-family: ThaiNeue;font-size: 16pt;margin-left: 25%">
                                            เข้าสู่ระบบ
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-8 col-md-offset-4" style="margin-left: 30%">
                                    <button type="submit" class="w3-btn w3-red w3-hover-pink">
                                        <i class="fa fa-google-plus">&nbsp;&nbsp;|&nbsp;Sign in Google+</i>
                                    </button>
                                    <button type="submit" class="w3-btn w3-indigo w3-hover-blue">
                                        <i class="fa fa-facebook">&nbsp;&nbsp;|&nbsp;Sign in Facebook</i>
                                    </button>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-8 col-md-offset-4">
                                    <a href="{{ url('password/reset') }}">
                                        Forgot Your Password?
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>

                    {{--Script--}}
                </div>
@endsection
