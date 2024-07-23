package handler

import (
	"github.com/gogf/gf/v2/frame/g"
	"github.com/gogf/gf/v2/net/ghttp"
)

type (
	registerHandler struct{}
)

var Register = &registerHandler{}

// Index 注册
func (a *registerHandler) Index(r *ghttp.Request) {
	if r.IsAjaxRequest() {
		r.Response.WriteJson(g.Map{"aa": "bb"})
	}

	err := r.Response.WriteTpl("auth/register.html")
	if err != nil {
		return
	}
}
