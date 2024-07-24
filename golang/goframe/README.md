# GoFrame Template For SingleRepo

Project Makefile Commands: 
- `make cli`: Install or Update to the latest GoFrame CLI tool.
- `make dao`: Generate go files for `Entity/DAO/DO` according to the configuration file from `hack` folder.
- `make service`: Parse `logic` folder to generate interface go files into `service` folder.
- `make image TAG=xxx`: Run `docker build` to build image according `manifest/docker`.
- `make image.push TAG=xxx`: Run `docker build` and `docker push` to build and push image according `manifest/docker`.
- `make deploy TAG=xxx`: Run `kustomize build` to build and deploy deployment to kubernetes server group according `manifest/deploy`.

### DAO 生成器

```

gf gen dao -l "mysql:root:root@tcp(127.0.0.1:3306)/db" -p "app"

gf gen ctrl -s "api" -d "app/controller"

gf gen service -s "app/service/logic" -d "app/service"
```


### 收单

思想：传统联单，如三联单：买家，卖家，供货商

数字化之后：按照不同角色划分不同纬度的数据库，数据状态通过内部通知更新其他数据库的数据。
