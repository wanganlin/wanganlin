{layout name="layout/app" /}

<div class="layui-fluid">
    <div class="layui-card">
        <div class="layui-card-header">
            资源管理
        </div>
        <div class="layui-card-body">
            <table class="layui-table">
                <tr>
                    <td>ID</td>
                    <td>name</td>
                    <td>rule</td>
                </tr>
                @foreach($rules as $rule)
                <tr>
                    <td>{{$rule['id']}}</td>
                    <td>{{$rule['name']}}</td>
                    <td>{{$rule['rule']}}</td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>

<script type="text/javascript">

</script>
