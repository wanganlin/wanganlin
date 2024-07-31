package middleware

import (
	"github.com/gogf/gf/v2/net/ghttp"
	"net/url"
)

// Auth 认证中间件
func Auth(guard string) func(r *ghttp.Request) {
	return func(r *ghttp.Request) {
		if guard == "web" {
			to := "/login?callback=" + url.QueryEscape(r.Request.RequestURI)
			if auth, err := r.Session.Get("auth_" + guard); err != nil {
				r.Response.RedirectTo(to)
			} else if auth == nil {
				r.Response.RedirectTo(to)
			}
		} else {
			if auth, err := r.Session.Get("auth_" + guard); err != nil {
				r.Response.WriteJsonExit(map[string]interface{}{
					"code": 401,
					"msg":  "未登录",
				})
			} else if auth == nil {
				r.Response.WriteJsonExit(map[string]interface{}{
					"code": 401,
					"msg":  "未登录",
				})
			}
		}

		r.Middleware.Next()
	}
}
