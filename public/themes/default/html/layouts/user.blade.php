<!DOCTYPE html>
<html lang="zh-Hans">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="renderer" content="webkit">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>user</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/sentsin/layui@v2.5.7/dist/css/layui.css">
    <link rel="stylesheet" href="{{ skin('css/app.css') }}">
</head>

<body>
<div class="shortcut">
    <div class="layui-container w">
        <ul class="fl">
            <li>上海</li>
        </ul>
        <ul class="fr">
            <li>你好，请登录</li>
        </ul>
    </div>
</div>

<div class="header">
    <div class="layui-container">
        <a href="{{ url('/') }}">首页</a>
    </div>
</div>

<div class="layui-container">
    @yield('content')
</div>

<div class="footer">
    <div class="layui-container">
        footer
    </div>
</div>

<script src="https://cdn.jsdelivr.net/gh/sentsin/layui@v2.5.7/dist/layui.all.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vue@v2.6.12"></script>
<script src="{{ skin('js/app.js') }}"></script>
</body>
</html>
