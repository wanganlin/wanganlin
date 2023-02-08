@extends('auth.layout')

@section('content')
    <form class="layui-form">
        @csrf
        <input type="hidden" name="token" value="{{ $token }}">

        <div class="layui-form-item">
            <img class="logo" src="{{ asset('assets/admin/images/logo.png') }}"/>
            <div class="title">PHPIMS</div>
            <div class="desc">
                企业门户网站管理系统
            </div>
        </div>
        <div class="layui-form-item">
            <input placeholder="请输入登录用户名" lay-verify="required" class="layui-input"/>
        </div>
        <div class="layui-form-item">
            <input placeholder="请输入新的登录密码" lay-verify="required" class="layui-input"/>
        </div>
        <div class="layui-form-item">
            <button type="button" class="pear-btn pear-btn-success login" lay-submit lay-filter="reset">
                重设密码
            </button>
        </div>
    </form>
    <!-- 资 源 引 入 -->
    <script src="{{ asset('assets/layui/layui.js') }}"></script>
    <script src="{{ asset('assets/common/common.js') }}"></script>
    <script>
        layui.define(function () {
            var form = layui.form;

            form.on('submit(reset)', function (data) {

                return false;
            })
        })
    </script>
@endsection
