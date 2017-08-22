<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="_token" content="{{ csrf_token() }}"/>
    <title>Learn Laravel - @yield('title')</title>
    <!-- Bootstrap CSS 文件 -->
    <link rel="stylesheet" href="{{ asset('./static/bootstrap/css/bootstrap.min.css')}}">

    @yield('style')
</head>
<body>

@section('header')
    <!-- 头部 -->
    <div class="jumbotron">
        <div class="container">
            <h2>轻松学会Laravel</h2>

            <p> - 玩转Laravel表单 - {{ Request::getPathInfo() }}</p>
        </div>
    </div>
@show

<!-- 中间内容区局 -->
<div class="container">
    <div class="row">

        @section('sidebar')
            <!-- 左侧菜单区域   -->
            <div class="col-md-3">
                <div class="list-group">
                    <a href="{{ url('student_index') }}" class="list-group-item {{ (Request::getPathInfo() == '/student_index')? 'active' : ''}}">学生列表</a>
                    <a href="{{ url('student_create') }}" class="list-group-item {{ (Request::getPathInfo() == '/student_create')? 'active' : ''}}">新增学生</a>
                </div>
            </div>
        @show

        <!-- 右侧内容区域 -->
        <div class="col-md-9">

            @yield('content')

        </div>
    </div>
</div>

@section('footer')
    <!-- 尾部 -->
    <div class="jumbotron" style="margin:0;">
        <div class="container">
            <span>  @2016 imooc</span>
        </div>
    </div>
@show

<!-- jQuery 文件 -->
<script src="{{ asset('./static/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap JavaScript 文件 -->
<script src="{{ asset('./static/bootstrap/js/bootstrap.min.js') }}"></script>

@yield('js')
</body>
</html>