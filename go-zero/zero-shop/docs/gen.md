# 服务生成

- 生成API服务代码

```
cd app/user
goctl api go -api user.api -dir . --style go_zero
```

- 生成rpc服务代码

```
cd service/user/rpc
goctl rpc protoc user.proto --go_out=./types --go-grpc_out=./types --zrpc_out=.
```
