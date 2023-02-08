@extends('auth.layout')

@section('content')
    <form class="layui-form">
        @csrf

        <div class="layui-form-item">
            <img class="logo" src="{{ asset('assets/admin/images/logo.png') }}"/>
            <div class="title">PHPIMS</div>
            <div class="desc">
                企业门户网站管理系统
            </div>
        </div>
        <div class="layui-form-item">
            <input placeholder="请输入电子邮箱地址" lay-verify="required" class="layui-input"/>
        </div>
        <div class="layui-form-item">
            <input placeholder="请输入图片验证码" lay-verify="required" class="code layui-input layui-input-inline"/>
            <img src="{{ route('captcha') }}" onclick="this.src='{{ route('captcha') }}?m='+Math.random();"
                 class="codeImage"/>
        </div>
        <div class="layui-form-item">
            <a href="{{ route('login') }}">&lt;&lt; 返回登录</a>
        </div>
        <div class="layui-form-item">
            <button type="button" class="pear-btn pear-btn-success login" lay-submit lay-filter="forget">
                发送邮件
            </button>
        </div>
    </form>
    <!-- 资 源 引 入 -->
    <script src="{{ asset('assets/layui/layui.js') }}"></script>
    <script src="{{ asset('assets/common/common.js') }}"></script>
    <script>
        layui.define(function () {
            var $ = layui.$;
            var form = layui.form;
            var button = layui.button;
            var popup = layui.popup;

            form.on('submit(forget)', function (data) {

                return false;
            })
        })
    </script>
@endsection
