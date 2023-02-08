<!DOCTYPE html>
<html lang="zh-Hans">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="renderer" content="webkit">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/sentsin/layui@v2.6.8/dist/css/layui.css">
    <script src="https://cdn.jsdelivr.net/gh/sentsin/layui@v2.6.8/dist/layui.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@v2.6.14"></script>
    <link rel="stylesheet" href="{{ skin('css/app.css') }}">
</head>

<body>
<div class="shortcut">
    <div class="container w">
        <ul class="fl">
            <li>上海</li>
        </ul>
        <ul class="fr">
            <li>你好，
                <a href="{{ url('user/login') }}">请登录</a>
                <a href="{{ url('user/register') }}">免费注册</a></li>
            <li class="spacer"></li>
            <li>我的订单</li>
            <li class="spacer"></li>
            <li>我的</li>
            <li class="spacer"></li>
            <li>会员</li>
            <li class="spacer"></li>
            <li>企业采购</li>
            <li class="spacer"></li>
            <li>客户服务</li>
            <li class="spacer"></li>
            <li>网站导航</li>
            <li class="spacer"></li>
            <li>手机</li>
        </ul>
    </div>
</div>

<div class="header">
    <div class="container">
        <a href="{{ url('/') }}">首页</a>
    </div>
</div>

<div class="container">
    @yield('content')
</div>

<div class="footer">
    <div class="container">
        footer
    </div>
</div>
<script src="{{ skin('js/app.js') }}"></script>
</body>
</html>
