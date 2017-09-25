@extends('index')
@section('head')
    <title>{{$title}}</title>
    {{Html::script('js/login.js')}}
    {{Html::script('js/particles.js')}}
    {{Html::script('js/particlesApp.js')}}
    {{Html::style('css/login.css')}}
@endsection
@section('body')

    <div id="particles-js"></div>
    <div class="col-md-12 custom-div">
        <div class="row">
            <div class="col-md-12">
                <div>
                    <h1 class="site-logo">Campuz</h1>
                </div>
            </div>
            <div class="col-md-12">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <div class="login-form">
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon addon-custom"><i class="fa fa-user-circle"
                                                                                aria-hidden="true"></i></span>
                                <input type="text" class="form-control" placeholder="Username">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon addon-custom"><i class="fa fa-key"
                                                                                aria-hidden="true"></i></span>
                                <input type="password" class="form-control" placeholder="Username">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4"></div>
            </div>
        </div>
    </div>
@endsection