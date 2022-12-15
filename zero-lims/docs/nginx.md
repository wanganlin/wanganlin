# Nginx 反向代理

[Nginx](http://nginx.org/) 是一个高性能的 `HTTP` 和反向代理服务器，代码完全用 `C` 实现，基于它的高性能以及诸多优点，我们可以把它设置为 `spring boot` 的前置服务器，实现负载均衡或 HTTPS 前置服务器等。

## 配置 Http 代理

```
# 至少需要一个 spring boot 节点，多个配置多行
upstream openlims {
    # HTTP Server 的 IP 及 端口
    server 127.0.0.1:8080;
    server 127.0.0.1:8081;
}

server {
    # 监听端口
    listen 80; 
    # 绑定的域名，填写您的域名
    server_name proxy.openlims.net;

    location /api/ {
        # 将客户端的 Host 和 IP 信息一并转发到对应节点  
        proxy_set_header Host $http_host;
        proxy_set_header X-Real-IP $remote_addr;
        proxy_set_header X-Forwarded-For $proxy_add_x_forwarded_for;

        # 转发Cookie，设置 SameSite
        proxy_cookie_path / "/; secure; HttpOnly; SameSite=strict";

        # 执行代理访问真实服务器
        proxy_pass http://openlims;
    }
}
```

## 配置 Websocket 代理

```
# 至少需要一个 spring boot 节点，多个配置多行
upstream websocket {
    # 设置负载均衡模式为 IP Hash 算法模式，这样不同的客户端每次请求都会与同一节点进行交互
    ip_hash;
    # WebSocket Server 的 IP 及 端口
    server 127.0.0.1:9503;
    server 127.0.0.1:9504;
}

server {
    listen 80;
    server_name websocket.openlims.net;
    
    location / {
        # WebSocket Header
        proxy_http_version 1.1;
        proxy_set_header Upgrade websocket;
        proxy_set_header Connection "Upgrade";
        
        # 将客户端的 Host 和 IP 信息一并转发到对应节点  
        proxy_set_header X-Real-IP $remote_addr;
        proxy_set_header X-Forwarded-For $proxy_add_x_forwarded_for;
        proxy_set_header Host $http_host;
    
        # 客户端与服务端无交互 60s 后自动断开连接，请根据实际业务场景设置
        proxy_read_timeout 60s ;
        
        # 执行代理访问真实服务器
        proxy_pass http://websocket;
    }
}
```