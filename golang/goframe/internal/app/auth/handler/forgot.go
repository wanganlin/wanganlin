package handler

import (
	"github.com/gogf/gf/v2/frame/g"
	"github.com/gogf/gf/v2/net/ghttp"
)

type (
	forgotHandler struct{}
)

var Forgot = &forgotHandler{}

// Index 忘记密码
func (a *forgotHandler) Index(r *ghttp.Request) {
	if r.IsAjaxRequest() {
		r.Response.WriteJson(g.Map{"aa": "bb"})
	}

	err := r.Response.WriteTpl("auth/forgot.html")
	if err != nil {
		return
	}
}
