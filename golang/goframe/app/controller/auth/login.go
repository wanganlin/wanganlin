package auth

import (
	"github.com/gogf/gf/v2/frame/g"
	"github.com/gogf/gf/v2/net/ghttp"
)

type cLogin struct{}

var Login = cLogin{}

// Index 登录
func (a *cLogin) Index(r *ghttp.Request) {
	if r.IsAjaxRequest() {
		r.Response.WriteJson(g.Map{"aa": "bb"})
	}

	err := r.Response.WriteTpl("auth/login.html")
	if err != nil {
		return
	}
}
