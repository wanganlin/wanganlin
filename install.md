# 安装

## 下载软件包

下载适合您系统的二进制版本后，请按照安装说明进行操作。

官方下载地址：https://go.dev/dl/

国内镜像地址：https://golang.google.cn/dl/

## 设置代理

免费的、可靠的、持续在线的且经过 CDN 在全球范围内加速的模块代理。

在命令行执行

```
go env -w GOPROXY=https://goproxy.cn,direct
```

## 启用 MODULE

```
go env -w GO111MODULE=on
```

这里我们的on必须是小写的，不是大写ON，也不是1或者true等。

## 安装 goimports

```
go get -v golang.org/x/tools/cmd/goimports
```

## 配置 IDE

IntelliJ idea 编辑器推荐安装以下插件：

- Go
- File Watchers

打开编辑器设置（setting），搜索"File Watchers"后添加"goimports"命令。

