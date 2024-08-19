package middleware

import (
	"github.com/gogf/gf/v2/net/ghttp"
	"gomall/internal/exception"
	"gomall/internal/response"
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
				response.Fail(r.Context(), exception.Forbidden)
			} else if auth == nil {
				response.Fail(r.Context(), exception.Forbidden)
			}
		}

		r.Middleware.Next()
	}
}
