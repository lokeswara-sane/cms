<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    {{ Html::script('js/jquery-3.2.1.min.js')}}
    {{ Html::style('css/bootstrap.min.css') }}
    {{ Html::style('css/bootstrap-grid.min.css') }}
    {{ Html::style('css/bootstrap-reboot.min.css')}}
    {{ Html::style('css/font-awesome.min.css')}}
    @yield('head')
</head>
<body>
    @yield('body')
</body>
</html>