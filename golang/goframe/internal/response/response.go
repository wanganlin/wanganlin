package response

import (
	"context"
	"gitee.com/gosoft/gomall/internal/exception"
	"github.com/gogf/gf/v2/frame/g"
	"net/http"
)

// Result 响应结果
type Result struct {
	Code    int    `json:"code" example:"200"`
	Message string `json:"message" example:"status bad request"`
	Data    any    `json:"data" example:"null"`
}

// Ok 响应成功
func Ok(ctx context.Context, data any) {
	resp := &Result{
		Code:    http.StatusOK,
		Message: http.StatusText(http.StatusOK),
		Data:    data,
	}

	g.RequestFromCtx(ctx).Response.WriteJsonExit(resp)
}

// Fail 响应失败
func Fail(ctx context.Context, err exception.Exception) {
	code := http.StatusOK
	if http.StatusText(err.Code) != "" {
		code = err.Code
	}

	resp := &Result{
		Code:    code,
		Message: err.Message,
		Data:    nil,
	}

	g.RequestFromCtx(ctx).Response.WriteJsonExit(resp)
}

// GetResponseCookie 读取中间件设置的cookies，一般在最后调用。
func GetResponseCookie(ctx context.Context, key string) string {
	res := http.Response{Header: g.RequestFromCtx(ctx).Response.Header()}
	for _, v := range res.Cookies() {
		if v.Name == key {
			return v.Value
		}
	}
	return ""
}
