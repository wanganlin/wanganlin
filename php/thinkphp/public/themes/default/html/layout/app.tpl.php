<!DOCTYPE html>
<html lang="zh-Hans">
<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{:token()}">
    <title>{$page_title|default=''}</title>
    <link rel="stylesheet" href="{:asset('static/layui@2.9.6/css/layui.css')}">
    <link rel="stylesheet" href="{:theme('css/app.css')}">
    <script type="text/javascript" src="{:asset('static/layui@2.9.6/layui.js')}"></script>
    <script type="text/javascript" src="{:asset('static/vue@2.7.16/vue.min.js')}"></script>
    <script type="text/javascript" src="{:theme('js/app.js')}" defer></script>
</head>
<body>

<div>
    {if condition="session('?auth_user')"}
    <a href="{:url('/user')}">会员中心</a> |
    <a href="{:url('/logout')}" onclick="event.preventDefault();
       document.getElementById('logout-form').submit();">注销</a>
    <form id="logout-form" action="{:url('/logout')}" method="POST">
        {:token_field()}
    </form>
    {else}
    <a href="{:url('/user/passport/signup')}">免费注册</a> |
    <a href="{:url('/user/passport/login')}">登录</a>
    {/if}
</div>

{__CONTENT__}
</body>
</html>
