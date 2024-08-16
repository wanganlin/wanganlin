# 使用官方的Go语言镜像作为构建环境
FROM golang:1.22-alpine AS builder

# 设置代理
ENV GOPROXY=https://goproxy.cn,direct

# 设置工作目录
WORKDIR /app

# 将 go.mod 和 go.sum 复制到工作目录
COPY go.mod go.sum ./

# 下载依赖包
ENV GO111MODULE=on
RUN go mod download

# 复制当前目录所有内容到工作目录
COPY . .

# 构建应用程序
RUN go build -v -o main -v .

# 使用更小的镜像作为运行环境
FROM alpine:latest

# 设置时区为上海（可选）
# RUN apk --no-cache add tzdata
ENV TZ=Asia/Shanghai

# 环境变量 test or prod
ENV SWITCH_ENV=test

# 复制构建好的二进制文件到运行环境
COPY --from=builder /app/main /app/main
# COPY --from=builder /app/config/config-${SWITCH_ENV}.yaml /app/config/config-${SWITCH_ENV}.yaml
COPY --from=builder /app/config /app/config
COPY --from=builder /app/public /app/public
COPY --from=builder /app/resource /app/resource
COPY --from=builder /app/runtime /app/runtime

# 设置工作目录
WORKDIR /app

# 暴露服务端口
EXPOSE 8000

# 启动应用程序
CMD ["./main"]
