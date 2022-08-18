package middleware

import (
	"github.com/gogf/gf/v2/net/ghttp"
	"net/http"
)

func Auth(r *ghttp.Request) {
	token := r.Get("token")
	if token.String() == "123456" {
		r.Response.Writeln("auth")
		r.Middleware.Next()
	} else {
		r.Response.WriteStatus(http.StatusForbidden)
	}
}
