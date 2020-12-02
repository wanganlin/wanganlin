<!DOCTYPE html>
<html lang="zh-Hans">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="renderer" content="webkit">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/sentsin/layui@v2.5.7/dist/css/layui.css">
    <link rel="stylesheet" href="/static/admin/css/app.css">
</head>
<body>
<div class="container">
    @yield('content')
</div>
<script src="https://cdn.jsdelivr.net/gh/sentsin/layui@v2.5.7/dist/layui.all.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vue@v2.6.12"></script>
<script src="/static/admin/js/app.js"></script>
</body>
</html>
