package auth

import (
	"github.com/gogf/gf/v2/frame/g"
	"github.com/gogf/gf/v2/net/ghttp"
)

type cRegister struct{}

var Register = cRegister{}

// Index 注册
func (a *cRegister) Index(r *ghttp.Request) {
	if r.IsAjaxRequest() {
		r.Response.WriteJson(g.Map{"aa": "bb"})
	}

	err := r.Response.WriteTpl("auth/register.html")
	if err != nil {
		return
	}
}
