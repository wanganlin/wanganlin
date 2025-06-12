<!DOCTYPE html>
<html lang="zh-Hans">
<head>
    <meta charset="utf-8">
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="csrf-token" content="{:token()}">
    <title>管理平台</title>
    <link rel="stylesheet" href="https://unpkg.com/layui@2/dist/css/layui.css">
    <link rel="stylesheet" href="{:asset('assets/seller@1.0.0/css/app.css')}">
    <script src="https://unpkg.com/layui@2/dist/layui.js"></script>
    <script src="https://unpkg.com/vue@3/dist/vue.global.prod.js"></script>
    <script src="{:asset('assets/seller@1.0.0/js/app.js')}"></script>
</head>
<body>
<div class="header">
    <a href="{:url('/')}">Home</a>
</div>

<div class="home">
    <div class="menu">
        会员菜单
    </div>
    <div class="main">
        <div>home title.</div>
        {__CONTENT__}
    </div>
</div>

</body>
</html>
