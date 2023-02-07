<!DOCTYPE html>
<html lang="zh-Hans">
<head>
    <meta charset="utf-8">
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name') ?? '' }}管理平台</title>
    <meta name="format-detection" content="telephone=no">
    <link rel="stylesheet" href="{{ asset('static/layui@2.6.8/css/layui.css') }}">
    <link rel="stylesheet" href="{{ asset('static/admin@1.0.0/css/app.css') }}">
    <script type="text/javascript" src="{{ asset('static/layui@2.6.8/layui.js') }}"></script>
    <script type="text/javascript" src="{{ asset('static/vue@2.6.14/vue.min.js') }}"></script>
    <!--[if lt IE 9]>
    <script src="https://cdn.jsdelivr.net/npm/html5shiv@3.7.3/dist/html5shiv.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/respond.js@1.4.2/dest/respond.min.js"></script>
    <![endif]-->
</head>

<body>
{__CONTENT__}
</body>
</html>
