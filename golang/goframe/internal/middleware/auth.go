package middleware

import (
	"github.com/gogf/gf/v2/net/ghttp"
)

// Auth 认证中间件
func Auth(guard string) func(r *ghttp.Request) {
	return func(r *ghttp.Request) {
		ok := r.GetQuery("ok", "").String()
		if ok != "ok" {
			panic("no auth")
		}
		r.Middleware.Next()
	}
}
