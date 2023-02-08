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
            <input type="text" name="username" placeholder="请输入登录用户名" lay-verify="required"
                   class="layui-input"/>
        </div>
        <div class="layui-form-item">
            <input type="password" name="password" placeholder="请输入登录密码" lay-verify="required"
                   class="layui-input"/>
        </div>
        <div class="layui-form-item">
            <input type="text" name="captcha" placeholder="请输入图片验证码" lay-verify="required"
                   class="code layui-input layui-input-inline"/>
            <img src="{{ route('captcha') }}" onclick="this.src='{{ route('captcha') }}?m='+Math.random();" class="codeImage"/>
        </div>
        <div class="layui-form-item">
            <a href="{{ route('forget') }}" class="lay">忘记密码</a>
        </div>
        <div class="layui-form-item">
            <button type="button" class="pear-btn pear-btn-success login" lay-submit lay-filter="login">
                登 录
            </button>
        </div>
    </form>
    <!-- 资 源 引 入 -->
    <script src="{{ asset('assets/layui/layui.js') }}"></script>
    <script src="{{ asset('assets/common/common.js') }}"></script>
    <script>
        layui.use(['encrypt'], function () {
            var $ = layui.$;
            var form = layui.form;
            var encrypt = layui.encrypt;

            form.on('submit(login)', function (data) {
                // Encrypt
                data.field.password = encrypt.md5(data.field.password);
                // Ajax
                $.post("{{ route('login') }}", data.field, function (res) {
                    if (res.code > 0) {
                        layer.msg(res.message);
                        return false;
                    }
                    location.href = res.data;
                }, 'json');

                return false;
            });
        })
    </script>
@endsection
