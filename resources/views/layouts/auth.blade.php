<!DOCTYPE html>
<html lang="zh-Hans">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="renderer" content="webkit">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@v4.5.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/static/admin/css/auth.css">
</head>
<body>
<div class="container">
    @yield('content')
</div>

<script src="https://cdn.jsdelivr.net/npm/jquery@v3.5.1"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@v4.5.3"></script>
<script src="https://cdn.jsdelivr.net/npm/vue@v2.6.12"></script>
<script src="/static/admin/js/auth.js"></script>
</body>
</html>
