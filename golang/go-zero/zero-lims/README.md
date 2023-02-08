# LIMS

### 生成 api 代码

```
cd auth
goctl api go -api auth.api -dir . -style gozero
```

### 检查 rpc 环境

如未安装 `protoc,protoc-gen-go,protoc-gen-grpc-go` 你可以通过如下指令一键安装:

```
goctl env check -i -f
```

### 生成 rpc 代码

```
cd user/rpc
goctl rpc protoc user.proto --go_out=./types --go-grpc_out=./types --zrpc_out=.
```

### 生成 model 代码

##### 方式一(ddl)

进入 user/model 目录，执行命令

```
cd user/model
goctl model mysql ddl -src user.sql -dir . -c
```

##### 方式二(datasource)

进入 user/model 目录，执行命令

```
cd user/model
goctl model mysql datasource -url="$datasource" -table="user" -c -dir .
```

$datasource 为数据库连接地址


