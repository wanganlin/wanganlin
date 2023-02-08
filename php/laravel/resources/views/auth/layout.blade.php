<!DOCTYPE html>
<html lang="zh-Hans">
<head>
    <meta charset="utf-8">
    <meta name="renderer" content="webkit"/>
    <meta name="force-rendering" content="webkit"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge, chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ $page_title ?? '' }}</title>
    <link rel="stylesheet" href="{{ asset('assets/common/css/common.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets/admin/css/other/login.css') }}"/>
</head>
<body>
@yield('content')
</body>
</html>
