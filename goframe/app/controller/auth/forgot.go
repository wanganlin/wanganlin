package auth

import (
	"github.com/gogf/gf/v2/frame/g"
	"github.com/gogf/gf/v2/net/ghttp"
)

type cForgot struct{}

var Forgot = cForgot{}

// Index 忘记密码
func (a *cForgot) Index(r *ghttp.Request) {
	if r.IsAjaxRequest() {
		r.Response.WriteJson(g.Map{"aa": "bb"})
	}

	err := r.Response.WriteTpl("auth/forgot.html")
	if err != nil {
		return
	}
}
