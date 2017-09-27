@extends('index')
@section('head')
    <title>{{$title}}</title>
    {{Html::script('js/login.js')}}
    {{Html::script('js/particles.js')}}
    {{Html::script('js/particlesApp.js')}}
    {{Html::style('css/login.css')}}
@endsection
@section('body')
    <div class="col-md-12">
        <div class="row" style="margin-left: 2%">
            <div class="col-md-12">
                <div class="col-lg-push-4 col-md-4 site-logo">
                    <img src="images\site-logo-dummy.png" alt="">
                </div>
            </div>
            <div class="col-md-12">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <div class="login-form">
                        <div class="form-group">
                            {{Form::open(['url'=>route('doLogin'),'class'=>'loginForm'])}}
                            <div class="input-error error-username">
                                <b class="caret-right"></b>
                                <p class="username-error"></p>
                            </div>
                            <div class="input-group col-md-8 col-md-offset-1">

                                <span class="input-group-addon addon-custom user-input-icon"><i
                                            class="fa fa-user-circle"
                                            aria-hidden="true"></i></span>
                                {{Form::text('username','',(['placeholder'=>'Username','class'=>'form-control user-input','id'=>'username']))}}
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-error error-password">
                                <p class="password-error"></p>
                                <b class="caret-right"></b>

                            </div>
                            <div class="input-group col-md-8 col-md-offset-1">
                                <span class="input-group-addon addon-custom  user-input-icon"><i class="fa fa-key"
                                                                                                 aria-hidden="true"></i></span>
                                {{Form::password('username',(['placeholder'=>'Password','class'=>'form-control user-input','id'=>'password']))}}
                                <span class="input-group-addon addon-blank show-password user-input-icon" title="Show password"><i class="fa fa-eye"
                                                                                                     aria-hidden="true"></i></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group col-md-8 col-md-offset-1">
                                <button class="btn btn-primary submit-button">Login</button>
                            </div>
                        </div>
                        {{Form::close()}}
                    </div>
                </div>
                <div class="col-md-4"></div>
            </div>
        </div>
    </div>
    <div id="particles-js"></div>
@endsection