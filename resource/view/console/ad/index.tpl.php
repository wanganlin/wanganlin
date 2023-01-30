{layout name="layout/app" /}

<div class="layui-fluid">
    <div class="layui-card">
        <div class="layui-card-header layuiadmin-card-header-auto">
            <button class="layui-btn layuiadmin-btn-tags" data-type="add">添加广告位</button>
        </div>
        <div class="layui-card-body">
            <table id="LAY-app-content-tags" lay-filter="LAY-app-content-tags"></table>
            <script type="text/html" id="layuiadmin-app-cont-tagsbar">
                <a class="layui-btn layui-btn-normal layui-btn-xs" lay-event="edit"><i
                        class="layui-icon layui-icon-edit"></i>编辑</a>
                <a class="layui-btn layui-btn-danger layui-btn-xs" lay-event="del"><i
                        class="layui-icon layui-icon-delete"></i>删除</a>
            </script>
        </div>
    </div>
</div>
