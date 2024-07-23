package handler

import (
	"github.com/gogf/gf/v2/frame/g"
	"github.com/gogf/gf/v2/net/ghttp"
)

type (
	resetHandler struct{}
)

var Reset = &resetHandler{}

// Index 重置密码
func (a *resetHandler) Index(r *ghttp.Request) {
	if r.IsAjaxRequest() {
		r.Response.WriteJson(g.Map{"aa": "bb"})
	}

	err := r.Response.WriteTpl("auth/reset.html")
	if err != nil {
		return
	}
}
