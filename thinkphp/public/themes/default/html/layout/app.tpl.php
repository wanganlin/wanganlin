<!DOCTYPE html>
<html lang="zh-Hans">
<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{:token()}">
    <title>{$page_title|default=''}</title>
    <link rel="stylesheet" href="{:asset('assets/layui/dist/css/layui.css')}">
    <link rel="stylesheet" href="{:theme('css/app.css')}">
    <script type="text/javascript" src="{:asset('assets/layui/dist/layui.js')}"></script>
    <script type="text/javascript" src="{:asset('assets/vue/dist/vue.min.js')}"></script>
    <script type="text/javascript" src="{:theme('js/app.js')}" defer></script>
</head>
<body>

<div>
    {if condition="session('?auth_user')"}
    <a href="{:route('/user')}">会员中心</a> |
    <a href="{:route('/logout')}" onclick="event.preventDefault();
       document.getElementById('logout-form').submit();">注销</a>
    <form id="logout-form" action="{:route('logout')}" method="POST">
        {:token_field()}
    </form>
    {else}
    <a href="{:route('user/auth/register')}">免费注册</a> |
    <a href="{:route('user/auth/login')}">登录</a>
    {/if}
</div>

{__CONTENT__}
</body>
</html>
