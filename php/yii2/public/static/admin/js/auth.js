layui.define(function () {
    var $ = layui.jquery,
        layer = layui.layer,
        form = layui.form;

    $.ajaxSetup({contentType: 'application/json'});

    form.on('submit(login)', function (data) {
        $.post('login', JSON.stringify(data.field), function (res) {
            if (res.code !== 200) {
                layer.msg(res.message);
                return false;
            }
            window.location.href = '{$callback}';
        })
        return false;
    });

    $('.codeImage').on('click', function () {
        $(this).attr('src', '/index/captcha?' + Math.random());
    })
})
