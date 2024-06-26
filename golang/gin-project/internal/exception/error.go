package exception

import "github.com/juling/juling/internal/response"

var (
	InvalidParams = response.NewError(400, "请求参数错误")
	Error         = response.NewError(500, "服务端错误")
)
