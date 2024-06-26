# 开发

### 数据库结构生成

https://gorm.io/zh_CN/gen/dao.html

```shell
go install gorm.io/gen/tools/gentool@latest
gentool -dsn 'root:root@tcp(127.0.0.1:3306)/switch?charset=utf8mb4&parseTime=True&loc=Local' -fieldSignable -outPath 'internal/repository' # -tables "orders,doctor" 
```

### 生成 OpenAPI 接口

```shell
go install github.com/swaggo/swag/v2/cmd/swag@latest
# --parseDependency --parseInternal
swag init -d internal/app/app1 -g route.go -o docs/api/app1 -ot json
swag init -d internal/app/app2 -g route.go -o docs/api/app2 -ot json
swag fmt
```
