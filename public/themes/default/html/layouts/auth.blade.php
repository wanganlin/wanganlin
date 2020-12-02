<!DOCTYPE html>
<html lang="zh-Hans">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="renderer" content="webkit">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>auth</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@v4.5.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ skin('css/auth.css') }}">
</head>

<body>
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

<script src="https://cdn.jsdelivr.net/npm/jquery@v3.5.1"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@v4.5.3"></script>
<script src="https://cdn.jsdelivr.net/npm/vue@v2.6.12"></script>
<script src="{{ skin('js/auth.js') }}"></script>
</body>
</html>
